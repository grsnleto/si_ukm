<?php 
//membuat kelas dengan nama Database
class Database 
{
	//attribute/property pada kelas database
	private $server = 'localhost';
	private $user	= 'root';
	private $pass	= '';
	private $db     = 'oopig';

	public $connection;
	//fungsi/magic method construct
	public function __construct(){
		$this->connection = new mysqli($this->server, $this->user, $this->pass, $this->db);
		
		if ($this->connection->connect_error) die('Database error -> ' . $this->connection->connect_error);
		
	}
	//fungsi untuk mengembalikan/menjalankan koneksi
	public function ret_obj(){
		return $this->connection;
	}
	//fungsi untuk memasukan data dalam database
	public function insert($data, $date)
	{
		$query = mysqli_query($this->connection, "INSERT INTO $this->table VALUES ('','$data','$date')");
		$result = ($query);
	}
	//fungsi untuk mengambil dan menampilkan data dari database
	public function getAll()
	{
		$query = mysqli_query($this->connection, "SELECT * FROM $this->table" );
		while ($row = mysqli_fetch_array($query)) 
			 $data[] = $row;

		return $data;
	}
}
?>