<?php
require 'function.php';

$conn=connect($config);
if(!$conn) die('problem connecting to db.');

$articles=get('articles',$conn);
if($_SERVER['REQUEST_METHOD']=== 'POST'){
	$article=$_POST['article'];
	$img=$_POST['images'];

	if( empty($article) || empty($img)){
		$status='please fill in both fields';}
		else{
			query(
				"INSERT INTO articles(article,img) VALUES(:article, :img)",
				array('article'=>$article,'imagest'=>$img),$conn
		); $status='article added successfully';
		}

}
include "header.php"; 
?>

		<section >
		<div class="one">	
			<div class="for">
			<p>5 signs that your pup is sick</p>
			</div>
		</div>
		<p class="line"> RECOMMENDED </p>
		<div class="two">
			<ul>
				<li>
					<a href="cat.php">
						<div class="three">
						<img src="image/chicks.jpg" class="pic" alt="">
						<p> The right env for your chicks</p>
						</div>
					</a>
				</li>
					
				<li>
					<a href="cat.php">
						<div class="three">
						<img src="image/cowss.jpg" class="pic" alt="">
						<p>how to milk cows</>
						</div>
					</a>
				</li>
					
				<li>
					<a href="cat.php">
						<div class="three">
						<img src="image/pig.jpg" class="pic" alt="">
						<p>How to breed pigs</p>
						</div>
					</a>
				</li>
				
			</ul>
		
		</div>
			
			
			<article  style="clear:both;">
				<?php foreach($articles as $article): ?>
					<div class="article">
						<p><?php $article['article']; ?></p> 
						<img src="<?php $img['images']; ?>">
					</div>
				<?php endforeach ?>
			</article>
		</section>
<?php include "footer.php"; ?>