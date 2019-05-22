<html>
<head>
	<title>Profile User</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
	</style>
</head>
<body>

<?php
	$servername = "localhost:3306";
	$database = "facebook";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$phone = $_GET['phone'];

	$sql = "SELECT uid, phone FROM experiment where phone = '$phone'";
	$result = $conn->query($sql);
	$uid;
	$phone;
	
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        
	        $uid = $row["uid"];
	        $phone = $row["phone"];
	    }
	} else {
	    echo "0 results";
	}
	$linkAvatar = 'https://graph.facebook.com/'.$uid.'/picture';
	$linkFace = 'https://www.facebook.com/'.$uid;

	$conn->close();
?>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
	<img src=<?php echo $linkAvatar ?> alt="" style="width:50%">
  <h1 class="name" id="name"><?php echo $uid ?></h1>
  <p class="title" id="education"><?php echo $phone ?></p>
  <p class="university" id="university">Harvard University</p>
 <div style="margin: 24px 0;">
    
    <a href=<?php echo $linkFace ?> id="linkFace"><i class="fa fa-facebook"></i></a> 
  </div>
  
</div>

</body>
</html>