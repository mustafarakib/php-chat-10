<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Person1</title>
</head>
<body>
   <?php
      if(isset($_REQUEST['chatMsg'])){
          echo "Person2: ". $_REQUEST['chatMsg'];
      }
   ?>

   <form action="chatPerson2.php" method="post">

       Type your Msg.:<input type="text" name="chatMsg">
       <input type="submit">
   </form>

</body>
</html>
