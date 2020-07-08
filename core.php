<?php
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    echo "Here are your details <br>"." "."Firstname: ".$firstname."<br>"."Lastname: ".$lastname;

}

?>