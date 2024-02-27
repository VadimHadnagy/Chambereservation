<?php 
    namespace Chambereservation\Models;
    
    class UserManager {
        private $connexion;

        public function __construct()
        {
            $this->connexion = new \PDO('mysql:host=' . DB_CONFIG['HOST'] . ';dbname='. DB_CONFIG['DATABASE'] .';charset=utf8', DB_CONFIG['USER'], DB_CONFIG['PASSWORD']);
        }

        public function createProcess(User $user)
        {
            $req = $this->connexion->prepare('INSERT INTO users (user_name, user_surname, user_email, user_password) VALUES (:user_name, :user_surname, :user_email, :user_password)');
            $req->execute(array(
                'user_name' => $user->getUserName(),
                'user_surname' => $user->getUserSurname(),
                'user_email' => $user->getUserEmail(),
                'user_password' => $user->getUserPassword()
            ));
        }

        public function loginProcess(User $user)
        {
            $req = $this->connexion->prepare('SELECT * FROM users WHERE user_email = :user_email');
            $req->execute(array(
                'user_email' => $user->getUserEmail()
            ));
            $result = $req->fetch();
            if(password_verify($user->getUserPassword(), $result['user_password'])){
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['user_name'] = $result['user_name'];
                $_SESSION['user_surname'] = $result['user_surname'];
                $_SESSION['user_email'] = $result['user_email'];
                $_SESSION['user_role'] = $result['user_role'];
                header('Location: /');
            } else {
                header('Location: /user/login');
            }
        }

        public function logout()
        {
            session_destroy();
            header('Location: /');
        }   

        public function showAllBook()
        {
            $req = $this->connexion->query('SELECT * FROM chambers');
            $result = $req->fetchAll();
            return $result;
        }
    }
?>