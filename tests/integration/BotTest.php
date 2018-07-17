<?php

namespace CodeBot;


use CodeBot\Build\Solid;
use PHPUnit\Framework\TestCase;

class BotTest extends TestCase
{
    private $pageAccessToken = 'EAACjHqHVOAMBAOZCZBMhYjtLRcYCAcosIm4q0yjhiFxce1CbVKyc952PB79NQ8w0YVl9BCVypN8qR8SsmewDHCrJGg5OudelTFH4Sg6neWYacPbhgPqlIlpyqPd7QXlXvwIYsdf92zZB5a5hKdvhgd5vijn5ge4yE5aiX6IXjFZA6AVqTKWX';

    public function testAddMenu()
    {
        $call_to_actions = [
            [
                'id' => 1,
                'type' => 'nested',
                'title' => 'O que eu posso fazer?',
                'parent_id' => 0,
                'value' => null,
            ],
            [
                'id' => 2,
                'type' => 'web_url',
                'title' => 'Visite nosso site',
                'parent_id' => 0,
                'value' => 'https://sites.code.education/home-code/',
            ],
            [
                'id' => 3,
                'type' => 'web_url',
                'title' => 'Quer aprender Laravel e Vue?',
                'parent_id' => 1,
                'value' => 'http://sites.code.education/laravel-com-vuejs/',
            ],
            [
                'id' => 4,
                'type' => 'postback',
                'title' => 'Ver opções iniciais',
                'parent_id' => 1,
                'value' => 'iniciar',
            ],
        ];
        
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->addMenu('default', false, $call_to_actions);

        $this->assertTrue(true);
    }

    public function testRemoveMenu()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->removeMenu();

        $this->assertTrue(true);
    }

    public function testAddGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->addGetStartedButton('iniciar');

        $this->assertTrue(true);
    }

    public function testRemoveGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->removeGetStartedButton();

        $this->assertTrue(true);
    }
}