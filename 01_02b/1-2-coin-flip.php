<style>
	.coin {
		background: #999999;
		color: #333333;
		border-radius: 50%;
		padding: 50px;
		text-align: center;
		font-size: 2rem;
		font-weight: bold;
		width: 50px;
	}
</style>

<?php

function flip() {
	// Challenge: define this function
	$n = rand(0,1);
	if ($n == 0){
		return "H";
	}
	return "T";
//return (0 == rand(0,1))? "H" : "T";
}

?>

<div class="coin">
	<?php echo flip(); ?>
</div>