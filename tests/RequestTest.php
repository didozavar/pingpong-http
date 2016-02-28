<?php
namespace PingpongTest\HTTP;

use PHPUnit_Framework_TestCase;
use Pingpong\HTTP\Request;

class RequestTest extends PHPUnit_Framework_TestCase
{

    public function testInitializeRoute()
    {
        $request = new Request();
        $this->assertInstanceOf("Pingpong\\HTTP\\Request", $request);
    }
}
