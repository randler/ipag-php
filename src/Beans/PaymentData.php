<?php

namespace IPag\Beans;

class PaymentData
{
    /**
    * @var float
    * @required 
    */
    private $amount;
    /**
    * @var string
    * @optional 
    */
    private $callback_url;
    /**
    * @var string | card, boleto, pix
    * @required (card, boleto, pix)
    */
    private $type;
    /**
    * @var string
    * @optional
    */
    private $order_id;
    /**
    * @var int
    * @optional (default: 1)
    */
    private $installments = 1;
    /**
     * @var string
     */
    private $method;
    /**
    * @var bool
    * @optional default true
    */
    private $capture = true;
    /**
     * @var string
     * @optional (fullData)
     */
    private $softdescriptor;
    /**
     * @var bool
     * @optional default true
     */
    private $fraud_analysis = true;
    /**
     * @var string
     * @required (fullData)
     */
    private $holder;
    
    /**
     * @var string
     * @required (fullData)
     */
    private $number;
    /**
     * @var string
     * @required (fullData)
     */
    private $expiry_month;
    /**
     * @var string
     * @required (fullData)
     */
    private $expiry_year;
    /**
     * @var string
     * @required (fullData)
     */
    private $cvv;

    /**
     * @var string
     * @required (fullData)
     */
    private $name;
    /**
     * @var string
     * @required (fullData)
     */
    private $cpf_cnpj;
    /**
     * @var string
     * @required (fullData)
     */
    private $phone;
    /**
     * @var string
     * @required (fullData)
     */
    private $email;
    /**
     * @var string
     * @required (fullData)
     */
    private $birthdate;
    /**
     * @var string
     * @required (fullData)
     */
    private $ip;
    /**
     * @var string
     * @required (fullData)
     */
    private $billing_address_street;
    /**
     * @var string
     * @required (fullData)
     */
    private $billing_address_number;
    /**
     * @var string
     * @required (fullData)
     */
    private $billing_address_complement;
    /**
     * @var string
     * @required (fullData)
     */
    private $billing_address_city;
    /**
     * @var string
     * @required (fullData)
     */
    private $billing_address_state;
    /**
     * @var string
     * @required (fullData)
     */
    private $billing_address_zipcode;
    /**
     * @var string
     * @required (card token)
     */
    private $card_token;
    /**
     * @var string
     * @required (boleto)
     */
    private $shipping_address_street;
    /**
     * @var string
     * @required (boleto)
     */
    private $shipping_address_number;
    /**
     * @var string
     * @required (boleto)
     */
    private $shipping_address_complement;
    /**
     * @var string
     * @required (boleto)
     */
    private $shipping_address_city;
    /**
     * @var string
     * @required (boleto)
     */
    private $shipping_address_state;
    /**
     * @var string
     * @required (boleto)
     */
    private $shipping_address_zipcode;
    /**
     * @var int
     * @required (pix) 
     * @default 60
     */
    private $pix_expires_in = 60;

    /**
     * @var bool
     * @optional default false
     */
    private $tokenize = false;
    /**
     * @var array
     */
    private $products;

