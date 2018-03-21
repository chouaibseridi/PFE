<?php
// Start the session
session_start();
?>
<?php
unset($_SESSION);
 header('Location: index.php');
?>