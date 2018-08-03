<?php

/**
 * Fishead
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.fishead.com.au/fishead-LICENSE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. Fishead does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   Fishead
 * @package     PhpStorm
 * @version    1.0
 * @copyright  Copyright (c) 2013-2016 fishead. (http://www.fishead.com)
 * @license    http://ecommerce.fishead.com/fishead-LICENSE.txt
 * @author     naga
 */
namespace App\Fishead\Common\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $FName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $Lname;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $username;

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;

    /** @MongoDB\Field(type="boolean") */
    protected $enabled;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->FName;
    }

    /**
     * @param mixed $FName
     */
    public function setFName($FName)
    {
        $this->FName = $FName;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->Lname;
    }

    /**
     * @param mixed $Lname
     */
    public function setLname($Lname)
    {
        $this->Lname = $Lname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function __construct()
    {
        parent::__construct();
      return true;
    }
}