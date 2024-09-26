<?php
	require_once("action/CommonAction.php");
    require_once("action/DAO/UserDAO.php");

    class LoginAction extends CommonAction{

        public function __construct(){
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $erreur = false;

            if(isset($_POST["password"])){
                
                $result = UserDAO::verifyUser($_POST["username"],$_POST["password"] )

                if($result){
                    var_dump($result);
                    $_SESSION["username"] = $_POST["username"];
					$_SESSION["visibility"] = $result["VISIBILITY"];

                    header("location:contact.php");
                    exit;
                }

                else{
                    $erreur = true;
                }
            }

            return compact("erreur");
        }

    }