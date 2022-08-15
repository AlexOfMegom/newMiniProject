
<?php



$file = "book.txt";
$data = date('Y-m-d H:i:s');
$text = $_REQUEST['textUser'];
$name = $_REQUEST['nameUser'];
if (@$_REQUEST['add']) {
  $f = fopen($file, "a");
//   if (@$_REQUEST['textUser'] && @$_REQUEST['nameUser']) fputs($f, '<span class="date-mess"><b>'.$data.'</b> '.$name. " </span><br>". " <span class='message'>" .$text ."</span>"."\n");
  if (@$_REQUEST['textUser'] && @$_REQUEST['nameUser']) fputs($f, '<span class="date-mess"><b>'.$data.'</b> '.$name. " </span><br>". " <span class='message'>" .$text ."</span>"."\n");
  fclose($f);

}
$gb = @file($file);
if (!$gb) $gb = [];



?> 