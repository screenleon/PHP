<?php
require_once 'vendor/autoload.php';
$server = 'localhost';
$port = 1883;
$clientId = uniqid();

$mqtt = new \PhpMqtt\Client\MQTTClient($server, $port, $clientId);
$mqtt->connect();
$mqtt->subscribe('test', function (string $topic, string $message) use ($mqtt) {
  $data = json_decode($message);
  echo sprintf("Received message on topic [%s]: %s\r\n", $topic, $data->value);
}, 0);
$mqtt->publish('test', '{"name":"'.$clientId.'","value":"PhP test"}');

$mqtt->loop(true);
