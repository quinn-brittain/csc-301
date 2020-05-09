<?php
require_once 'utils/lib-auth.php';

if(is_logged('user/uID')) signout('sign-in.php');
else header('location:sign-in.php');