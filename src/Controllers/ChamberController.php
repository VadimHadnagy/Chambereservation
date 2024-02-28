<?php
    namespace Chambereservation\Controllers;

    use Chambereservation\Models\ChamberManager;
    use Chambereservation\Models\Chamber;
    use Chambereservation\Models\Reservation;

    class ChamberController 
    {
        private $chamberManager;

        public function __construct()
        {
            $this->chamberManager = new ChamberManager();
        }

        public function showAdminCreateChamber()
        {
            require VIEWS . 'Admin/CreateChamber.php';
        }

        public function createChamber()
        {
            $chamber = new Chamber();
            $chamber->setChamberName($_POST["namechamber"]);
            $chamber->setChamberMaxPerson($_POST["slotschamber"]);
            $chamber->setChamberPrice($_POST["pricepernight"]);
            $this->chamberManager->createChamberProcess($chamber);
            header("Location: /user/admin/create-chamber");
        }

        public function removeChamber()
        {
            $id = $_GET["id"];
            $this->chamberManager->bookRemove($id);
            header("Location: /user/reservations");
        }

        public function bookProcess() 
        {
            $id = $_GET["id"];
            $reservation = new Reservation();
            $reservation->setUserID($_SESSION["user_id"]);
            $reservation->setChamberID($id);
            $reservation->setReservationStart($_POST["date_start"]);
            $reservation->setReservationEnd($_POST["date_end"]);
            $this->chamberManager->bookChamber($reservation, $id);
            header("Location: /user/reservations-confirm");
        }
    }
?>