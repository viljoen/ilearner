<?php

include_once 'sessions.php';
include_once 'vendorsignupisvalid.php';

session_destroy();

redirectTo('login');