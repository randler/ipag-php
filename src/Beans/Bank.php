<?php

namespace IPag\Beans;

class Bank
{
    /**
    * @var string
    * Bank code
    * Mandatory: No
    * Size: 3
    */
    private $code;
    
    /**
    * @var string
    * Agency number
    * Mandatory: No
    * Size: 4
    */
    private $agency;

    /**
    * @var string
    * Account number
    * Mandatory: No
    * Size: 10
    */
    private $account;
	
    /**
    * @var string
    * Account type
    * Mandatory: No
    * Size: 'checkings' or 'savings'
    */
    private $type;

    /**
    * @var string
    * External account ID (Example: email registered on PagSeguro)
    * Mandatory: No
    * Size: 120
    */
    private $externalId;

    /**
    * @param string $code
    * Bank code
    * Mandatory: No
    * Size: 3
    * 
    * @return $this
    */
    public function setCode(string $code) 
    {
        $this->code = $code;
        return $this;
    }

    /**
    * @param string $agency
    * Agency number
    * Mandatory: No
    * Size: 4
    * 
    * @return $this
    */
    public function setAgency(string $agency) 
    {
        $this->agency = $agency;
        return $this;
    }

    /**
    * @param string $account
    * Account number
    * Mandatory: No
    * Size: 10
    * 
    * @return $this
    */
    public function setAccount(string $account) 
    {
        $this->account = $account;
        return $this;
    }

    /**
    * @param string $type
    * Account type
    * Mandatory: No
    * Size: 'checkings' or 'savings'
    * 
    * @return $this
    */
    public function setType(string $type) 
    {
        $this->type = $type;
        return $this;
    }

    /**
    * @param string $externalId
    * External account ID (Example: email registered on PagSeguro)
    * Mandatory: No
    * Size: 120
    * 
    * @return $this
    */
    public function setExternalId(string $externalId) 
    {
        $this->externalId = $externalId;
        return $this;
    }

    	
    public function getCode() 
    {
        return $this->code;
    }

    public function getAgency() 
    {
        return $this->agency;
    }
    
    public function getAccount() 
    {
        return $this->account;
    }

    public function getType() 
    {
        return $this->type;
    }

    public function getExternalId() 
    {
        return $this->externalId;
    }

    /**
     * Return data bank formated
     * @return array bank formated
     */
    public function getBankData() 
    {
        return [
            "code" => $this->code,
            "agency" => $this->agency,
            "account" => $this->account,
            "type" => $this->type,
            "external_id" => $this->externalId
        ];
    }

    
}

