 <?php

$fullname = $email = $contactno = $createpass= $confpass = "";
$fullnameErr = $emailErr = $contactnoErr = $createpassErr= $confpassErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["fullname"])) {
    $fullnameErr = "Full-Name is required";
  } else {
    $fullname = test_input($_POST["fullname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
   if (empty($_POST["contactno"])) {
    $contactnoErr = " contact no is required ";
  } else {
    $contactno = test_input($_POST["contactno"]);
  }
    
  if (empty($_POST["createpass"])) {
    $createpassErr = " create Password is required ";
  } else {
    $createpass = test_input($_POST["createpass"]);
  }

  if (empty($_POST["confpass"])) {
    $confpassErr = "Confirm Password is required ";
  } else {
    $confpass = test_input($_POST["confpass"]);
  }
  $myfile = fopen("../data/signup.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
	{
		$words = explode(",",$line);
		$fullname=$words[1];
		$email=$words[2];
		$contactno=$words[3];
		$createpass=$words[4];
		$conpass=$words[5];
		
	}
	fclose($myfile);
	if ($fullname==$user && $password=$pass){
		session_start();
		$_SESSION['name'] = "resdnt";
		$_SESSION['fullname'] =$fullname;
		header ("location: ../view/home.php");
	}
	else{
		echo $error = "Invaild Username or password";
	}

}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>