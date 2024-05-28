<?php
class Lecturer_model {
    private $db;

    public function __construct() {
        $this->db = new Database;

        if ($this->db == false) {
            echo "<script>console.log('Connection failed.');</script>";
        } else {
            echo "<script>console.log('Connection successful.');</script>";
        }
    }

    public function getAllDataLecturer() {
        $result = $this->db->query("select * from tbl_lecturer;");
        $this->db->db_close();
        
		if ($result->num_rows > 0){
			$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $rows;
		}else{
			return [];
		}
    }
	public function insertDataLecturer($data){
		$id = $data['lec_id'];
		$name = $data['lec_name'];
		$email = $data['lec_email'];
		$phone = $data['lec_phone'];
		$date = $data['lec_date'];
		$sql = "INSERT INTO tbl_lecturer (id,name,email,phone,date) VALUES ('$id','$name','$email','$phone','$date')";
		if($this->db->query($sql) === TRUE){
			return true;
		}else{
			return false;
		}
		
	}
	public function deleteDataLecturer($id){
		$sql = "DELETE from tbl_lecturer WHERE id = $id";
		if($this->db->query($sql) === TRUE){
			return true;
		}else{
			return false;
		}
	}
	public function updateDataLecturer($data){
		$id = $data['lec_id_update'];
		$name = $data['lec_name_update'];
		$email = $data['lec_email_update'];
		$phone = $data['lec_phone_update'];
		$date = $data['lec_date_update'];
		$sql = "UPDATE tbl_lecturer SET name='$name',email='$email',phone='$phone',date='$date' WHERE id='$id'";
		if($this->db->query($sql) === TRUE){
			return true;
		}else{
			return false;
		}
	}
}
?>