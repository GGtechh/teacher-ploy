<h2><b>การบ้าน</b></h2>
                <table>
                    <thead>
                        <tr>
                            <th>ประเภท</th>
                            <th>วัน-เวลาที่กำหนด</th>
                            <th></th>
                        </tr>
                    </thead>
              
                    <?php 
                            require("conn.php");
                            $username = $_SESSION['extra_c_acc_user'];
                            mysqli_query($conn,"SET CHARACTER SET UTF8"); 
                            $sql = "SELECT * FROM extra_c_homework inner join extra_c_account on extra_c_homework.extra_c_homework_userId=extra_c_account.extra_c_acc_id where extra_c_acc_user='$username'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                            ?> 
                            <tbody>

                                <td><?php echo $row['extra_c_homework_title']?></td>
                                <td><?php echo$row['extra_c_homework_dateEnd']?></td>
                                <td><a  target="_blank" rel="noopener noreferrer" href= "<?php echo $row['extra_c_homework_link']?>" class="warning">ทำแบบทดสอบคลิก</a></td>

                            </tbody>
                            <?php 
                                    }
                                    ?>

                </table>
             