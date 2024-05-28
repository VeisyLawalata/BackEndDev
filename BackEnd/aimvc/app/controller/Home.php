<?php
class Home extends Controller{
	// Constructor
	public function __construct(){

	}

	// Default method
	public function index($name="Veisy", $age="21"){
		$arr_data['name'] = $name;
		$arr_data['age'] = $age;
		$arr_data['title'] = "Home Page";
		$arr_data['lecturers']=$this->logic("Lecturer_model")->getAllDataLecturer();
		$this->display('template/header', $arr_data);
		$this->display("home/index", $arr_data);
		$this->display('template/footer');
	}

	public function page($current_page=2, $next_page=3, $prev_page=1){
		$arr_data['current'] = $current_page;
		$arr_data['next'] = $next_page;
		$arr_data['previous'] = $prev_page;
		$arr_data['title'] = "Personal Page";

		$this->display('template/header', $arr_data);
		$this->display("home/page", $arr_data);
		$this->display('template/footer');
	}
	public function restaurant($current_page=3, $next_page=4, $prev_page=2){
		$arr_data['current'] = $current_page;
		$arr_data['next'] = $next_page;
		$arr_data['previous'] = $prev_page;
		$arr_data['title'] = "Personal Page";

		$this->display('template/header', $arr_data);
		$this->display("restaurant/menu", $arr_data);
		$this->display('template/footer');
	}
	public function insert(){
		var_dump($_POST);
		//if ($this->logic("Lecturer_model")->insertDataLecturer($_POST) == true){
	    //	header('Location: '.APP_PATH.'/home');
		//	exit;
		//}
	}
	public function delete($id){
		if ($this->logic("Lecturer_model")->deleteDataLecturer($id) == true){
			header('Location: '.APP_PATH.'/home');
			exit;
		}
	}
	public function update(){
		if ($this->logic("Lecturer_model")->updateDataLecturer($_POST) == true){
			header('Location: '.APP_PATH.'/home');
			exit;
		}
	}
	private function _status(){
		echo "This is home/status.";
	}
}

?>