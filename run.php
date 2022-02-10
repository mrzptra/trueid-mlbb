<?php
/*
    RAZEPEDIA
    https://github.com/mrzptra
    API BY RAZEPEDIA.MY.ID
*/

function trueidml($userid, $serverid){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://reztod.my.id/api/trueid_ml.php?userid='.$userid.'&zoneid='.$serverid.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$respon = curl_exec($curl);

curl_close($curl);
$jsondata = json_decode($respon);
if($jsondata->status == "true"){
  echo "===================================\n";
  echo " IGN : ".$jsondata->data->nickname."\n";
  echo "===================================\n";
}else{
  echo "===================================\n";
  echo " Error, UserID atau ServerID salah \n";
  echo "===================================\n";
  }
}
print "====================================\n";
print "┏━━━┳━━━┳━━━━┳━━━┳━━━┳━━━┳━━━┳━━┳━━━┓\n";
print "┃┏━┓┃┏━┓┣━━┓━┃┏━━┫┏━┓┃┏━━┻┓┏┓┣┫┣┫┏━┓┃\n";
print "┃┗━┛┃┃╋┃┃╋┏┛┏┫┗━━┫┗━┛┃┗━━┓┃┃┃┃┃┃┃┃╋┃┃\n";
print "┃┏┓┏┫┗━┛┃┏┛┏┛┃┏━━┫┏━━┫┏━━┛┃┃┃┃┃┃┃┗━┛┃\n";
print "┃┃┃┗┫┏━┓┣┛━┗━┫┗━━┫┃╋╋┃┗━━┳┛┗┛┣┫┣┫┏━┓┃\n";
print "┗┛┗━┻┛╋┗┻━━━━┻━━━┻┛╋╋┗━━━┻━━━┻━━┻┛╋┗┛\n";
print "====================================\n";
echo "Masukkan UserID ? \nInput : ";
$user = trim(fgets(STDIN));
echo "Masukkan ZoneID ? \nInput : ";
$server = trim(fgets(STDIN));

$gasken = trueidml($user, $server);
print $gasken;
