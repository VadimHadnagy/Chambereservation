<?php
    namespace Chambereservation\Models;

    class Reservation 
    {
        private $reservation_id;
        private $user_id;
        private $chamber_id;
        private $reservation_datestart;
        private $reservation_dateend;

        public function __construct()
        {

        }

        public function setReservationID($reservation_id)
        {
            $this->reservation_id = $reservation_id;
        }

        public function getReservationID()
        {
            return $this->reservation_id;
        }

        public function setUserID($user_id)
        {
            $this->user_id = $user_id;
        }

        public function getUserID()
        {
            return $this->user_id;
        }

        public function setChamberID($chamber_id)
        {
            $this->chamber_id = $chamber_id;
        }

        public function getChamberID()
        {
            return $this->chamber_id;
        }

        public function setReservationStart($reservation_datestart)
        {
            $this->reservation_datestart = $reservation_datestart;
        }

        public function getReservationStart()
        {
            return $this->reservation_datestart;
        }

        public function setReservationEnd($reservation_dateend)
        {
            $this->reservation_dateend = $reservation_dateend;
        }

        public function getReservationEnd()
        {
            return $this->reservation_dateend;
        }
    }
?>