<?php 
    namespace Chambereservation\Models;

    class ChamberManager {
        private $connexion;

        public function __construct()
        {
            $this->connexion = new \PDO('mysql:host=' . DB_CONFIG['HOST'] . ';dbname='. DB_CONFIG['DATABASE'] .';charset=utf8', DB_CONFIG['USER'], DB_CONFIG['PASSWORD']);
        }

        public function createChamberProcess(Chamber $chamber)
        {
            $req = $this->connexion->prepare("INSERT INTO chambers (chamber_name, chamber_maxperson, chamber_price) VALUES (:chamber_name, :chamber_maxperson, :chamber_price)");
            $req->execute(array(
                'chamber_name' => $chamber->getChamberName(),
                'chamber_maxperson' => $chamber->getChamberMaxPerson(),
                'chamber_price' => $chamber->getChamberPrice()
            ));
        }

        public function bookRemove($id)
        {
            $req = $this->connexion->prepare("DELETE FROM chambers WHERE chamber_id = :id");
            $req->execute(array('id' => $id));
        }

        public function bookChamber(Reservation $reservation)
        {
            $req = $this->connexion->prepare("INSERT INTO users_reservations (user_id, chamber_id, reservation_datestart, reservation_dateend) VALUES (:user_id, :chamber_id, :reservation_datestart, :reservation_dateend)");
            $req->execute(array(
                'user_id' => $_SESSION["user_id"],
                'chamber_id' => $reservation->getChamberID(),
                'reservation_datestart' => $reservation->getReservationStart(),
                'reservation_dateend' => $reservation->getReservationEnd()
            ));
        }
    }
    
?>