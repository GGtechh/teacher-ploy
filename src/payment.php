<h2><b>สถานะการจ่ายเงิน</b></h2>

<table>
                    <thead>
                        <tr>
                            <th>ประเภท</th>
                            <th>วัน-เวลาที่สอน</th>
                            <th>สถานะ</th>
                            <th>ราคา</th>
                            <th>ดูการโอน</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $sql_chx = "SELECT extra_c_account.extra_c_acc_id as acc_id,extra_c_payment_proof.extra_c_payment_image as img_proof,
                            extra_c_type_book.extra_c_type_name as type_coruse,
                            extra_c_book.extra_c_book_status as book_status,
                            extra_c_book.extra_c_book_price as book_price,extra_c_book_s_time 
                            FROM extra_c_account 
                            LEFT JOIN extra_c_book ON extra_c_account.extra_c_acc_id = extra_c_book.extra_c_book_acc_id
                            INNER JOIN extra_c_type_book ON extra_c_book.extra_c_book_type = extra_c_type_book.extra_c_type_id
                            LEFT JOIN extra_c_payment_proof ON extra_c_book.extra_c_book_id = extra_c_payment_proof.extra_c_payment_book_id
                            WHERE extra_c_account.extra_c_acc_id = extra_c_book.extra_c_book_acc_id AND extra_c_book.extra_c_book_status ='wait'";
                                    $excq = $conn -> query($sql_chx);
                                    // $row = $excq -> fetch_assoc();
                                    
                            while($row = mysqli_fetch_array($excq)){
                                 $all_cost = $row["book_price"];
                            ?>
                        <tr>
                            <td><?php echo $row['type_coruse']; ?></td>
                            <td><?php echo $row['extra_c_book_s_time'];?></td>
                            <td class="dark">รอตรวจสอบ</td>
                            <td class="success"><?php echo $row['book_price']; ?></td>
                            <td>
                                <form  method="post" class="form">
                                <input type="hidden" name="payment_id" value="1">
                                <button type='submit' class='primary' value='submit' style="width: 100px;height: 30px;background: #fff;">ดูรายละเอียด</button>
                                <!-- <button onclick="myFunction()">Click me</button> -->
                                </form>
                           
                        
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>