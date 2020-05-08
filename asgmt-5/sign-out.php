<?php
require_once('lib_auth.php');

if(is_logged('user/uID')) signout('sign-in.php');
else header('location:sign-in.php');