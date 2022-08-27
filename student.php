<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/0949ce2d03.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logotest.png">
    <link rel="stylesheet" href="assets/css/btn.css">
    <link rel="stylesheet" href="assets/css/insert.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <title>TEACHER PLOY</title>
    <link rel="stylesheet" href="assets/js/fullcalendar/lib/main.css">
    <script src="assets/js/fullcalendar/lib/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
    <?php include("src/menu/menu_std.php"); ?>
        <main>
            <div class="recent-orders">
                <?php 
                if(isset($_GET["page"])){
                    $page = $_GET["page"];
                    include("src/$page.php");
                }
                else{
                    include("src/timetable_std.php");
                }
                ?>
            </div>
        </main>
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Adisorn</b></p>
                        <small class="text-muted">Student</small>
                    </div>
                    <div class="profile-photo">
                        <img src="assets/img/prostd.png" alt="">
                    </div>
                </div>
            </div>
            <div class="recent-updates">
                <h2>ลงทะเบียนเรียน</h2>
                <div class="updates">
                    <form action="" method="post" class="form">
                        <div class="input-data">
                            <!-- <input type="text" required> -->
                            <select name="" id="" class="input-data">
                                <option value="" selected disabled>เลือกประเภทการเรียน</option>
                                <option value="">aa</option>
                                <option value="">jkk</option>
                            </select>
                            <!-- <div class="underline"></div> -->
                            
                        </div>
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label>Name</label>
                        </div>
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label>Name</label>
                        </div>
                        <div class="submis">
                            <button type="submit" class="submi">ลงทะเบียน</button>
                        </div>
                        
                    </form>
                    
                    <!-- <div class="update">
                        <div class="profile-photo">
                            <img src="assets/img/prostd.png" alt="">
                        </div>
                        <div class="message">
                            
                            <p><b>Tle Adisorn</b>Hello!! My name is Tle</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/index.js"></script>
</body>
</html>