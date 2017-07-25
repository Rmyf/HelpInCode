<?php
$filename = $_POST['filename'];
unlink('utilisateur/' . $filename);
echo '<p>' . $article . ' has been deleted</p>';
//header('location: index.php');
