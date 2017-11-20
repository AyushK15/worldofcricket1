<html>
<body>
Welcome </br>
<?php echo "hello"; ?>
<?php if (isset($_POST['mail'])) echo "checked" else echo "unavail";?></br>
Your email address is: <?php echo htmlspecialchars($_POST['mail']); ?>
</body>
</html>
