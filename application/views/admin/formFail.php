<html>
<head>
<title> <?php $isMsg = empty($msg); if (!$isMsg) { echo $msg; } ?>  </title>
<meta http-equiv="refresh" content="2;url=/sandbox">
</head>
<body>
<?php $isMsg = empty($msg); if (!$isMsg): ?>
<h1> <?php echo $msg ?> </h1>
<?php else : ?>
<h1> Login was unsuccessful </h1>
<?php endif; ?>
</body>
</html>