<?php
/**
 * JJPHPDb设置
 * @package  config
 * @author     zhuli <www.initphp.com>
 * @author     zhengyouxiangxiang <zhengyouxiang00@gmail.com>
 * @copyright   www.111work.com
 */
class JJDbConfig
{
    public static $type='pdo';//可以是pdo，mysql, mysqli
    public static $pdotype='mysql';//如果是pdo 则填这个
    public static $host='localhost';
    public static $dbname='api';
    public static $username='root';
    public static $password='';
}