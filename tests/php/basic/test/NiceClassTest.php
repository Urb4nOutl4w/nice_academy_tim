<?php

namespace NiceshopsDev\NiceAcademy\Tests\Basic;


use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class NiceClassTest extends TestCase
{
    
    
    /**
     * @var NiceClass|MockObject
     */
    protected $object;
    
    
    protected function setUp()
    {
        $this->object = $this->getMockBuilder(NiceClass::class)->disableOriginalConstructor()->getMockForAbstractClass();
    }
    
    
    /**
     * @group  integration
     * @small
     */
    public function testTestClassExists()
    {
        $this->assertTrue(class_exists(NiceClass::class));
        $this->assertTrue($this->object instanceof NiceClass);
    }

    // UnitTest for GetString
    public function testGetString()
    {
        $getStringMethod = new \ReflectionMethod($this->object, "getString");
        $getStringMethod->setAccessible(true);
        $stringValue = $getStringMethod->invoke(new NiceClass);
        $this->assertSame($stringValue,"be ");
    }


    /**
     * @dataProvider provideResultData
     */
    public function testResult($expectedResult): void
    {
        $testClass = new NiceClass();
        $resultValue = $testClass->result();
        $this->assertSame($resultValue,$expectedResult);
    }

    public function provideResultData()
    {
        return [
            [
                'be nice',
            ],
            [
                'be not nice',
            ],
        ];
    }


        /**
     * @dataProvider provideMyResultData
     */
    public function testMyResult($expectedResult): void
    {
        $testClass = new MyNiceClass();
        $resultValue = $testClass->result();
        $this->assertSame($resultValue,$expectedResult);
    }

    public function provideMyResultData()
    {
        return [
            [
                'allways be nice',
            ],
            [
                'never be nice',
            ],
        ];
    }

    public function testClassIsCountable()
    {
        //$this->assertTrue(is_countable(NiceClass::class));
        $this->assertTrue(is_countable(new NiceClass()));
    }

    /**
     * @dataProvider provideCountData
     */
    public function testCount($expectedResult): void
    {
        $this->assertSame(count(new NiceClass()),$expectedResult);
    }

    public function provideCountData()
    {
        return [
            [
                7,
            ],
            [
                6,
            ],
        ];
    }

    /**
     * @dataProvider provideMyCountData
     */
    public function testMyCount($expectedResult): void
    {
        $this->assertSame(count(new MyNiceClass()),$expectedResult);
    }

    public function provideMyCountData()
    {
        return [
            [
                15,
            ],
            [
                6,
            ],
        ];
    }
    

}
