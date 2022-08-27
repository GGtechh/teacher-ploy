<h2><b>การบ้าน</b></h2>
<!-- <a href="" class="neo" style="--clr:#1e9bff"><span>เพิ่มการบ้าน</span><i></i></a><br><br> -->
                <table>
                    <thead>
                        <tr>
                            <th>รายวิชา</th>
                            <th>วัน-เวลาที่ส่งการบ้าน</th>
                            <th>ลิงค์การบ้าน</th>
                            <!-- <th>สถานะ</th> -->
                        </tr>
                    </thead>
                    <?php 
                            require("conn.php");
                            // $image=$_POST["image"];
                            
                            mysqli_query($conn,"SET CHARACTER SET UTF8"); 
                            $sql = "SELECT * FROM extra_c_homework";
                            // $excq = mysqli_query($conn,$sql);
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                            ?> 
                    <tbody>

                           
                                <td><?php echo $row['extra_c_homework_title']?></td>
                                <td><?php echo$row['extra_c_homework_dateEnd']?></td>
                                <td><a  target="_blank" rel="noopener noreferrer" href= "<?php echo $row['extra_c_homework_link']?>" class="warning">การบ้าน</a></td>
                        

                      
                       
                    </tbody>
                    <?php 
                            }
                            ?>

                </table>