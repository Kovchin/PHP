<?php

include_once 'trait_id.php';
include_once 'trait_name.php';

class User {
    use Id, Name;
}
