<?php

namespace IPag\Beans;

class Owner
{
    /**
    * @var string
    * Partner/Business manager name
    * Mandatory: No
    * Size: 80
    */
    private $name;
    
    /**
    * @var string
    * Partner/Business manager email address
    * Mandatory: No
    * Size: 50
    */
    private $email;

    /**
    * @var string
    * Partner/Business manager CPF document
    * Mandatory: No
    * Size: -
    */
    private $cpf;
	
    /**
    * @var string
    * Partner/Business manager phone number
    * Mandatory: No
    * Size: -
    */
    private $phone;

    /**
    * @var string
    * Partner/Business manager birthdate
    * Mandatory: No
    * Size: Y-m-d or d/m/Y
    */
    private $birthdate;

    /**
    * @param string $name
    * Partner/Business manager name | 
    * Mandatory: No | 
    * Size: 80
    * 
    * @return $this
    */
    public function setName(string $name) 
    {
        $this->name = $name;
        return $this;
    }

    /**
    * @param string $email
    * Partner/Business manager email address | 
    * Mandatory: No | 
    * Size: 50
    * 
    * @return $this
    */
    public function setEmail(string $email) 
    {
        $this->email = $email;
        return $this;
    }

    /**
    * @param string $cpf
    * Partner/Business manager CPF document | 
    * Mandatory: No | 
    * Size: -
    * 
    * @return $this
    */
    public function setCPF(string $cpf) 
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
    * @param string $phone
    * Partner/Business manager phone number | 
    * Mandatory: No | 
    * Size: -
    * 
    * @return $this
    */
    public function setPhone(string $phone) 
    {
        $this->phone = $phone;
        return $this;
    }

    /**
    * @param string $birthdate
    * Partner/Business manager birthdate | 
    * Mandatory: No | 
    * Size: Y-m-d or d/m/y
    * 
    * @return $this
    */
    public function setBirthdate(string $birthdate) 
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    	
    public function getName() 
    {
        return $this->name;
    }

    public function getEmail() 
    {
        return $this->email;
    }
    
    public function getCPF() 
    {
        return $this->cpf;
    }

    public function getPhone() 
    {
        return $this->phone;
    }

    public function getBirthdate() 
    {
        return $this->birthdate;
    }

    /**
     * Return data owner formated
     * @return array owner formated
     */
    public function getOwnerData() 
    {
        return [
            "name" => $this->name,
            "email" => $this->email,
            "cpf" => $this->cpf,
            "phone" => $this->phone,
            "birthdate" => $this->birthdate
        ];
    }

    
}

