<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Person2</title>
</head>
<body>
    <?php

        if(isset($_REQUEST['chatMsg'])){
            echo "Person1: ". $_REQUEST['chatMsg'];
        }
    ?>

    <form action="chatPerson1.php" method="post">

        Type your Msg.:<input type="text" name="chatMsg">
        <input type="submit">
    </form>

</body>
</html>
