<?php
/////////////////////////////////////////////////////////////////
//�Ʊ߿�Դ�Ჩ, Copyright (C)   2010 - 2011  qing.thinksaas.cn //
//Author �ä�����, EMAIL:nxfte@qq.com    QQ:234027573          //
/////////////////////////////////////////////////////////////////

error_reporting(0);
define('API_PATH',dirname(dirname(__FILE__))."/api/");
define('UC_API', "http://localhost/api/web/static/images/user");
$uid = isset($_GET['uid']) ? $_GET['uid'] : 0;
$size = isset($_GET['size']) ? $_GET['size'] : '';
$random = isset($_GET['random']) ? $_GET['random'] : '';
$type = isset($_GET['type']) ? $_GET['type'] : '';
$check = isset($_GET['check_file_exists']) ? $_GET['check_file_exists'] : '';

$avatar =get_avatar($uid, $size, $type);

$ImgPath=API_PATH.'web/static/images/user';


if(file_exists($ImgPath.'/'.$avatar)) {
	if($check) {
		echo 1;
		exit;
	}

	$random = !empty($random) ? rand(1000, 9999) : '';
	$avatar_url = empty($random) ? $avatar : $avatar.'?random='.$random;
} else {
	if($check) {
		echo 0;
		exit;
	}
	$size = in_array($size, array('b', 'm', 's')) ? $size : 'm';
	$avatar_url = '/noavatar_'.$size.'.jpg';
}

if(empty($random)) {
	header("HTTP/1.1 301 Moved Permanently");
	header("Last-Modified:".date('r'));
	header("Expires: ".date('r', time() + 86400));
}

header('Location: '.UC_API.'/'.$avatar_url);


function get_avatar($uid, $size = 'm', $type = '') {
	$size = in_array($size, array('b', 'm', 's')) ? $size : 'm';

	$typeadd = $type == 'real' ? '_real' : '';
	return $size."_".$uid.".jpg";
}

?>