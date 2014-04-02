<?php
  // The global $_POST variable allow to access the data send with the POST method
  // To access the data send with the GET method, you can use $_GET
  $username = htmlspecialchars($_POST['username']);
  $usercomments = htmlspecialchars($_POST['usercomments']);
  $buildings= htmlspecialchars($_POST['buildings']);

    print "Your name is ". $username;   
    print "<br />";   
    print "Your comments are:";  
    print "<br />";   
	print $usercomments;
    print "<br />";   
    print "Your building is ". $buildings;   
?>
