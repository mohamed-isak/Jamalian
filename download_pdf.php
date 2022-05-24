
<html>
<head>
	<title>view_pdf</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
	<?php
include "db.php";
$name=$_GET["id"];
$sql="select * from book where BID='{$_GET["id"]}'";
$ex=mysqli_query($conn,$sql);
$trv=mysqli_fetch_assoc($ex);
$filename=basename($trv["FILE"]);
?>

	<embed src="upload/<?php echo $filename;?>#toolbar=0&navpanes=0&scrollbar=0"  class="emb">

	</body>
</html>	