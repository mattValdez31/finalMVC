<?php
session_start();
if ($_SESSION['userEmail'] == 'admin@njit.edu')
{
        include("admin_header.php");
}
else
{
	include("user_header.php");
}
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<h3>
   <?php
        echo 'Logged in as: ' . $_SESSION['userEmail'];
   ?>
   <form action="index.php?page=accounts&action=logout" method="POST">

       <div class="container">
               <button type="submit">Logout</button>
	           </div>


		   </form>
</h3>

<?php

//this is how you print something  $data | contains the record that was selected on the table.
print utility\htmlTable::generateTableFromOneRecord($data);


?>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
        Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
	Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
	Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
	Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
	Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">
</form>




<script src="js/scripts.js"></script>
</body>
</html>
