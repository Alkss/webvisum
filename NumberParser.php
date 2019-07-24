<?php
    
    class NumberParser
    {
        private $arabicNumber;
        private $romanNumber = "To be defined";
        /**
         * @var CalcHelper
         */
        private $calcHelper;
        
        public function __construct(CalcHelper $calcHelper)
        {
            $this->calcHelper = $calcHelper;
        }
        
        public function parseNumber()
        {
            if (is_numeric($this->arabicNumber))
                $this->romanNumber = $this->calcHelper->assemble($this->arabicNumber);
            else
                $this->romanNumber = "Invalid input, please try again";
        }
        
        /**
         * @param mixed $arabicNumber
         */
        public function setArabicNumber($arabicNumber): void
        {
            $this->arabicNumber = $arabicNumber;
        }
        
        /**
         * @return string
         */
        public function getRomanNumber(): string
        {
            return $this->romanNumber;
        }
        
    }
    