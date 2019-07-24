<?php
    
    
    class CalcHelper
    {
        private $boundries = [
            "M" => 1000,
            "CM" => 900,
            "D" => 500,
            "CD" => 400,
            "C" => 100,
            "XC" => 90,
            "L" => 50,
            "XL" => 40,
            "X" => 10,
            "IX" => 9,
            "V" => 5,
            "IV" => 4,
            "I" => 1
        ];
        
        public function assemble(int $arabicNumber): string
        {
            $output = "";
            foreach ($this->boundries as $key => $value) {
                $output .= str_repeat($key, intval($arabicNumber / $value));
                $arabicNumber = $arabicNumber % $value;
            }
            return $output;
        }
        
    }