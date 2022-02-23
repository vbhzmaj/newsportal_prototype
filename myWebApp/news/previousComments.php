<?php
			require('../konekcija.php');
			$queryc = "SELECT * FROM comments WHERE idnews='{$idnews}'";
			$resultc1 = mysqli_query ($conn, $queryc);
			
			if(mysqli_num_rows($resultc1) > 0){
				$resultc2 = array();
				
				while ($row = mysqli_fetch_assoc($resultc1)){
					
					array_push($resultc2, $row);
				}
			}else{
				die("<b>No previous comments available.</b>"); 
				}
					
							
			$resultc3 = array_reverse($resultc2);
			
			for ($row = 0; $row < count ($resultc3); $row++){
				?>
				<div class = "news">
				
						<p><b>Comment: </b><?php echo $resultc3[$row]['comment']; ?></p>
						<?php $cUserId = $resultc3[$row]['iduser'];
							$idcomment = $resultc3[$row]['idcomment'];
						?>
						
						<?php $query = "SELECT * FROM users WHERE iduser='{$cUserId}'";
						$result = mysqli_query($conn, $query);
						if(mysqli_num_rows($result) === 1) {
						$res = mysqli_fetch_assoc($result);
						$comUsername= $res['username'];}?>
						<p><b>Posted by <?php echo $comUsername; ?> on: </b><?php echo $resultc3[$row]['cdatetime']; ?></p>
						<?php if ($username == $comUsername) {?>
						<form action = "#" method = "post">
						<input type = "hidden" name = "idcomment" value="<?php echo $idcomment;?>">
						<input type = "submit" name = "cdelete" value = "Delete your comment">
						</form><?php } ?>
						<?php 
						if(isset($_POST['cdelete'])){
						$cid = $_POST['idcomment'];
						require ('../konekcija.php');
						$query = "DELETE FROM comments WHERE idcomment = '$cid'";
						mysqli_query($conn, $query);
						}
						?>
				</div>
				<?php
				}
				
			?>