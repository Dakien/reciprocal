<?php

	ob_start();
	include('./header.php');
	$buffer = ob_get_contents();
	ob_end_clean();
	// dynamic page title
	$buffer = str_replace("%TITLE%", "View Recipe", $buffer);
	echo $buffer;

?>

<div class="styled_box" id="vr_container">
	<div>
		<h3 class="no_top_margin">Recipe Name</h3>
		<h5>by Username | December 1, 2014</h5>
	</div>
	<img id="vr_image" src='http://www.epicurious.com/images/recipesmenus/2013/2013_october/51193660.jpg'>
	<div class="vr_field">
		<p class="bold">Ingredients</p>
		<p>text text text</p>
	</div>
	<div class="vr_field">
		<p class="bold">Cook Time</p>
		<p>3 hours 35 minutes</p>
	</div>
	<div class="vr_field">
		<p class="bold">Cuisine</p>
		<p>text text text</p>
	</div>
	<div class="vr_field">
		<p class="bold">Type</p>
		<p>text text text</p>
	</div>
	<div class="vr_field">
		<p class="bold">Description</p>
		<p>text text text</p>
	</div>
</div>

<?php

	include('./footer.php');

?>