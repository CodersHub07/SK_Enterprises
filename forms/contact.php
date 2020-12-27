<?php
$name = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['number'];
$msg = $_POST['message'];

if (empty($name) || empty($email) || empty($msg)){
    echo "please file the form";
}
else{
    mail("vighneshgupta32@gmail.com" , "Submitted Message" , "Here's My Phone number $num and message is $msg " , "From: $name <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>