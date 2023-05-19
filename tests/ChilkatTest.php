<?php

use HonlapBirodalom\Chilkat\Facades\Chilkat;
use HonlapBirodalom\Chilkat\Generated\CkCrypt2;

it('can use chilkat', function () {

    Chilkat::initialize();

    $assertionText = 'The quick brown fox jumps over the lazy dog.';

    /**
     * Using Crypt2 from Chilkat libs.
     */
    $crypt = new CkCrypt2();

    $crypt->CryptAlgorithm = 'aes';
    $crypt->CipherMode = 'cbc';
    $crypt->KeyLength = 256;
    $crypt->PaddingScheme = 0;
    $crypt->EncodingMode = 'hex';

    /**
     * An initialization vector is required if using CBC mode. ECB mode does not use an IV.
     * The length of the IV is equal to the algorithm's block size. It is NOT equal to the length of the key.
     */
    $ivHex = '000102030405060708090A0B0C0D0E0F';
    $crypt->SetEncodedIV($ivHex, 'hex');

    /**
     * The secret key must equal the size of the key.  For 256-bit encryption, the binary secret key is 32 bytes.
     * For 128-bit encryption, the binary secret key is 16 bytes.
     */
    $keyHex = '000102030405060708090A0B0C0D0E0F101112131415161718191A1B1C1D1E1F';
    $crypt->SetEncodedKey($keyHex, 'hex');

    /**
     * Encrypt and decrypt a string...
     * The input string is 44 ANSI characters (i.e. 44 bytes), so the output should be 48 bytes (a multiple of 16).
     * Because the output is a hex string, it should be 96 characters long (2 chars per byte).
     */
    expect($crypt->decryptStringENC($crypt->encryptStringENC($assertionText)))->toEqual($assertionText);
});
