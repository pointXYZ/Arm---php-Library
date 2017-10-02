<?php
function getqr($st){
$rt = "https://api.qrserver.com/v1/create-qr-code/?data=$st&size=100x100";
return $rt;
}
function s($text){
    echo $text;
}
function setsession($name,$value){
    $_SESSION[$name] = $value;
    
}
function siteget( $url, $timeout = 60 ){
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_HEADER, false );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
    $result = curl_exec( $ch );
    curl_close( $ch );
    return $result;
}
function file_get($url){
  $res = file_get_contents($url);
  if($res){
  return $res;
}else{
    $er = "<br>error - Arm file_get";
    return $er;
}
  }
function getsession($name){
  $res = $_SESSION[$name];
  return $res;
}
function sum($n1,$n2){
 
    $res = $n1 + $n2;
  return $res;
}
function jpmail($to,$subject,$meseage,$headers){
  mb_sent_mail($to, $subject, $message, $headers);
}
function varsh($value){
  var_dump($value);
}
function gethost($ip){
  $host = gethostbyaddr($ip);
  return $host;
}
function getip(){
  $ip = $_SERVER['REMOTE_ADDR'];
  return $ip;
}
function createf($fname,$value,$mode){
    if($mode=="add"){
        $fp = fopen($fname,"ab");
    }else{
        $fp = fopen($fname,"wb");
    }
    if(fwrite($fp,$value)){
        return true;
    }else{
        $er = "<br>error - Arm createf";
        return $er;
    }
}
function getsqlite($sqlp,$table,$calam,$num = 1){
    $db = new sqlite3($sqlp);
    $sql = "select * from ".$table."";
    $re = $db->query($sql);
      while ($row = $re->fetchArray()) {
    $id = $row[''.$calam.''];
    $r++;
    if($num=$r){
        break;
    }
  }
  if($id){
  return $id;
  }else{
      $er = "<br>error - Arm getsqlite";
      return $er;
  }
}
?>