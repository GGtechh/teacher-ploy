<h2>เพิ่มข่าวสาร</h2>
                <div class="updates">
                    <form  action="src/src/homework.php" method="post" class="form" >
                    <h2><b>เลือกหมวกคลอส</b></h2>
          
                        <select class="form-control" id="typebook" name="typebook">
                                <option value="--Select--">--Select--</option>
                                <?php
                               require("src/conn.php");
                               mysqli_query($conn,"SET CHARACTER SET UTF8"); 
                                $select=mysqli_query($conn,"select * from extra_c_type_book");
                                while($menu1=mysqli_fetch_array($select))
                                {
                                    ?>
                                        <option value="<?php echo $menu1['extra_c_type_name'];?>">
                                        <?php echo $menu1['extra_c_type_name'];?>
                                        </option>
                                    <?php 
                                    }
                                ?>

                            </select>
                            <br><br>
                            <h2><b>เลือกนักเรียน</b></h2>
          
                            <select class="form-control" id="userID" name="userID">
                                <option value="--Select--">--Select--</option>
                                <?php
                                require("src/conn.php");
                                mysqli_query($conn,"SET CHARACTER SET UTF8"); 
                                $select=mysqli_query($conn,"select extra_c_acc_id,extra_c_acc_fname_s,extra_c_acc_lname_s from extra_c_account WHERE extra_c_acc_role='student'");
                                while($menu1=mysqli_fetch_array($select))
                                {
                                    ?>
                                        <option value="<?php echo $menu1['extra_c_acc_id'];?>">
                                        <?php echo $menu1['extra_c_acc_fname_s'].' '.$menu1['extra_c_acc_lname_s'];?>
                                        </option>
                                    <?php 
                                    }
                                ?>

                            </select>
                            <br><br>
                            <h2><b>เพิ่มลิ้งก์</b></h2>
                        <div class="input-data" >
                            <input type="text" name="link" required>

                            <div class="underline"></div>
                            
                        </div>
                        <br><br>
                            <h2><b>เลือกเวลาที่ทำแบบฝึกหัด</b></h2>
                        <div class="input-data">
                            <input type="date" name="date" required>
                            <div class="underline"></div>
                            <!-- <label>Name</label> -->
                        </div>

                        <!-- <input type="hidden" name="status" value="insert"> -->
                        <div class="submis">
                            <button type="submit" class="submi">ตกลง</button>
                        </div>
                        
                    </form>
                </div>
          
                    
                        
                    </form>
                </div>