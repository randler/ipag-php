<?php

namespace IPag\Beans;


class SellerData
{
    /**
    * @var string
    * Login Access for Seller Account | 
    * Mandatory: Yes | 
    * Size: 50
    */
    private $login;
    
    /**
    * @var string
    * Password Access for Seller Account | 
    * Mandatory: Yes | 
    * Size: 20
    */
    private $password;

    /**
    * @var string
    * Individual Person's name or Business name | 
    * Mandatory: Yes | 
    * Size: 80
    */
    private $name;
	
    /**
    * @var string
    * Seller's CPF or CNPJ | 
    * Mandatory: Yes | 
    * Size: -
    */
    private $cpfCnpj;

    /**
    * @var string
    * Email address. It will be used as account's login | 
    * Mandatory: Yes | 
    * Size: 50
    */
    private $email;
	
    /**
    * @var string
    * Phone or Cellphone number | 
    * Mandatory: Yes | 
    * Size: -
    */
    private $phone;

    /**
    * @var string
    * birthdate | 
    * Mandatory: No | 
    * Size: Y-m-d or d/m/Y
    */
    private $birthdate;
	
    /**
    * @var string
    * Individual's description or Company's description | 
    * Mandatory: Yes | 
    * Size: 255
    */
    private $description;

    /**
    * @var array of Address | 
    * Address data | 
    * Mandatory: No | 
    * Size: -
    */
    private $address = [];

    /**
    * @var array of Owner | 
    * Partner or Business manager data | 
    * Mandatory: No | 
    * Size: -
    */
    private $owner = [];

    /**
    * @var array of Bank | 
    * Company's Bank or Seller Bank data | 
    * Mandatory: No | 
    * Size: -
    */
    private $bank = [];
    
	/**
    * @param string $login | 
    * Login Access for Seller Account | 
    * Mandatory: Yes | 
    * Size: 50
    */
    public function setLogin(string $login) 
	{
		$this->login = $login;
		return $this;
	}
    
    /**
    * @param string $password | 
    * Password Access for Seller Account | 
    * Mandatory: Yes | 
    * Size: 20
    */
    public function setPassword(string $password) 
	{
		$this->password = $password;
		return $this;
	}

    /**
    * @param string $name | 
    * Individual Person's name or Business name | 
    * Mandatory: Yes | 
    * Size: 80
    */
	public function setName(string $name) 
	{
		$this->name = $name;
		return $this;
	}
	
    /**
    * @param string $cpfCnpj | 
    * Seller's CPF or CNPJ | 
    * Mandatory: Yes | 
    * Size: -
    */
	public function setCpfCnpj(string $cpfCnpj) 
	{
		$this->cpfCnpj = $cpfCnpj;
		return $this;
	}

    /**
    * @var string $email | 
    * Email address. It will be used as account's login | 
    * Mandatory: Yes | 
    * Size: 50
    */
	public function setEmail(string $email) 
	{
		$this->email = $email;
		return $this;
	}
	
    /**
    * @param string $phone | 
    * Phone or Cellphone number | 
    * Mandatory: Yes | 
    * Size: -
    */
	public function setPhone(string $phone) 
	{
		$this->phone = $phone;
		return $this;
	}

    /**
    * @param string $birthdate | 
    * birthdate | 
    * Mandatory: No | 
    * Size: Y-m-d or d/m/Y
    */
	public function setBirthdate(string $birthdate) 
	{
		$this->birthdate = $birthdate;
		return $this;
	}
	
    /**
    * @param string $description | 
    * Individual's description or Company's description | 
    * Mandatory: Yes | 
    * Size: 255
    */
	public function setDescription(string $description) 
	{
		$this->description = $description;
		return $this;
	}

    /**
    * @param array $address | 
    * Address data | 
    * Mandatory: No | 
    * Size: -
    */
	public function addAddress(array $address) 
	{
		array_push($this->address, $address);
		return $this;
	}

    /**
    * @param array $owner | 
    * Partner or Business manager data | 
    * Mandatory: No | 
    * Size: -
    */
	public function addOwner(array $owner) 
	{
		array_push($this->owner, $owner);
		return $this;
	}

    /**
    * @param array $bank | 
    * Company's Bank or Seller Bank data | 
    * Mandatory: No | 
    * Size: -
    */
	public function addBank(array $bank) 
	{
		array_push($this->bank, $bank);
		return $this;
	}

	public function getSellersData()
	{
		return [
			"login" 		=> $this->login,
			"password" 		=> $this->password,
			"name" 			=> $this->name,
			"cpf_cnpj" 		=> $this->cpfCnpj,
			"email" 		=> $this->email,
			"phone" 		=> $this->phone,
			"description" 	=> $this->description,
			"address" 		=> $this->address,
			"owner" 		=> $this->owner,
			"bank" 			=> $this->bank, 
		];
	}
}

