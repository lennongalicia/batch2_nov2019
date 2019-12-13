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

   Jim stepped inside the door, as immovable as a setter at the
scent of quail. His eyes were fixed upon Della, and there was an
expression in them that she could not read, and it terrified her. It
was not anger, nor surprise, nor disapproval, nor horror, nor any
of the sentiments that she had been prepared for. He simply stared
at her fixedly with that peculiar expression on his face.
Della wriggled off the table and went for him.
'Jim, darling,' she cried, 'don't look at me that way. I had my
hair cut off and sold it because I couldn't have lived through
Christmas without giving you a present. It'll grow out again - you
won't mind, will you? I just had to do it. My hair grows awfully
fast. Say 'Merry Christmas' Jim, and let's be happy. You don't
know what a nice - what a beautiful, nice gift I've got for you.'
'You've cut off your hair?' asked Jim, laboriously, as if he had
not arrived at that patent fact yet even after the hardest mental
labour.
'Cut it off and sold it,' said Della. 'Don't you like me just as
well, anyhow? I'm me without my hair, ain't I?'
Jim looked about the room curiously.
'You say your hair is gone?' he said with an air almost of idiocy.
'You needn't look for it,' said Della. 'It's sold, I tell you - sold
and gone, too. It's Christmas Eve, boy. Be good to me, for it went
for you. Maybe the hairs of my head were numbered,' she went on
with a sudden serious sweetness, 'but nobody could ever count my
love for you. Shall I put the chops on, Jim?'
Out of his trance Jim seemed quickly to wake. He enfolded his
Della. For ten seconds let us regard with discreet scrutiny some
inconsequential object in the other direction. Eight dollars a week
or a million a year - what is the difference? A mathematician or a
wit would give you the wrong answer. The magi brought valuable
gifts, but that was not among them. This dark assertion will be
illuminated later on.
Jim drew a package from his overcoat pocket and threw it upon
the table.
'Don't make any mistake, Dell,' he said, 'about me. I don't think
there's anything in the way of a haircut or a shave or a shampoo
that could make me like my girl any less. But if you'll unwrap that
package you may see why you had me going awhile at first.'
White fingers and nimble tore at the string and paper. And then
an ecstatic scream of joy; and then, alas! a quick feminine change to
hysterical tears and wails, necessitating the immediate employment
of all the comforting powers of the lord of the flat. ",
		"page" => 1
		
	),
);

echo "" . $string[0] ["story"]; 
	
?>
<br></br>
<div>
<a href = "next1.php">Previous</a>
<a href = "next3.php">Next</a>

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
	text-align: center;
	color: black;
}


td { 
    border:0px;
	padding: 10px;
}
</style>
