<?php
namespace IPag\Test;

require_once ('vendor/autoload.php');

/** Testes
 * ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/ChangePaymentTest.php
 */

use IPag\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public $appId = "***";
    public $appKey = "D5***DA";
    public $sandbox = true;
    public $id = "1036507";
    
    public function testDetailsPayment()
    {
        $client = new Client($this->appId, $this->appKey, $this->sandbox);

        $payment = $client
            ->payment()
            ->details($this->id);

        $this->assertEquals($payment->id, $this->id);
    }

    public function testCapturePayment()
    {
        $client = new Client($this->appId, $this->appKey, $this->sandbox);

        $payment = $client
            ->payment()
            ->capture($this->id);

        $this->assertEquals($payment->id, $this->id);
        
    }

    public function testCancelPayment()
    {
        $client = new Client($this->appId, $this->appKey, $this->sandbox);

        $payment = $client
            ->payment()
            ->cancel($this->id);

        $this->assertEquals($payment->id, $this->id);
        
    }
}
