<?php
session_start();

// // DEVELOPMENT
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "portfolio";

// PRODUCTION
$servername = "localhost";
$username = "523397";
$password = "ramses12";
$dbname = "523397";

// Create connection
$conn = new mysqli($servername,$username, $password, $dbname);


	// Check connection
	if($conn === false){
	    die("ERROR: Could not connect. "
	        . mysqli_connect_error());
	}
	 
	// Taking all values from the form data(input)
    // var_dump($_REQUEST);    echo('</br>');    var_dump($_POST);

    if (isset($_POST['email']) && isset($_POST['password'])) {
        // echo('AUTH');
        $email =  $_REQUEST['email'];
        $password =  $_REQUEST['password'];
        // Performing insert query execution
        // here our table name is profile
        $sql = "SELECT * FROM users WHERE (email = '$email' OR name = '$email') AND password = '$password' ";

        // $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        // $email = $row['email'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $email and $password, table row must be 1 row
          
        if($count == 1) {
        //    session_register("myusername");
           $_SESSION['login_user'] = $row['name'];
           
           header("location: /portfolios/portfolio_6/forms.php");
        }else {
           $error = "Your email, name or Password is invalid";
           echo ($error.'<br>GO BACK TO LOGIN PAGE');
        }
        
    }

	// if(mysqli_query($conn, $sql)){
	//     echo "<h3>data stored in a database successfully.</h3>";

	//     // echo nl2br("\n$first_name\n $last_name\n "
	//     //     . "$gender\n $address\n $email");
	// } else{
	//     echo "ERROR: Hush! Sorry $sql. "
	//         . mysqli_error($conn);
	// }
	 
	// Close connection
	mysqli_close($conn);

	// header("Location: /portfolios/portfolio_6/forms.php");
?>