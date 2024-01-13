<?php
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

    if (isset($_POST['job'])) {
        echo('PROFILE');
        $name =  $_REQUEST['name'];
        $job =  $_REQUEST['job'];
        $description =  $_REQUEST['description'];
        // Performing insert query execution
        // here our table name is profile
        $sql = "INSERT INTO profile (name,job,description)  VALUES ('$name','$job','$description')";
        
    } else if(isset($_POST['email'])) {
        echo('CONTACT');
        $email = $_REQUEST['email'];
        $phone =  $_REQUEST['phone'];
        $instagram =  $_REQUEST['instagram'];
        $facebook =  $_REQUEST['facebook'];
        $x = $_REQUEST['x'];
        $linkedin = $_REQUEST['linkedin'];
        $github = $_REQUEST['github'];
        $website = $_REQUEST['website'];
        // Performing insert query execution
        // here our table name is contacts
        $sql = "INSERT INTO contacts (email,phone,instagram,facebook,x,linkedin,github,website)  VALUES ('$email','$phone','$instagram','$facebook','$x','$linkedin','$github','$website')";

    } else if(isset($_POST['year'])) {
        echo('EDUCATION');
        $year = $_REQUEST['year'];
        $level =  $_REQUEST['level'];
        // Performing insert query execution
        // here our table name is education
        $sql = "INSERT INTO education (year,level)  VALUES ('$year','$level')";

    } else if(isset($_POST['place'])) {
        echo('EXPERIENCE');
        $heading = $_REQUEST['heading'];
        $period = $_REQUEST['period'];
        $description =  $_REQUEST['description'];
        $attachment =  $_REQUEST['attachment'];
        $place =  $_REQUEST['place'];
        // Performing insert query execution
        // here our table name is experience
        $sql = "INSERT INTO experience (heading,period,description,attachment,place)  VALUES ('$heading','$period','$description','$attachment','$place')";

    } else if(isset($_POST['link'])) {
        echo('PORTFOLIO');
        $heading = $_REQUEST['heading'];
        $description =  $_REQUEST['description'];
        $attachment =  $_REQUEST['attachment'];
        $link =  $_REQUEST['link'];
        // Performing insert query execution
        // here our table name is portfolio
        $sql = "INSERT INTO portfolio (heading,description,attachment,link)  VALUES ('$heading','$description','$attachment','$link')";

    } else if(isset($_POST['heading'])) {
        echo('EXPERTISE');
        $heading = $_REQUEST['heading'];
        $description =  $_REQUEST['description'];
        $attachment =  $_REQUEST['attachment'];
        // Performing insert query execution
        // here our table name is expertise
        $sql = "INSERT INTO expertise (heading,description,attachment)  VALUES ('$heading','$description','$attachment')";

    }

	 
	if(mysqli_query($conn, $sql)){
	    echo "<h3>data stored in a database successfully.</h3>";

	    // echo nl2br("\n$first_name\n $last_name\n "
	    //     . "$gender\n $address\n $email");
	} else{
	    echo "ERROR: Hush! Sorry $sql. "
	        . mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn);

	header("Location: /portfolios/portfolio_6/forms.php");
?>