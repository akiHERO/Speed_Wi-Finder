<?php
//Get the user's comment and name
$comment = htmlspecialchars ($_POST['comments']);
$name =  htmlspecialchars($_POST['name']);

print "Your name is ". $name;   
    print "<br />";   
    print "Your comments are:";  
    print "<br />";   
	print $comment;


//Append to the file
$f = fopen('dev_comments.txt', 'a');
fwrite($f, "<p>$comment</p><hr>");
fwrite($f, "<p>$name</p><hr>");
fclose($f);

//Jump back to the contact page
header('location:contactus.html');
?>
