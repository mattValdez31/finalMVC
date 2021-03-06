<?php
session_start();
include("admin_header.php");
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

<h1>All Accounts</h1>

<?php
//this is how you print something

print utility\htmlTable::generateTableFromMultiArray($data);


?>


<script src="js/scripts.js"></script>
</body>
</html>
