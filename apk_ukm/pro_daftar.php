<?php
include 'kon.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$status = $_POST['status'];
if($password != $c_password)
{
echo "<script>alert('Konfirmasi password harus sama dengan password !');
javascript:history.go(-1);</script>";
exit;
}
if((!empty($nama)) && (!empty($nim)) && (!empty($password)))
{
$query = mysqli_query($kon,"INSERT INTO pengguna (nama,nim,password,status)
values ('$nama','$nim','$password','$status');");
echo "<script>
alert('Registrasi Sukses! Silahkan Login!');
document.location='index.php';
</script>";
}
else
{
echo "<script>alert('Maaf, tidak boleh ada field yang kosong !');
javascript:history.go(-1);</script>";
}
?>