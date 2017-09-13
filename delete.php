<?php

$filename = $_POST['filename'];
unlink('posts/' . $filename. '.txt');
echo '<p>' . $filename . ' has been deleted</p>';
header('location: index.php');

