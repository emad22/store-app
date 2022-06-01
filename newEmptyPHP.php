<?php

//echo crypt('admin' , '$2a$07$yeNCSNwRpYopOhv0TrrReP$');
//$salt = openssl_random_pseudo_bytes(16);
//echo $salt;

//$paths = dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'sessions';
define('SAVEPATH', dirname(realpath(__FILE__)).DIRECTORY_SEPARATOR.'sessions' );

//Session Full Class With its important functions (methods)

class EXPSESSIONHANDLER extends SessionHandler {
    
    // name of the session
    private $SessionName            = "MYSESS"; 
    private $SessionMaxLifeTime     = 1;
    private $SessionSSL             = false;
    private $SessionhttpAccesONLY   = true;
    private $SessionPath            = '/';
    private $SessionDomain          = '.explain.com';
    private $sessionSavePath        = SAVEPATH;
    
//    private $sessionCipherAlgo     = MCRYPT_BLOWFISH;
//    private $sessionCipherMod     = MCRYPT_MODE_ACP;
    private $sessionCipherKey     = 'mygsacdsad2016';
    private $timeToLife  = 1;


//    Magic Methods
    public function __construct() {
        ini_set('session.use_cookies', 1);
        ini_set('session.use_only_cookies', 1);
        ini_set('session.use_trans_sid', 0);        
        ini_set('session.save_handler', 'files');
        
        session_name($this->SessionName);
        session_save_path($this->sessionSavePath);
        session_set_cookie_params(
                $this->SessionMaxLifeTime, 
                $this->SessionPath, 
                $this->SessionDomain, 
                $this->SessionSSL, 
                $this->SessionhttpAccesONLY
                );
        
      session_set_save_handler($this, true);  
        
    }
    function __get($key) {
       return false !== $_SESSION[$key] ? $_SESSION[$key]  : false;
   }
    function __set($key, $value) {
       $_SESSION[$key] = $value;
   }
    function __isset($key) {
       return isset($_SESSION[$key])  ? true : false;
   }
 
//   Encryption data 
    private function decrypt($edata, $password) {
       $data = base64_decode($edata);
       $salt = substr($data, 0, 16);
       $ct = substr($data, 16);

       $rounds = 3; // depends on key length
       $data00 = $password.$salt;
       $hash = array();
       $hash[0] = hash('sha256', $data00, true);
       $result = $hash[0];
       for ($i = 1; $i < $rounds; $i++) {
           $hash[$i] = hash('sha256', $hash[$i - 1].$data00, true);
           $result .= $hash[$i];
       }
       $key = substr($result, 0, 32);
       $iv  = substr($result, 32,16);

       return openssl_decrypt($ct, 'AES-256-CBC', $key, true, $iv);
     }
    private function encrypt($data, $password) {
       // Set a random salt
       $salt = openssl_random_pseudo_bytes(16);

       $salted = '';
       $dx = '';
       // Salt the key(32) and iv(16) = 48
       while (strlen($salted) < 48) {
         $dx = hash('sha256', $dx.$password.$salt, true);
         $salted .= $dx;
       }

       $key = substr($salted, 0, 32);
       $iv  = substr($salted, 32,16);

       $encrypted_data = openssl_encrypt($data, 'AES-256-CBC', $key, true, $iv);
       return base64_encode($salt . $encrypted_data);
   }  
   
    public function read($id){
        $data = parent::read($id);
        if (!$data){
            return "";
            }else{
                return $this->decrypt($data, $this->sessionCipherKey);
            }
    } 
    public function write($id, $data){
              $data = $this->encrypt($data, $this->sessionCipherKey);
              return parent::write($id, $data);
          }
    public function start(){
           if("" === session_id()){
               if(session_start()){
                   $this->setsesionStartTime();
                   $this->ChecksessionVal();
               }
           }
       }
    private function setsesionStartTime(){
           if(!isset($this->SessionStartTime)){
                       $this->SessionStartTime = time();
                   }
            return true;
       }
    private function ChecksessionVal(){
           if( (time() - $this->SessionStartTime) > ($this->timeToLife * 60)){
               $this->renewSession();
           }
           return true;

       }
    private function renewSession(){
        $this->SessionStartTime = time();
        return session_regenerate_id(true);
    }
    
}

$session = new EXPSESSIONHANDLER();
$session->start();
$_SESSION['msg'] = 'Welcome to my sql';


echo time() - $session->SessionStartTime;
//echo date('M:d:Y',$session->SessionStartTime);

//var_dump($_SESSION);
//echo $session->msg;
//if(isset($session->msg)){
//    echo 'found';
//}
