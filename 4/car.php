<?php

include 'move.php';

class Car implements move{
    public function Move(){
        echo '«Движение автомобиля»';
    }
}