<?php
    namespace Chambereservation\Controllers;

    use Chambereservation\Models\ChamberManager;
    use Chambereservation\Models\Chamber;

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
    }
?>