<?php
    if(isset($_POST["insert"]))
    {
        $conn = mysqli_connect("localhost","(YOURUSER)","(YOURPASSWORD)","(YOURDATABASE)");
        $query = "INSERT INTO 'TABLENAME'(name) VALUES('".$_POST['insert']."')";
        $result = mysqli_query($conn,$query);
        echo "Datos guardados";
    }

?>