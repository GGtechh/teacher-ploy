<?php 
 require('conn.php');
 mysqli_query($conn, "SET CHARACTER SET UTF8");
 $where_sql = ''; 
if(!empty($_GET['start']) && !empty($_GET['end'])){ 
    $where_sql .= " WHERE extra_c_book_s_time BETWEEN '".$_GET['start']."' AND '".$_GET['end']."' AND extra_c_book_status='complete'"; 
} 
// echo $_GET['start'];
// $sql = "SELECT extra_c_type_name as title,concat(extra_c_book_data,'T',extra_c_book_s_time) as start,concat(extra_c_book_data,'T',extra_c_book_e_time) as end FROM extra_c_book 
$sql = "SELECT extra_c_type_name as title,extra_c_book_s_time as start,extra_c_book_e_time as end FROM extra_c_book 
        INNER JOIN extra_c_type_book ON extra_c_book.extra_c_book_type = extra_c_type_book.extra_c_type_id
        $where_sql"; 
$result = $conn->query($sql);  
 
$eventsArr = array(); 
if($result->num_rows > 0){ 
    while($row = $result->fetch_assoc()){ 
        // echo $row['start'].'  '.$row['end'].'<br>';
        array_push($eventsArr, $row); 
    }
} 
 
// Render event data in JSON format 
echo json_encode($eventsArr);