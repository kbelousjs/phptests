<?
if (isset($_GET['photo_id'])) {
    
  $photo_id = mysql_real_escape_string($_GET['photo_id']);
  $sql = "SELECT * FROM " . $dbprefix . "photos WHERE photo_id=$photo_id";
  $result=mysql_query($sql);

?>
