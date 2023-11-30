<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"&& isset ( $_POST["submit"] )){
    $conn=mysqli_connect("localhost","root","","schooladmission") or die("connection Faild:".mysqli_connect_error());
    if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["grade"])&&isset($_POST["Contact"])&&isset($_POST["DOB"])&& $_POST["selection"] != "selected"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $grade=$_POST["grade"];
        $Contact=$_POST["Contact"];
        $DOB=$_POST["DOB"];
        $gender=$_POST["gender"];
        $Comment=$_POST["Comment"];
        $sql="INSERT INTO `admission table` (`name`,`email`,`grade`,`Contact`,`DOB`,`gender`,`Comment`) VALUES(`$name`,`$email`,`$grade`,`$Contact`,`$DOB`,`$gender`,`$Comment`)";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo "Entry Successfull";
        }
        else{
            echo "Failed";
        }
 }
}
?>