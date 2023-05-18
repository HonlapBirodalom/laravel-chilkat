<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCrypt2
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCrypt2') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkCrypt2();
    }

    public function __get($var)
    {
        if ($var === 'thisown') {
            return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
        }

        return $this->_pData[$var];
    }

    public function __set($var, $value)
    {
        if ($var === 'thisown') {
            return swig_chilkat_9_5_0_alter_newobject($this->_cPtr, $value);
        }
        $this->_pData[$var] = $value;
    }

    public function __isset($var)
    {
        if ($var === 'thisown') {
            return true;
        }

        return array_key_exists($var, $this->_pData);
    }

    public function get_Utf8()
    {
        return CkCrypt2_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkCrypt2_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkCrypt2_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkCrypt2_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkCrypt2_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_BCryptWorkFactor()
    {
        return CkCrypt2_get_BCryptWorkFactor($this->_cPtr);
    }

    public function put_BCryptWorkFactor($newVal)
    {
        CkCrypt2_put_BCryptWorkFactor($this->_cPtr, $newVal);
    }

    public function get_BlockSize()
    {
        return CkCrypt2_get_BlockSize($this->_cPtr);
    }

    public function get_CadesEnabled()
    {
        return CkCrypt2_get_CadesEnabled($this->_cPtr);
    }

    public function put_CadesEnabled($newVal)
    {
        CkCrypt2_put_CadesEnabled($this->_cPtr, $newVal);
    }

    public function get_CadesSigPolicyHash($str)
    {
        CkCrypt2_get_CadesSigPolicyHash($this->_cPtr, $str);
    }

    public function cadesSigPolicyHash()
    {
        return CkCrypt2_cadesSigPolicyHash($this->_cPtr);
    }

    public function put_CadesSigPolicyHash($newVal)
    {
        CkCrypt2_put_CadesSigPolicyHash($this->_cPtr, $newVal);
    }

    public function get_CadesSigPolicyId($str)
    {
        CkCrypt2_get_CadesSigPolicyId($this->_cPtr, $str);
    }

    public function cadesSigPolicyId()
    {
        return CkCrypt2_cadesSigPolicyId($this->_cPtr);
    }

    public function put_CadesSigPolicyId($newVal)
    {
        CkCrypt2_put_CadesSigPolicyId($this->_cPtr, $newVal);
    }

    public function get_CadesSigPolicyUri($str)
    {
        CkCrypt2_get_CadesSigPolicyUri($this->_cPtr, $str);
    }

    public function cadesSigPolicyUri()
    {
        return CkCrypt2_cadesSigPolicyUri($this->_cPtr);
    }

    public function put_CadesSigPolicyUri($newVal)
    {
        CkCrypt2_put_CadesSigPolicyUri($this->_cPtr, $newVal);
    }

    public function get_Charset($str)
    {
        CkCrypt2_get_Charset($this->_cPtr, $str);
    }

    public function charset()
    {
        return CkCrypt2_charset($this->_cPtr);
    }

    public function put_Charset($newVal)
    {
        CkCrypt2_put_Charset($this->_cPtr, $newVal);
    }

    public function get_CipherMode($str)
    {
        CkCrypt2_get_CipherMode($this->_cPtr, $str);
    }

    public function cipherMode()
    {
        return CkCrypt2_cipherMode($this->_cPtr);
    }

    public function put_CipherMode($newVal)
    {
        CkCrypt2_put_CipherMode($this->_cPtr, $newVal);
    }

    public function get_CmsOptions($str)
    {
        CkCrypt2_get_CmsOptions($this->_cPtr, $str);
    }

    public function cmsOptions()
    {
        return CkCrypt2_cmsOptions($this->_cPtr);
    }

    public function put_CmsOptions($newVal)
    {
        CkCrypt2_put_CmsOptions($this->_cPtr, $newVal);
    }

    public function get_CompressionAlgorithm($str)
    {
        CkCrypt2_get_CompressionAlgorithm($this->_cPtr, $str);
    }

    public function compressionAlgorithm()
    {
        return CkCrypt2_compressionAlgorithm($this->_cPtr);
    }

    public function put_CompressionAlgorithm($newVal)
    {
        CkCrypt2_put_CompressionAlgorithm($this->_cPtr, $newVal);
    }

    public function get_CryptAlgorithm($str)
    {
        CkCrypt2_get_CryptAlgorithm($this->_cPtr, $str);
    }

    public function cryptAlgorithm()
    {
        return CkCrypt2_cryptAlgorithm($this->_cPtr);
    }

    public function put_CryptAlgorithm($newVal)
    {
        CkCrypt2_put_CryptAlgorithm($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkCrypt2_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkCrypt2_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkCrypt2_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_EncodingMode($str)
    {
        CkCrypt2_get_EncodingMode($this->_cPtr, $str);
    }

    public function encodingMode()
    {
        return CkCrypt2_encodingMode($this->_cPtr);
    }

    public function put_EncodingMode($newVal)
    {
        CkCrypt2_put_EncodingMode($this->_cPtr, $newVal);
    }

    public function get_FirstChunk()
    {
        return CkCrypt2_get_FirstChunk($this->_cPtr);
    }

    public function put_FirstChunk($newVal)
    {
        CkCrypt2_put_FirstChunk($this->_cPtr, $newVal);
    }

    public function get_HashAlgorithm($str)
    {
        CkCrypt2_get_HashAlgorithm($this->_cPtr, $str);
    }

    public function hashAlgorithm()
    {
        return CkCrypt2_hashAlgorithm($this->_cPtr);
    }

    public function put_HashAlgorithm($newVal)
    {
        CkCrypt2_put_HashAlgorithm($this->_cPtr, $newVal);
    }

    public function get_HavalRounds()
    {
        return CkCrypt2_get_HavalRounds($this->_cPtr);
    }

    public function put_HavalRounds($newVal)
    {
        CkCrypt2_put_HavalRounds($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkCrypt2_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkCrypt2_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_IncludeCertChain()
    {
        return CkCrypt2_get_IncludeCertChain($this->_cPtr);
    }

    public function put_IncludeCertChain($newVal)
    {
        CkCrypt2_put_IncludeCertChain($this->_cPtr, $newVal);
    }

    public function get_InitialCount()
    {
        return CkCrypt2_get_InitialCount($this->_cPtr);
    }

    public function put_InitialCount($newVal)
    {
        CkCrypt2_put_InitialCount($this->_cPtr, $newVal);
    }

    public function get_IterationCount()
    {
        return CkCrypt2_get_IterationCount($this->_cPtr);
    }

    public function put_IterationCount($newVal)
    {
        CkCrypt2_put_IterationCount($this->_cPtr, $newVal);
    }

    public function get_IV($outBytes)
    {
        CkCrypt2_get_IV($this->_cPtr, $outBytes);
    }

    public function put_IV($inBytes)
    {
        CkCrypt2_put_IV($this->_cPtr, $inBytes);
    }

    public function get_KeyLength()
    {
        return CkCrypt2_get_KeyLength($this->_cPtr);
    }

    public function put_KeyLength($newVal)
    {
        CkCrypt2_put_KeyLength($this->_cPtr, $newVal);
    }

    public function get_LastChunk()
    {
        return CkCrypt2_get_LastChunk($this->_cPtr);
    }

    public function put_LastChunk($newVal)
    {
        CkCrypt2_put_LastChunk($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkCrypt2_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkCrypt2_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkCrypt2_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkCrypt2_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkCrypt2_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkCrypt2_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkCrypt2_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkCrypt2_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_MacAlgorithm($str)
    {
        CkCrypt2_get_MacAlgorithm($this->_cPtr, $str);
    }

    public function macAlgorithm()
    {
        return CkCrypt2_macAlgorithm($this->_cPtr);
    }

    public function put_MacAlgorithm($newVal)
    {
        CkCrypt2_put_MacAlgorithm($this->_cPtr, $newVal);
    }

    public function get_NumSignerCerts()
    {
        return CkCrypt2_get_NumSignerCerts($this->_cPtr);
    }

    public function get_OaepHash($str)
    {
        CkCrypt2_get_OaepHash($this->_cPtr, $str);
    }

    public function oaepHash()
    {
        return CkCrypt2_oaepHash($this->_cPtr);
    }

    public function put_OaepHash($newVal)
    {
        CkCrypt2_put_OaepHash($this->_cPtr, $newVal);
    }

    public function get_OaepMgfHash($str)
    {
        CkCrypt2_get_OaepMgfHash($this->_cPtr, $str);
    }

    public function oaepMgfHash()
    {
        return CkCrypt2_oaepMgfHash($this->_cPtr);
    }

    public function put_OaepMgfHash($newVal)
    {
        CkCrypt2_put_OaepMgfHash($this->_cPtr, $newVal);
    }

    public function get_OaepPadding()
    {
        return CkCrypt2_get_OaepPadding($this->_cPtr);
    }

    public function put_OaepPadding($newVal)
    {
        CkCrypt2_put_OaepPadding($this->_cPtr, $newVal);
    }

    public function get_PaddingScheme()
    {
        return CkCrypt2_get_PaddingScheme($this->_cPtr);
    }

    public function put_PaddingScheme($newVal)
    {
        CkCrypt2_put_PaddingScheme($this->_cPtr, $newVal);
    }

    public function get_PbesAlgorithm($str)
    {
        CkCrypt2_get_PbesAlgorithm($this->_cPtr, $str);
    }

    public function pbesAlgorithm()
    {
        return CkCrypt2_pbesAlgorithm($this->_cPtr);
    }

    public function put_PbesAlgorithm($newVal)
    {
        CkCrypt2_put_PbesAlgorithm($this->_cPtr, $newVal);
    }

    public function get_PbesPassword($str)
    {
        CkCrypt2_get_PbesPassword($this->_cPtr, $str);
    }

    public function pbesPassword()
    {
        return CkCrypt2_pbesPassword($this->_cPtr);
    }

    public function put_PbesPassword($newVal)
    {
        CkCrypt2_put_PbesPassword($this->_cPtr, $newVal);
    }

    public function get_Pkcs7CryptAlg($str)
    {
        CkCrypt2_get_Pkcs7CryptAlg($this->_cPtr, $str);
    }

    public function pkcs7CryptAlg()
    {
        return CkCrypt2_pkcs7CryptAlg($this->_cPtr);
    }

    public function put_Pkcs7CryptAlg($newVal)
    {
        CkCrypt2_put_Pkcs7CryptAlg($this->_cPtr, $newVal);
    }

    public function get_Rc2EffectiveKeyLength()
    {
        return CkCrypt2_get_Rc2EffectiveKeyLength($this->_cPtr);
    }

    public function put_Rc2EffectiveKeyLength($newVal)
    {
        CkCrypt2_put_Rc2EffectiveKeyLength($this->_cPtr, $newVal);
    }

    public function get_Salt($outBytes)
    {
        CkCrypt2_get_Salt($this->_cPtr, $outBytes);
    }

    public function put_Salt($inBytes)
    {
        CkCrypt2_put_Salt($this->_cPtr, $inBytes);
    }

    public function get_SecretKey($outBytes)
    {
        CkCrypt2_get_SecretKey($this->_cPtr, $outBytes);
    }

    public function put_SecretKey($inBytes)
    {
        CkCrypt2_put_SecretKey($this->_cPtr, $inBytes);
    }

    public function get_SigningAlg($str)
    {
        CkCrypt2_get_SigningAlg($this->_cPtr, $str);
    }

    public function signingAlg()
    {
        return CkCrypt2_signingAlg($this->_cPtr);
    }

    public function put_SigningAlg($newVal)
    {
        CkCrypt2_put_SigningAlg($this->_cPtr, $newVal);
    }

    public function get_SigningAttributes($str)
    {
        CkCrypt2_get_SigningAttributes($this->_cPtr, $str);
    }

    public function signingAttributes()
    {
        return CkCrypt2_signingAttributes($this->_cPtr);
    }

    public function put_SigningAttributes($newVal)
    {
        CkCrypt2_put_SigningAttributes($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkCrypt2_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkCrypt2_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkCrypt2_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UuFilename($str)
    {
        CkCrypt2_get_UuFilename($this->_cPtr, $str);
    }

    public function uuFilename()
    {
        return CkCrypt2_uuFilename($this->_cPtr);
    }

    public function put_UuFilename($newVal)
    {
        CkCrypt2_put_UuFilename($this->_cPtr, $newVal);
    }

    public function get_UuMode($str)
    {
        CkCrypt2_get_UuMode($this->_cPtr, $str);
    }

    public function uuMode()
    {
        return CkCrypt2_uuMode($this->_cPtr);
    }

    public function put_UuMode($newVal)
    {
        CkCrypt2_put_UuMode($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkCrypt2_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkCrypt2_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkCrypt2_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkCrypt2_version($this->_cPtr);
    }

    public function AddEncryptCert($cert)
    {
        CkCrypt2_AddEncryptCert($this->_cPtr, $cert);
    }

    public function AddPfxSourceData($pfxBytes, $pfxPassword)
    {
        return CkCrypt2_AddPfxSourceData($this->_cPtr, $pfxBytes, $pfxPassword);
    }

    public function AddPfxSourceFile($pfxFilePath, $pfxPassword)
    {
        return CkCrypt2_AddPfxSourceFile($this->_cPtr, $pfxFilePath, $pfxPassword);
    }

    public function AddSigningCert($cert)
    {
        return CkCrypt2_AddSigningCert($this->_cPtr, $cert);
    }

    public function aesKeyUnwrap($kek, $wrappedKeyData, $encoding)
    {
        return CkCrypt2_aesKeyUnwrap($this->_cPtr, $kek, $wrappedKeyData, $encoding);
    }

    public function aesKeyWrap($kek, $keyData, $encoding)
    {
        return CkCrypt2_aesKeyWrap($this->_cPtr, $kek, $keyData, $encoding);
    }

    public function bCryptHash($password)
    {
        return CkCrypt2_bCryptHash($this->_cPtr, $password);
    }

    public function BCryptVerify($password, $bcryptHash)
    {
        return CkCrypt2_BCryptVerify($this->_cPtr, $password, $bcryptHash);
    }

    public function bytesToString($inData, $charset)
    {
        return CkCrypt2_bytesToString($this->_cPtr, $inData, $charset);
    }

    public function ByteSwap4321($data, $outBytes)
    {
        return CkCrypt2_ByteSwap4321($this->_cPtr, $data, $outBytes);
    }

    public function CkDecryptFile($srcFile, $destFile)
    {
        return CkCrypt2_CkDecryptFile($this->_cPtr, $srcFile, $destFile);
    }

    public function CkDecryptFileAsync($srcFile, $destFile)
    {
        $r = CkCrypt2_CkDecryptFileAsync($this->_cPtr, $srcFile, $destFile);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CkEncryptFile($srcFile, $destFile)
    {
        return CkCrypt2_CkEncryptFile($this->_cPtr, $srcFile, $destFile);
    }

    public function CkEncryptFileAsync($srcFile, $destFile)
    {
        $r = CkCrypt2_CkEncryptFileAsync($this->_cPtr, $srcFile, $destFile);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ClearEncryptCerts()
    {
        CkCrypt2_ClearEncryptCerts($this->_cPtr);
    }

    public function ClearSigningCerts()
    {
        CkCrypt2_ClearSigningCerts($this->_cPtr);
    }

    public function CompressBytes($data, $outData)
    {
        return CkCrypt2_CompressBytes($this->_cPtr, $data, $outData);
    }

    public function compressBytesENC($data)
    {
        return CkCrypt2_compressBytesENC($this->_cPtr, $data);
    }

    public function CompressString($str, $outData)
    {
        return CkCrypt2_CompressString($this->_cPtr, $str, $outData);
    }

    public function compressStringENC($str)
    {
        return CkCrypt2_compressStringENC($this->_cPtr, $str);
    }

    public function CoSign($bdIn, $cert, $bdOut)
    {
        return CkCrypt2_CoSign($this->_cPtr, $bdIn, $cert, $bdOut);
    }

    public function CrcBytes($crcAlg, $byteData)
    {
        return CkCrypt2_CrcBytes($this->_cPtr, $crcAlg, $byteData);
    }

    public function CrcFile($crcAlg, $path)
    {
        return CkCrypt2_CrcFile($this->_cPtr, $crcAlg, $path);
    }

    public function CrcFileAsync($crcAlg, $path)
    {
        $r = CkCrypt2_CrcFileAsync($this->_cPtr, $crcAlg, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CreateDetachedSignature($inFilePath, $sigFilePath)
    {
        return CkCrypt2_CreateDetachedSignature($this->_cPtr, $inFilePath, $sigFilePath);
    }

    public function CreateP7M($inFilename, $p7mPath)
    {
        return CkCrypt2_CreateP7M($this->_cPtr, $inFilename, $p7mPath);
    }

    public function CreateP7MAsync($inFilename, $p7mPath)
    {
        $r = CkCrypt2_CreateP7MAsync($this->_cPtr, $inFilename, $p7mPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CreateP7S($inFilename, $p7sPath)
    {
        return CkCrypt2_CreateP7S($this->_cPtr, $inFilename, $p7sPath);
    }

    public function CreateP7SAsync($inFilename, $p7sPath)
    {
        $r = CkCrypt2_CreateP7SAsync($this->_cPtr, $inFilename, $p7sPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Decode($str, $encoding, $outData)
    {
        return CkCrypt2_Decode($this->_cPtr, $str, $encoding, $outData);
    }

    public function decodeString($inStr, $charset, $encoding)
    {
        return CkCrypt2_decodeString($this->_cPtr, $inStr, $charset, $encoding);
    }

    public function DecryptBd($bd)
    {
        return CkCrypt2_DecryptBd($this->_cPtr, $bd);
    }

    public function DecryptBytes($data, $outData)
    {
        return CkCrypt2_DecryptBytes($this->_cPtr, $data, $outData);
    }

    public function DecryptBytesENC($str, $outData)
    {
        return CkCrypt2_DecryptBytesENC($this->_cPtr, $str, $outData);
    }

    public function decryptEncoded($encodedEncryptedData)
    {
        return CkCrypt2_decryptEncoded($this->_cPtr, $encodedEncryptedData);
    }

    public function DecryptSb($bdIn, $sbOut)
    {
        return CkCrypt2_DecryptSb($this->_cPtr, $bdIn, $sbOut);
    }

    public function DecryptSecureENC($cipherText, $secureStr)
    {
        return CkCrypt2_DecryptSecureENC($this->_cPtr, $cipherText, $secureStr);
    }

    public function DecryptStream($strm)
    {
        return CkCrypt2_DecryptStream($this->_cPtr, $strm);
    }

    public function DecryptStreamAsync($strm)
    {
        $r = CkCrypt2_DecryptStreamAsync($this->_cPtr, $strm);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function decryptString($data)
    {
        return CkCrypt2_decryptString($this->_cPtr, $data);
    }

    public function decryptStringENC($str)
    {
        return CkCrypt2_decryptStringENC($this->_cPtr, $str);
    }

    public function encode($byteData, $encoding)
    {
        return CkCrypt2_encode($this->_cPtr, $byteData, $encoding);
    }

    public function encodeInt($value, $numBytes, $littleEndian, $encoding)
    {
        return CkCrypt2_encodeInt($this->_cPtr, $value, $numBytes, $littleEndian, $encoding);
    }

    public function encodeString($strToEncode, $charsetName, $toEncodingName)
    {
        return CkCrypt2_encodeString($this->_cPtr, $strToEncode, $charsetName, $toEncodingName);
    }

    public function EncryptBd($bd)
    {
        return CkCrypt2_EncryptBd($this->_cPtr, $bd);
    }

    public function EncryptBytes($data, $outData)
    {
        return CkCrypt2_EncryptBytes($this->_cPtr, $data, $outData);
    }

    public function encryptBytesENC($data)
    {
        return CkCrypt2_encryptBytesENC($this->_cPtr, $data);
    }

    public function encryptEncoded($str)
    {
        return CkCrypt2_encryptEncoded($this->_cPtr, $str);
    }

    public function EncryptSb($sbIn, $bdOut)
    {
        return CkCrypt2_EncryptSb($this->_cPtr, $sbIn, $bdOut);
    }

    public function encryptSecureENC($secureStr)
    {
        return CkCrypt2_encryptSecureENC($this->_cPtr, $secureStr);
    }

    public function EncryptStream($strm)
    {
        return CkCrypt2_EncryptStream($this->_cPtr, $strm);
    }

    public function EncryptStreamAsync($strm)
    {
        $r = CkCrypt2_EncryptStreamAsync($this->_cPtr, $strm);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function EncryptString($str, $outData)
    {
        return CkCrypt2_EncryptString($this->_cPtr, $str, $outData);
    }

    public function encryptStringENC($str)
    {
        return CkCrypt2_encryptStringENC($this->_cPtr, $str);
    }

    public function genEncodedSecretKey($password, $encoding)
    {
        return CkCrypt2_genEncodedSecretKey($this->_cPtr, $password, $encoding);
    }

    public function GenerateSecretKey($password, $outData)
    {
        return CkCrypt2_GenerateSecretKey($this->_cPtr, $password, $outData);
    }

    public function generateUuid()
    {
        return CkCrypt2_generateUuid($this->_cPtr);
    }

    public function genRandomBytesENC($numBytes)
    {
        return CkCrypt2_genRandomBytesENC($this->_cPtr, $numBytes);
    }

    public function GetDecryptCert()
    {
        $r = CkCrypt2_GetDecryptCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function getEncodedAad($encoding)
    {
        return CkCrypt2_getEncodedAad($this->_cPtr, $encoding);
    }

    public function encodedAad($encoding)
    {
        return CkCrypt2_encodedAad($this->_cPtr, $encoding);
    }

    public function getEncodedAuthTag($encoding)
    {
        return CkCrypt2_getEncodedAuthTag($this->_cPtr, $encoding);
    }

    public function encodedAuthTag($encoding)
    {
        return CkCrypt2_encodedAuthTag($this->_cPtr, $encoding);
    }

    public function getEncodedIV($encoding)
    {
        return CkCrypt2_getEncodedIV($this->_cPtr, $encoding);
    }

    public function encodedIV($encoding)
    {
        return CkCrypt2_encodedIV($this->_cPtr, $encoding);
    }

    public function getEncodedKey($encoding)
    {
        return CkCrypt2_getEncodedKey($this->_cPtr, $encoding);
    }

    public function encodedKey($encoding)
    {
        return CkCrypt2_encodedKey($this->_cPtr, $encoding);
    }

    public function getEncodedSalt($encoding)
    {
        return CkCrypt2_getEncodedSalt($this->_cPtr, $encoding);
    }

    public function encodedSalt($encoding)
    {
        return CkCrypt2_encodedSalt($this->_cPtr, $encoding);
    }

    public function GetLastCert()
    {
        $r = CkCrypt2_GetLastCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetSignatureSigningTime($index, $outSysTime)
    {
        return CkCrypt2_GetSignatureSigningTime($this->_cPtr, $index, $outSysTime);
    }

    public function getSignatureSigningTimeStr($index)
    {
        return CkCrypt2_getSignatureSigningTimeStr($this->_cPtr, $index);
    }

    public function signatureSigningTimeStr($index)
    {
        return CkCrypt2_signatureSigningTimeStr($this->_cPtr, $index);
    }

    public function GetSignedAttributes($signerIndex, $pkcs7Der, $sbJson)
    {
        return CkCrypt2_GetSignedAttributes($this->_cPtr, $signerIndex, $pkcs7Der, $sbJson);
    }

    public function GetSignerCert($index)
    {
        $r = CkCrypt2_GetSignerCert($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetSignerCertChain($index)
    {
        $r = CkCrypt2_GetSignerCertChain($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCertChain($r);
        }

        return $r;
    }

    public function hashBdENC($bd)
    {
        return CkCrypt2_hashBdENC($this->_cPtr, $bd);
    }

    public function HashBeginBytes($data)
    {
        return CkCrypt2_HashBeginBytes($this->_cPtr, $data);
    }

    public function HashBeginString($strData)
    {
        return CkCrypt2_HashBeginString($this->_cPtr, $strData);
    }

    public function HashBytes($data, $outData)
    {
        return CkCrypt2_HashBytes($this->_cPtr, $data, $outData);
    }

    public function hashBytesENC($data)
    {
        return CkCrypt2_hashBytesENC($this->_cPtr, $data);
    }

    public function HashFile($path, $outBytes)
    {
        return CkCrypt2_HashFile($this->_cPtr, $path, $outBytes);
    }

    public function HashFileAsync($path)
    {
        $r = CkCrypt2_HashFileAsync($this->_cPtr, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function hashFileENC($path)
    {
        return CkCrypt2_hashFileENC($this->_cPtr, $path);
    }

    public function HashFileENCAsync($path)
    {
        $r = CkCrypt2_HashFileENCAsync($this->_cPtr, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function HashFinal($outBytes)
    {
        return CkCrypt2_HashFinal($this->_cPtr, $outBytes);
    }

    public function hashFinalENC()
    {
        return CkCrypt2_hashFinalENC($this->_cPtr);
    }

    public function HashMoreBytes($data)
    {
        return CkCrypt2_HashMoreBytes($this->_cPtr, $data);
    }

    public function HashMoreString($strData)
    {
        return CkCrypt2_HashMoreString($this->_cPtr, $strData);
    }

    public function HashString($str, $outData)
    {
        return CkCrypt2_HashString($this->_cPtr, $str, $outData);
    }

    public function hashStringENC($str)
    {
        return CkCrypt2_hashStringENC($this->_cPtr, $str);
    }

    public function HasSignatureSigningTime($index)
    {
        return CkCrypt2_HasSignatureSigningTime($this->_cPtr, $index);
    }

    public function HmacBytes($inBytes, $outHmac)
    {
        return CkCrypt2_HmacBytes($this->_cPtr, $inBytes, $outHmac);
    }

    public function hmacBytesENC($inBytes)
    {
        return CkCrypt2_hmacBytesENC($this->_cPtr, $inBytes);
    }

    public function HmacString($inText, $outHmac)
    {
        return CkCrypt2_HmacString($this->_cPtr, $inText, $outHmac);
    }

    public function hmacStringENC($inText)
    {
        return CkCrypt2_hmacStringENC($this->_cPtr, $inText);
    }

    public function hotp($secret, $secretEnc, $counterHex, $numDigits, $truncOffset, $hashAlg)
    {
        return CkCrypt2_hotp($this->_cPtr, $secret, $secretEnc, $counterHex, $numDigits, $truncOffset, $hashAlg);
    }

    public function InflateBytes($data, $outData)
    {
        return CkCrypt2_InflateBytes($this->_cPtr, $data, $outData);
    }

    public function InflateBytesENC($str, $outData)
    {
        return CkCrypt2_InflateBytesENC($this->_cPtr, $str, $outData);
    }

    public function inflateString($data)
    {
        return CkCrypt2_inflateString($this->_cPtr, $data);
    }

    public function inflateStringENC($str)
    {
        return CkCrypt2_inflateStringENC($this->_cPtr, $str);
    }

    public function IsUnlocked()
    {
        return CkCrypt2_IsUnlocked($this->_cPtr);
    }

    public function LastJsonData()
    {
        $r = CkCrypt2_LastJsonData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function LoadTaskCaller($task)
    {
        return CkCrypt2_LoadTaskCaller($this->_cPtr, $task);
    }

    public function macBdENC($bd)
    {
        return CkCrypt2_macBdENC($this->_cPtr, $bd);
    }

    public function MacBytes($inBytes, $outBytes)
    {
        return CkCrypt2_MacBytes($this->_cPtr, $inBytes, $outBytes);
    }

    public function macBytesENC($inBytes)
    {
        return CkCrypt2_macBytesENC($this->_cPtr, $inBytes);
    }

    public function MacString($inText, $outBytes)
    {
        return CkCrypt2_MacString($this->_cPtr, $inText, $outBytes);
    }

    public function macStringENC($inText)
    {
        return CkCrypt2_macStringENC($this->_cPtr, $inText);
    }

    public function mySqlAesDecrypt($strEncryptedHex, $strPassword)
    {
        return CkCrypt2_mySqlAesDecrypt($this->_cPtr, $strEncryptedHex, $strPassword);
    }

    public function mySqlAesEncrypt($strData, $strPassword)
    {
        return CkCrypt2_mySqlAesEncrypt($this->_cPtr, $strData, $strPassword);
    }

    public function OpaqueSignBd($bd)
    {
        return CkCrypt2_OpaqueSignBd($this->_cPtr, $bd);
    }

    public function OpaqueSignBdAsync($bd)
    {
        $r = CkCrypt2_OpaqueSignBdAsync($this->_cPtr, $bd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function OpaqueSignBytes($data, $outData)
    {
        return CkCrypt2_OpaqueSignBytes($this->_cPtr, $data, $outData);
    }

    public function OpaqueSignBytesAsync($data)
    {
        $r = CkCrypt2_OpaqueSignBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function opaqueSignBytesENC($data)
    {
        return CkCrypt2_opaqueSignBytesENC($this->_cPtr, $data);
    }

    public function OpaqueSignBytesENCAsync($data)
    {
        $r = CkCrypt2_OpaqueSignBytesENCAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function OpaqueSignString($str, $outData)
    {
        return CkCrypt2_OpaqueSignString($this->_cPtr, $str, $outData);
    }

    public function OpaqueSignStringAsync($str)
    {
        $r = CkCrypt2_OpaqueSignStringAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function opaqueSignStringENC($str)
    {
        return CkCrypt2_opaqueSignStringENC($this->_cPtr, $str);
    }

    public function OpaqueSignStringENCAsync($str)
    {
        $r = CkCrypt2_OpaqueSignStringENCAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function OpaqueVerifyBd($bd)
    {
        return CkCrypt2_OpaqueVerifyBd($this->_cPtr, $bd);
    }

    public function OpaqueVerifyBytes($p7s, $outOriginal)
    {
        return CkCrypt2_OpaqueVerifyBytes($this->_cPtr, $p7s, $outOriginal);
    }

    public function OpaqueVerifyBytesENC($p7s, $outOriginal)
    {
        return CkCrypt2_OpaqueVerifyBytesENC($this->_cPtr, $p7s, $outOriginal);
    }

    public function opaqueVerifyString($p7s)
    {
        return CkCrypt2_opaqueVerifyString($this->_cPtr, $p7s);
    }

    public function opaqueVerifyStringENC($p7s)
    {
        return CkCrypt2_opaqueVerifyStringENC($this->_cPtr, $p7s);
    }

    public function pbkdf1($password, $charset, $hashAlg, $salt, $iterationCount, $outputKeyBitLen, $encoding)
    {
        return CkCrypt2_pbkdf1($this->_cPtr, $password, $charset, $hashAlg, $salt, $iterationCount, $outputKeyBitLen, $encoding);
    }

    public function pbkdf2($password, $charset, $hashAlg, $salt, $iterationCount, $outputKeyBitLen, $encoding)
    {
        return CkCrypt2_pbkdf2($this->_cPtr, $password, $charset, $hashAlg, $salt, $iterationCount, $outputKeyBitLen, $encoding);
    }

    public function pkcs7ExtractDigest($signerIndex, $pkcs7)
    {
        return CkCrypt2_pkcs7ExtractDigest($this->_cPtr, $signerIndex, $pkcs7);
    }

    public function RandomizeIV()
    {
        CkCrypt2_RandomizeIV($this->_cPtr);
    }

    public function RandomizeKey()
    {
        CkCrypt2_RandomizeKey($this->_cPtr);
    }

    public function ReadFile($filename, $outBytes)
    {
        return CkCrypt2_ReadFile($this->_cPtr, $filename, $outBytes);
    }

    public function reEncode($encodedData, $fromEncoding, $toEncoding)
    {
        return CkCrypt2_reEncode($this->_cPtr, $encodedData, $fromEncoding, $toEncoding);
    }

    public function SaveLastError($path)
    {
        return CkCrypt2_SaveLastError($this->_cPtr, $path);
    }

    public function SetDecryptCert($cert)
    {
        return CkCrypt2_SetDecryptCert($this->_cPtr, $cert);
    }

    public function SetDecryptCert2($cert, $key)
    {
        return CkCrypt2_SetDecryptCert2($this->_cPtr, $cert, $key);
    }

    public function SetEncodedAad($aadStr, $encoding)
    {
        return CkCrypt2_SetEncodedAad($this->_cPtr, $aadStr, $encoding);
    }

    public function SetEncodedAuthTag($authTagStr, $encoding)
    {
        return CkCrypt2_SetEncodedAuthTag($this->_cPtr, $authTagStr, $encoding);
    }

    public function SetEncodedIV($ivStr, $encoding)
    {
        CkCrypt2_SetEncodedIV($this->_cPtr, $ivStr, $encoding);
    }

    public function SetEncodedKey($keyStr, $encoding)
    {
        CkCrypt2_SetEncodedKey($this->_cPtr, $keyStr, $encoding);
    }

    public function SetEncodedSalt($saltStr, $encoding)
    {
        CkCrypt2_SetEncodedSalt($this->_cPtr, $saltStr, $encoding);
    }

    public function SetEncryptCert($cert)
    {
        return CkCrypt2_SetEncryptCert($this->_cPtr, $cert);
    }

    public function SetHmacKeyBytes($keyBytes)
    {
        CkCrypt2_SetHmacKeyBytes($this->_cPtr, $keyBytes);
    }

    public function SetHmacKeyEncoded($key, $encoding)
    {
        CkCrypt2_SetHmacKeyEncoded($this->_cPtr, $key, $encoding);
    }

    public function SetHmacKeyString($key)
    {
        CkCrypt2_SetHmacKeyString($this->_cPtr, $key);
    }

    public function SetMacKeyBytes($keyBytes)
    {
        return CkCrypt2_SetMacKeyBytes($this->_cPtr, $keyBytes);
    }

    public function SetMacKeyEncoded($key, $encoding)
    {
        return CkCrypt2_SetMacKeyEncoded($this->_cPtr, $key, $encoding);
    }

    public function SetMacKeyString($key)
    {
        return CkCrypt2_SetMacKeyString($this->_cPtr, $key);
    }

    public function SetSecretKeyViaPassword($password)
    {
        CkCrypt2_SetSecretKeyViaPassword($this->_cPtr, $password);
    }

    public function SetSigningCert($cert)
    {
        return CkCrypt2_SetSigningCert($this->_cPtr, $cert);
    }

    public function SetSigningCert2($cert, $privateKey)
    {
        return CkCrypt2_SetSigningCert2($this->_cPtr, $cert, $privateKey);
    }

    public function SetTsaHttpObj($http)
    {
        CkCrypt2_SetTsaHttpObj($this->_cPtr, $http);
    }

    public function SetVerifyCert($cert)
    {
        return CkCrypt2_SetVerifyCert($this->_cPtr, $cert);
    }

    public function signBdENC($dataToSign)
    {
        return CkCrypt2_signBdENC($this->_cPtr, $dataToSign);
    }

    public function SignBdENCAsync($dataToSign)
    {
        $r = CkCrypt2_SignBdENCAsync($this->_cPtr, $dataToSign);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SignBytes($data, $outData)
    {
        return CkCrypt2_SignBytes($this->_cPtr, $data, $outData);
    }

    public function SignBytesAsync($data)
    {
        $r = CkCrypt2_SignBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function signBytesENC($data)
    {
        return CkCrypt2_signBytesENC($this->_cPtr, $data);
    }

    public function SignBytesENCAsync($data)
    {
        $r = CkCrypt2_SignBytesENCAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function signHashENC($encodedHash, $hashAlg, $hashEncoding)
    {
        return CkCrypt2_signHashENC($this->_cPtr, $encodedHash, $hashAlg, $hashEncoding);
    }

    public function SignHashENCAsync($encodedHash, $hashAlg, $hashEncoding)
    {
        $r = CkCrypt2_SignHashENCAsync($this->_cPtr, $encodedHash, $hashAlg, $hashEncoding);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function signSbENC($sb)
    {
        return CkCrypt2_signSbENC($this->_cPtr, $sb);
    }

    public function SignSbENCAsync($sb)
    {
        $r = CkCrypt2_SignSbENCAsync($this->_cPtr, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SignString($str, $outData)
    {
        return CkCrypt2_SignString($this->_cPtr, $str, $outData);
    }

    public function SignStringAsync($str)
    {
        $r = CkCrypt2_SignStringAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function signStringENC($str)
    {
        return CkCrypt2_signStringENC($this->_cPtr, $str);
    }

    public function SignStringENCAsync($str)
    {
        $r = CkCrypt2_SignStringENCAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function StringToBytes($inStr, $charset, $outBytes)
    {
        return CkCrypt2_StringToBytes($this->_cPtr, $inStr, $charset, $outBytes);
    }

    public function totp($secret, $secretEnc, $t0, $tNow, $tStep, $numDigits, $truncOffset, $hashAlg)
    {
        return CkCrypt2_totp($this->_cPtr, $secret, $secretEnc, $t0, $tNow, $tStep, $numDigits, $truncOffset, $hashAlg);
    }

    public function trimEndingWith($inStr, $ending)
    {
        return CkCrypt2_trimEndingWith($this->_cPtr, $inStr, $ending);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkCrypt2_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function UseCertVault($vault)
    {
        return CkCrypt2_UseCertVault($this->_cPtr, $vault);
    }

    public function VerifyBdENC($data, $encodedSig)
    {
        return CkCrypt2_VerifyBdENC($this->_cPtr, $data, $encodedSig);
    }

    public function VerifyBytes($data, $sig)
    {
        return CkCrypt2_VerifyBytes($this->_cPtr, $data, $sig);
    }

    public function VerifyBytesENC($data, $encodedSig)
    {
        return CkCrypt2_VerifyBytesENC($this->_cPtr, $data, $encodedSig);
    }

    public function VerifyDetachedSignature($inFilename, $p7sFilename)
    {
        return CkCrypt2_VerifyDetachedSignature($this->_cPtr, $inFilename, $p7sFilename);
    }

    public function VerifyP7M($p7mPath, $destPath)
    {
        return CkCrypt2_VerifyP7M($this->_cPtr, $p7mPath, $destPath);
    }

    public function VerifyP7S($inFilename, $p7sFilename)
    {
        return CkCrypt2_VerifyP7S($this->_cPtr, $inFilename, $p7sFilename);
    }

    public function VerifySbENC($sb, $encodedSig)
    {
        return CkCrypt2_VerifySbENC($this->_cPtr, $sb, $encodedSig);
    }

    public function VerifyString($str, $sig)
    {
        return CkCrypt2_VerifyString($this->_cPtr, $str, $sig);
    }

    public function VerifyStringENC($str, $encodedSig)
    {
        return CkCrypt2_VerifyStringENC($this->_cPtr, $str, $encodedSig);
    }

    public function WriteFile($filename, $fileData)
    {
        return CkCrypt2_WriteFile($this->_cPtr, $filename, $fileData);
    }

    public function XtsSetDataUnitNumber($loUint32, $hiUint32)
    {
        CkCrypt2_XtsSetDataUnitNumber($this->_cPtr, $loUint32, $hiUint32);
    }

    public function XtsSetEncodedTweakKey($key, $encoding)
    {
        CkCrypt2_XtsSetEncodedTweakKey($this->_cPtr, $key, $encoding);
    }

    public function XtsSetEncodedTweakValue($tweak, $encoding)
    {
        CkCrypt2_XtsSetEncodedTweakValue($this->_cPtr, $tweak, $encoding);
    }
}
