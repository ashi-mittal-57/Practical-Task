
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
