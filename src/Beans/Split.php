<?php

namespace IPag\Beans;

class Split
{
    /**
    * @var array
    */
    private $splits = [];
    
    /**
    * @var string
    */
    private $sellerId;

    /**
    * @var float
    */
    private $percentage;

    /**
    * @var float
    */
    private $amount;

    /**
    * @var bool
    */
    private $liable;

    /**
    * @var bool
    */
    private $chargeProcessingFee;
    
    /**
    * @var bool
    */
    private $holdReceivables = false;

    /**
     * Get the value $splits 
     *
     * @return  array
     */ 
    public function getSplitData()
    {
        return $this->splits;
    }

    /**
     * add split info in array of splits 
     *
     * @return  $this
     */ 
    public function addSplitData()
    {
        array_push(
            $this->splits, 
            [
                "seller_id" => $this->sellerId,
                "percentage" => $this->percentage,
                "amount" => $this->amount,
                "liable" => $this->liable,
                "charge_processing_fee" => $this->chargeProcessingFee,
                "hold_receivables" => $this->holdReceivables,
            ]
        );
        return $this;
    }

	/**
	 * Set the value of selletId
	 *
	 * @param   string  $sellerId  
	 * 
	 * return $this
	 *
	 */
	public function setSellerId(string $sellerId)
	{
		$this->sellerId = $sellerId;
		return $this;
	}

	/**
	 * Set the value of percentage
	 *
	 * @param  float  $percentage  
	 * 
	 * return $this
	 *
	 */
	public function setPercentage(int $percentage)
	{
		$this->percentage = $percentage;
		return $this;
	}

	/**
	 * Set the value of amount
	 *
	 * @param   float  $amount  
	 * 
	 * return $this
	 *
	 */
	public function setAmount(float $amount)
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	 * Set the value of liable
	 *
	 * @param   bool  $liable  
	 * 
	 * return $this
	 *
	 */
	public function setliable(bool $liable)
	{
		$this->liable = $liable;
		return $this;
	}


	/**
	 * Set the value of chargeProcessingFee
	 *
	 * @param   bool  $chargeProcessingFee  
	 * 
	 * return $this
	 *
	 */
	public function setChargeProcessingFee(bool $chargeProcessingFee)
	{
		$this->chargeProcessingFee = $chargeProcessingFee;
		return $this;
	}

	/**
	 * Set the value of holdReceivables
	 *
	 * @param   bool  $holdReceivables  
	 * 
	 * return $this
	 *
	 */
	public function setHoldReceivables(bool $holdReceivables)
	{
		$this->holdReceivables = $holdReceivables;
		return $this;
	}
}

