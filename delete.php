<?php 
include 'config.php';
$id=$_GET['id'];
$result=mysqli_query($link, "DELETE FROM seminar WHERE id=$id");
echo "<script>alert('Hapus maklumat berjaya');
window.location='seminar.php'</script>";
 ?>