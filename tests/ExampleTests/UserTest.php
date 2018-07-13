<?php

namespace ExampleTests;

// use PHPUnit_Framework_TestCase;
use Example\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;

    /**
     * Este método é chamado no início dos testes sempre
     */
    public function setUp()
    {
        $this->user = new User("Renan", "Santana");
    }

    public function testNomeCompleto()
    {
        $expected   = "Renan Santana";
        $actual     = $this->user->getCompleteName();
        $this->assertEquals($expected, $actual);
    }

    public function testGetName()
    {
        $expected   = "Renan";
        $actual     = $this->user->getName();
        $this->assertEquals($expected, $actual);
    }

    public function testGetLastName()
    {
        $expected   = "Santana";
        $actual     = $this->user->getLastName();
        $this->assertEquals($expected, $actual);
    }
}