<?php
	require_once("CommonAction.php");

    class LoginAction extends CommonAction{

        public function __construct(){
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            return [];
        }

    }