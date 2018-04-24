<?php

namespace CodeBot\TemplatesMessage;

use PHPUnit\Framework\TestCase;
use CodeBot\Element\Button;

class ButtonsTemplateTest extends TestCase
{

    public function testReturnButtonWithArrayFormat()
    {
        $buttonsTemplate = new ButtonsTemplate(1234);
        $buttonsTemplate->add(new Button('postback', 'An answer by bot', 'answer'));
        $actual = $buttonsTemplate->message('An example of the template with buttons');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => 'An example of the template with buttons',
                        'buttons' => [
                            [
                                'type' => 'postback',
                                'title' => 'An answer by bot',
                                'payload' => 'answer'
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }

}
