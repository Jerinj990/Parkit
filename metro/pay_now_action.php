<?php
session_start();
include "test-db-connection.php";


$place_id=-1;
$service=-1;

$print_place='';
$print_service='';


$rate_place=0;
$addl_rate_place=0;
$rate_service=0;

$name=$_POST["name"];
$vehicletype=$_POST["vehicletype"];
$vehicleno=$_POST["vehicleno"];
$bookfromdate=$_POST["bookfromdate"];
$bookfromtime=$_POST["bookfromtime"];
$booktodate=$_POST["booktodate"];
$booktotime=$_POST["booktotime"];
$amount=$_POST['amount'];

if(isset($_POST["place"])){
    $place_id=$_POST["place"];

}
if(isset($_POST["service"])){
    $service=$_POST["service"];   

}

if(isset($_REQUEST["sbmt"]))
{
    //echo"inside button";
    $cname=$_POST["cname"];
    $cardnumber=$_POST["cardnumber"];
    $cvv=$_POST["cvv"];
    $exp_month=$_POST["month"];
    $exp_year=$_POST["year"];
   
    $qry ="select * from `banktable` where `name`='".$cname."' and  `cardnumber`='".$cardnumber."' and  `cvv`='".$cvv."' and  `exp_month`='".$exp_month."' and `exp_year`='".$exp_year."'";
    $res = mysqli_query($con,$qry);
    if(mysqli_num_rows($res)>0){
        $qry ="INSERT INTO `bookingtable` (`id`, `name`, `user`,`vehicletype`, `vehicleno`, `bookfromdate`, `bookfromtime`, `booktodate`, `booktotime`, `service`, `parkingplace`, `amount`) VALUES (NULL, '".$name."', ".$_SESSION['uid'].",'".$vehicletype."', '".$vehicleno."', '".$bookfromdate."', '".$bookfromtime."', '".$booktodate."', '".$booktotime."', '".$service."', '".$place_id."', '".$amount."')";
        mysqli_query($con,$qry);  
    //    echo "<script>alert('Payment Success');</script>";
        header("Location:success.php");  
    }
    else
    {
    //    echo "<script>alert('Invlid details');</script>";
       header("Location:failure.php");
        }
}
 
//else
//{
//echo "<script>alert('Invlid details');</script>";
//}

?>