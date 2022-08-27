<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</style>
</head>
<body>
<?php 
    session_start();
    require("../conn.php");
    mysqli_query($conn,"SET CHARACTER SET UTF8"); 
    if($_POST["user"]!=null && $_POST["password"]!=null ){
        $user = $_POST["user"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM extra_c_account WHERE extra_c_acc_user ='$user'";
        $result = mysqli_query($conn , $sql);

        $excq = $conn -> query($sql);
        $row = $excq -> fetch_assoc();
       
      
        if(!isset($row['extra_c_acc_passwd'])){
            $password_db = " ";
            echo "<script>";
                echo "Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'ไม่พบผู้ใช้หรือรหัสผ่าน',
                    showConfirmButton: false,
                    timer: 1500
                  })";
                  header("Refresh:1.5; url=../../index.php");
                echo "</script>";
                exit();
        }
        else{
            if($row['extra_c_acc_role'] == 'teacher'){
                $password_db = $row['extra_c_acc_passwd'];
                if ( md5($password) == $password_db) {
                    // echo 'Password is valid!';
                    echo "<script type=\"text/javascript\">";
                    echo "Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'เข้าสู่ระบบสำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                        })";
                    $_SESSION['extra_c_acc_user']=$user;
                    header("Refresh:1.5; url=../../teacher.php");
                    echo "</script>";
                    exit();
                } else {
                    echo "<script>";
                    echo "Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'เข้าสู่ระบบไม่สำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                        })";
                    header("Refresh:1.5; url=../../index.php");
                    //  echo "window.history.back();";
                    echo "</script>";
                    exit();
                }
            }
            else if($row['extra_c_acc_role'] == 'student'){
                // echo md5($password).' ';
                // echo $password_db;
                $password_db = $row['extra_c_acc_passwd'];
                if ( md5($password) == $password_db) {
                    // echo 'Password is valid!';
                    $_SESSION['extra_c_acc_user']=$user;
                    echo "<script type=\"text/javascript\">";
                    echo "Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'เข้าสู่ระบบสำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                        })";
                    // $user_id=$row['extra_c_acc_id'];
                    // header("Refresh:1.5; url=../../student.php?user_id=$user_id");
                    header("Refresh:1.5; url=../../student.php");
                    echo "</script>";
                    
                    exit();
                } else {
                    echo "<script>";
                    echo "Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'เข้าสู่ระบบไม่สำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                        })";
                    header("Refresh:1.5; url=../../index.php");
                    //  echo "window.history.back();";
                    echo "</script>";
                    exit();
                }
            }
    }
    }
?>
</body>
</html>