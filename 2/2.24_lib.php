<?php

function hello($x)
{
    for ($i = 0; $i < $x; $i++)
    echo 'hello '.$i.'<br />';
}

function get_mass($str)
{
    $new_str = '';
    for ($i = 0; $i < strlen ($str); $i++)
        if ($i%2 == 0)
            $new_str = $new_str.$str[$i];
            return $new_str;
}

?>