<?php

$id = isset($_POST["id"]) ? intval($_POST["id"]) : null;

if ($id == null)
  header("Location: index.php");

require_once("models/Livro.php");

$produto = new Livro();
$produto->delete($id);

header("Location: index.php");
