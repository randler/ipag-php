<?php
namespace IPag\Test;

require_once ('vendor/autoload.php');

/** Testes
 * ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/unit/CardTokenTest.php
 */

use IPag\Beans\CustomerCard;
use IPag\Client;
use IPag\Key;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testCreateCard()
    {   
        $appId = "***";
        $appKey = "D5***DA";
        $sandbox = true;
        
        $client = new Client($appId, $appKey, $sandbox);

        $cardInfo = new CustomerCard();

        $cardInfo->setCardholderName("JOSE SILVA")
            ->setCardNumber("4111111111111111")
            ->setExpirationMonth("01")
            ->setExpirationYear("2029")
            ->setCvv("123")
            ->setCpfCnpj("80630047014")
            ->setMobilePhone("11999999999")
            ->setBirthdate("1989-03-28")
            ->setStreet("Rua dos Bobos")
            ->setNumber("0")
            ->setDistrict("Centro")
            ->setZipcode("12345678")
            ->setCity("São Paulo")
            ->setState("SP");

        $data_card = $cardInfo->getCardData();
        //fwrite(STDERR, print_r($data_card));
        
        $response = $client->card()->create($data_card);
        fwrite(STDERR, print_r($response));        
    }
}
