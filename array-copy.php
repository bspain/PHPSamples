<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 10/8/2017
 * Time: 11:26 AM
 */

/* Use array_combine to build associative array from scalars */
$keys = array('key1', 'key2', 'key3');
$values = array('value1', 'value2', 'value3');

$combined = array_combine($keys, $values);

print_r($combined);
/*
 * Array
    (
        [key1] => value1
        [key2] => value2
        [key3] => value3
    )
 */

/* Use array_merge for associate arrays */
$set1 = array(
    'key1' => 'value1',
    'key2' => 'value2');

$set2 = array(
    'key3' => 'value3',
    'key4' => 'value4');


$merged = array_merge($set1, $set2);

print_r($merged);

/*
 * Array
    (
        [key1] => value1
        [key2] => value2
        [key3] => value3
        [key4] => value4
    )
 */
