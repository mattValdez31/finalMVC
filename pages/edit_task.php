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

<h1>Email: <?php echo $data->email; ?></h1>
<h1>First Name: <?php echo $data->fname; ?></h1>
<h1>Last Name: <?php echo $data->lname; ?></h1>


<?php
//this is how you print something  $data contains the record that was selected on the table.

print_r($data);


?>

<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

    Owner Email: <input type="text" name="owneremail" value="<?php echo $data->owneremail; ?>"><br>

    Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>"><br>
    Task Description: <input type="text" name="message" value="<?php echo $data->message; ?>"><br>
    Completed? : <input type="text" name="isdone" value="<?php echo $data->isdone; ?>"><br>
    <input type="submit" value="Submit form">
</form>




<script src="js/scripts.js"></script>
</body>
</html>
