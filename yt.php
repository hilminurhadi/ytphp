<?php
# koenurf
# fb.com/mi.nurf
echo "# koenurf #\n";

$date = date("Y-m-d");

function yt($channel,$jumlah,$jeda){
$headers = array("Host: inscritosyt.websiteseguro.com", 
"Connection: Keep-Alive", 
"Contect-Length: 51",  
"Content-Type: application/x-www-form-urlencoded"
);
    $x = 0; 
    while($x < $jumlah) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://inscritosyt.websiteseguro.com/iniciar.php");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "#tipo:3#<->#".$date."#<->#".$channel);
    
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output."\n";
        sleep($jeda);
        $x++;
        flush();    
    }
}
echo "Channel YT: ";
$channel = trim(fgets(STDIN));
echo "Jumlah: ";
$jumlah = trim(fgets(STDIN));
echo "Jeda: ";
$jeda = trim(fgets(STDIN));

$do = yt($channel,$jumlah,$jeda);
print $do;
?>
