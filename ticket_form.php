<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $accountNum = $_POST['accountNum'];
  $sortCode = $_POST['sortCode'];
  $expiryDate = $_POST['expiryDate'];
  $numOfTickets = $_POST['numOfTickets'];
  
  $mailTo = "hbunketi@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = $numOfTickets." tickets have been bought by ".$name.".\n\n";
  
  mail($mailTo, "new ticket purchase", $txt, $headers);
  header("Location: index.php?mailsend");
}

?>
