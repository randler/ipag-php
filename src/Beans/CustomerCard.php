<?php

namespace IPag\Beans;

use DateTime;

class CustomerCard
{
    
    /**
    * @var string
    */
    private $isActive;

    /**
    * @var string
    */
    private $token;
    
    /**
    * @var string
    */
    private $cardNumber;

    /**
    * @var string
    */
    private $cardholderName;

    /**
    * @var string
    */
    private $cvv;

    /**
    * @var string | visa, mastercard, amex, elo
    */
    private $brand;

    /**
    * @var string
    */
    private $expirationMonth;

    /**
    * @var string
    */
    private $expirationYear;

    
    /**
    * @var string
    */
    private $cpfCnpj;
    
    /**
    * @var string
    */
    private $mobilePhone;
    
    /**
    * @var date
    */
    private $birthdate;
    
    /**
    * @var string
    */
    private $street;
    
    /**
    * @var string
    */
    private $number;
    
    /**
    * @var string
    */
    private $district;
    
    /**
    * @var string
    */
    private $zipcode;
    
    /**
    * @var string
    */
    private $city;
    
    /**
    * @var string
    */
    private $state;





    public function __construct() {}

    /**
     * Get the value of isActive
     *
     * @return  string
     */ 
    public function isActive()
    {
        return $this->isActive;
    }

	/**
	 * Set the value of isActive
	 *
	 * @param   string  $isActive  
	 *
	 */
	public function setIsActive(string $isActive)
	{
		$this->isActive = $isActive;
        return $this;
	}

    /**
     * Get the value of token
     *
     * @return  string
     */ 
    public function getToken()
    {
        return $this->token;
    }

	/**
	 * Set the value of token
	 *
	 * @param   string  $token  
	 *
	 */
	public function setToken(string $token)
	{
		$this->token = $token;
        return $this;
	}

    /**
     * Get the value of cardholderName
     *
     * @return  string
     */ 
    public function getCardholderName()
    {
        return $this->cardholderName;
    }

	/**
	 * Set the value of cardholderName
	 *
	 * @param   string  $cardholderName  
	 *
	 */
	public function setCardholderName(string $cardholderName)
	{
		$this->cardholderName = $cardholderName;
        return $this;
	}

    /**
     * Get the value of cvv
     *
     * @return  string
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

	/**
	 * Set the value of cvv
	 *
	 * @param   string  $cvv  
	 *
	 */
	public function setCvv(string $cvv)
	{
		$this->cvv = $cvv;
        return $this;
	}

    /**
     * Get the value of brand
     *
     * @return  string
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

	/**
	 * Set the value of brand
	 *
	 * @param   string  $brand  
	 *
	 */
	public function setBrand(string $brand)
	{
		$this->brand = $brand;
        return $this;
	}

    /**
     * Get the value of expirationMonth
     *
     * @return  string
     */ 
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

	/**
	 * Set the value of expirationMonth
	 *
	 * @param   string  $expirationMonth  
	 *
	 */
	public function setExpirationMonth(string $expirationMonth)
	{
		$this->expirationMonth = $expirationMonth;
        return $this;
	}

    /**
     * Get the value of expirationYear
     *
     * @return  string
     */ 
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

	/**
	 * Set the value of expirationYear
	 *
	 * @param   string  $expirationYear  
	 *
	 */
	public function setExpirationYear(string $expirationYear)
	{
		$this->expirationYear = $expirationYear;
        return $this;
	}

        /**
     * Get the value of expirationYear
     *
     * @return  array
     */ 
    public function getCardData()
    {
        return array(
            "card" => array(
                "holderName" => $this->cardholderName,
                "number" => $this->cardNumber,
                "expiryMonth" => $this->expirationMonth,
                "expiryYear" => $this->expirationYear,
                "cvv" => $this->cvv
            ),
            "holder" => array(
                "name" => $this->cardholderName,
                "cpfCnpj" => $this->cpfCnpj,
                "mobilePhone" => $this->mobilePhone,
                "birthdate" => $this->birthdate,
                "address" => array(
                    "street" => $this->street,
                    "number" => $this->number,
                    "district" => $this->district,
                    "zipcode" => $this->zipcode,
                    "city" => $this->city,
                    "state" => $this->state,
                )
            )
        );
    }

