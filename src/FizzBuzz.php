<?php
namespace TDD;

/**
 * FizzBuzz Kata
 *
 * @author Juan Carlos Migliavacca <jcmigliavacca@gmail.com>
 *
 */
class FizzBuzz
{
    /**
     *
     * Main Process
     *
     * @param array $inputSet  Array of integer numbers
     * @return array
     *
     */
    public static function process($inputSet){
        $results = array();
        foreach ($inputSet as $value) {
            $output = '';
            if ( static::divisible($value, 3) == true && static::divisible($value, 5) == true ) {
                $output = 'FizzBuzz';
            } elseif ( static::divisible($value, 3) == true || static::contains(3, $value) ) {
                $output = 'Fizz';
            } elseif ( static::divisible($value, 5) == true || static::contains(5, $value) ) {
                $output = 'Buzz';
            } else {
                $output = $value;
            }
            $results[] = $output;
        }
        return $results;

    }

    /**
     *
     * Is divisible helper
     *
     * @param int $dividend Number divided
     * @param int $divisor  Number divided by
     * @return boolean
     *
     */
    public static function divisible($dividend, $divisor){
        if (($dividend % $divisor) == 0){
            return true;
        }
    }

    /**
     *
     * Contains given number helper
     *
     * @param int $searchValue Value to search in
     * @param int $number Number
     * @return boolean
     */
    public static function contains($searchValue, $number ){
        $explode = str_split($number);
         return array_search($searchValue, $explode);
    }

}
