<?php

interface Student{
    public function name();
}

class Fname implements Student{
    public function scores() {
        echo "20/20";
    }
}

$student = new Fname();
$student->scores();

?>