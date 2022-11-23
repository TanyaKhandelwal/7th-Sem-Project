<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';
date_default_timezone_set('Asia/Kolkata');
$date=date("Y/m/d");
$conn =new mysqli($server, $username, $password , $dbname);

if ($conn->connect_error) {
    # Display an error mesage if the connection fails
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
    $sname = ($_POST['sname']);
    $rname = ($_POST['rname']);
    $flatno = ($_POST['flatno']);
    $area = ($_POST['area']);
    $city = ($_POST['city']);
    $state =($_POST['state']);
    $pincode = ($_POST['pincode']);
    $phoneno = ($_POST['phoneno']);
    $sql = "INSERT INTO formdetails(`sname`, `rname`, `flatno`,`area`,`city`,`state`,`pincode`,`phoneno`)
    VALUES (`$sname`, `$rname`, `$flatno`,`$area`, `$city`, `$state`, `$pincode`,`$phoneno`,`$date`) ";
    $rs = mysqli_query($conn,$sql);
    if($rs){
      echo "<script>alert('Form submitted successfully.')</script>";

      echo "<script> location.href='index.html'; </script>";
              exit;
  //     if (headers_sent()) {
  //   die("Redirect failed. Please click on this link: <a href=index.html> click here</a>");
  // }
  // else{
  //   exit(header("Location: /index.html"));
  // }
}
    else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
  }


?>
