<?php
    //create a class
    class App{
        //Global variables
        public $controller = "";
        public $mothod = "";
        public $parameter = "";
        
        //PHP Constructor
        public function __construct(){
            //Default.controller
            $this->initDefaultController("Home","index","");

            //Display stuctured information (type and value)
            $url = $this -> parseURL();
            //var_dump($url);

            //Handle controller
			if (!empty($url)){
				if(file_exists('../app/controller/'.$url[0].'.php')){
					//Change controller name
					$this->controller = $url[0];
					//Delete element index 0
					unset($url[0]);

					//Display array
				  //  var_dump($url);
				}
			}
            require_once '../app/controller/'.$this->controller.'.php';
            $this->controller = new $this->controller;  //instansiasi object

            //Handle Method
            if(isset($url[1])){
                $name_method = $url [1];
                //check underscore prefix
                if (!$this->starts_with($name_method,"_")){
                    //check if a method exists
                    if(method_exists($this->controller, $name_method)){
                        // Change method name
                        $this->method = $name_method;
                        //Delete element index 1 in array
                        unset ($url[1]);
                    }
                }else{
                    //Delete element index 2 in array
                    unset($url[1]);
                }
            }

            //handle input parameters
            if(!empty($url)){
                //reset array start from index 0
                $this->parameter=array_values($url);

                //Display array
                //var_dump($this->parameter);
            }else{
                //initalize empty array
                $this->parameter=array();
            }
            
            //run controller and method with some parameters
            call_user_func_array([$this->controller, $this->method], $this->parameter);
        }

        //Check if a string starts with underscore
        private function starts_with($str, $prefix){
            // returns a bool
            return strpos ($str, $prefix) === 0;
        }

        //Initialize default global variable
        private function initDefaultController($controller, $method, $param){
            $this->controller = $controller ;
            $this->method = $method;
            $this->parameter = $param;
        }
        
        //PHP Destructor
        public function parseURL(){
            if(isset($_GET['url'])){
                //remove and slash
                $url = rtrim($_GET['url'], '/');

                //remove/filter special chareacter
                $url = filter_var($url, FILTER_SANITIZE_URL);

                //CONVER TO ARRAY
                $url = explode ('/', $url);

                return $url;
            }
        }
    }
?>