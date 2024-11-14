<?php
    require_once("action/CommonAction.php");

    class LoginAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            
            $isConnected = false;


            if($_POST["username"] == "edouard" && $_POST["pwd"] == "1234"){
                $isConnected = true;
                header("location:index.php");
            }


            return compact("isConnected");
        }
    }