<?php

$password = 'pepito';

$password1 = 'josito';

$password2 = 'anita';


$hash = crypt($password);
$hash1 = crypt($password1);
$hash2 = crypt($password2);

echo $hash;
echo $hash1;
echo $hash2;