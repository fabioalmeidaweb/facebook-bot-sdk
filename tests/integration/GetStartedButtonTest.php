<?php
namespace CodeBot;

use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{

    public function testAddGetStartedButton()
    {
        $data = (new GetStartedButton())->add('Iniciar');
        $callSendApi = new CallSendApi('EAACjHqHVOAMBAOZCZBMhYjtLRcYCAcosIm4q0yjhiFxce1CbVKyc952PB79NQ8w0YVl9BCVypN8qR8SsmewDHCrJGg5OudelTFH4Sg6neWYacPbhgPqlIlpyqPd7QXlXvwIYsdf92zZB5a5hKdvhgd5vijn5ge4yE5aiX6IXjFZA6AVqTKWX');
        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE);

        $this->assertTrue(is_string($result));
    }

}
