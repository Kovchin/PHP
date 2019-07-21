<?php
    class User{
        public $name;
        public $email;
        public $password;
        public $lastTime;

        function __construct($name, $email, $password)
        {
            $this->email = $email;
            $this->password = $password;
            $this->name = $name;
            $this->lastTime = time();
        }

        function __toString()
        {
            $s = 'name = '. $this->name.'<br /> email = '.$this->email.'<br /> password = '.$this->password;
            return $s;
        }

        function __sleep()
        {
            return ['name', 'email', 'lastTime'];
        }

        function __wakeup()
        {
            $this->lastTime = time();
        }

    }
?>