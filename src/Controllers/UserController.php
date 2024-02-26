<?php 
    namespace Chambereservation\Controllers;

    use Chambereservation\Models\UserManager;
    use Chambereservation\Models\User;

    class UserController
    {
        private $userManager;
        public function __construct()
        {
            $this->userManager = new UserManager();
        }

        // All method for show Authentification, Login

        public function index() 
        {
            require VIEWS . 'Auth/Auth.php';
        }

        public function showLogin() 
        {
            require VIEWS . 'Auth/Login.php';
        }

        public function showCreate() 
        {
            require VIEWS . 'Auth/Sign-up.php';
        }

        // ALL methode for show admin panel

        public function showAdminPanel() 
        {
            require VIEWS . 'Admin/AdminPanel.php';
        }

        // All method for process Authentification, Login


        public function createProcess()
        {
            $user = new User();
            $user->setUserName(htmlspecialchars($_POST['name']));
            $user->setUserSurname(htmlspecialchars($_POST['surname']));
            $user->setUserEmail(htmlspecialchars($_POST['email']));
            $user->setUserPassword(password_hash($_POST["password"], PASSWORD_DEFAULT));
            $this->userManager->createProcess($user);
            header('Location: /user/login');
        }

        public function loginProcess()
        {
            $user = new User();
            $user->setUserEmail(htmlspecialchars($_POST['email']));
            $user->setUserPassword(htmlspecialchars($_POST['password']));
            $this->userManager->loginProcess($user);
        }

        public function logout()
        {
            $this->userManager->logout();
        }
    }
?>