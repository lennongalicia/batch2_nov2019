<html>
<title>HTML Tutorial</title>
<body>  


<?php
	session_start();
	
	echo '<h1 class = "text-center ">THE GIFT OF THE MAGI</h1>';
	
	$string = array(
	
  array(
  "title" => "",
  "story" => " ONE DOLLAR AND EIGHTY-SEVEN CENTS. That was all. And sixty
cents of it was in pennies. Pennies saved one and two at a time by
bulldozing the grocer and the vegetable man and the butcher
until one's cheek burned with the silent imputation of parsimony
that such close dealing implied. Three times Della counted it.
One dollar and eighty-seven cents. And the next day would be
Christmas.
There was clearly nothing left to do but flop down on the
shabby little couch and howl. So Della did it. Which instigates the
moral reflection that life is made up of sobs, sniffles, and smiles,
with sniffles predominating.
While the mistress of the home is gradually subsiding from the
first stage to the second, take a look at the home. A furnished flat
at $8 per week. It did not exactly beggar description, but it certainly had that word on the look-out for the mendicancy squad.
In the vestibule below was a letter-box into which no letter
would go, and an electric button from which no mortal finger
could coax a ring. Also appertaining thereunto was a card bearing
the name 'Mr. James Dillingham Young.'
The 'Dillingham' had been flung to the breeze during a former
period of prosperity when its possessor was being paid $30 per
week. Now, when the income was shrunk to $20, the letters of
'Dillingham' looked blurred, as though they were thinking seriously of contracting to a modest and unassuming D. But whenever
Mr. James Dillingham Young came home and reached his flat
above he was called 'Jim' and greatly hugged by Mrs. James
Dillingham Young, already introduced to you as Della. Which is
all very good.
Delia finished her cry and attended to her cheeks with the
powder rag. She stood by the window and looked out dully at a
grey cat walking a grey fence in a grey backyard. To-morrow
would be Christmas Day, and she had only $1.87 with which to
buy Jim a present. She had been saving every penny she could for  .",
		"page" => 1
		
	),
);

echo "" . $string[0] ["story"]; 
	
?>.",


<html>
<br></br>
<div>
<a href = "next.php">Next</a>


</div>
</body>
</html>
<style>
body{
	background-image: url("white.png");
	font-size: 20px;
	text-align: center;
	color: black;
	padding: 100px;
	margin: 10px;
}
h1{
	text-align:center;
	color: black;
}


td { 
    border:0px;
	padding: 10px;
}
</style>
