<p align="center">
  <a href="https://developers.ipag.com.br/">
    <img alt="IPag" src="https://www.ipag.com.br/wp-content/uploads/2018/09/cropped-logo-site.png" width="200">
  </a>
</p>

<h1 align="center">
  <a href="https://github.com/randler/ipag-php">
    Gateway IPag PHP
  </a>
</h1>
<p align="center">
  Biblioteca desenvolvida para facilitar a comunicação com o gateway de pagamento IPag.
</p>

<p align="center">
  <a href="https://github.com/facebook/react-native/blob/master/LICENSE">
    <img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="React Native is released under the MIT license." />
  </a>
  <a href="https://github.com/randler/ipag-php/releases/">
    <img src="https://img.shields.io/badge/vers%C3%A3o-1.1.0-green" alt="Versão" />
  </a>
  <a href="https://github.com/randler/adiq-php/releases">
    <img src="https://img.shields.io/packagist/dt/randler/ipag-php.svg" alt="Downloads" />
  </a>
</p>

# Introdução

Essa SDK foi construída com o intuito de tornar flexível as chamadas dos metodos de pagamento, de forma que todos possam utilizar todas as features, de todas as versões de API.

Você pode acessar a documentação oficial da API acessando esse [link](https://developers.ipag.com.br/).


## Índice

- [Instalação](#instalação)
- [Requisição de Tokenização](#requisição-de-tokenização)
  - [Token de Cartão](#token-de-cartão)
- [Requisição de Transação](#requisição-de-transação)
  - [Criar transação](#criar-transação)
  - [Detalhe de uma transação](#detalhe-de-uma-transação)
  - [Cancelar uma transação](#cancelar-uma-transação)
  - [Capturar uma transação](#capturar-uma-transação)
<br>
<br>
<br>
<br>


## Instalação

Instale a biblioteca utilizando o comando

`composer require randler/ipag-php`
<br>
<br>
<hr>

## Requisição de Tokenização

Nesta seção será explicado como realizar requisições para cartão pelo IPag com essa biblioteca.
<br>

### Token de Cartão

```php
<?php
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
?>
```
<br>
<br>
<hr>

## Requisição de transação
Para fazer a requisição de transação.

<br>

### Criar Transação
```php

  $appId = "***";
  $appKey = "D5***DA";
  $sandbox = true;

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
```
<br>

### Detalhe de uma transação
```php
  
  $appId = "***";
  $appKey = "D5***DA";
  $sandbox = true;
  $id = "020001409102281247420000012620420000000000";

  $client = new Client($this->appId, $this->appKey, $this->sandbox);

  $detail = $client
    ->payment()
    ->details($id);

```
<br>

### Cancelar uma transação
```php
  
  $appId = "***";
  $appKey = "D5***DA";
  $sandbox = true;
  $id = "020001409102281247420000012620420000000000";

  $client = new Client($this->appId, $this->appKey, $this->sandbox);

  $detail = $client
    ->payment()
    ->cancel($id);
```
<br>

### Capturar uma transação
```php
  
  $appId = "***";
  $appKey = "D5***DA";
  $sandbox = true;
  $id = "020001409102281247420000012620420000000000";

  $client = new Client($this->appId, $this->appKey, $this->sandbox);

  $detail = $client
    ->payment()
    ->capture($id);
```
<br>
<br>
<hr>

<br>