	/**
	 * Set the value of cardNumber
	 *
	 * @param   string  $cardNumber  
	 * 
	 * return $this
	 *
	 */
	public function setCardNumber(string $cardNumber)
	{
		$this->cardNumber = $cardNumber;
		return $this;
	}

    /**
     * Get the value of card number
     *
     * @return  bool
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    


    /**
     * Get the value of cpfCnpj
     *
     * @return  string
     */ 
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

	/**
	 * Set the value of cpfCnpj
	 *
	 * @param   string  $cpfCnpj  
	 * 
	 * return $this
	 *
	 */
	public function setCpfCnpj(string $cpfCnpj)
	{
		$this->cpfCnpj = $cpfCnpj;
		return $this;
	}

    /**
     * Get the value of mobilePhone
     *
     * @return  string
     */ 
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

	/**
	 * Set the value of mobilePhone
	 *
	 * @param   string  $mobilePhone  
	 * 
	 * return $this
	 *
	 */
	public function setMobilePhone(string $mobilePhone)
	{
		$this->mobilePhone = $mobilePhone;
		return $this;
	}

    /**
     * Get the value of birthdate
     *
     * @return  date
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

	/**
	 * Set the value of birthdate
	 *
	 * @param   date  $birthdate  
	 * 
	 * return $this
	 *
	 */
	public function setBirthdate($birthdate)
	{
		$this->birthdate = $birthdate;
		return $this;
	}

    /**
     * Get the value of street
     *
     * @return  string
     */ 
    public function getStreet()
    {
        return $this->street;
    }

	/**
	 * Set the value of street
	 *
	 * @param   string  $street  
	 * 
	 * return $this
	 *
	 */
	public function setStreet(string $street)
	{
		$this->street = $street;
		return $this;
	}

    /**
     * Get the value of number
     *
     * @return  string
     */ 
    public function getNumber()
    {
        return $this->number;
    }

	/**
	 * Set the value of number
	 *
	 * @param   string  $number  
	 * 
	 * return $this
	 *
	 */
	public function setNumber(string $number)
	{
		$this->number = $number;
		return $this;
	}

    /**
     * Get the value of district
     *
     * @return  string
     */ 
    public function getDistrict()
    {
        return $this->district;
    }

	/**
	 * Set the value of district
	 *
	 * @param   string  $district  
	 * 
	 * return $this
	 *
	 */
	public function setDistrict(string $district)
	{
		$this->district = $district;
		return $this;
	}

    /**
     * Get the value of zipcode
     *
     * @return  string
     */ 
    public function getZipcode()
    {
        return $this->zipcode;
    }

	/**
	 * Set the value of zipcode
	 *
	 * @param   string  $zipcode  
	 * 
	 * return $this
	 *
	 */
	public function setZipcode(string $zipcode)
	{
		$this->zipcode = $zipcode;
		return $this;
	}

    /**
     * Get the value of city
     *
     * @return  string
     */ 
    public function getCity()
    {
        return $this->city;
    }

	/**
	 * Set the value of city
	 *
	 * @param   string  $city  
	 * 
	 * return $this
	 *
	 */
	public function setCity(string $city)
	{
		$this->city = $city;
		return $this;
	}

    /**
     * Get the value of state
     *
     * @return  string
     */ 
    public function getState()
    {
        return $this->state;
    }

	/**
	 * Set the value of state
	 *
	 * @param   string  $state  
	 * 
	 * return $this
	 *
	 */
	public function setState(string $state)
	{
		$this->state = $state;
		return $this;
	}
}

