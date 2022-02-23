<?php require('../konekcija.php'); 




?>
<!DOCTYPE html>
<html>
<head>
	<title>Posting news</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="adminheader">
	<h2>MyWebbApp Admin: Adding news</h2>
	</div>

	<div class="subheader">
		<?php include_once 'subheader.php'; ?>
	</div>
	
	<div class="subheader">
			<form action = "#" method = "post">
				<label>News title: <br/>
				<input type = "text" name = "ntitle"size="100"></label></br></br>
				<label>News content<br/>
				<textarea name = "ncontent" rows="5" cols="86"></textarea></label></br></br>
				<label> Category: <br/>
				<select name="ncategory" id="city">
					<option value="Domestic" >Domestic</option>
					<option value="International" >International</option>
					<option value="Business" >Business</option>
					<option value="Sport" >Sport</option>
					<option value="Showbizz">Showbizz</option>
				</select></label></br></br>
				<input type = "submit" name = "insert" value = "Insert news to DB">
			</form>
			<?php
			if(isset($_POST['insert'])){
				if(isset($_POST['ntitle']) && isset($_POST['ncategory']) && isset($_POST['ncontent'])){
					if(!empty($_POST['ntitle']) && !empty($_POST['ncategory']) && !empty($_POST['ncontent'])){
						$ntitle = trim ($_POST['ntitle']);
						$ncategory = trim ($_POST['ncategory']);
						$ncontent = trim ($_POST['ncontent']);
						require ('../konekcija.php');
						$ntitle = mysqli_real_escape_string ($conn, $ntitle);	
						$ncategory = mysqli_real_escape_string ($conn, $ncategory);
						$ncontent = mysqli_real_escape_string ($conn, $ncontent);
						$query = "INSERT INTO news (ntitle, ncategory, ncontent) VALUES ('{$ntitle}', '{$ncategory}', '{$ncontent}')";
							if(mysqli_query ($conn, $query) === TRUE){
								echo "News successfully added to database.";
							}else {
								echo "Error";
								}
					}else {
						echo "All fields must be filled in!";
						}
				}else{
					echo "All parameters should be sent!";
					}
	
			}
		
			?>
	</div>
</body>
</html>