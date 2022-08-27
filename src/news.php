<h2><b>ข่าวสาร</b></h2>

<!-- <a href="" class="neo" style="--clr:#1e9bff"><span>เพิ่มการบ้าน</span><i></i></a><br><br> -->

                <table>
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>หัวข้อ</th>
                            <th>ลบ</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                       require("conn.php");
                        // $image=$_POST["image"];
                        $number=1;
                        mysqli_query($conn,"SET CHARACTER SET UTF8"); 
                        $sql = "SELECT * FROM extra_c_news";
                        // $excq = mysqli_query($conn,$sql);
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo "
                        
                            <tr>
                            <td>".$number++."</td>
                            <td>".$row["news_section"]."</td>
                            <td>
                                    <div class='col-sm-1'>
                                    <form action='src/src/newsAPI.php' method='post' class='form'>
                                        <input type='hidden' name='id' value=".$row["news_id"].">
                                        <input type='hidden' name='status' value='delect'>
                                        <button type='submit' class='btn' value='submit'><i  class='fa fa-trash fa-xl'></i></button>
                                    </form>
                                </div>
                         </td>
                          
                        </tr>
                            ";
                        }
                       
                        ?>
                       
                      
                    </tbody>
                </table>

     