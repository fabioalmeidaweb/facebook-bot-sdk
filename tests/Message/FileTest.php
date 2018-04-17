<?php
namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    public function testRetornaUmArray()
    {
        $actual = (new File(1))->message('hello');

        $expected = [
            'recipient' => [
                'id' => 1
            ],
            'message' => [
                'attachment' => [
                    'type' => 'file',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];

        $this->assertEquals($actual, $expected);
    }
}