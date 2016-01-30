<?php 
$db = new PDO("mysql:dbname=animals;host:localhost","root","");
$ans = $_POST['option'];
$que = $_POST['q'];
$option = $db->prepare("SELECT * FROM quis WHERE question = :ask");
$option->execute([':ask'=>$que]);
$fe = $option->fetch(PDO::FETCH_ASSOC);
if($fe['key']==$ans)
{
	echo "correct answer";
}
else
{
	echo "wrong answer";
}
?>