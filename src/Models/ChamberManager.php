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
    }
    
?>