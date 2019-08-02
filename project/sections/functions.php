<?php 
    if(isset($_SESSION["realip"])){}else{
      $ip = file_get_contents('https://api.ipify.org');
    $_COOKIE["realip"] = $ip;
    $_SESSION["realip"] = $ip;
    }


    if(isset($_SESSION['city']) && isset($_SESSION['country'])){

    }else{

      //END OF GET IP
    $ipaddress = $_SESSION["realip"] ;
    $auth2 = "2b0f8a3e-0bdf-4a9b-a29d-aae752a2dcf5";
    $auth3 = "83a4ac34-126a-47bb-b06c-9c75f61eb740";
    $auth1 = "d0eb8410-c403-483e-a7fb-750f787a1136";
    $auth5 = "676be931-6c5a-4c60-ab5a-4401ac5a038a";
        
    $resultq = json_decode(file_get_contents('https://ipfind.co/?ip='.$ipaddress.'&auth='.$auth5.''));
    $result =  (array)$resultq;
    if(!isset($result['error'])){
    $_SESSION['ip'] = $ipaddress;
    $_SESSION['country'] = $result['country'];
    $_SESSION['city'] = $result['city'];

    }else{
    
    $resultq = json_decode(file_get_contents('https://ipfind.co/?ip='.$ipaddress.'&auth='.$auth2.''));
    $result =  (array)$resultq;
    if(!isset($result['error'])){
    $_SESSION['ip'] = $ipaddress;
    $_SESSION['country'] = $result['country'];
    $_SESSION['city'] = $result['city'];
  
    
    }else{
    
    
    $resultq = json_decode(file_get_contents('https://ipfind.co/?ip='.$ipaddress.'&auth='.$auth1.''));
    $result =  (array)$resultq;
    if(!isset($result['error'])){
    $_SESSION['ip'] = $ipaddress;
    $_SESSION['country'] = $result['country'];
    $_SESSION['city'] = $result['city'];
  
    
    }
    
    
    }
    }
  }
    

  $req   = 'http://ipinfo.io/'.$ipaddress.'/geo';
        
    if(!isset($_SESSION['lat'])){
    $resultq = json_decode(file_get_contents($req));
    $result =  (array)$resultq;
    if(!isset($result['error'])){
    $_SESSION['ip'] = $ipaddress;
    $_SESSION['country'] = $result['country'];
    $_SESSION['city'] = $result['city'];
    $_SESSION['loc'] = $result['loc']; 

   
    $loca = explode(',', $_SESSION['loc']);

    $_SESSION['lat'] = $loca[0];
    $_SESSION['long'] = $loca[1];

    }
    }

    function setloc(){
           //END OF GET IP
    $ipaddress = $_SESSION["realip"] ;
    $auth2 = "2b0f8a3e-0bdf-4a9b-a29d-aae752a2dcf5";
    $auth3 = "83a4ac34-126a-47bb-b06c-9c75f61eb740";
    $auth1 = "d0eb8410-c403-483e-a7fb-750f787a1136";
    $auth5 = "676be931-6c5a-4c60-ab5a-4401ac5a038a";

    $req   = 'http://ipinfo.io/'.$ipaddress.'/geo';
        
    if(!isset($_SESSION['lat'])){
    $resultq = json_decode(file_get_contents($req));
    $result =  (array)$resultq;
    if(!isset($result['error'])){
    $_SESSION['ip'] = $ipaddress;
    $_SESSION['country'] = $result['country'];
    $_SESSION['city'] = $result['city'];
    $_SESSION['loc'] = $result['loc']; 

   
    $loca = explode(',', $_SESSION['loc']);

    $_SESSION['lat'] = $loca[0];
    $_SESSION['long'] = $loca[1];

    }
    }

    }
    ?>   