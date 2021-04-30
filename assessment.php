
<?php
//Check form submit
if(isset($_POST['submit']))
{
    // Get value of consecutive number
    $n = $_POST['number1'];
    //Get value of unluckey number
    $k = $_POST['number2'];
    //Initialize variable name sum
    $sum = 0;
    //Iiterate number for sum using for loop
    for($i = 1 ; $i <= $n ; $i++){
        $sum += $i;
        //Condition for check if any sum match with unluckey number
        if($sum == $k ){
            //Substarct lowest values of N = 1 from sum
            $sum = $sum - 1 ;
        }
    }
    //Print value of sum
    echo $sum;
}
//END of If condition
?>
