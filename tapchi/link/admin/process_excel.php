<?php 
// require '../connect.php';
// require_once 'PHPExcel/Classes/PHPExcel.php';

// $file_name = $_FILES['excel_file']['name'];
// $tmp_file = $_FILES['excel_file']['tmp_name'];
// $excel_reader = PHPExcel_IOFactory::createReaderForFile($tmp_file);
// $excel_obj = $excel_reader->load($tmp_file);
// $worksheet = $excel_obj->getActiveSheet();
// // Lấy dữ liệu từ sheet đầu tiên
// $sheet = $objPHPExcel->getSheet(0);
// $highestRow = $sheet->getHighestRow();
// $highestColumn = $sheet->getHighestColumn();

// foreach ($worksheet->getRowIterator() as $row) {
//     $row_data = array();
//     $cell_iterator = $row->getCellIterator();
//     $cell_iterator->setIterateOnlyExistingCells(false);
//     foreach ($cell_iterator as $cell) {
//       $row_data[] = $cell->getValue();
//     }
//     if (!empty(array_filter($row_data))) {
//       $sql = "INSERT INTO myTable (column1, column2, column3, column4, column5, column6, column7) VALUES ('$row_data[0]', '$row_data[1]', '$row_data[2]', '$row_data[3]', '$row_data[4]', '$row_data[5]', '$row_data[6]')";
//       if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//       } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//       }
//     }
//   }
  
//   $conn->close();
// đường dẫn tới file excel cần đọc
    include('Classes/PHPExcel.php');

    $file = 'test.xlsx'; // đường dẫn đến file Excel

    $objReader = PHPExcel_IOFactory::createReaderForFile($file);
    $objReader->setReadDataOnly(true);

    $objPHPExcel = $objReader->load($file);
    $worksheet = $objPHPExcel->getActiveSheet();

    $highestRow = $worksheet->getHighestRow();
    $highestColumn = $worksheet->getHighestColumn();

    for ($row = 1; $row <= $highestRow; $row++) {
        for ($col = 'A'; $col <= $highestColumn; $col++) {
            $cell = $worksheet->getCell($col.$row);
            $value = $cell->getValue();
            echo "$value \t";
        }
        echo "<br>";
    }
?>



?>

