<?php
    class Controller {
        // PHP Constructor
        public function __construct() {
            echo"Object is created.";
        }
		
		//Display method and send any data
        public function display($view, $data=[]){
            require_once "../app/view/".$view.".php";
        }
		
		//core logic mdel method
		public function logic($model) {
			require_once "../app/model/".$model.".php";
			$obj_model = new $model;
			return $obj_model;
		}
    }
?>