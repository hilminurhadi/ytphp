<?php
echo "List Tools :\n[1]SMS BOMBER MyTsel (Unlimited)\n[2]SMS BOMBER TokenTsel (Limit)\n[3]SMS BOMBER JD.ID (Limit)\n[4]SMS BOMBER PHD (Limit)\n[5]SMS BOMBER TokoPedia (Limit)\n[6]SPAM CALL TokoPedia (Limit)\nMasukan Pilihan (1-6) : ";
$pilih = trim(fgets(STDIN));
if($pilih>6 OR $pilih<1){
    echo "Pilihan Tidak ada, silahkan pilih yang ada!\nMasukan Pilihanmu : ";
    $pilih = trim(fgets(STDIN));
    if($pilih>6 OR $pilih<1) $type = "fuck";
}
if($pilih==1){
    $type = "mytsel";
    $n = "SMS BOMBER MyTsel (Unlimited)";
}elseif($pilih==2){
    $type = "tokentsel";
    $n = "SMS BOMBER TokenTsel (Limit)";
}elseif($pilih==3){
    $type = "jdid";
    $n = "SMS BOMBER JD.ID (Limit)";
}elseif($pilih==4){
    $type = "phd";
    $n = "SMS BOMBER PHD (Limit)";
}elseif($pilih==5){
    $type = "toksms";
    $n = "SMS BOMBER TokoPedia (Limit)";
}elseif($pilih==6){
    $type = "tokcall";
    $n = "SPAM CALL TokoPedia (Limit)";
}
if($type=="fuck"){
    echo "Pilih salah satu goblog.\n";
}else{
    echo "Ok sayang kamu telah memilih $n.\n Silahkan tekan enter untuk melanjutkan..";
    $lanjut = trim(fgets(STDIN));
    require_once($type.".php");
}
