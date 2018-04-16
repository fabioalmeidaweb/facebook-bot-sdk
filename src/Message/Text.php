<?php
namespace CodeBot\Message;

class Text
{
    private $recipientId;

    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }
    public function message(string $messagetext) :array
    {
        return  [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'text' => 'hello',
                'metaadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }
}
