<?php

include_once 'fly.php';

class aircraft implements fly{
    public function Fly(){
        echo '«Полёт самолёта»';
    }
}