<?php

$conn = new mysqli("localhost", "root", "", "one_piece_project");

if ($conn->connect_error) {die("fout: ".$conn->connect_error);}