<?php
namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';
use PHPUnit\Framework\TestCase;
use TDD\FizzBuzz;


class FizzBuzzTest extends TestCase
{
    public function setUp() {
        $this->FizzBuzz = new FizzBuzz();
    }

    public function tearDown() {
        unset($this->FizzBuzz);
    }

    public function testDivisible() {
        $inputSet = 5;
        $expectedResults = true;
        $testResults = $this->FizzBuzz->divisible($inputSet, 5);
        $this->assertEquals($expectedResults, $testResults, 'Should return true when input is divisible by given number.');
    }

    public function testContains() {
        $inputSet = 15;
        $expectedResults = true;
        $testResults = $this->FizzBuzz->contains(5, $inputSet);
        $this->assertEquals($expectedResults, $testResults, 'Should return true when input contains given number');
    }

    public function testProcess() {
        $inputSet = array(
            1, 2, 3, 4, 5,
            6, 7, 8, 9, 10,
            11, 12, 13, 14, 15,
            16, 17, 18, 19, 20
        );
        $expectedResults = array(
            1, 2, 'Fizz', 4, 'Buzz',
            'Fizz', 7, 8, 'Fizz', 'Buzz',
            11, 'Fizz', 'Fizz', 14, 'FizzBuzz',
            16, 17, 'Fizz', 19, 'Buzz'

        );
        $testResults = $this->FizzBuzz->process($inputSet);
        $this->assertEquals($expectedResults, $testResults, 'Must return an array of integers with all FizzBuzz conditions satisfied.');
    }

}