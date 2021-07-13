<section class="grid-container">
	
	<div class="main-card">
		<h2 class="stern-voice">
			This is an "Article Grid" module. This is it's heading. 
		</h2>
		<p class="calm-voice">
			Again, we totally just made that up. It is a box with boxes in it.
		</p>
	</div>

	<section class="card-grid-container">
		<div class="main-card">
			<h2 class="stern-voice">
				This is an Article Card. 
			</h2>
			<p class="calm-voice">
				It's basically a mini call to action, right?
			</p>
			<a href="" class="btn">act!</a>
		</div>

	<?php

		$gridText = [
			"head" => "This is the title of an article card",
			"text" => "Here's a little info to help you understand if this is an article you want to read",
			"button" => "Read More!",
		];
	

		for ($index = 1; $index <= 5; $index++) {?>

		<div class="main-card">
			<h2 class="stern-voice"><?=$gridText["head"]?></h2>
			<p class="calm-voice"><?=$gridText["text"]?></p>
			<a href="" class="btn"><?=$gridText["button"]?></a>
		</div>

	<?php } ?>
	</section>
	
</section>