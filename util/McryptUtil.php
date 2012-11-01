<?php
class McryptUtil
{
	private  static $secret_key="8";
	/**
	 * 解密
	 * 
	 * @param string $encryptedText 已加密字符串
	 * @param string $key  密钥
	 * @return string
	 */
	public static function _decrypt($str,$key = null)
	{
		$key = $key === null ? self::$secret_key : $key;
		$ret='';
        for ($i=0; $i<=strlen($str)-1; 0){
            $hex=substr($str, $i, 2);
            $dec=hexdec($hex);
            $dec=$dec^$key;
            $ret.=chr($dec);
            $i=$i+2;
        }
        return base64_decode($ret);
	 }

	/**
	 * 加密
	 *
	 * @param string $plainText	未加密字符串 
	 * @param string $key		 密钥
	 */
	public static function _encrypt($str,$key = null)
	{
		$key = $key === null ?self::$secret_key: $key;
		 $ret='';
        $str = base64_encode ($str);
        for ($i=0; $i<=strlen($str)-1; $i++){
            $d_str=substr($str, $i, 1);
            $int =ord($d_str);
            $int=$int^$key;
            $hex=strtoupper(dechex($int));
            $ret.=$hex;
        }
          return $ret;
	}
}
	
