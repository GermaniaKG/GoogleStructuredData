<?php
namespace tests;

use Germania\GoogleStructuredData\GoogleFaqQuestion;
use Germania\GoogleStructuredData\GoogleStructuredDataInterface;

class GoogleFaqQuestionTest extends \PHPUnit\Framework\TestCase
{
    public function testInterfaces()
    {
        $sut = new GoogleFaqQuestion();
        $this->assertInstanceOf(\JsonSerializable::class, $sut);
        $this->assertInstanceOf(GoogleStructuredDataInterface::class, $sut);
    }
}
