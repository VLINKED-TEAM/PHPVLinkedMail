<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/31
 * Time: 15:54
 */


use VlinkedMail\MailConfig;
use VlinkedMail\Mailer;
use VlinkedMail\MailMessage;

require "../vendor/autoload.php";


$userName = "";
$password = "";
/**
 * 以126邮箱为例 启用ssl
 * $userName 为你自己的登录账号
 * $password 为邮箱授权码 非密码
 */
$mailConfig = new MailConfig("smtp.126.com", $userName, $password, 465, 'ssl');
try {
    $mailMessage = new MailMessage("1123", "测试", ["你自己的的邮箱1", "你自己的的邮箱2"]);
} catch (Exception $get) {
    echo $get->getMessage();
}

try {
    Mailer::sendMail($mailConfig, $mailMessage, true);
} catch (Exception $get) {
    echo $get->getMessage();
}