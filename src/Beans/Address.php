<?php

namespace IPag\Beans;

class Address
{
    /**
    * @var string
    * Public Place (Street, Avenue, Etc).
    * Mandatory: No
    * Size: 70
    */
    private $street;
    
    /**
    * @var string
    * Address number
    * Mandatory: No
    * Size: 10
    */
    private $number;

    /**
    * @var string
    * Address district
    * Mandatory: No
    * Size: 100
    */
    private $district;
	
    /**
    * @var string
    * Address Address complement
    * Mandatory: No
    * Size: 100
    */
    private $complement;

    /**
    * @var string
    * Address city
    * Mandatory: No
    * Size: 50
    */
    private $city;
	
    /**
    * @var string
    * Address state
    * Mandatory: No
    * Size: 2
    */
    private $state;
	
    /**
    * @var string
    * Address zip code
    * Mandatory: No
    * Size: 8
    */
    private $zipcode;

    public function getstreet() {
        return $this->street;
    }

    /**
    * @param string $street
    * Public Place (Street, Avenue, Etc) | 
    * Mandatory: No | 
    * Size: 70
    * 
    * @return $this
    */
    public function setStreet(string $street) {
        $this->street = $street;
        return $this;
    }
    public function getNumber() {
        return $this->number;
    }

    /**
    * @param string $number
    * Address number | 
    * Mandatory: No | 
    * Size: 10
    * 
    * @return $this
    */
    public function setNumber(string $number) {
        $this->number = $number;
        return $this;
    }
    public function getDistrict() {
        return $this->district;
    }

    /**
    * @param string $district
    * Address district | 
    * Mandatory: No | 
    * Size: 100
    */
    public function setDistrict(string $district) {
        $this->district = $district;
        return $this;
    }
    public function getComplement() {
        return $this->complement;
    }

    /**
    * @param string $complement
    * Address Address complement | 
    * Mandatory: No | 
    * Size: 100
    */
    public function setComplement(string $complement) {
        $this->complement = $complement;
        return $this;
    }
    public function getCity() {
        return $this->city;
    }

    /**
    * @param string $city
    * Address city | 
    * Mandatory: No | 
    * Size: 50
    */
    public function setCity(string $city) {
        $this->city = $city;
        return $this;
    }
    public function getState() {
        return $this->state;
    }

    /**
    * @param string $state
    * Address state | 
    * Mandatory: No | 
    * Size: 2
    */
    public function setState(string $state) {
        $this->state = $state;
        return $this;
    }
    public function getZipcode() {
        return $this->zipcode;
    }

    /**
    * @param string $zipcode
    * Address zip code | 
    * Mandatory: No | 
    * Size: 8
    */
    public function setZipcode(string $zipcode) {
        $this->zipcode = $zipcode;
        return $this;
    }
    
    /**
     * Return data address formated
     * @return array address formated
     */
    public function getAddressData() {
        return [
            "street"        => $this->street,
            "number"        => $this->number,
            "district"      => $this->district,
            "complement"    => $this->complement,
            "city"          => $this->city,
            "state"         => $this->state,
            "zipcode"       => $this->zipcode
        ];
    }

    
}

