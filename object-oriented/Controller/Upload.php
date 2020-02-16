<?php 
include_once("Database.php");
//kelas turunan dari kelas Database
class Upload extends Database
{
	protected $table = 'up';
	//method untuk menyimpan data foto
	public function save()
	{
		if(isset($_POST['submit'])){
			$data = [
				'gambar' => $_FILES['file']['name'],
				'tmp'    => $_FILES['file']['tmp_name'],
				'date'   => date('Y-m-d H:i:s')
			];
			move_uploaded_file($data['tmp'],'images/'. $data['gambar']);
			parent::insert($data['gambar'], $data['date']);
		}
	}
}
?>