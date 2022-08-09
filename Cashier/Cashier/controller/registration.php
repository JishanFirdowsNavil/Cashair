<?php

$fname = $lname =$gender = $dob= $religion = $praddress = $pmaddress = $phone = $email = $website = $username = $password = $confirmpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = validate($_POST["fname"]?? "");
  $lname = validate($_POST["lname"]?? "");
  $gender = validate($_POST["gender"]?? "" );
  $dob = validate($_POST["DOB"]?? "");
  $religion = validate($_POST["religion"]?? "");
  $praddress = validate($_POST["praddress"]?? "");
  $pmaddress = validate($_POST["pmaddress"]?? "");
  $phone = validate($_POST["phone"]?? "");
  $email = validate($_POST["email"]?? "");
  $website = validate($_POST["website"]?? "");
  $username = validate($_POST["username"]?? "");
  $password = validate($_POST["password"]?? "");
  $confirmpassword = validate($_POST["confirmpassword"]?? "");

}

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$isValidate = true;
if ($fname == "") 
{
  echo "First Name Required <br>";
  $isValidate = false;
}
if ($lname == "") 
{
  echo "Last Name Required <br>";
  $isValidate = false;
}
if($gender == "")
{
  echo "Gender Required <br>";
  $isValidate = false;
}
if($dob == "")
{
echo "Date Of Birth Required <br>";
$isValidate = false;
}
if($religion == "")
{
  echo "Religion Required <br>";
  $isValidate = false;
}
if($praddress == "")
{
  echo "Present Address Required <br>";
  $isValidate = false;
}
if($email == "")
{
  echo "Email Required <br>";
  $isValidate = false;
}
if($username == "")
{
  echo "Username Required <br>";
  $isValidate = false;
}
if(strlen($username)<5)
{
  echo "Username Max 5 Characters <br>";
  $isValidate = false;
}
if($password == "")
{
  echo "Password Required <br>";
  $isValidate = false;
}
if($confirmpassword == "")
{
  echo "Confirm Password Required <br>";
  $isValidate = false;
}
 if ($password == $confirmpassword) {
      echo "";
  }
  else 
  {
      echo "Failed";
  }
  if ($isValidate) {   	

	   //Get form data
	  //  $formdata = array(
	  //     'firstName'=> $_POST["fname"],
	  //     'lastName'=> $_POST["lname"],
	  //     'email'=>$_POST["email"],
	  //     'mobile'=> $_POST["phone"],
    //       'username' =>$_POST["username"],
    //       'password'=>$_POST["password"]

	  //  );
    


    $existingData = json_decode(file_get_contents("../model/profile.json",true));
  
  
    $array = array('firstName' => $fname,'lastName' => $lname,'username'=>$username,'password'=>$password,"email" => $email);
    array_push($existingData, $array);
    
    $fp = fopen('../model/profile.json', 'w');
    fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
    fclose($fp);

    echo "Successfully added";
    
	//  echo "my value: ".$mydata[1]->lastName;
/*	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	*/

    

      {
    //   header("Location: ..\controller\homepage.php");
      }
  }
?>