<?php

namespace IPag\Beans;

class SellerInfo
{
    /**
    * @var string
    */
    private $name;

    /**
    * @var string
    */
    private $descripton;

    /**
    * @var float
    */
    private $unit_price;

    /**
    * @var int
    */
    private $quantitty;

    /**
    * @var string
    */
    private $sku;

    /**
     * Get the value getProductData 
     *
     * @return  array
     */ 
    public function getProductData()
    {
        return [
            "name" => $this->name,
            "description" => $this->description,
            "unit_price" => $this->unit_price,
            "quantity" => $this->quantity,
            "sku" => $this->sku,
        ];
    }


    /**
     * Get the value of sku
     *
     * @return  string
     */ 
    public function getSku()
    {
        return $this->sku;
    }

	/**
	 * Set the value of sku
	 *
	 * @param   string  $sku  
	 * 
	 * return $this
	 *
	 */
	public function setSku(string $sku)
	{
		$this->sku = $sku;
		return $this;
	}

    /**
     * Get the value of quantitty
     *
     * @return  int
     */ 
    public function getQuantitty()
    {
        return $this->quantitty;
    }

	/**
	 * Set the value of quantitty
	 *
	 * @param   int  $quantitty  
	 * 
	 * return $this
	 *
	 */
	public function setQuantitty(int $quantitty)
	{
		$this->quantitty = $quantitty;
		return $this;
	}

    /**
     * Get the value of unit_price
     *
     * @return  float
     */ 
    public function getUnit_price()
    {
        return $this->unit_price;
    }

	/**
	 * Set the value of unit_price
	 *
	 * @param   float  $unit_price  
	 * 
	 * return $this
	 *
	 */
	public function setUnit_price(float $unit_price)
	{
		$this->unit_price = $unit_price;
		return $this;
	}

    /**
     * Get the value of descripton
     *
     * @return  string
     */ 
    public function getDescripton()
    {
        return $this->descripton;
    }

	/**
	 * Set the value of descripton
	 *
	 * @param   string  $descripton  
	 * 
	 * return $this
	 *
	 */
	public function setDescripton(string $descripton)
	{
		$this->descripton = $descripton;
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
}

