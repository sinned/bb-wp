<? 
$number = 1234.56;

// let's print the international format for the en_US locale
setlocale(LC_MONETARY, 'en_US');
echo money_format('%.2n', $number) . "\n";

phpinfo();
