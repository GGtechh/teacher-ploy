<h2>ลงทะเบียนเรียน</h2>
                <div class="updates">
                    <form  action="src/src/extra_book_course.php" method="post" class="form">
                        <div class="input-data">
                            <!-- <input type="text" required> -->
                            <h2><b>เลือกหมวกคลอส</b></h2>
          
                        <select class="form-control" id="typebook" name="book_type">
                                <option value="--Select--">--Select--</option>
                                <?php
                                require("src/conn.php");
                                mysqli_query($conn,"SET CHARACTER SET UTF8"); 
                                $select=mysqli_query($conn,"select * from extra_c_type_book");
                                while($menu1=mysqli_fetch_array($select))
                                {
                                    ?>
                                        <option value="<?php echo $menu1['extra_c_type_id'];?>">
                                        <?php echo $menu1['extra_c_type_name'];?>
                                        </option>
                                    <?php 
                                    }
                                ?>

                            </select>
                            <div class="underline"></div>
                        </div>
                        <br><br>
                        
                            <h2><b>เลือกวันที่</b></h2>

                        <div class="input-data">
                      
                            <input type="date" name="book_date" min="<?php echo date('Y-m-d'); ?>" required>
                            <div class="underline"></div>
                            <!-- <label>Name</label> -->

                        </div>
                        <br><br>
                        <h2><b>เลือกเวลา</b></h2>
                                <select name="book_time" id="" >
                                <option value="--Select--">--Select--</option>
                                    <?php 
                                    $array = array(
                                    "9:00:00-10:00:00","10:00:00-11:00:00",
                                    "11:00:00-12:00:00","12:00:00-13:00:00",
                                    "13:00:00-14:00:00","14:00:00-15:00:00",
                                    "15:00:00-16:00:00","16:00:00-17:00:00",
                                    "17:00:00-18:00:00","18:00:00-19:00:00",
                                    "19:00:00-20:00:00");
                                    
                                    foreach ($array as $value) {
                                        echo "<option  value=".$value.">".$value."</option>";
                                      }
                                    ?>

                                </select>
                                    <input type="hidden" name="book_user" value="<?php echo $_SESSION['extra_c_acc_user']; ?>">
                        <div class="submis">
                            <button type="submit" class="submi">ลงทะเบียน</button>
                        </div>
                        
                    </form>
                </div>