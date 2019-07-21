<?php

include_once 'trait_id.php';
include_once 'trait_name.php';


class Name
{
    use Id, Name;
}
