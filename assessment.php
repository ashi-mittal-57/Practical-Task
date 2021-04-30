
<!DOCTYPE html>
<html>  
<body>  
<form method="post">  
Enter Number:  
<input type="number" name="number1" /><br><br>  
Enter Unluckey Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Result">  
</form>  

<?php
if(isset($_POST['submit'])){
    {  
    echo 'hhh';die;
      $n = $_POST['number1'];  
      $k = $_POST['number2'];  
     // $n = 5;
      //$k = 3;
      $sum = 0;
      for($i = 1 ; $i <= $n ; $i++){

          $sum += $i;
          if($sum == $k ){
              $sum = $sum - 1 ;
          }
      }

      echo $sum;
	}
}
?>

</body>
</html>
