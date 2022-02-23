	
<?php
	if(isset($_POST['submit'])){
		if(isset($_POST['iduser']) && isset($_POST['idnews']) && isset($_POST['comment'])){
			if(!empty($_POST['iduser']) && !empty($_POST['idnews']) && !empty($_POST['comment'])){
				$iduser = trim ($_POST['iduser']);
				$idnews = trim ($_POST['idnews']);
				$comment = trim ($_POST['comment']);
				require ('../konekcija.php');
				$iduser = mysqli_real_escape_string ($conn, $iduser);	
				$idnews = mysqli_real_escape_string ($conn, $idnews);
				$comment = mysqli_real_escape_string ($conn, $comment);
				$query = "INSERT INTO comments (comment, iduser, idnews) VALUES ('{$comment}', '{$iduser}', '{$idnews}')";
					if(mysqli_query ($conn, $query) === TRUE){
							echo '<b><p style="color:green;">Your comment is submitted.</p></b>';
							echo "</br>";
						}else {
							echo "Error"; echo $iduser; echo $idnews; echo $comment;
							}
			}else{
					echo '<b><p style="color:red;">Comment field must be filled in!</p></b>'; 
					echo "</br>";
				}
		}else{
				echo "All parameters should be sent!";
			}
	
	}
		
			?>
