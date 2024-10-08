<?php 
require "../connect.php";
if(isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $sql = "DELETE FROM `linkbaiviet` WHERE id = $delete_id";
    if (mysqli_query($conn, $sql)) {
        echo 'success';
    }
}
mysqli_close($conn);

?>