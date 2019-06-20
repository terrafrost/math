<?php
/**
 * @license See the file LICENSE for copying permission
 */

namespace Moontoast\Math;

use PHPUnit_Framework_TestCase as TestCase;

class BigNumberImmutableImmutableTest extends TestCase
{
    protected function setUp()
    {
        bcscale(0);
    }

    /**
     * @covers \Moontoast\Math\BigNumberImmutable::__construct
     * @covers \Moontoast\Math\BigNumberImmutable::getValue
     * @covers \Moontoast\Math\BigNumberImmutable::getScale
     * @covers \Moontoast\Math\BigNumberImmutable::getScale
     */
    public function testConstruct()
    {
/*
        $bn1 = new BigNumberImmutable('9,223,372,036,854,775,808');
        $this->assertSame('9223372036854775808', $bn1->getValue());
        $this->assertEquals(0, $bn1->getScale());

        $bn2 = new BigNumberImmutable(2147483647);
        $this->assertSame('2147483647', $bn2->getValue());
        $this->assertEquals(0, $bn2->getScale());

        $bn3 = new BigNumberImmutable($bn1, 4);
        $this->assertSame('9223372036854775808.0000', $bn3->getValue());
        $this->assertEquals(4, $bn3->getScale());

        $bn4 = new BigNumberImmutable('9223372036854775808.12345678901', 5);
        $this->assertSame('9223372036854775808.12345', $bn4->getValue());
        $this->assertEquals(5, $bn4->getScale());
*/

        BigNumberImmutable::setDefaultScale(2);
        $bn5 = new BigNumberImmutable(2147483647);
        $this->assertSame('2147483647.00', $bn5->getValue());
        $this->assertEquals(2, $bn5->getScale());
    }
}
