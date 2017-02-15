<?php
  session_start();

  $chatHistory = file_get_contents("chatHistory.txt");
    echo "<textarea id='show' rows='20' cols='50'> $chatHistory </textarea>";

  $myReply = "This is my Chat Msg.". time();
  $chatMSG = $_SESSION['nickName']. ": ".$myReply ."\n";

  file_put_contents("chatHistory.txt",$chatMSG,FILE_APPEND);
?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
    $(document).ready(
        function() {
            setInterval(function(){
                $("#show").load("chatHistory.txt"); //it will make ajax call to chatHistory.txt,
                                       // and get output from that script, and load to #show div
                var textarea = document.getElementById('show');
                textarea.scrollTop = textarea.scrollHeight;
            }, 100);
        }
    );
    
    var textarea = document.getElementById('show');
    textarea.scrollTop = textarea.scrollHeight;
</script>
