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
$user=$_POST["user"];
$password=$_POST["password"];
$tel=$_POST["tel"];
$etp=$_POST["etp"];
$fname_s=$_POST["fname_s"];
$lname_s=$_POST["lname_s"];
$fname_ep=$_POST["fname_ep"];
$lname_ep=$_POST["lname_ep"];
$address=$_POST["address"];
$status=$_POST["status"];
$school=$_POST["school"];
// $img=$_POST["img"];
mysqli_query($conn,"SET CHARACTER SET UTF8"); 
    $passwordhash = md5($password);
    $role = "student";
    $getmail = "SELECT * FROM extra_c_account WHERE extra_c_acc_user = '$user'";
    $excq = mysqli_query($conn, $getmail);
	$row = $excq -> fetch_assoc();
        if ($row > 0) {
            echo "<script>";
            echo "Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'สมัครสมาชิกไม่สำเร็จ',
                showConfirmButton: false,
                timer: 1500
                })";
            header("Refresh:1.5; url=../../index.php");
            //  echo "window.history.back();";
            echo "</script>";
            exit();
        } else {
            $sql = "INSERT INTO extra_c_account(extra_c_acc_user ,extra_c_acc_passwd,extra_c_acc_img_id,extra_c_acc_tel,extra_c_acc_etp,extra_c_acc_fname_s,extra_c_acc_lname_s,extra_c_acc_fname_ep,extra_c_acc_lname_ep,extra_c_acc_address,extra_c_acc_status,extra_c_acc_school,extra_c_acc_role) 
                                        values('$user', '$passwordhash','2', '$tel', '$etp', '$fname_s', '$lname_s', '$fname_ep', '$lname_ep', '$address', '$status', '$school', '$role')";

           $excq = mysqli_query($conn,$sql);
           if ($excq) {
            echo "<script type=\"text/javascript\">";
            echo "Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'สมัครสมาชิกสำเร็จ',
                showConfirmButton: false,
                timer: 1500
                })";
            header("Refresh:1.5; url=../../index.php");
            echo "</script>";
            exit();
        }
        else{
            echo "<script>";
            echo "Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'สมัครสมาชิกไม่สำเร็จ',
                showConfirmButton: false,
                timer: 1500
                })";
            header("Refresh:1.5; url=../../index.php");
            //  echo "window.history.back();";
            echo "</script>";
            exit();
        }
        }
?>
</body>
</html>