<?php

session_start();
session_destroy();
header("Location: ../page/client/index.php");
