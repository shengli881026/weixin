<?php
/*-----------------------------------------
 * 微信通信接口和统一调用
 *　
 * zhangshl
 * 通信
 *-----------------------------------------
*/
/**
 * weixin(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Cache
 * @since         CakePHP(tm) v 1.2.0.4933
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

require_once("Wechat.php");
require_once("Weixin.php");

define("TOKEN", "weixin");
$options = array(
				'token'=>'weixin', //填写你设定的key
				'encodingaeskey'=>'YNCJ0H80WVgWARA8tG7tlumnCn7Gs3zKrxraXBKvGNl', //填写加密用的EncodingAESKey
				'appid'=>'', //填写高级调用功能的app id
				'appsecret'=>'',//填写高级调用功能的密钥
				'partnerid'=>'88888888',//财付通商户身份标识
				'partnerkey'=>'',//财付通商户权限密钥Key
				'paysignkey'=>''//商户签名密钥Key
 	);
$obj = new Wechat($options);
$webObj = $obj->_getWechat();
$webObj->valid();

?>