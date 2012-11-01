<?php
/** NotORM - simple reading data from the database
 * @package  dao
 * @link http://www.notorm.com/
 * @author Jakub Vrana, http://www.vrana.cz/
 * @copyright 2010 Jakub Vrana
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */

include_once dirname(__FILE__) . "/NotORM/Structure.php";
include_once dirname(__FILE__) . "/NotORM/Cache.php";
include_once dirname(__FILE__) . "/NotORM/Literal.php";
include_once dirname(__FILE__) . "/NotORM/Result.php";
include_once dirname(__FILE__) . "/NotORM/MultiResult.php";
include_once dirname(__FILE__) . "/NotORM/Row.php";
switch (JJDbConfig::$type) {
	case 'pdo':
		include_once dirname(__FILE__) . "/driver/JJPDO.php";
		break;
	case 'mysql':
		include_once dirname(__FILE__) . "/driver/JJMysql.php";
		break;
	case 'mysqli':
		include_once dirname(__FILE__) . "/driver/JJMysqli.php";
		break;
}
// friend visibility emulation
abstract class NotORM_Abstract {
	protected $connection, $driver, $structure, $cache;
	protected $notORM, $table, $primary, $rows, $referenced = array();

	protected $debug = false;
	protected $freeze = false;
	protected $rowClass = 'NotORM_Row';

	protected function access($key, $delete = false) {
	}

}
/** Database representation
 * @property-write mixed $debug = false Enable debuging queries, true for fwrite(STDERR, $query), callback($query, $parameters) otherwise
 * @property-write bool $freeze = false Disable persistence
 * @property-write string $rowClass = 'NotORM_Row' Class used for created objects
 * @property-write string $transaction Assign 'BEGIN', 'COMMIT' or 'ROLLBACK' to start or stop transaction
 */
class NotORM extends NotORM_Abstract {

	public $JJDAO;
	public $type;
	/** Create database representation
	 * @param PDO
	 * @param NotORM_Structure or null for new NotORM_Structure_Convention
	 * @param NotORM_Cache or null for no cache
	 */
	function __construct($dbname=null,$user=null,$pass=null,NotORM_Structure $structure = null, NotORM_Cache $cache = null) {

		switch (JJDbConfig::$type) {
			case 'pdo':
				$this->JJDAO=new JJPDO($dbname,$user,$pass);
				$this->type="pdo";
				$this->connection = &$this->JJDAO->connection;
				$this->driver = $this->connection->getAttribute(PDO::ATTR_DRIVER_NAME);
				break;
			case 'mysql':
				$this->JJDAO=new JJMysql();
				$this->driver ='mysql';
				$this->type="mysql";
				break;
			case 'mysqli':
				$this->JJDAO=new JJMysqli();
				$this->driver ='mysql';
				$this->type="mysqli";
				break;
		}

		if (!isset($structure)) {
			$structure = new NotORM_Structure_Convention;
		}
		$this->structure = $structure;
		$this->cache = $cache;
	}

	/** Get table data to use as $db->table[1]
	 * @param string
	 * @return NotORM_Result
	 */
	function __get($table) {
		return new NotORM_Result($this->structure->getReferencingTable($table, ''), $this, true);
	}

	/** Set write-only properties
	 * @return null
	 */
	function __set($name, $value) {
		if ($name == "debug" || $name == "freeze" || $name == "rowClass") {
			$this->$name = $value;
		}
		if ($name == "transaction") {
			switch (strtoupper($value)) {
				case "BEGIN": return $this->connection->beginTransaction();
				case "COMMIT": return $this->connection->commit();
				case "ROLLBACK": return $this->connection->rollback();
			}
		}
	}
	/** Get table data
	 * @param string
	 * @param array (["condition"[, array("value")]]) passed to NotORM_Result::where()
	 * @return NotORM_Result
	 */
	function __call($table, array $where) {
		$return = new NotORM_Result($this->structure->getReferencingTable($table, ''), $this);
		if ($where) {
			call_user_func_array(array($return, 'where'), $where);
		}
		return $return;
	}

}
