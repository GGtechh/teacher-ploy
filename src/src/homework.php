<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</style>
</head>
<body>
<?php
require("../conn.php");


mysqli_query($conn,"SET CHARACTER SET UTF8"); 
    $title=$_POST["typebook"];
    $userId=$_POST["userID"];
    $link=$_POST["link"];
    $date=$_POST["date"];
    // $image=$_POST["img"];
    

    $sql = "INSERT INTO extra_c_homework(extra_c_homework_title,extra_c_homework_link,extra_c_homework_userId,extra_c_homework_dateEnd) 
                                        values('$title', '$link','$userId','$date')";
           $excq = mysqli_query($conn,$sql);
           if ($excq) {
            echo "<script type=\"text/javascript\">";
            echo "Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'สำเร็จ',
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