<?php
/**
 * Created by PhpStorm.
 * User: fabioalmeida
 * Date: 5/14/2018
 * Time: 9:18 AM
 */

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\Button;
use CodeBot\Element\Product;
use PHPUnit\Framework\TestCase;

class ListTemplateTest extends TestCase
{

    public function testListWithTwoProducts()
    {
        $button = new Button('web_url', null, 'https://google.com');
        $product = new Product('Product 1', 'http://www.twccomunicacao.com.br/restrito/img/noticias/2016/04/wb_moc_post-4-dicas-matadoras-para-vender-produtos-afiliados-600x600_011.png', 'A awesome product!', $button);
        $button2 = new Button('web_url', null, 'https://google.com');
        $product2 = new Product('Product 2', 'http://www.twccomunicacao.com.br/restrito/img/noticias/2016/04/wb_moc_post-4-dicas-matadoras-para-vender-produtos-afiliados-600x600_011.png', 'A awesome course!', $button2);

        $template = new ListTemplate(1234);
        $template->add($product);
        $template->add($product2);

        $actual = $template->message('qwerty');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'list',
                        'buttons' => [
                            [
                                'title' => 'Product 1',
                                'subtitle' => 'A awesome product!',
                                'image_url' => 'http://www.twccomunicacao.com.br/restrito/img/noticias/2016/04/wb_moc_post-4-dicas-matadoras-para-vender-produtos-afiliados-600x600_011.png',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://google.com'
                                ]
                            ],
                            [
                                'title' => 'Product 2',
                                'subtitle' => 'A awesome course!',
                                'image_url' => 'http://www.twccomunicacao.com.br/restrito/img/noticias/2016/04/wb_moc_post-4-dicas-matadoras-para-vender-produtos-afiliados-600x600_011.png',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://google.com'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }
}