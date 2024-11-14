<?php
    require_once("action/CommonAction.php");

    class LoginAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            
            $isConnected = true;


            if(!$isConnected){
                header("location:index.php");
                exit;
            }


            return compact("isConnected");
        }
    }