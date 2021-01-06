<?php

    class Calc {
        public string $operator;
        public int $num1;
        public int $num2;

        public function __construct(string $one, int $two, int $three) {
            $this->operator = $one;
            $this->num1 = $two;
            $this->num2 = $three;
        }

        public function calculator() {
            switch ($this->operator) {
                case 'add':
                    return $this->num1 + $this->num2;
                    break;
                case 'sub':
                    return $this->num1 - $this->num2;
                    break;
                case 'div':
                    return $this->num1 / $this->num2;
                    break;
                case 'mul':
                    return $this->num1 * $this->num2;
                    break;
                default:
                    echo "Error!";
                    break;
            }
        }
    }