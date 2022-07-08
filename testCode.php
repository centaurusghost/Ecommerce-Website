<?php
include('./includes/connect.php');
?>

<form name="form" action="" method="POST">
    <span class="details">Enter Something<span class="optional_email"></span></span>
    <input type="text" placeholder="Enter your email" name="email_id">
    <br><br>
    <input type="submit" value="Insert" name="botton_pressed">
</form>
<div>

    <?php
    if (isset($_POST['botton_pressed'])) {
        if (isset($_POST['email_id'])) {
            $email = $_POST['email_id'];
            $insert_query = "insert into `email` (email_name) values('$email')";
            $result = mysqli_query($con, $insert_query);
            if ($result) {
                echo "<script>alert('Email added sucessfully')</script>";
            }
            else{
                echo "<script>alert('Cannot add duplicate email')</script>";
            }
            echo 'The email you entered is ' . $email;
        }
    }

    ?>
</div>