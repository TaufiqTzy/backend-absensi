<?php
include_once 'connect.php';
$query = "SELECT nobp, username, password FROM mahasiswa";
$execute = mysqli_query($con, $query);
$arruser =[];
while($rows =mysqli_fetch_array($execute)){
    $arruser[]=$rows;
}

print (json_encode($arruser));

?>