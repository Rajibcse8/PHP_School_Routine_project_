<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine</title>
</head>
<body>
        
       
       
       
<?php     
    $class = $_GET['class'];
    $section= $_GET['section'];
    $day=['saturday','sunday','monday','tuesday'];
    $conn=mysqli_connect('localhost','root','','routine');

          
    $query3= "SELECT COUNT(DISTINCT day) AS total FROM six WHERE  class='$class' and section='$section' ";
     $result3= mysqli_query($conn,$query3);
     $values3= mysqli_fetch_assoc($result3);
     $num3= $values3['total'];
   



    echo '<table border="2">';
    for($row=0;$row<$num3;$row++){

    $query1= "SELECT COUNT(pnumber) AS total FROM six WHERE day='$day[$row]' and class='$class' and section='$section' ";
     $result= mysqli_query($conn,$query1);
     $values= mysqli_fetch_assoc($result);
     $num= $values['total'];
   
        echo '<tr>';
        
        echo'<td>';
        echo $day[$row];
        echo '</td>';
    
        for($col=0;$col<$num;$col++){

       $pn=$col+1;
    $query2= "SELECT timee,sname,tname FROM six WHERE day='$day[$row]' and class='$class' and section='$section' and pnumber='$pn' ";
    $result2=mysqli_query($conn,$query2);
    $value2=mysqli_fetch_assoc($result2);
    $tm=$value2['timee'];
    $sub=$value2['sname'];
    $tnam=$value2['tname']; 
    
            echo '<td  text-align:center> ';
            echo      $tm."</br>".$sub."</br>".$tnam; 
            echo' </td>';
        }
    
        echo '</tr>';
    }
    echo '</table>';
    
    
    



?>
       

</body>
</html>




<?php 

/*
      $i=0;
     $query1= "SELECT COUNT(pnumber) AS total FROM six WHERE day='$day[$i]' and class='$class' and section='$section' ";
     $result= mysqli_query($conn,$query1);
     $values= mysqli_fetch_assoc($result);
     $num= $values['total'];
     echo $num; 

     */


?>