<h2>หลักฐานการโอน</h2>

                <div class="updates">
                <?php
                    require("src/conn.php");
                    mysqli_query($conn,"SET CHARACTER SET UTF8"); 
                            if(isset($_POST['payment_id'])!=''){

                                $payment_id=$_POST['payment_id'];
                                $sql_chx = "SELECT * FROM extra_c_payment_proof where extra_c_payment_id ='$payment_id'";
                                $excq = $conn -> query($sql_chx);
                                $row = $excq->fetch_assoc();?>
                                
                                <img  src="src/upload/<?=$row['extra_c_payment_image']?>">
                              <?php 
                            }else{
                                echo "";
                            }
   
                ?>

                </div>