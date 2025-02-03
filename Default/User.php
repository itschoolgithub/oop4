<?php
    namespace Default;

    class User {
        public $name;

        public function sayHello() {
            echo 'Привет, ' . $this->name;
        }
    }