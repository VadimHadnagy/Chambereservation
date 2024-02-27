<?php
    namespace Chambereservation\Models;

    class Chamber 
    {
        private $chamber_id;
        private $chamber_name;
        private $chamber_maxperson;
        private $chamber_price;

        public function __construct()
        {

        }

        public function setChamberID($chamber_id)
        {
            $this->chamber_id = $chamber_id;
        }

        public function getChamberID()
        {
            return $this->chamber_id;
        }

        public function setChamberName($chamber_name)
        {
            $this->chamber_name = $chamber_name;
        }

        public function getChamberName()
        {
            return $this->chamber_name;
        }

        public function setChamberMaxPerson($chamber_maxperson)
        {
            $this->chamber_maxperson = $chamber_maxperson;
        }

        public function getChamberMaxPerson()
        {
            return $this->chamber_maxperson;
        }

        public function setChamberPrice($chamber_price)
        {
            $this->chamber_price = $chamber_price;
        }

        public function getChamberPrice()
        {
            return $this->chamber_price;
        }
    }
?>