<html>
<head>
	<title>List User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
	.avatar img {
    border-radius: 5px;
    width: 50px;
    margin-right: 10px;
}
img {
    max-width: 100%;
    height: auto;
}
.name {
    font-size: 15px;
    font-weight: 500;
    color: #333;
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

	$result = mysqli_query($conn,"SELECT uid, phone FROM experiment limit 20");
	$option = '';
	while($row = mysqli_fetch_array($result))
	{
		
		$linkAvatar = 'https://graph.facebook.com/'.$row['uid'].'/picture';
		$linkFace = 'https://www.facebook.com/'.$row['uid'];
		$linkDetail = '/UserInformation/Profile.php'.'?phone='.$row['phone'];
		$option .= '
			<div class="col-md-4">
				<div class="avartar">
					<img src="'.$linkAvatar.'" width="50" alt="">
				</div>
				<div class="info">
					<span class="name">
						<a href='.$linkDetail.'>'.$row['phone'].'</a>
					</span>	
				</div>						
			</div>';
}

	mysqli_close($conn);
?>
<div class="row">
<?php echo $option; ?>
</div>

</body>
</html>