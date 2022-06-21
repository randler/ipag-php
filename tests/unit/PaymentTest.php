<?php
namespace IPag\Test;

require_once ('vendor/autoload.php');

/** Testes
 * ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/PaymentTest.php
 */
use IPag\Beans\PaymentData;
use IPag\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public $appId = "***";
    public $appKey = "***";
    public $sandbox = true;
    
    public function testPaymentCapture()
    {    
        $client = new Client($this->appId, $this->appKey, $this->sandbox);

        $payment = new PaymentData();
        $payment->setAmount(10.35)
                ->setType("card") // card, boleto, pix
                ->setInstallments(1)
                ->setCapture(true)
                ->setCard_token("aea788f4-34cd-4f3d-8003-9c361fc4da99")
                ->setName("JOSE SILVA")
                ->setCpf_cnpj("80630047014");

        $payment = $client
            ->payment()
            ->create($payment->getPaymentCardTokenData());

        //fwrite(STDERR, print_r($payment));
        $this->assertEquals($payment->attributes->status->code, 8); // CAPTURED
        
    }
    public function testPaymentNoCapture()
    {        
        $client = new Client($this->appId, $this->appKey, $this->sandbox);

        $payment = new PaymentData();
        $payment->setAmount(10.35)
                ->setType("card") // card, boleto, pix
                ->setInstallments(1)
                ->setCapture(false)
                ->setCard_token("aea788f4-34cd-4f3d-8003-9c361fc4da99")
                ->setName("JOSE SILVA")
                ->setCpf_cnpj("80630047014");

        $payment = $client
            ->payment()
            ->create($payment->getPaymentCardTokenData());

        //fwrite(STDERR, print_r($payment));
        $this->assertEquals($payment->attributes->status->code, 5); // PRE-AUTHORIZED
        
    }
}
