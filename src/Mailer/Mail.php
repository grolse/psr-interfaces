<?php

namespace Hillel\Mailer;


use Psr\Log\LoggerInterface;

class Mail
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Mail constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function send(string $to, string $from, string $subject, string $body): void
    {
        //Код для отправки писем
        //Если операция прошла успешно то пишем в лог событие с уровнем info
        $this->logger->info('Письмо было отправленно `{to}` от `{from}` с темой `{subject}` и сообщением `{body}`',
            [
                'to' => $to,
                'from' => $from,
                'subject' => $subject,
                'body' => $body
            ]
        );

        //Если что то пошло не так, то пишем ошибку уровня error или сritical

        //$this->logger->error('Что то пошло не так');
    }
}
