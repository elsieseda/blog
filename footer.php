<?php
$comments=get('comments',$conn);

if($_SERVER['REQUEST_METHOD']=== 'POST'){
	$author=$_POST['author'];
	$comm=$_POST['comment'];

	if( empty($author) || empty($comm)){
		$status='please fill in both fields';}
		else{
			query(
				"INSERT INTO comments(author,comment) VALUES(:author, :comment)",
				array('author'=>$author,'comment'=>$comm),$conn
		); $status='comment added successfully';
		}

}

?>

		<footer>
		<div class="icons">
			<label ><span>Ask doc:
						<a href="diy.php" class="licon"><img src="image/twit.png" class="icon" alt="twitter"></a>
						<a href="diy.php" class="licon"><img src="image/insta.jpeg" class="icon" alt="instagram"></a>
						<a href="diy.php" class="licon"><img src="image/fb.png" class="icon" alt="facebook"></a></span>
			</label>
		</div>
		<form method="post" action="">
		<label for="author"> name:</label>
		<input type="text" name="author" id="author" placeholder="enter your name"><br><br> 
		<label for="comment">comment:</label>
		<textarea name="comment" id="comment"> </textarea><br>
		<input type="submit" id="submit" value="create comment">
		</form>
		<?php if(isset($status)){
			echo $status;
		}?>
		

		<h2>comments</h2>
		<?php foreach($comments as $comment) : ?>
			<div class="comment">
				<p><?= $comment['comment'];?></p>
				<h5><i><?= $comment['author'];?></i></h5>
			</div>

		<?php endforeach; ?>
		</footer>
	</body>
	

</html>