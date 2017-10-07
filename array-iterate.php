<?php

/*
 * Basics of iterating through PHP arrays
 */

$scalar = array('s1', 's2', 's3');
$associative = array(
	'key1' => 'value1', 
	'key2' => 'value2',
	'key3' => 'value3');

echo "Scalar Array with foreach single value\r\n";
/*
 * Scalar Array with foreach single value
    s1
    s2
    s3
 */
foreach ($scalar as $value)
{
	echo $value . "\r\n";
}

echo "\r\nAssociative Array with foreach single value\r\n";
/*
 * Associative Array with foreach single value
    value1
    value2
    value3
*/
foreach ( $associative as $value )
{
	echo $value . "\r\n";
}

echo "\r\nAssociative Array with foreach association\r\n";
/*
 * Associative Array with foreach association
    key1=>value1
    key2=>value2
    key3=>value3
 */
foreach ( $associative as $key => $value )
{
    echo $key . "=>" . $value . "\r\n";
}

echo "\r\nScalar Array with foreach association\r\n";
/*
 * Scalar Array with foreach association
    0=>s1
    1=>s2
    2=>s3

    PHP auto-assigns numerical $key for a scalar array.
 */
foreach ( $scalar as $key => $value)
{
    echo $key . "=>" . $value . "\r\n";
}