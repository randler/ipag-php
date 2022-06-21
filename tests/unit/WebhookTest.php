<?php
namespace IPag\Test;

require_once ('vendor/autoload.php');

/** Testes
 * ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/WebhookTest.php
 */

use IPag\Beans\PaymentData;
use IPag\Beans\Webhook;
use IPag\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public $appId = "***";
    public $appKey = "D5***DA";
    public $sandbox = true;
    public function testCreateWebhook()
    {
        
        $client = new Client($this->appId, $this->appKey, $this->sandbox);

        $webhook = new Webhook();
        $webhook->setHttp_method(Webhook::POST)
            ->setUrl('https://www.callback.com.br/webhook')
            ->setDescription('Webhook')
            ->setActions(Webhook::ALL_ACTIONS);

        $webhook = $client
            ->webhook()
            ->create($webhook->getWebhookData());

        fwrite(STDERR, print_r($webhook));
        
    }
}