    public function __construct() {}

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type | credit, debit
     *
     */ 
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get the value of amount
     *
     * @return  int
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @param  int  $amount
     *
     */ 
    public function setAmount(float $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get the value of installments
     *
     * @return  int
     */ 
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Set the value of installments
     *
     * @param  int  $installments
     *
     */ 
    public function setInstallments(int $installments)
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * Get the value of callback_url
     *
     * @return  string
     */ 
    public function getCallback_url()
    {
        return $this->callback_url;
    }

	/**
	 * Set the value of callback_url
	 *
	 * @param   string  $callback_url  
	 * 
	 * return $this
	 *
	 */
	public function setCallback_url(string $callback_url)
	{
		$this->callback_url = $callback_url;
		return $this;
	}

    /**
     * Get the value of order_id
     *
     * @return  string
     */ 
    public function getOrder_id()
    {
        return $this->order_id;
    }

	/**
	 * Set the value of order_id
	 *
	 * @param   string  $order_id  
	 * 
	 * return $this
	 *
	 */
	public function setOrder_id(string $order_id)
	{
		$this->order_id = $order_id;
		return $this;
	}

    /**
     * Get the value of billing_address_zipcode
     *
     * @return  string
     */ 
    public function getBilling_address_zipcode()
    {
        return $this->billing_address_zipcode;
    }

	/**
	 * Set the value of billing_address_zipcode
	 *
	 * @param   string  $billing_address_zipcode  
	 * 
	 * return $this
	 *
	 */
	public function setBilling_address_zipcode(string $billing_address_zipcode)
	{
		$this->billing_address_zipcode = $billing_address_zipcode;
		return $this;
	}

    /**
     * Get the value of billing_address_state
     *
     * @return  string
     */ 
    public function getBilling_address_state()
    {
        return $this->billing_address_state;
    }

	/**
	 * Set the value of billing_address_state
	 *
	 * @param   string  $billing_address_state  
	 * 
	 * return $this
	 *
	 */
	public function setBilling_address_state(string $billing_address_state)
	{
		$this->billing_address_state = $billing_address_state;
		return $this;
	}

    /**
     * Get the value of billing_address_city
     *
     * @return  string
     */ 
    public function getBilling_address_city()
    {
        return $this->billing_address_city;
    }

	/**
	 * Set the value of billing_address_city
	 *
	 * @param   string  $billing_address_city  
	 * 
	 * return $this
	 *
	 */
	public function setBilling_address_city(string $billing_address_city)
	{
		$this->billing_address_city = $billing_address_city;
		return $this;
	}

    /**
     * Get the value of billing_address_complement
     *
     * @return  string
     */ 
    public function getBilling_address_complement()
    {
        return $this->billing_address_complement;
    }

	/**
	 * Set the value of billing_address_complement
	 *
	 * @param   string  $billing_address_complement  
	 * 
	 * return $this
	 *
	 */
	public function setBilling_address_complement(string $billing_address_complement)
	{
		$this->billing_address_complement = $billing_address_complement;
		return $this;
	}

    /**
     * Get the value of billing_address_number
     *
     * @return  string
     */ 
    public function getBilling_address_number()
    {
        return $this->billing_address_number;
    }

	/**
	 * Set the value of billing_address_number
	 *
	 * @param   string  $billing_address_number  
	 * 
	 * return $this
	 *
	 */
	public function setBilling_address_number(string $billing_address_number)
	{
		$this->billing_address_number = $billing_address_number;
		return $this;
	}

    /**
     * Get the value of billing_address_street
     *
     * @return  string
     */ 
    public function getBilling_address_street()
    {
        return $this->billing_address_street;
    }

	/**
	 * Set the value of billing_address_street
	 *
	 * @param   string  $billing_address_street  
	 * 
	 * return $this
	 *
	 */
	public function setBilling_address_street(string $billing_address_street)
	{
		$this->billing_address_street = $billing_address_street;
		return $this;
	}

    /**
     * Get the value of ip
     *
     * @return  string
     */ 
    public function getIp()
    {
        return $this->ip;
    }

	/**
	 * Set the value of ip
	 *
	 * @param   string  $ip  
	 * 
	 * return $this
	 *
	 */
	public function setIp(string $ip)
	{
		$this->ip = $ip;
		return $this;
	}

    /**
     * Get the value of birthdate
     *
     * @return  string
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

	/**
	 * Set the value of birthdate
	 *
	 * @param   string  $birthdate  
	 * 
	 * return $this
	 *
	 */
	public function setBirthdate(string $birthdate)
	{
		$this->birthdate = $birthdate;
		return $this;
	}

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

	/**
	 * Set the value of email
	 *
	 * @param   string  $email  
	 * 
	 * return $this
	 *
	 */
	public function setEmail(string $email)
	{
		$this->email = $email;
		return $this;
	}

    /**
     * Get the value of phone
     *
     * @return  string
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

	/**
	 * Set the value of phone
	 *
	 * @param   string  $phone  
	 * 
	 * return $this
	 *
	 */
	public function setPhone(string $phone)
	{
		$this->phone = $phone;
		return $this;
	}

    /**
     * Get the value of cpf_cnpj
     *
     * @return  string
     */ 
    public function getCpf_cnpj()
    {
        return $this->cpf_cnpj;
    }

	/**
	 * Set the value of cpf_cnpj
	 *
	 * @param   string  $cpf_cnpj  
	 * 
	 * return $this
	 *
	 */
	public function setCpf_cnpj(string $cpf_cnpj)
	{
		$this->cpf_cnpj = $cpf_cnpj;
		return $this;
	}

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

	/**
	 * Set the value of name
	 *
	 * @param   string  $name  
	 * 
	 * return $this
	 *
	 */
	public function setName(string $name)
	{
		$this->name = $name;
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
	 * return $this
	 *
	 */
	public function setCvv(string $cvv)
	{
		$this->cvv = $cvv;
		return $this;
	}

    /**
     * Get the value of expiry_year
     *
     * @return  string
     */ 
    public function getExpiry_year()
    {
        return $this->expiry_year;
    }

	/**
	 * Set the value of expiry_year
	 *
	 * @param   string  $expiry_year  
	 * 
	 * return $this
	 *
	 */
	public function setExpiry_year(string $expiry_year)
	{
		$this->expiry_year = $expiry_year;
		return $this;
	}

    /**
     * Get the value of expiry_month
     *
     * @return  string
     */ 
    public function getExpiry_month()
    {
        return $this->expiry_month;
    }

	/**
	 * Set the value of expiry_month
	 *
	 * @param   string  $expiry_month  
	 * 
	 * return $this
	 *
	 */
	public function setExpiry_month(string $expiry_month)
	{
		$this->expiry_month = $expiry_month;
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
     * Get the value of holder
     *
     * @return  string
     */ 
    public function getHolder()
    {
        return $this->holder;
    }

	/**
	 * Set the value of holder
	 *
	 * @param   string  $holder  
	 * 
	 * return $this
	 *
	 */
	public function setHolder(string $holder)
	{
		$this->holder = $holder;
		return $this;
	}

    /**
     * Get the value of softdescriptor
     *
     * @return  string
     */ 
    public function getSoftdescriptor()
    {
        return $this->softdescriptor;
    }

	/**
	 * Set the value of softdescriptor
	 *
	 * @param   string  $softdescriptor  
	 * 
	 * return $this
	 *
	 */
	public function setSoftdescriptor(string $softdescriptor)
	{
		$this->softdescriptor = $softdescriptor;
		return $this;
	}

    /**
     * Get the value of capture
     *
     * @return  bool
     */ 
    public function getCapture()
    {
        return $this->capture;
    }

	/**
	 * Set the value of capture
	 *
	 * @param   bool  $capture  
	 * 
	 * return $this
	 *
	 */
	public function setCapture(bool $capture)
	{
		$this->capture = $capture;
		return $this;
	}

    /**
     * Get the value of card_token
     *
     * @return  string
     */ 
    public function getCard_token()
    {
        return $this->card_token;
    }

	/**
	 * Set the value of card_token
	 *
	 * @param   string  $card_token  
	 * 
	 * return $this
	 *
	 */
	public function setCard_token(string $card_token)
	{
		$this->card_token = $card_token;
		return $this;
	}

    /**
     * Get the value of shipping_address_zipcode
     *
     * @return  string
     */ 
    public function getShipping_address_zipcode()
    {
        return $this->shipping_address_zipcode;
    }

	/**
	 * Set the value of shipping_address_zipcode
	 *
	 * @param   string  $shipping_address_zipcode  
	 * 
	 * return $this
	 *
	 */
	public function setShipping_address_zipcode(string $shipping_address_zipcode)
	{
		$this->shipping_address_zipcode = $shipping_address_zipcode;
		return $this;
	}

    /**
     * Get the value of shipping_address_state
     *
     * @return  string
     */ 
    public function getShipping_address_state()
    {
        return $this->shipping_address_state;
    }

	/**
	 * Set the value of shipping_address_state
	 *
	 * @param   string  $shipping_address_state  
	 * 
	 * return $this
	 *
	 */
	public function setShipping_address_state(string $shipping_address_state)
	{
		$this->shipping_address_state = $shipping_address_state;
		return $this;
	}

    /**
     * Get the value of shipping_address_city
     *
     * @return  string
     */ 
    public function getShipping_address_city()
    {
        return $this->shipping_address_city;
    }

	/**
	 * Set the value of shipping_address_city
	 *
	 * @param   string  $shipping_address_city  
	 * 
	 * return $this
	 *
	 */
	public function setShipping_address_city(string $shipping_address_city)
	{
		$this->shipping_address_city = $shipping_address_city;
		return $this;
	}

    /**
     * Get the value of shipping_address_complement
     *
     * @return  string
     */ 
    public function getShipping_address_complement()
    {
        return $this->shipping_address_complement;
    }

	/**
	 * Set the value of shipping_address_complement
	 *
	 * @param   string  $shipping_address_complement  
	 * 
	 * return $this
	 *
	 */
	public function setShipping_address_complement(string $shipping_address_complement)
	{
		$this->shipping_address_complement = $shipping_address_complement;
		return $this;
	}

    /**
     * Get the value of shipping_address_number
     *
     * @return  string
     */ 
    public function getShipping_address_number()
    {
        return $this->shipping_address_number;
    }

	/**
	 * Set the value of shipping_address_number
	 *
	 * @param   string  $shipping_address_number  
	 * 
	 * return $this
	 *
	 */
	public function setShipping_address_number(string $shipping_address_number)
	{
		$this->shipping_address_number = $shipping_address_number;
		return $this;
	}

    /**
     * Get the value of shipping_address_street
     *
     * @return  string
     */ 
    public function getShipping_address_street()
    {
        return $this->shipping_address_street;
    }

	/**
	 * Set the value of shipping_address_street
	 *
	 * @param   string  $shipping_address_street  
	 * 
	 * return $this
	 *
	 */
	public function setShipping_address_street(string $shipping_address_street)
	{
		$this->shipping_address_street = $shipping_address_street;
		return $this;
	}

    /**
     * Get the value of pix_expires_in
     *
     * @return  int
     */ 
    public function getPix_expires_in()
    {
        return $this->pix_expires_in;
    }

	/**
	 * Set the value of pix_expires_in
	 *
	 * @param   int  $pix_expires_in  
	 * 
	 * return $this
	 *
	 */
	public function setPix_expires_in(int $pix_expires_in)
	{
		$this->pix_expires_in = $pix_expires_in;
		return $this;
	}

    /**
     * Get the value of payment
     *
     * @return  array
     */ 
    public function getPaymentData()
    {
        return [
            "amount" => $this->amount,
            "callback_url" => $this->callback_url,
            "order_id" => isset($this->order_id) ? $this->order_id : md5(uniqid(rand(), true)),
            "payment" => array (
                "type" => $this->type,
                "method" => $this->method,
                "installments" => $this->installments,
                "card" => array (
                    "holder" => $this->holder,
                    "number" => $this->number,
                    "expiry_month" => $this->expiry_month,
                    "expiry_year" => $this->expiry_year,
                    "cvv" => $this->cvv,
                    
                ),
            ),
            "customer" => array(
                "name" => $this->name,
                "cpf_cnpj" => $this->cpf_cnpj,
            ),
        ];
    }
    /**
     * Get the value of payment full Data
     *
     * @return  array
     */ 
    public function getPaymentFullData()
    {
        return [
            "amount" => $this->amount,
            "callback_url" => $this->callback_url,
            "order_id" => isset($this->order_id) ? $this->order_id : md5(uniqid(rand(), true)),
            "payment" => array (
                "type" => $this->type,
                "method" => $this->method,
                "installments" => $this->installments,
                "capture" => $this->capture,
                "softdescriptor" => $this->softdescriptor,
                "fraud_analysis" => $this->fraud_analysis,
                "card" => array (
                    "tokenize" => $this->tokenize,
                    "holder" => $this->holder,
                    "number" => $this->number,
                    "expiry_month" => $this->expiry_month,
                    "expiry_year" => $this->expiry_year,
                    "cvv" => $this->cvv,
                    
                ),
            ),
            "customer" => array(
                "name" => $this->name,
                "cpf_cnpj" => $this->cpf_cnpj,
                "phone" => $this->phone,
                "email" => $this->email,
                "birthdate" => $this->birthdate,
                "ip" => $this->ip,
                "billing_address" => array(
                    "street" => $this->billing_address_street,
                    "number" => $this->billing_address_number,
                    "complement" => $this->billing_address_complement,
                    "city" => $this->billing_address_city,
                    "state" => $this->billing_address_state,
                    "zipcode" => $this->billing_address_zipcode,
                ),
            ),
            "products" => $this->products
        ];
    }

    /**
     * Get the value of paymentCardTokenData
     *
     * @return  array
     */ 
    public function getPaymentCardTokenData()
    {
        return [
            "amount" => $this->amount,
            "callback_url" => $this->callback_url,
            "order_id" => isset($this->order_id) ? $this->order_id : substr(md5(uniqid(rand(), true)),0, 15),
            "payment" => array (
                "type" => $this->type,
                "capture" => $this->capture,
                "method" => $this->method,
                "installments" => $this->installments,
                "card" => array (
                    "token" => $this->card_token
                ),
            ),
            "customer" => array(
                "name" => $this->name,
                "cpf_cnpj" => $this->cpf_cnpj,
            ),
        ];
    }
    /**
     * Get the value of payment boleto Data
     *
     * @return  array
     */ 
    public function getPaymentBoletoData()
    {
        return [
            "amount" => $this->amount,
            "callback_url" => $this->callback_url,
            "order_id" => isset($this->order_id) ? $this->order_id : md5(uniqid(rand(), true)),
            "payment" => array (
                "type" => $this->type,
                "method" => $this->method,
                "boleto" => array (
                    "due_date" => $this->due_date,
                    "instructions" => $this->instructions,
                ),
            ),
            "customer" => array(
                "name" => $this->name,
                "cpf_cnpj" => $this->cpf_cnpj,
                "phone" => $this->phone,
                "email" => $this->email,
                "birthdate" => $this->birthdate,
                "ip" => $this->ip,
                "billing_address" => array(
                    "street" => $this->billing_address_street,
                    "number" => $this->billing_address_number,
                    "complement" => $this->billing_address_complement,
                    "city" => $this->billing_address_city,
                    "state" => $this->billing_address_state,
                    "zipcode" => $this->billing_address_zipcode,
                ),
                "shipping_address" => array(
                    "street" => $this->shipping_address_street,
                    "number" => $this->shipping_address_number,
                    "complement" => $this->shipping_address_complement,
                    "city" => $this->shipping_address_city,
                    "state" => $this->shipping_address_state,
                    "zipcode" => $this->shipping_address_zipcode,
                ),
            ),
            "products" => $this->products
        ];
    }
    /**
     * Get the value of payment pix Data
     *
     * @return  array
     */ 
    public function getPaymentPixData()
    {
        return [
            "amount" => $this->amount,
            "callback_url" => $this->callback_url,
            "order_id" => isset($this->order_id) ? $this->order_id : md5(uniqid(rand(), true)),
            "payment" => array (
                "type" => $this->type,
                "method" => $this->method,
                "pix_expires_in" => $this->pix_expires_in,
            ),
            "customer" => array(
                "name" => $this->name,
                "cpf_cnpj" => $this->cpf_cnpj,
                "phone" => $this->phone,
                "email" => $this->email,
                "birthdate" => $this->birthdate,
                "ip" => $this->ip,
                "billing_address" => array(
                    "street" => $this->billing_address_street,
                    "number" => $this->billing_address_number,
                    "complement" => $this->billing_address_complement,
                    "city" => $this->billing_address_city,
                    "state" => $this->billing_address_state,
                    "zipcode" => $this->billing_address_zipcode,
                ),
                "shipping_address" => array(
                    "street" => $this->shipping_address_street,
                    "number" => $this->shipping_address_number,
                    "complement" => $this->shipping_address_complement,
                    "city" => $this->shipping_address_city,
                    "state" => $this->shipping_address_state,
                    "zipcode" => $this->shipping_address_zipcode,
                ),
            ),
            "products" => $this->products
        ];
    }

    /**
     * Get the value of tokenize
     *
     * @return  bool
     */ 
    public function getTokenize()
    {
        return $this->tokenize;
    }

	/**
	 * Set the value of tokenize
	 *
	 * @param   bool  $tokenize  
	 * 
	 * return $this
	 *
	 */
	public function setTokenize(bool $tokenize)
	{
		$this->tokenize = $tokenize;
		return $this;
	}

    /**
     * Get the value of method
     *
     * @return  string
     */ 
    public function getMethod()
    {
        return $this->method;
    }

	/**
	 * Set the value of method
	 *
	 * @param   string  $method  
	 * 
	 * return $this
	 *
	 */
	public function setMethod(string $method)
	{
		$this->method = $method;
		return $this;
	}
}

