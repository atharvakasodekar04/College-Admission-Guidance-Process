<?php

	session_start();

	$answer = $_SESSION["answer"];
	$user_answer = $_POST['answer'];

	if ($answer == $user_answer)
	{
    	echo "Form Registered Successfully....redirecting you to next page";

	}
	else
	{
    	echo "Error:captcha Validation Fails....redirecting again";
    	header("refresh:4; url=registration.html");
	}


	$Name = $_POST['Name'];
	$Mobile = $_POST['Mobile'];
	$Caste = $_POST['Caste'];
	$Gender = $_POST['gender'];
	$Branch = $_POST['Branch'];


	if (!empty($Name) || !empty($Mobile) || !empty($Caste) || !empty($Gender) || !empty($Branch)) ;
	else{
		echo "Please Fill all the options";
		die();
	}

	$con = mysqli_connect('localhost' ,'root' , '' , 'registration' ); //registration is database name

	$sql = "INSERT INTO form(Name ,Mobile,Caste,Gender,Branch) VALUES('$Name','$Mobile','$Caste','$Gender','$Branch')";  //form is table name

	if (!mysqli_query($con , $sql))
	{
		//echo "Not Inserted";
	}
	else
	{
		//echo "Inserted";
	}

	header("refresh:2; url=documents required.html"); //give step1 link

?>










 ?>