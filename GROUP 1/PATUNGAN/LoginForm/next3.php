<html>
<title>HTML Tutorial</title>
<body>  



<?php
	session_start();
	
	echo '<h1 class = "text-center ">The Gift of the Magi</h1>';
	
	$string = array(
	
  array(
  "title" => "",
  "story" => "

   For there lay The Combs - the set of combs, side and back, that
Della had worshipped for long in a Broadway window. Beautiful
combs, pure tortoiseshell, with jewelled rims - just the shade to
wear in the beautiful vanished hair. They were expensive combs,
she knew, and her heart had simply craved and yearned over them
without the least hope of possession. And now they were hers, but
the tresses that should have adorned the coveted adornments were
gone.
But she hugged them to her bosom, and at length she was able
to look up with dim eyes and a smile and say: 'My hair grows so
fast, Jim!'
And then Della leaped up like a little singed cat and cried, 'Oh,
oh!'
Jim had not yet seen his beautiful present. She held it out to
him eagerly upon her open palm. The dull precious metal seemed
to flash with a reflection of her bright and ardent spirit.
'Isn't it a dandy, Jim? I hunted all over town to find it. You'll
have to look at the time a hundred times a day now. Give me your
watch. I want to see how it looks on it.'
Instead of obeying, Jim tumbled down on the couch and put his
hands under the back of his head and smiled.
'Dell,' said he, 'let's put our Christmas presents away and keep
'em awhile. They're too nice to use just at present. I sold the
watch to get the money to buy your combs. And now suppose you
put the chops on.'
The magi, as you know, were wise men - wonderfully wise men
- who brought gifts to the Babe in the manger. They invented the
art of giving Christmas presents. Being wise, their gifts were no
doubt wise ones, possibly bearing the privilege of exchange in case
of duplication. And here I have lamely related to you the uneventful chronicle of two foolish children in a flat who most unwisely
sacrificed for each other the greatest treasures of their house. But
in a last word to the wise of these days, let it be said that of all who
give gifts these two were the wisest. Of all who give and receive
gifts, such as they are wisest. Everywhere they are wisest. They are
the magi. ",
		"page" => 1
		
	),
);

echo "" . $string[0] ["story"]; 
echo '<h1 class = "text-center ">The End</h1>';	
?>
<br></br>
<div>
<a href = "next2.php">Previous</a>
<a href = "logout.php">log out</a>
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