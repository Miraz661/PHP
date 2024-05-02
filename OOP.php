<?php
    class simpleClass{
        var $number1;
        var $number2;
        var $total;

        public function input_two_number($num1,$num2){
            $this->number1 = $num1;
            $this->number2 = $num2;
        }

        public function calculateSum(){
            $this->total = $this->number1 + $this->number2;
        }

        public function printSum(){
            echo "The total of $this->number1 and $this->number2 is : $this->total";
        }
    }

    $ob = new simpleClass();

    $ob->input_two_number(5,6);
    $ob->calculateSum();
    $ob->printSum();

?>