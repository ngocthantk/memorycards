<?php 
	//if (isset($_GET['edit']) || isset($_GET['del'])){
//if (file_exists('idcard.txt')){
	unlink('cardid.txt');

	$_myfile = fopen("cardid.txt", "a");
	$_id = $array_cards['idCard'];
	fwrite($_myfile, $_id);
	fclose($_myfile);

//if (file_exists('C:/wamp64/www/PHP/memorycard/idgroupcard.txt')){
	unlink('groupcardid.txt');

	$_myfileGC = fopen("groupcardid.txt", "a");
	$_idGC = $array_cards['idGroupCard'];
	fwrite($_myfileGC, $_idGC);
	fclose($_myfileGC);
	//}
?>