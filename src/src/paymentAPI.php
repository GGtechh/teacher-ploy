<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</style>
</head>
<body>
<?php
// $section=$_POST["section"];
// $content=$_POST["content"];
// $image=$_POST["img"];
$file = $_FILES["filepay"];

$fileName = $file['name'];
$fileTmpName= $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileType = $file['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png');

if(in_array($fileActualExt,$allowed)){
    if($fileError===0){
        if($fileSize <1000000){
            $fileNameNew = uniqid("TeacherPloy-", true). '.'.$fileActualExt;
            $fileDestination = '../uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        }else{
            echo "your file is too big";
        }
    }else{
        echo "There was an error uploading your file";
    }
}else{
    echo "You cannot upload files of this type";
}

$sql = "INSERT INTO extra_c_payment_proof(extra_c_payment_book_id,extra_c_payment_image) 
                                    values('$section', '$content','$fileNameNew')";
       $excq = mysqli_query($conn,$sql);
       if ($excq) {
        echo "<script type=\"text/javascript\">";
        echo "Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'รอตรวจสอบ',
            showConfirmButton: false,
            timer: 1500
            })";
        header("Refresh:1.5; url=../../teacher.php");
        echo "</script>";
        exit();
    }
    else{
        echo "<script>";
        echo "Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'มีข้อผิดพลาดโปรดตรวจสอบ',
            showConfirmButton: false,
            timer: 1500
            })";
        header("Refresh:1.5; url=../../teacher.php");
        //  echo "window.history.back();";
        echo "</script>";
        exit();
    }
?>
</body>
</html>