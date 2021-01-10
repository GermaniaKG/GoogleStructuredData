<?php
namespace tests;

use Germania\GoogleStructuredData\GoogleFaqAnswer;
use Germania\GoogleStructuredData\GoogleStructuredDataInterface;

class GoogleFaqAnswerTest extends \PHPUnit\Framework\TestCase
{
    public function testInterfaces()
    {
        $sut = new GoogleFaqAnswer();
        $this->assertInstanceOf(\JsonSerializable::class, $sut);
        $this->assertInstanceOf(GoogleStructuredDataInterface::class, $sut);
    }
}
