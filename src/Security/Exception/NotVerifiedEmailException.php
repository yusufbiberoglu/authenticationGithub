<?php


namespace App\Security\Exception;


use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class NotVerifiedEmailException extends CustomUserMessageAuthenticationException
{

    public function __construct(string $message = 'Hesap doğrulanmadı bu mail adresi kullanılıyor olabilir!', array $messageData = [], int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $messageData, $code, $previous);
    }

}
