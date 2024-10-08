<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require '../connect.php';
if(isset($_POST['adddata'])) {
    $tentg = $_POST['tentg'];
    $dvi = $_POST['dvi'];
    $theloai = $_POST['theloai'];
    $tieude = $_POST['tieude'];
    $tomtat = $_POST['tomtat'];
    $ngayxb = $_POST['ngayxb'];
    $duongdan = $_POST['duongdan'];

    $target_dir = "./upload/";
    $target_file = $target_dir.$_FILES["hinhanh"]["name"];
    $hinhanh = $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (!empty($_FILES["hinhanh"]["name"])) {
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
    } else {
        $target_file = "./default-image.jpg";
    }
    if($uploadOk) {
        $sql = "INSERT INTO `linkbaiviet`(`tentg`, `theloai`, `tomtat`, `duongdan`, `ngayxuatban`, `donvi`, `anh`, `tieude`) VALUES ('$tentg','$theloai','$tomtat','$duongdan', '$ngayxb','$dvi','$hinhanh', '$tieude')";

        if (mysqli_query($conn, $sql)) {
            echo '<script> window.addEventListener("load",function () {
                Swal.fire({
                  position: \'mid\',
                  icon: \'success\',
                  title: \'Thành Công\',
                  showConfirmButton: false,
                  timer: 1000
                });})
                </script>';
            }
            header("refresh: 1; url = index.php");
        }
    }
if(isset($_POST['updatedata'])) {
    $update_id = $_POST['update_id'];
    $tentg = $_POST['edtentg'];
    $dvi = $_POST['eddvi'];
    $theloai = $_POST['edtheloai'];
    $tieude = $_POST['edtieude'];
    $tomtat = $_POST['edtomtat'];
    $ngayxb = $_POST['edngayxb'];
    $duongdan = $_POST['edduongdan'];
    $edhinhanh_old = $_POST['edhinhanh_old']; 
 
    if (empty($_FILES["edhinhanh"]["name"])) {
        $ddhinhanh = $edhinhanh_old;
    } else {
        $target_dir = "./upload/";
        $target_file = $target_dir.$_FILES["edhinhanh"]["name"];
        $ddhinhanh = $target_file;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $uploadOk = 0;
        }
        move_uploaded_file($_FILES["edhinhanh"]["tmp_name"], $target_file);
    }
    $sql = "UPDATE `linkbaiviet` SET `tentg`='$tentg',`theloai`='$theloai',`tomtat`='$tomtat',`duongdan`='$duongdan',`ngayxuatban`='$ngayxb',`donvi`='$dvi',`anh`='$ddhinhanh',`tieude`='$tieude' WHERE id = $update_id ";
    if (mysqli_query($conn, $sql)) {
        echo '<script> window.addEventListener("load",function () {
            Swal.fire({
                position: \'mid\',
                icon: \'success\',
                title: \'Thành Công\',
                showConfirmButton: false,
                timer: 1000
            });})
            </script>';
        }
        header("refresh: 1; url = index.php");
    }
        
// if(isset($_POST['deletedata'])) {
//     $delete_id = $_POST['delete_id'];
//     $sql = "DELETE FROM `linkbaiviet` WHERE id = $delete_id";

//     if (mysqli_query($conn, $sql)) {
//             echo '<script> window.addEventListener("load",function () {
//               Swal.fire({
//                 position: \'mid\',
//                 icon: \'success\',
//                 title: \'Thành Công\',
//                 showConfirmButton: false,
//                 timer: 1000
//               });})
//               </script>';
//           }
//           header("refresh: 0.1; url = index.php");
//     }
mysqli_close($conn);
?>
