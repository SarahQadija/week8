<?php
setcookie('Donelogin', false, time()-3600);
header('Location: index.php');
exit;
?>
