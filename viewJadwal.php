<?php
include_once 'connect.php';
$query = "SELECT id, matkul, dosen, jam, keterangan FROM jadwal";
$execute = mysqli_query($con, $query);
$arrjadwal =[];
while($rows =mysqli_fetch_array($execute)){
    $arrjadwal[]=$rows;
}

print (json_encode($arrjadwal));

?>
