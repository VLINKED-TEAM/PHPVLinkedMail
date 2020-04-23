<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/31
 * Time: 15:40
 */

namespace VlinkedMail\mail_service;

/**
 * Class MailConfig
 * @package VlinkedUtils\Message
 */
class MailConfig
{
    /**
     * 发送的SMTP服务器
     * @var string
     */
    private $host;
    /**
     * 发件人账号
     * @var string
     */
    private $username;
    /**
     * 发件人密码
     * @var string
     */
    private $password;
    /**
     * 邮件发送端口
     * @var int
     */
    private $port;
    /**
     * 设置安全验证方式
     * @var string
     */
    private $secure;

    /**
     * MailConfig constructor.
     * @param $host
     * @param $username
     * @param $password
     * @param int $port
     * @param $secure
     */
    public function __construct($host, $username, $password, $port, $secure)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;
        $this->secure = $secure;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * @param string $secure
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
    }


}