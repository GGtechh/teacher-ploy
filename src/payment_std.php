<h2><b>สถานะการจ่ายเงิน</b></h2>
            <h3>ช่องทางการชำระเงิน</h3><br>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/th/thumb/4/4a/Logo_GSB_Thailand.svg/1200px-Logo_GSB_Thailand.svg.png" alt="" style="width: 100px;">
            </div><br>
            <div style="margin-left: 120px;margin-top: -75px;color: #D8006D;">
                <h3>เลขบัญชี :412-125-4321</h3>
            </div><br>
            <div style="margin-left: 120px;color: #D8006D">
                <h3>ชื่อบัญชี :ชนิกา สีลม</h3>
            </div>
            <br>
            <?php 
                $usernames=$_SESSION['extra_c_acc_user'];
                // echo $usernames;
                $sql_pay="SELECT * FROM extra_c_book 
                INNER JOIN extra_c_account ON extra_c_book.extra_c_book_acc_id = extra_c_account.extra_c_acc_id 
                INNER JOIN extra_c_type_book ON extra_c_book.extra_c_book_type = extra_c_type_book.extra_c_type_id
                WHERE extra_c_acc_user='$usernames' AND extra_c_book_status='wait'";
                $qry_pay=mysqli_query($conn,$sql_pay);
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>ประเภท</th>
                            <th>วัน-เวลาที่สอน</th>
                            <th>สถานะ</th>
                            <th>ราคา</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sum=0; while($row = mysqli_fetch_array($qry_pay)){?>
                        <tr>
                            <td><?php echo $row['extra_c_type_name']?></td>
                            <td><?php echo $row['extra_c_book_s_time'].'-'.$row['extra_c_book_e_time']?></td>
                            <td class="warning"><?php ?>รอชำระเงิน</td>
                            <td class="primary"><?php echo $row['extra_c_book_price']?></td>
                        </tr>
                        <?php 
                            $sum+=$row['extra_c_book_price'];
                            } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>ราคารวม</td>
                            <td><?php echo $sum;?></td>
                        </tr>
                    </tbody>
                </table>