<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Media Buying
 * Date: 20/05/13
 * Time: 9:08 PM
 * To change this template use File | Settings | File Templates.
 */

namespace testApp;

include "NewClass.php";


$i = 2;
/**
 * @param $i
 * @param int $t
 */
function run($i, $t = 4)
{
    $x = $i * $t;
    print_r($i);
}

echo $i;
run(4);

$class = new NewClass(3, 5);

echo '<br />';
echo $class->divide();

echo '<br />';
echo $class->multi();

echo '<br />';

?>