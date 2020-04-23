<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/31
 * Time: 15:54
 */

use VlinkedMail\mail_service\MailConfig;
use VlinkedMail\mail_service\Mailer;
use VlinkedMail\mail_service\MailMessage;

require "../vendor/autoload.php";


$userName = "";
$password = "";

$mailConfig = new MailConfig("smtp.126.com", $userName, $password, 465, 'ssl');
try{
    $mailMessage = new MailMessage("1123", "测试",["735825608@qq.com","1589772615@qq.com"]);
}catch (Exception $get){
   echo  $get->getMessage();
}

try{
Mailer::sendMail($mailConfig, $mailMessage,true);
}catch (Exception $get){
    echo  $get->getMessage();
}