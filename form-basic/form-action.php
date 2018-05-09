<?php
function sanitizeinput($myinput){
 $myinput = trim($myinput);
 $myinput = htmlentities($myinput,ENT_QUOTES,'UTF-8');
 return $myinput;
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>A Simple Form</title>
</head>

<body>
  <p><strong>Name:</strong> <?php echo sanitizeinput($_POST['name']);?>
  </p>
  <p><strong>Email:</strong> <?php echo sanitizeinput($_POST['email']);?>
  </p>
  <p><strong>Level:</strong>
    <?php
    if( isset($_POST['level'])){
    echo sanitizeinput($_POST['level']);


    }
    ?>
 </p>
 <p><strong>Publications: </strong>
   <?php
   if(isset($_POST['publications'])){
   echo sanitizeinput (implode(',', $_POST['publications']));

   }
     ?>
   </p>
   <p><strong> Fun Stuff </strong><?php echo sanitizeinput($_POST['funstuff']);?> </p>
     <p><strong>Comments: </strong></p>
     <p><?php echo nl2br(sanitizeinput($_POST['comments'])); ?> </p>
   </body>
   </html>
