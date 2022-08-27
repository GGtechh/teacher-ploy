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

    $username =$_POST['book_user'];
    $book_date = $_POST["book_date"];
    $book_time = $_POST["book_time"];
    $subtime = explode("-",$book_time);
    $book_price = '300';
    $book_type = $_POST["book_type"];
    $book_status = "wait";
    $time_start = $book_date.'T'.$subtime[0];
    $time_end = $book_date.'T'.$subtime[1];

    $sql = "SELECT extra_c_acc_id as acc_id FROM extra_c_account  where extra_c_acc_user = '$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id=$row['acc_id'];

   

    $sqldata = "INSERT INTO extra_c_book( extra_c_book_acc_id, extra_c_book_date, extra_c_book_s_time, extra_c_book_e_time, extra_c_book_status,extra_c_book_type, extra_c_book_price) values ('$id','$book_date','$time_start','$time_end','$book_status','$book_type','$book_price')";
    $excqdata = mysqli_query($conn, $sqldata);
    
    if ($excqdata) {
        
            echo "<script type=\"text/javascript\">";
            echo "Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'การจองสำเร็จกรุณาซำระเงิน',
                        showConfirmButton: false,
                        timer: 1500
                        })";
                    header("Refresh:1.5; url=../../student.php");
                    echo "</script>";
                    exit();
                }