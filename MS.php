<?php

	$in1 = "block";
	$in2 = "block";
	$in3 = "none";
	$in4 = "none";
	$in5 = "none";
	$in6 = "none";
	$in7 = "none";
	$in8 = "none";
	$in9 = "none";
	$in10 = "none";
	$in11 = "block";
	$span = "block";

	$su1 = "block";
	$su2 = "none";
	$su3 = "none";
	$su4 = "none";

	function calck($n) {
		$Addition = ($_POST['input1'] +
					$_POST['input2'] +
					$_POST['input3'] +
					$_POST['input4'] +
					$_POST['input5'] +
					$_POST['input6'] +
					$_POST['input7'] +
					$_POST['input8'] +
					$_POST['input9'] +
					$_POST['input10']) /
					$_POST['input11'];

		echo"<div> Solution = " . $Addition * $n . "</div>";
		echo "<a href=" . $_SERVER['PHP_SELF'] .">try again</a>";
	};

	if (($_SERVER["REQUEST_METHOD"] === "POST") && (isset($_POST['submit1']))) {

		$in3 = "block";
		$in4 = "block";
		$in5 = "none";
		$in6 = "none";
		$in7 = "none";
		$in8 = "none";
		$in9 = "none";
		$in10 = "none";

		$su1 = "none";
		$su2 = "block";
		$su3 = "none";
		$su4 = "none";
		
	} elseif (($_SERVER["REQUEST_METHOD"] === "POST") && (isset($_POST['submit2']))) {

		$in3 = "block";
		$in4 = "block";
		$in5 = "block";
		$in6 = "block";
		$in7 = "none";
		$in8 = "none";
		$in9 = "none";
		$in10 = "none";

		$su1 = "none";
		$su2 = "none";
		$su3 = "block";
		$su4 = "none";

	} elseif (($_SERVER["REQUEST_METHOD"] === "POST") && (isset($_POST['submit3']))) {

		$in3 = "block";
		$in4 = "block";
		$in5 = "block";
		$in6 = "block";
		$in7 = "block";
		$in8 = "block";
		$in9 = "none";
		$in10 = "none";

		$su1 = "none";
		$su2 = "none";
		$su3 = "none";
		$su4 = "block";

	} elseif (($_SERVER["REQUEST_METHOD"] === "POST") && (isset($_POST['submit4']))) {

		$in3 = "block";
		$in4 = "block";
		$in5 = "block";
		$in6 = "block";
		$in7 = "block";
		$in8 = "block";
		$in9 = "block";
		$in10 = "block";

		$su1 = "none";
		$su2 = "none";
		$su3 = "none";
		$su4 = "none";

	} elseif (($_SERVER["REQUEST_METHOD"] === "POST") && (isset($_POST['submit5']))) {

		$in1 = "none";
		$in2 = "none";
		$in3 = "none";
		$in4 = "none";
		$in5 = "none";
		$in6 = "none";
		$in7 = "none";
		$in8 = "none";
		$in9 = "none";
		$in10 = "none";
		$in11 = "none";
		$span = "none";

		$su1 = "none";
		$su2 = "none";
		$su3 = "none";
		$su4 = "none";
		$su5 = "none";

		calck(1);
	}

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Input</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type='number' style='display:<?php echo $in1; ?>' name='input1' id="input1" min='0' max='10000' step='5' value='00'>
			<input type='number' style='display:<?php echo $in2; ?>' name='input2' id='input2' min='0' max='10000' step='5' value='00'>

			<input type='number' style='display:<?php echo $in3; ?>' name='input3' id='input3' min='0' max='10000' step='5' value='00'>
			<input type='number' style='display:<?php echo $in4; ?>' name='input4' id='input4' min='0' max='10000' step='5' value='00'>
			<input type="submit" style='display:<?php echo $su1; ?>' name='submit1' value="+">

			<input type='number' style='display:<?php echo $in5; ?>' name='input5' id='input5' min='0' max='10000' step='5' value='00'>
			<input type='number' style='display:<?php echo $in6; ?>' name='input6' id='input6' min='0' max='10000' step='5' value='00'>
			<input type="submit" style='display:<?php echo $su2; ?>' name='submit2' value="+">

			<input type='number' style='display:<?php echo $in7; ?>' name='input7' id='input7' min='0' max='10000' step='5' value='00'>
			<input type='number' style='display:<?php echo $in8; ?>' name='input8' id='input8' min='0' max='10000' step='5' value='00'>
			<input type="submit" style='display:<?php echo $su3; ?>' name='submit3' value="+">

			<input type='number' style='display:<?php echo $in9; ?>' name='input9' id='input9' min='0' max='10000' step='5' value='00'>
			<input type='number' style='display:<?php echo $in10; ?>' name='input10' id='input10' min='0' max='10000' step='5' value='00'>
			<input type="submit" style='display:<?php echo $su4; ?>' name='submit4' value="+">

			<span style='display:<?php echo $span; ?>'>/</span>
			<input type='number' style='display:<?php echo $in11; ?>' name='input11' min='0' max='10000' step='1' value='1'>
			<input type="submit" style='display:<?php echo $su5; ?>' name='submit5' value="Calc">
		</form>
    </body>
</html>
