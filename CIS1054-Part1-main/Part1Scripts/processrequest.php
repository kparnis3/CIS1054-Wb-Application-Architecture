<<<<<<< HEAD
<?php
	session_start();
    if (isset($_POST['submit'])){ //if normal access
 

        $_SESSION['sess_username'] = $_POST['Username'];
        $_SESSION['sess_age'] = $_POST['age'];

        header("Location: questionthree.php?success");
    }
    else{
        header("Location: questionthree.php");
    }
?>	
=======
<?php
	session_start();
    if (isset($_POST['submit'])){ //if normal access
 

        $_SESSION['sess_username'] = $_POST['Username'];
        $_SESSION['sess_age'] = $_POST['age'];

        header("Location: questionthree.php?success");
    }
    else{
        header("Location: questionthree.php");
    }
?>	
>>>>>>> 79f6c1d315dbc03540999efd779572f6f26ca731
	