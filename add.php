<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My tour</title>
</head>

<body>
<?php
$cn=mysqli_connect("localhost","root","","tourandtravel");
$s="select * from advertisement";
$result=mysqli_query($cn,$s);

//echo $r;

while($data=mysqli_fetch_array($result))
{
	?>
	<div class="col-md-3 image-grid">
					 <img src="Admin/addverimages/<?php echo $data[3]; ?>"  >
					
					 <p><a href="#"><?php echo $data[2]; ?></a></p>
				 </div>
				
		
<?php
}
mysqli_close($cn);
?>
</body>
</html>