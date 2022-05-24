<?php
if ($_POST["path"] != "") {

  $my_dir = './../' . $_POST["path"] . '/';
  $url = '?path=' . $_POST["path"];
} else {
  $my_dir = "./../root";
  $url = "";
}
$my_dir .= $_POST["file_name"];
if (!is_dir($my_dir)) {
  mkdir($my_dir);
  echo "Se ha creado el directorio $my_dir";
  header('location:./../index.php' . $url);
} else {
  echo "el directorio $my_dir ya existe! No lo vamos a crear de nuevo";
  header('location:./../index.php' . $url);
}
