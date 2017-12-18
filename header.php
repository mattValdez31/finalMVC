<?php 

session_start()
?>

<!doctype html>
<html>
<body>
	<?php
	if ($_SESSION['userEmail'] == 'admin@njit.edu')
	{?>
		<a href="https://web.njit.edu/~mjv32/is601001f17/finalMVC/index.php?page=admin_homepage&action=show"> User HomePage</a>
	<?php}
	else
	{?>
		<a href="https://web.njit.edu/~mjv32/is601001f17/finalMVC/index.php?page=user_homepage&action=show"> User HomePage</a>
	<?php}?>
</body>
</html>



