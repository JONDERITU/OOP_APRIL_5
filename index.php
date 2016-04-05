<!--
 * Cytonn Technologies
 *
 * @author: JOSEPH GICHANE <jgichane@cytonn.com>
 *
 * Project: OBJECT ORIENTED CONCEPTS.
 *
 *-->
<?php
//index.php 

require_once 'includes/global.inc.php';
?>

<html>
<head>
	<title>Homepage</title>
</head>
<body>

<?php if(isset($_SESSION['logged_in'])) : ?>
	<?php $user = unserialize($_SESSION['user']); ?>
	Hello, <?php echo $user->username; ?>. You are logged in. <a href="logout.php">Logout</a> | <a href="settings.php">Change Email</a>
<?php else : ?>
	You are not logged in. <a href="login.php">Log In</a> | <a href="register.php">Register</a>
<?php endif; ?>

</body>
</html>