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
          
          <form action=""   method="post">
                
                <input class="form-control" type="number"  name="year1" placeholder="year">
               <br>
               <input class="form-control" type="text"  name="class1" placeholder="class">
               <br>
               <input class="form-control" type="text"  name="section1" placeholder="Section">
               <br>
               <input class="form-control" type="number"  name="period1" placeholder="period Number">
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

<?php


function checknull(){

   if( !empty($class2) && !empty($year2) && !empty($section2) && !empty( $period2) && !empty($time2 )&& !empty($subject2)&& !empty($teacher2)  ){
            echo "HELLO";
   }

   else return false;

}



 $year2= $_POST['year1'];
 $class2=$_POST['class1'];
 $section2=$_POST['section1'];
 $period2=$_POST['period1'];
 $time2=$_POST['time1'];
 $subject2=$_POST['subject1'];
 $teacher2=$_POST['teacher1'];

 $class2= strtolower($class2);


   
 $conn= mysqli_connect('localhost','root','','routine');




 if(isset($_POST['button1'])){
       $check= checknull();
       echo $check;
            
        
}










?>
























