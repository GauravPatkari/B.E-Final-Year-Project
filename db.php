<?php
date_default_timezone_set("Asia/Kolkata");
error_reporting(0);
$Rdateus=date('Y-m-d h:i:s');

$system_address ="0x0a81cF1AA7c77C94C1CCC0694E594Fbaf59cf224"; 

//local
$sql_host =     "localhost";      
$sql_username = "root";    
$sql_password = "";       
$sql_database = "filesecure"; 
$mysqli = new mysqli($sql_host , $sql_username , $sql_password , $sql_database );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/vendor/autoload.php';

//myCode1("hiii","rohan8087@gmail.com","rohan");

function myCode1($Body,$emailval,$nameval)
{
	$mail = new PHPMailer(true);
	
   try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gauravpatkari1330@gmail.com';                     //SMTP username
    $mail->Password   = 'nzgzmcjixjbumnwq';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('sitpoly18@gmail.com', 'Mailer');
    $mail->addAddress($emailval, $nameval);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   
//   $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Result';
    $mail->Body    = $Body;
    $mail->AltBody = ' ';

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}


/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// /* change character set to utf8 */
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
} else {
    // printf("Current character set: %s\n", $mysqli->character_set_name());
}
if (!function_exists('mysql_real_escape_string')) {
    function mysql_real_escape_string($string){
        global $mysqli;
        if($string){
            // $mysqli = new mysqli($sql_host , $sql_username , $sql_password , $sql_database );            
            $newString =  $mysqli->real_escape_string($string);
            return $newString;
        }
    }
}
// $mysqli->close();
$conn = null;
if (!function_exists('mysql_query')) {
    function mysql_query($query) {
        global $mysqli;
        // echo "DAAAAA";
        if($query) {
            $result = $mysqli->query($query);
            return $result;
        }
    }
}
else {
    $conn=mysql_connect($sql_host,$sql_username, $sql_password);
    mysql_set_charset("utf8", $conn);
    mysql_select_db($sql_database);
}

if (!function_exists('mysql_fetch_array')) {
    function mysql_fetch_array($result){
        if($result){
            $row =  $result->fetch_assoc();
            return $row;
        }
    }
}

if (!function_exists('mysql_num_rows')) {
    function mysql_num_rows($result){
        if($result){
            $row_cnt = $result->num_rows;;
            return $row_cnt;
        }
    }
}

if (!function_exists('mysql_free_result')) {
    function mysql_free_result($result){
        if($result){
            global $mysqli;
            $result->free();

        }
    }
}

if (!function_exists('mysql_data_seek')) {
    function mysql_data_seek($result, $offset){
        if($result){
            global $mysqli;
            return $result->data_seek($offset);

        }
    }
}

if (!function_exists('mysql_close')) {
    function mysql_close(){
        global $mysqli;
        return $mysqli->close();
    }
}

if (!function_exists('mysql_insert_id')) {
    function mysql_insert_id(){
            global $mysqli;
            $lastInsertId = $mysqli->insert_id;
            return $lastInsertId;
    }
}

if (!function_exists('mysql_error')) {
    function mysql_error(){
        global $mysqli;
        $error = $mysqli->error;
        return $error;
    }
}



function hextobin($hexstr)
    {
        $n = strlen($hexstr);
        $sbin="";  
        $i=0;
        while($i<$n)
        {      
            $a =substr($hexstr,$i,2);          
            $c = pack("H*",$a);
            if ($i==0){$sbin=$c;}
            else {$sbin.=$c;}
            $i+=2;
        }
        return $sbin;
    }
	
function strToHex($string){
    $hex = '';
    for ($i=0; $i<strlen($string); $i++){
        $ord = ord($string[$i]);
        $hexCode = dechex($ord);
        $hex .= substr('0'.$hexCode, -2);
    }
    return strToUpper($hex);
}

function hexToStr($hex){
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2){
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}


?>