<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_desarrollotg'
) or die(mysqli_erro($mysqli));

?>