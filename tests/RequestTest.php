<?php
namespace PingpongTest\HTTP;

use Pingpong\HTTP\Uri;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function initialize_stream_without_parameter()
    {
        $requestData = [
            'uri' => new Uri(),
            'headers' => [

            ],
            'version' => '2.1',
            'body' => 'This is some fucking body  i gues',
            'target' => 'http://nababati.hvar4iloto/asam/lud/332'
        ];
    }
}
