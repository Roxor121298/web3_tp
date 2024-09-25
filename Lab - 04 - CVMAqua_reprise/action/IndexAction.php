<?php
	require_once("CommonAction.php");

    class IndexAction extends CommonAction{

        public function __construct(){
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            return [];
        }

    }

