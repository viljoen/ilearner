<?php

include_once 'sessions.php';

session_destroy();

header('Location: http://localhost/ilearner/public/login');