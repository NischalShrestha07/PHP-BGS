

<?php

function hello($fname = 'Hello', $lName = 'world')
{
    $v = "$fname $lName";
    return $v;
}
$name = hello('Yahho', 'hello');
echo "Hello $name";
?>