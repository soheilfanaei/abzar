<?php
include("index.html")
?>
<center>
<?php
if(isset($_POST["firstname"]) && !empty($_POST["firstname"])
 && isset($_POST["lastname"])  && !empty($_POST["lastname"])
 && isset($_POST["email"])  && !empty($_POST["email"])
 && isset($_POST["username"])  && !empty($_POST["username"])
 && isset($_POST["password"])  && !empty($_POST["password"])
 && isset($_POST["repassword"])  && !empty($_POST["repassword"])
){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];
    echo("<p>".$firstname."</p>");
    echo("<p>".$lastname."</p>");
    echo("<p>".$email."</p>");
    echo("<p>".$username."</p>");
}else
{
echo("<p>پر کردن همه فیلدها الزامی است</p>");
}

?>

</center>
<?php
include("footer.html");
?>
