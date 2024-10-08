<?php
$host = "localhost";
$username= "root";
$password = "";
$dbname = "link";
$conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
    die("Kết nối không thành công:".$conn->connect_error);
}
$query = "SELECT * FROM linkbaiviet";
$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_close($conn);
echo json_encode(array('data' => $data));
?>
