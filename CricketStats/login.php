<?php
$realm = 'Restricted area';
  session_start(); //to ensure you are using same session


 $db = new SQLite3("db/user.db");
 $result = $db->query("select * from user_details");
$users = array();

while($row=$result->fetchArray()){  
  $users =  array_merge($users, array($row['username'] => $row['password'])); //array($row['username'] => $row['password']);
}

if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$realm.
           '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');
  session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
unset($_SERVER['PHP_AUTH_DIGEST']);
   
   echo '<a href="login.php"> Try Login Again</a>';  
  echo '<br>';
    echo '<a href="index.php"> Go back to home</a>';  

  echo '<br>';
   die('User hits Cancel button!');
  

}


// analyze the PHP_AUTH_DIGEST variable
if (!($data = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) ||  !isset($users[$data['username']])){

  header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$realm.
           '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');
  session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
unset($_SERVER['PHP_AUTH_DIGEST']);
  
  echo '<a href="index.php"> Go back to home</a>';  
  echo '<br>';
   die('Wrong Credentials! Please contact admininstrator');   
}


// generate the valid response
$A1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
$valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);

if ($data['response'] != $valid_response){
  header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$realm.'",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');
  echo '<a href="index.php"> Go back to home</a>';  
  echo '<br>';
   die('Wrong Credentials! Please contact admininstrator');   
}
// ok, valid username & password
else{
  
$_SESSION["username"]= $data['username'];
  echo 'You are logged in as: ' . $data['username'];
  header("Location: work.php"); /* Redirect browser */
exit();
  echo '<a href="?action=logout"> logout</a>';  

    }

// function to parse the http auth header
function http_digest_parse($txt)
{
    // protect against missing data
    $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $data = array();
    $keys = implode('|', array_keys($needed_parts));

    preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);

    foreach ($matches as $m) {
        $data[$m[1]] = $m[3] ? $m[3] : $m[4];
        unset($needed_parts[$m[1]]);
    }

    return $needed_parts ? false : $data;
}
?>