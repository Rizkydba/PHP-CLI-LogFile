<?php
echo "\e[1;32mType 'json' to convert to a JSON file, type 'text' to convert to a plaintext file, or type 'next' to continue : \e[0m\n";
$input = fopen("php://stdin","r");
$word = trim(fgets($input));

?>
<?php
if($word ==='json'){
	chdir('TelkomTest');
	$a = system('copy error.log error.json');
	echo $a;

	echo "\e[1;32m\nDo You Want To Move This 'error.json' File to Your Desktop ?(y/n):\e[0m\n";
	$jsinput = fopen("php://stdin","r");
	$jsmv = trim(fgets($jsinput));

	if($jsmv === 'y'){
		$jsmvps = system('move C:\var\log\nginx\error.json C:\User\johnmayer\Desktop\nginxlog.json');
		echo $jsmvps;
		echo "\nYour File Has Been Move to Your Desktop Successfully";
	}
	else{
		echo "\nYou can find your 'error.json' file in var/log/nginx/";
	}
}
else if($word ==='text'){
	chdir('var/log/nginx');
	$b = system('cp error.log error.txt');
	echo $b;

	echo "\e[1;32mDo You Want To Move This 'error.txt' File to Your Desktop ?(y/n):\e[0m\n";
	$txinput = fopen("php://stdin","r");
	$txmv = trim(fgets($txinput));

	if($txmv === 'y'){
		$txmvps = system('move C:\var\log\nginx\error.txt C:\User\johnmayer\Desktop\nginxlog.txt');
		echo $txmvps;
		echo "\nYour File Has Been Move to Your Desktop Successfully";
	}
	else{
		echo "\nYou can find 'error.txt' file in var/log/nginx/";
	}
}
else if($word ==='next'){
	chdir('var/log/nginx');
	$b = system('cp error.log error.txt');
	echo $b;

	echo "\e[1;32mDo You Want To Move This 'error.txt' File to Your Desktop ?(y/n):\e[0m\n";
	$txinput = fopen("php://stdin","r");
	$txmv = trim(fgets($txinput));

	if($txmv === 'y'){
		$txmvps = system('mv move C:\var\log\nginx\error.txt C:\User\johnmayer\Desktop\nginxlog.txt');
		echo $txmvps;
		echo "\nYour File Has Been Move to Your Desktop Successfully";
	}
	else{
		echo "\nYou can find 'error.txt' file in var/log/nginx/";
	}
}
else{
	echo "\e[1;31mplease type the word according to the command\e[0m\n";
}
?>