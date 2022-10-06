<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="style1.css">
</head>
<body>
	<header>
		<div class="wrapper">
			
			<ul class="nav-area">
				<li><a href="http://localhost/dbms/home.html">Home</a></li>
				<li><a href="http://localhost/dbms/about.php">About</a></li>
				<li><a href="http://localhost/dbms/admin.php">Admin</a></li>
				<li><a href="http://localhost/dbms/custom.php">Customers</a></li>
				<li><a href="http://localhost/dbms/news.php">News</a></li>
			</ul>
		</div>
		<div class="show-companies">
			<div>
				<div>All Companies</div>
				<?php
					$conn =  mysqli_connect("localhost", "root", "", "drug");
					$sql = "SELECT * FROM company;";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) {
						echo '<a href="icompany.php?compId='.$row["compId"].'">'.$row["compName"].'</a>';
					}
				?>
			</div>
		</div>
		
	</header>

   

</body>
</html>













