<!DOCTYPE html>
<html>
  <head>
    <script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
      <meta charset="utf-8">
  </head>
  <body>


<?php
if(!isset($_COOKIE["validUser"])) {
    echo "Sorry please log in and try again! ";
} else {
    echo "Here is some member information for you!";
}
?>


</body>
</html>