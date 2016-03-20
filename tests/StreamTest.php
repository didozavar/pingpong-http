<?php
namespace PingpongTest\HTTP;

use Pingpong\HTTP\Stream;

class StreamTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function initialize_stream_without_parameter()
    {
        $stream = new Stream();
    }
}
