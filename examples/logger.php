<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hillel\Logger\AppLogger;
use Hillel\Mailer\Mail;

use Psr\Log\LogLevel;

$logger = new AppLogger();

$logger->emergency('Something emergency');
$logger->alert('Alert message with some additional data {line}', ['line' => __LINE__]);
$logger->error('This is an error in {file} at line {line}', ['file' => __FILE__, 'line' => __LINE__]);
$logger->notice('This is notice');
$logger->critical('This is critical');
$logger->warning('This is warning');
$logger->info('Record has been created {id}', ['id' => rand(0, 1000)]);
$logger->debug('This is debug message');

$logger->log(LogLevel::ERROR, 'This is log method with specified error level');

// Пример с инъекцией логгера
$mailer = new Mail($logger);
$mailer->send('test@mail.ru', 'author@mail.com', 'Тестовое сообшение', 'Тестовое сообщение');