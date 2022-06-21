<?php

namespace IPag\Beans;

class Webhook
{
    public const POST = 'POST';
    public const PUT = 'PUT';

    public const PAYMENT_LINK_PAYMENT_SUCCEEDED = 'PaymentLinkPaymentSucceeded';
    public const PAYMENT_LINK_PAYMENT_FAILED = 'PaymentLinkPaymentFailed';
    public const SUBSCRIPTION_PAYMENT_SUCCEEDED = 'SubscriptionPaymentSucceeded';
    public const SUBSCRIPTION_PAYMENT_FAILED = 'SubscriptionPaymentFailed';
    public const CHARGE_PAYMENT_SUCCEEDED = 'ChargePaymentSucceeded';
    public const CHARGE_PAYMENT_FAILED = 'ChargePaymentFailed';
    public const TRANSACTION_CREATED = 'TransactionCreated';
    public const TRANSACTION_WAITING_PAYMENT = 'TransactionWaitingPayment';
    public const TRANSACTION_CANCELED = 'TransactionCanceled';
    public const TRANSACTION_PREAUTHORIZED = 'TransactionPreAuthorized';
    public const TRANSACTION_CAPTURED = 'TransactionCaptured';
    public const TRANSACTION_DENIED = 'TransactionDenied';
    public const TRANSACTION_DISPUTED = 'TransactionDisputed';
    public const TRANSACTION_CHARGEDBACK = 'TransactionChargedback';
    public const TRANSFER_PAYMENTSUCCEEDED = 'TransferPaymentSucceeded';
    public const TRANSFER_PAYMENTFAILED = 'TransferPaymentFailed';

    public const ALL_ACTIONS = [
        self::PAYMENT_LINK_PAYMENT_SUCCEEDED,
        self::PAYMENT_LINK_PAYMENT_FAILED,
        self::SUBSCRIPTION_PAYMENT_SUCCEEDED,
        self::SUBSCRIPTION_PAYMENT_FAILED,
        self::CHARGE_PAYMENT_SUCCEEDED,
        self::CHARGE_PAYMENT_FAILED,
        self::TRANSACTION_CREATED,
        self::TRANSACTION_WAITING_PAYMENT,
        self::TRANSACTION_CANCELED,
        self::TRANSACTION_PREAUTHORIZED,
        self::TRANSACTION_CAPTURED,
        self::TRANSACTION_DENIED,
        self::TRANSACTION_DISPUTED,
        self::TRANSACTION_CHARGEDBACK,
        self::TRANSFER_PAYMENTSUCCEEDED,
        self::TRANSFER_PAYMENTFAILED
    ];

    public const TRANSACTION_ACTIONS = [
        self::TRANSACTION_CREATED,
        self::TRANSACTION_WAITING_PAYMENT,
        self::TRANSACTION_CANCELED,
        self::TRANSACTION_PREAUTHORIZED,
        self::TRANSACTION_CAPTURED,
        self::TRANSACTION_DENIED,
        self::TRANSACTION_DISPUTED,
        self::TRANSACTION_CHARGEDBACK
    ];

    public const TRANSFER_ACTIONS = [
        self::TRANSFER_PAYMENTSUCCEEDED,
        self::TRANSFER_PAYMENTFAILED
    ];

    public const CHARGE_ACTIONS = [
        self::CHARGE_PAYMENT_SUCCEEDED,
        self::CHARGE_PAYMENT_FAILED,
    ];

    public const SUBSCRIPTION_ACTIONS = [
        self::SUBSCRIPTION_PAYMENT_SUCCEEDED,
        self::SUBSCRIPTION_PAYMENT_FAILED,
    ];

    public const PAYMENT_ACTIONS = [
        self::PAYMENT_LINK_PAYMENT_SUCCEEDED,
        self::PAYMENT_LINK_PAYMENT_FAILED,
    ];

    /**
    * @var string
    */
    private $http_method;

    /**
    * @var string
    */
    private $url;

    /**
    * @var string
    */
    private $description;

    /**
    * @var array
    */
    private $actions;

    /**
     * Get the value of rateAmount
     *
     * @return  array
     */ 
    public function getWebhookData()
    {
        return [
            'http_method' => $this->http_method,
            'url' => $this->url,
            'description' => $this->description,
            'actions' => $this->actions
        ];
    }

    /**
     * Get the value of http_method
     *
     * @return  string
     */ 
    public function getHttp_method()
    {
        return $this->http_method;
    }

	/**
	 * Set the value of http_method
	 *
	 * @param   string  $http_method  
	 * 
	 * return $this
	 *
	 */
	public function setHttp_method(string $http_method)
	{
		$this->http_method = $http_method;
		return $this;
	}

    /**
     * Get the value of url
     *
     * @return  string
     */ 
    public function getUrl()
    {
        return $this->url;
    }

	/**
	 * Set the value of url
	 *
	 * @param   string  $url  
	 * 
	 * return $this
	 *
	 */
	public function setUrl(string $url)
	{
		$this->url = $url;
		return $this;
	}

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

	/**
	 * Set the value of description
	 *
	 * @param   string  $description  
	 * 
	 * return $this
	 *
	 */
	public function setDescription(string $description)
	{
		$this->description = $description;
		return $this;
	}

    /**
     * Get the value of actions
     *
     * @return  string
     */ 
    public function getActions()
    {
        return $this->actions;
    }

	/**
	 * Set the value of actions
	 *
	 * @param   array  $actions  
	 * 
	 * return $this
	 *
	 */
	public function setActions(array $actions)
	{
		$this->actions = $actions;
		return $this;
	}
}

