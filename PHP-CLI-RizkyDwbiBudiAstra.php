<?php
echo "\e[1;32mType 'json' to convert to a JSON file, type 'text' to convert to a plaintext file, or type 'next' to continue : \e[0m\n";
$input = fopen("php://stdin","r");
$word = trim(fgets($input));

?>
<?php
if($word ==='json'){
	chdir('var/log/nginx');
	$a = system('cp error.log error.json');
	echo $a;

	echo "\e[1;32mDo You Want To Move This 'error.json' File to Your Desktop ?(y/n):\e[0m\n";
	$jsinput = fopen("php://stdin","r");
	$jsmv = trim(fgets($jsinput));

	if($jsmv === 'y'){
		$jsmvps = system('mv error.json /User/johnmayer/Desktop');
		echo $jsmvps;
		echo "Your File Has Been Move to Your Desktop ...";
	}
	else{
		echo "You can your 'error.json' file in var/log/nginx/";
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
		$txmvps = system('mv error.txt /User/johnmayer/Desktop');
		echo $txmvps;
		echo "Your File Has Been Move to Your Desktop ...";
	}
	else{
		echo "You can find 'error.txt' file in var/log/nginx/";
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
		$txmvps = system('mv error.txt /User/johnmayer/Desktop');
		echo $txmvps;
		echo "Your File Has Been Move to Your Desktop ...";
	}
	else{
		echo "You can find 'error.txt' file in var/log/nginx/";
	}
}
else{
	echo "\e[1;31mplease type the word according to the command\e[0m\n";
}
?>