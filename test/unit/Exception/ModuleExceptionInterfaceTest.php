<?php

namespace Dhii\Modular\UnitTest\Exception;

use Dhii\Modular\Module\Exception\ModuleExceptionInterface as TestSubject;
use Xpmock\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class ModuleExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Modular\Module\Exception\ModuleExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getMessage()
            ->getCode()
            ->getPrevious()
            ->getFile()
            ->getLine()
            ->getTrace()
            ->getTraceAsString()
            ->__toString()

            ->getModule()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created'
        );

        $this->assertInstanceOf(
            'Dhii\Modular\Module\ModuleAwareInterface',
            $subject,
            'Subject does not implement required interface'
        );
    }
}
