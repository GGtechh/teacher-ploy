<h2><b>ข่าวสาร</b></h2>

<?php 
 require("conn.php");
 // $image=$_POST["image"];
 
 mysqli_query($conn,"SET CHARACTER SET UTF8"); 
 $sql = "SELECT * FROM extra_c_news";
 // $excq = mysqli_query($conn,$sql);
 $result = $conn->query($sql);
 while($row = $result->fetch_assoc()){
   
?>
     <div class='courses-container'>
     <div class='course'>
         <div class='course-preview'>
         
         <img  src="src/uploads/<?=$row['news_image']?>">
         </div>
         <div class='course-info'>
             <h2><?php echo $row['news_section']?></h2>
             <h4><?php echo$row['news_content']?></h4>
         </div>
     </div>
 </div>
 <?php 
 }
?>