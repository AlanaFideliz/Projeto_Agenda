<?php

$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?' . "/");

// a finalidade dessa função é que para independente do servidor que ela esteja, o php encontrar a pasta dos arquivos