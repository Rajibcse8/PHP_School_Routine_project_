
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

    <title>Routine_admin</title>
  </head>
  <body>


  <div class="container"  >
          
          <form action= "admin.php"   method="post">
                
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
  <!--udpade delete design part  and start -->
     
   <div class="container m-3 p-5">

    <form action="" method="post"  class="d-flex justify-content-around">
    
       <?php 

        if(isset($_GET['update'])){
          $ii=$_GET['update'];
              
              $q1="SELECT * FROM six WHERE id= $ii ";
              $q2=mysqli_query($conn,$q1);
              $q3=mysqli_fetch_assoc($q2);

       
       ?>

             <input class="form-control" type="number"  name="year1" value="<?php  echo $q3['year'];  ?>" >
              <br>
              <input class="form-control" type="text"  name="class1" value="<?php  echo $q3['class'];  ?>">
              <br>
              <input class="form-control" type="text"  name="section1" value="<?php  echo $q3['section'];  ?>">
              <br>
              <input class="form-control" type="text"  name="day1" value="<?php  echo $q3['day'];  ?>" >
              <br>
              <input class="form-control" type="text"  name="period1" value="<?php  echo $q3['pnumber'];  ?>">
              <br>
              <input class="form-control" type="text"  name="time1" value="<?php  echo $q3['timee'];  ?>">
              <br>
              <input class="form-control" type="text"  name="subject1" value="<?php  echo $q3['sname'];  ?>">
              <br>
              <input class="form-control" type="text"  name="teacher1" value="<?php  echo $q3['tname'];  ?>">
              <br>
              <input type="submit" value="send" name="button2" class="btn  btn-info" >

            <?php
            
            
                      if(isset($_POST['button2'])){
                         $iddd=$q3['id'];
                        $pclas=$_POST['class1'];
                        $psec=$_POST['section1'];
                        $pday= $_POST['day1'];
                        $pnum= $_POST['period1'];
                        $ptm= $_POST['time1'];
                        $psub=$_POST['subject1'];
                        $ptec=$_POST['teacher1'];
                        
                         $q4="UPDATE six SET class='$pclas' , section= '$psec' , day='$pday' ,
                         pnumber ='$pnum' , timee='$ptm' , sname='$psub', tname= '$ptec'
                         WHERE id= $iddd";

                         $q5=mysqli_query($conn,$q4);

                         header("Refresh:0; url=admin.php");

                      }
            
            ?>


       
       <?php    } ?>
    
    </form>
   
   
   
   </div>
      


  <!-- update  part  end -->



<!-- show data part start                                           -->
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
            <td>  <a href="admin.php?update=<?php  echo $ID;?>" class="btn btn-info">Update</a> </td>
            <td>  <a href="admin.php?delete=<?php  echo $ID; ?>" class="btn btn-danger">Delete</a> </td>
            
         
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
       
        //header("Refresh:0; url=admin.php");
          
      }

?>
  
<!-- DELETE QUERY START -->  


<!-- Update QUery Start  -->



  </div>
    

<!--         show data end ...............................................................                  -->



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


