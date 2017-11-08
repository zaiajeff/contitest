
<html>
<head>
</head>
<body>
<h1>Sentence analysis v1.0</h1>


<?php 
include("classes/Sentence.class.php");

$sentence = "";
if(isset($_POST['sentence']))
{
	$sentence = $_POST['sentence'];
}
?>

<form method="POST" action="">
	<input type="text" name="sentence" value="<?php print($sentence);?>"/>
	<input type="submit" name="analysis" value="Analyse this!">
</form>


<div>
	<h2>Analysis results :</h2>
	<div>
		<?php 
		echo("Analyzed sentence: '" . $sentence . "'<br />");
		$my_sentence = new Sentence();
		$my_sentence->setSentence($sentence);
		echo("Number of words: " . $my_sentence->getNumberOfWords() . "<br />");

		?>
	</div>
</div>



</body>
</html>
