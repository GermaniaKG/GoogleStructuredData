<?php
namespace tests;

use Germania\GoogleStructuredData\GoogleFaqCollection;
use Germania\GoogleStructuredData\GoogleStructuredDataInterface;

class GoogleFaqCollectionTest extends \PHPUnit\Framework\TestCase
{
    public function testInterfaces()
    {
        $sut = new GoogleFaqCollection();
        $this->assertInstanceOf(\JsonSerializable::class, $sut);
        $this->assertInstanceOf(GoogleStructuredDataInterface::class, $sut);
    }
}
