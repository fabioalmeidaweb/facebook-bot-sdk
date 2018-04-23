<?php
namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testReturnAnArray()
    {
        $actual = (new Text(1))->message('hello');

        $expected = [
            'recipient' => [
                'id' => 1
            ],
            'message' => [
                'text' => 'hello',
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];

        $this->assertEquals($actual, $expected);
    }
}