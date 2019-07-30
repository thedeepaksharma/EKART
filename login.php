<?php session_start();?>
<?php 

    if (isset($_POST['loginname'])) {  
    extract($_POST);  
    $servername = "localhost";  
    $username   = "root";  
    $password1   = "";  
    $dbname     = "mydatabase";  
    // Create connection  
    $conn = new mysqli($servername, $username, $password1, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  

    $userMobile = mysqli_escape_string($conn,$_POST['uname']);
    $password = mysqli_escape_string($conn, $_POST['pwd']);
    setcookie("Name",$userMobile,time()+60*60*25*5);
	setcookie("Password",$password,time()+60*60*25*5);
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "SELECT * FROM mysignup where mobile='$userMobile' and password='$password'" ;

   // $result = mysqli_query($conn,$query) ;
    $results = mysqli_query($conn, $query) or die(mysqli_error($conn));

    

    if(mysqli_num_rows($results) == 1){

        $_SESSION['uname']= $userMobile;
        header('Location: myhome.php');
    }
    
    else
    {
        $message = "Invalid Mobile no. or password";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
    }
}
?>


