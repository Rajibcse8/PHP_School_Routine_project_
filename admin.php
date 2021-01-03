
<?php




   
$conn= mysqli_connect('localhost','root','','routine');
 

if(isset($_POST['button1'])){
    
 $year2= $_POST['year1'];
 $class2=($_POST['class1']);
 $section2=$_POST['section1'];
 $day2=$_POST['day1'];
 $period2=$_POST['period1'];
 $time2=$_POST['time1'];
 $subject2=$_POST['subject1'];
 $teacher2=$_POST['teacher1'];

 $class2 =(string) strtolower($class2);
    
 
 if(!empty($year2) &&  !empty($class2) && !empty($section2) && !empty($period2) &&!empty($time2) &&!empty($subject2) && !empty($teacher2)){
    
   //insert query  for class six
  
       
        $query= "INSERT INTO   six(year,class,section,day,pnumber,timee,sname,tname)
        VALUES('$year2','$class2','$section2','$day2','$period2','$time2','$subject2','$teacher2')";

        $create_query= mysqli_query($conn,$query);
 

  
 
   
   
}


  
       
}












?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


  <div class="container"  >
          
          <form action= ""   method="post">
                
                <input class="form-control" type="number"  name="year1" placeholder="year">
               <br>
               <input class="form-control" type="text"  name="class1" placeholder="class">
               <br>
               <input class="form-control" type="text"  name="section1" placeholder="Section">
               <br>
               <input class="form-control" type="text"  name="day1" placeholder="DAY" >
               <br>
               <input class="form-control" type="text"  name="period1" placeholder="period Number">
               <br>
               <input class="form-control" type="text"  name="time1" placeholder="Time">
               <br>
               <input class="form-control" type="text"  name="subject1" placeholder="Subject Name">
               <br>
               <input class="form-control" type="text"  name="teacher1" placeholder="Teacher Name:">
               <br>
               <input type="submit" value="send" name="button1" class="btn  btn-success" >


          </form>
     
  </div>
  <!--udpade delete design part-->
     
  <div class="container  shadow m-5 p-3" class="d-flex justify-content-around">
          
          <form action= ""   method="post">
                
                <?php 
                
                     if(isset($_GET['update'])){

                      $stid =$_GET['update'];
                      $query="SELECT * FROM  six WHERE id={$stid}";
                      $make_upd= mysqli_query($conn,$query);
                      while($rd=mysqli_fetch_assoc($make_upd)){


                        $upyear=$rd['year'];
                        $upclass=$rd['class'];
                        $upsec=$rd['section'];
                        $upday=$rd['day'];
                        $upnumer=$rd['pnumber'];
                        $upt=$rd['timee'];
                        $upsub=$rd['sname'];
                        $upt=$rd['tname'];
                        $id1=$rd['id'];
                
                ?>

               <input class="form-control" type="number"name="id"  value=<?php  echo $id1;  ?>  >
               <input class="form-control" type="number"name="year1"  value=<?php  echo $upyear;  ?>  >
               <input class="form-control" type="text"  name="class1"   value=<?php   echo $upclass;    ?>  >
               <input class="form-control" type="text"  name="section1" value =<?php  echo $upsec;  ?>  >
               <input class="form-control" type="text"  name="day1"     value=<?php echo $upday;  ?>  >
               <input class="form-control" type="text"  name="period1"  value=<?php echo $upnumer  ?> >
               <input class="form-control" type="text"  name="time1"    value =<?php  echo $upt; ?>>
               <input class="form-control" type="text"  name="subject1" value=<?php echo $upsub;  ?> > 
               <input class="form-control" type="text"  name="teacher1" value=<?php  echo $upt;  ?> >
               <input type="submit" value="update" name="button2" class="btn  btn-primary" >


             <?php }}  ?>


             <?php 
             
                  if(isset($_POST['button2'])){

                    $id1=$_POST['id'];
                    $year2= $_POST['year1'];
                    $class2=$_POST['class1'];
                    $section2=$_POST['section1'];
                    $day2=$_POST['day1'];
                    $period2=$_POST['period1'];
                    $time2=$_POST['time1'];
                    $subject2=$_POST['subject1'];
                    $teacher2=$_POST['teacher1'];
 
 if(!empty($year2) && !empty($class2) && !empty($section2) && !empty($period2) &&!empty($time2) &&!empty($subject2) && !empty($teacher2)){
               
   $query="UPDATE TABLE six SET year=$year2,class=$class2,section=$section2,day=$day2,pnumber=$period2,timee=$time2,sname=$subject2 , tname= $teacher2 WHERE id=$id1 ";
       
         
          $updateQuery= mysqli_query($conn, $query); 
         
         

   //    header("Refresh:0; url=admin.php");
   
} 




                  }
             
             
             
             ?>
              



          </form>
     
  </div>


  <!-- update  part  end -->


  <div class="container">
         <table class="table table-bordered">
         <tr>
         <th>ID</th>
         <th>Year</th>
         <th>Class</th>
         <th>Section</th>
         <th>Day</th>
         <th>P_Number</th>
         <th>Time</th>
         <th>Subject</th>
         <th>Teacher</th>
         <th></th>
         <th></th>
         </tr>

         <tr>

         <?php 

               $query ="SELECT * FROM six";
               $readquery= mysqli_query($conn,$query);
               if($readquery->num_rows > 0){
                   while($rd=mysqli_fetch_assoc($readquery)){
                    $ID=$rd['id'];      
                    $Year= $rd['year'];
                    $Class=$rd['class'];
                    $Section=$rd['section'];
                    $Day=$rd['day'];
                    $P_Number=$rd['pnumber'];
                    $Time=$rd['timee'];
                    $Subject=$rd['sname'];
                    $Teacher=$rd['tname'];
                       
                   

               
         
         
         
         ?>
            <td><?php   echo   $ID ?>  </td>
            <td><?php   echo   $Year ?>  </td>
            <td><?php   echo $Class;  ?></td>
            <td> <?php  echo $Section;  ?>  </td>
            <td> <?php  echo $Day;  ?> </td>
            <td> <?php  echo $P_Number;  ?>  </td>
            <td> <?php  echo $Time;  ?> </td>
            <td> <?php  echo  $Subject;  ?> </td>
            <td> <?php  echo $Teacher;  ?> </td>
            <td>  <a href="admin.php?update=<?php  echo $ID;    ?>    " class="btn btn-info">Update</a> </td>
            <td>  <a href="admin.php?delete=<?php  echo $ID;    ?>    " class="btn btn-danger">Delete</a> </td>
            
         
         </tr>

         <?php  }} else{

             echo "NO Data Found  . Please Insert The Data";
         } ?>
         
         </table>
<!-- DELETE QUERY START -->
         <?php 

      if(isset($_GET['delete'])){
       
        
        $stdid=$_GET['delete'];
        $query ="DELETE FROM  six WHERE id={$stdid }";
        $make_del=mysqli_query($conn,$query);
        header("Refresh:0; url=admin.php");
          
      }

?>
  
<!-- DELETE QUERY START -->  


<!-- Update QUery Start  -->

    <?php
    
       
    
    ?>


  </div>
    





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>


