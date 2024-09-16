<?php

// Define the data to be encrypted
$data = 'Hello, world!';

// Generate a key pair for encryption
$key_pair = openssl_pkey_new(array(
    'digest_alg' => 'sha512',
    'private_key_bits' => 2048,
    'private_key_type' => OPENSSL_KEYTYPE_RSA,
));

// Extract the public key from the key pair
openssl_pkey_export($key_pair, $private_key);
$public_key = openssl_pkey_get_details($key_pair)['key'];

// Encrypt the data using the public key
$encrypted_data = '';
$encrypted_keys = array();
openssl_seal($data, $encrypted_data, $encrypted_keys, array($public_key), "AES256",openssl_random_pseudo_bytes(32));

// Decrypt the data using the private key
$decrypted_data = '';

openssl_open($encrypted_data, $decrypted_data, $encrypted_keys[0], $private_key, "AES256",openssl_random_pseudo_bytes(32));

// Print out the decrypted data
echo 'Decrypted data: ' . $decrypted_data . PHP_EOL;

?>
