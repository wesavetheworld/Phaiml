<?php
/**
 * Created by PhpStorm.
 * User: camilo
 * Date: 4/9/17
 * Time: 12:26 AM
 */
use PHPUnit\Framework\TestCase;


class PhaimlKernelTest extends TestCase
{


    public function test_Simple_Chat() {
        $kernel = new Phaiml\Kernel();
        $kernel->learn("../resource/simple.aiml");
        $response = $kernel->response("Hello Moto!");
        $this->assertEquals("Hello User!", $response, "The response is not equal");

    }

    public function test_Set_Bootstrap() {

        $kernel = new Phaiml\Kernel();
        $response = $kernel->bootstrap("../resource/simple.brn");
        $this->assertTrue($response);
    }

    public function testSaveBrain() {

        $kernel = new Phaiml\Kernel();
        $response = $kernel->saveBrain("../resource/new.brn");
        $this->assertTrue($response);
    }

    public function test_Session_ID() {

        $kernel = new Phaiml\Kernel();
        $response = $kernel->response("Hello Moto!", session_id());
        $this->assertEquals("Hello User!", $response);
    }

    public function test_Pradicate() {
        $session_id = session_id();

        $kernel = new Phaiml\Kernel();
        $kernel->setPredicate("dog", "Brandy", $session_id);
        $clients_dogs_name = $kernel->getPredicate("dog", $session_id);
        $this->assertEquals("Brandy", $clients_dogs_name);
    }


}
