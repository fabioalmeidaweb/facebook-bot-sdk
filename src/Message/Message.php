<?php
namespace CodeBot\Message;

interface Message
{
    public function __construct(string $recipientId);
    public function message(string $messagetext) :array;
}
