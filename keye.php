<?php

//"C:\OpenSSL-Win64\bin/openssl.cnf",
//		"config" => "E:/xampp/php/extras/openssl/openssl.cnf",
//		"digest_alg" => "sha256",
$fname=date('Ymdhs')."_";
//RSA+++++++++++++++++++++++++++++++++++++++++++++++++	
$RSAs=OPENSSL_KEYTYPE_RSA;
$cc=1024;
$RSAconfig = array(
		"private_key_bits" =>$cc,
		"private_key_type" => $RSAs,
);	
$RSAres = openssl_pkey_new($RSAconfig);
openssl_pkey_export($RSAres, $RSAprivKey, NULL);
$RSApubKey = openssl_pkey_get_details($RSAres);
$RSApubKey = $RSApubKey["key"];
$RSAfname1=$fname."RSAPrivate.pem";
$RSAfname2=$fname."RSAPublic.pub";
file_put_contents('dockey/'.$RSAfname1,$RSAprivKey);
file_put_contents('dockey/'.$RSAfname2, $RSApubKey);


/*

// Define the configuration options
$config = array(
	"config" => "E:/xampp/php/extras/openssl/openssl.cnf",
    "digest_alg" => "sha512",
    "private_key_bits" => 2048 ,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

// Generate the key pair or show an error message
if ($resource = openssl_pkey_new($config)) {
    // Extract the private key

if (!openssl_pkey_export($resource, $private_key)) {
    echo "Error exporting private key: " . openssl_error_string();
    exit;
}

// Save the private key to a file
if (!file_put_contents("private.key", $private_key)) {
    echo "Error writing private key to file.";
    exit;
}


    // Extract the public key
    $public_key = openssl_pkey_get_details($resource);
    $public_key = $public_key["key"];

    // Save the keys to files
    file_put_contents("dockey/"."private.key", $private_key);
    file_put_contents("dockey/"."public.key", $public_key);

    echo "Key pair generated successfully!";
} else {
    echo "Key pair generation failed!";
}
*/
?>
