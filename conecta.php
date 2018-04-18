<?php

    class BancoDedados {
        private $con;

        function __construct($host,$user,$pass,$db) {
            $this->con = mysqli_connect($host,$user,$pass,$user);
        }

        function getCon() {
            return $this->con;
        }
    }
?>