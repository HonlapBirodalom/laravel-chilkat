<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkRsa
{
    public $_cPtr = null;
    protected $_pData = array();

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkRsa') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkRsa();
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function get_Utf8()
    {
        return CkRsa_get_Utf8($this->_cPtr);
    }

    function put_Utf8($b)
    {
        CkRsa_put_Utf8($this->_cPtr, $b);
    }

    function get_Charset($str)
    {
        CkRsa_get_Charset($this->_cPtr, $str);
    }

    function charset()
    {
        return CkRsa_charset($this->_cPtr);
    }

    function put_Charset($newVal)
    {
        CkRsa_put_Charset($this->_cPtr, $newVal);
    }

    function get_DebugLogFilePath($str)
    {
        CkRsa_get_DebugLogFilePath($this->_cPtr, $str);
    }

    function debugLogFilePath()
    {
        return CkRsa_debugLogFilePath($this->_cPtr);
    }

    function put_DebugLogFilePath($newVal)
    {
        CkRsa_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    function get_EncodingMode($str)
    {
        CkRsa_get_EncodingMode($this->_cPtr, $str);
    }

    function encodingMode()
    {
        return CkRsa_encodingMode($this->_cPtr);
    }

    function put_EncodingMode($newVal)
    {
        CkRsa_put_EncodingMode($this->_cPtr, $newVal);
    }

    function get_LastErrorHtml($str)
    {
        CkRsa_get_LastErrorHtml($this->_cPtr, $str);
    }

    function lastErrorHtml()
    {
        return CkRsa_lastErrorHtml($this->_cPtr);
    }

    function get_LastErrorText($str)
    {
        CkRsa_get_LastErrorText($this->_cPtr, $str);
    }

    function lastErrorText()
    {
        return CkRsa_lastErrorText($this->_cPtr);
    }

    function get_LastErrorXml($str)
    {
        CkRsa_get_LastErrorXml($this->_cPtr, $str);
    }

    function lastErrorXml()
    {
        return CkRsa_lastErrorXml($this->_cPtr);
    }

    function get_LastMethodSuccess()
    {
        return CkRsa_get_LastMethodSuccess($this->_cPtr);
    }

    function put_LastMethodSuccess($newVal)
    {
        CkRsa_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    function get_LittleEndian()
    {
        return CkRsa_get_LittleEndian($this->_cPtr);
    }

    function put_LittleEndian($newVal)
    {
        CkRsa_put_LittleEndian($this->_cPtr, $newVal);
    }

    function get_NoUnpad()
    {
        return CkRsa_get_NoUnpad($this->_cPtr);
    }

    function put_NoUnpad($newVal)
    {
        CkRsa_put_NoUnpad($this->_cPtr, $newVal);
    }

    function get_NumBits()
    {
        return CkRsa_get_NumBits($this->_cPtr);
    }

    function get_OaepHash($str)
    {
        CkRsa_get_OaepHash($this->_cPtr, $str);
    }

    function oaepHash()
    {
        return CkRsa_oaepHash($this->_cPtr);
    }

    function put_OaepHash($newVal)
    {
        CkRsa_put_OaepHash($this->_cPtr, $newVal);
    }

    function get_OaepLabel($str)
    {
        CkRsa_get_OaepLabel($this->_cPtr, $str);
    }

    function oaepLabel()
    {
        return CkRsa_oaepLabel($this->_cPtr);
    }

    function put_OaepLabel($newVal)
    {
        CkRsa_put_OaepLabel($this->_cPtr, $newVal);
    }

    function get_OaepMgfHash($str)
    {
        CkRsa_get_OaepMgfHash($this->_cPtr, $str);
    }

    function oaepMgfHash()
    {
        return CkRsa_oaepMgfHash($this->_cPtr);
    }

    function put_OaepMgfHash($newVal)
    {
        CkRsa_put_OaepMgfHash($this->_cPtr, $newVal);
    }

    function get_OaepPadding()
    {
        return CkRsa_get_OaepPadding($this->_cPtr);
    }

    function put_OaepPadding($newVal)
    {
        CkRsa_put_OaepPadding($this->_cPtr, $newVal);
    }

    function get_PssSaltLen()
    {
        return CkRsa_get_PssSaltLen($this->_cPtr);
    }

    function put_PssSaltLen($newVal)
    {
        CkRsa_put_PssSaltLen($this->_cPtr, $newVal);
    }

    function get_VerboseLogging()
    {
        return CkRsa_get_VerboseLogging($this->_cPtr);
    }

    function put_VerboseLogging($newVal)
    {
        CkRsa_put_VerboseLogging($this->_cPtr, $newVal);
    }

    function get_Version($str)
    {
        CkRsa_get_Version($this->_cPtr, $str);
    }

    function version()
    {
        return CkRsa_version($this->_cPtr);
    }

    function DecryptBd($bd, $usePrivateKey)
    {
        return CkRsa_DecryptBd($this->_cPtr, $bd, $usePrivateKey);
    }

    function DecryptBytes($inData, $usePrivateKey, $outData)
    {
        return CkRsa_DecryptBytes($this->_cPtr, $inData, $usePrivateKey, $outData);
    }

    function DecryptBytesENC($str, $bUsePrivateKey, $outData)
    {
        return CkRsa_DecryptBytesENC($this->_cPtr, $str, $bUsePrivateKey, $outData);
    }

    function decryptString($binarySig, $usePrivateKey)
    {
        return CkRsa_decryptString($this->_cPtr, $binarySig, $usePrivateKey);
    }

    function decryptStringENC($encodedSig, $usePrivateKey)
    {
        return CkRsa_decryptStringENC($this->_cPtr, $encodedSig, $usePrivateKey);
    }

    function EncryptBd($bd, $usePrivateKey)
    {
        return CkRsa_EncryptBd($this->_cPtr, $bd, $usePrivateKey);
    }

    function EncryptBytes($binaryData, $usePrivateKey, $outData)
    {
        return CkRsa_EncryptBytes($this->_cPtr, $binaryData, $usePrivateKey, $outData);
    }

    function encryptBytesENC($data, $bUsePrivateKey)
    {
        return CkRsa_encryptBytesENC($this->_cPtr, $data, $bUsePrivateKey);
    }

    function EncryptString($stringToEncrypt, $usePrivateKey, $outData)
    {
        return CkRsa_EncryptString($this->_cPtr, $stringToEncrypt, $usePrivateKey, $outData);
    }

    function encryptStringENC($str, $bUsePrivateKey)
    {
        return CkRsa_encryptStringENC($this->_cPtr, $str, $bUsePrivateKey);
    }

    function exportPrivateKey()
    {
        return CkRsa_exportPrivateKey($this->_cPtr);
    }

    function ExportPrivateKeyObj()
    {
        $r = CkRsa_ExportPrivateKeyObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkPrivateKey($r);
        }
        return $r;
    }

    function exportPublicKey()
    {
        return CkRsa_exportPublicKey($this->_cPtr);
    }

    function ExportPublicKeyObj()
    {
        $r = CkRsa_ExportPublicKeyObj($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkPublicKey($r);
        }
        return $r;
    }

    function GenerateKey($numBits)
    {
        return CkRsa_GenerateKey($this->_cPtr, $numBits);
    }

    function ImportPrivateKey($xmlKey)
    {
        return CkRsa_ImportPrivateKey($this->_cPtr, $xmlKey);
    }

    function ImportPrivateKeyObj($key)
    {
        return CkRsa_ImportPrivateKeyObj($this->_cPtr, $key);
    }

    function ImportPublicKey($xmlKey)
    {
        return CkRsa_ImportPublicKey($this->_cPtr, $xmlKey);
    }

    function ImportPublicKeyObj($key)
    {
        return CkRsa_ImportPublicKeyObj($this->_cPtr, $key);
    }

    function OpenSslSignBd($bd)
    {
        return CkRsa_OpenSslSignBd($this->_cPtr, $bd);
    }

    function OpenSslSignBytes($data, $outBytes)
    {
        return CkRsa_OpenSslSignBytes($this->_cPtr, $data, $outBytes);
    }

    function openSslSignBytesENC($data)
    {
        return CkRsa_openSslSignBytesENC($this->_cPtr, $data);
    }

    function OpenSslSignString($str, $outBytes)
    {
        return CkRsa_OpenSslSignString($this->_cPtr, $str, $outBytes);
    }

    function openSslSignStringENC($str)
    {
        return CkRsa_openSslSignStringENC($this->_cPtr, $str);
    }

    function OpenSslVerifyBd($bd)
    {
        return CkRsa_OpenSslVerifyBd($this->_cPtr, $bd);
    }

    function OpenSslVerifyBytes($signature, $outBytes)
    {
        return CkRsa_OpenSslVerifyBytes($this->_cPtr, $signature, $outBytes);
    }

    function OpenSslVerifyBytesENC($str, $outBytes)
    {
        return CkRsa_OpenSslVerifyBytesENC($this->_cPtr, $str, $outBytes);
    }

    function openSslVerifyString($data)
    {
        return CkRsa_openSslVerifyString($this->_cPtr, $data);
    }

    function openSslVerifyStringENC($str)
    {
        return CkRsa_openSslVerifyStringENC($this->_cPtr, $str);
    }

    function SaveLastError($path)
    {
        return CkRsa_SaveLastError($this->_cPtr, $path);
    }

    function SetX509Cert($cert, $usePrivateKey)
    {
        return CkRsa_SetX509Cert($this->_cPtr, $cert, $usePrivateKey);
    }

    function SignBd($bdData, $hashAlgorithm, $bdSig)
    {
        return CkRsa_SignBd($this->_cPtr, $bdData, $hashAlgorithm, $bdSig);
    }

    function SignBytes($binaryData, $hashAlgorithm, $outData)
    {
        return CkRsa_SignBytes($this->_cPtr, $binaryData, $hashAlgorithm, $outData);
    }

    function signBytesENC($binaryData, $hashAlgorithm)
    {
        return CkRsa_signBytesENC($this->_cPtr, $binaryData, $hashAlgorithm);
    }

    function SignHash($hashBytes, $hashAlg, $outBytes)
    {
        return CkRsa_SignHash($this->_cPtr, $hashBytes, $hashAlg, $outBytes);
    }

    function signHashENC($encodedHash, $hashAlg)
    {
        return CkRsa_signHashENC($this->_cPtr, $encodedHash, $hashAlg);
    }

    function SignString($strToBeHashed, $hashAlgorithm, $outData)
    {
        return CkRsa_SignString($this->_cPtr, $strToBeHashed, $hashAlgorithm, $outData);
    }

    function signStringENC($strToBeHashed, $hashAlgorithm)
    {
        return CkRsa_signStringENC($this->_cPtr, $strToBeHashed, $hashAlgorithm);
    }

    function snkToXml($filename)
    {
        return CkRsa_snkToXml($this->_cPtr, $filename);
    }

    function UnlockComponent($unlockCode)
    {
        return CkRsa_UnlockComponent($this->_cPtr, $unlockCode);
    }

    function VerifyBd($bdData, $hashAlgorithm, $bdSig)
    {
        return CkRsa_VerifyBd($this->_cPtr, $bdData, $hashAlgorithm, $bdSig);
    }

    function VerifyBytes($originalData, $hashAlgorithm, $signatureBytes)
    {
        return CkRsa_VerifyBytes($this->_cPtr, $originalData, $hashAlgorithm, $signatureBytes);
    }

    function VerifyBytesENC($originalData, $hashAlgorithm, $encodedSig)
    {
        return CkRsa_VerifyBytesENC($this->_cPtr, $originalData, $hashAlgorithm, $encodedSig);
    }

    function VerifyHash($hashBytes, $hashAlg, $sigBytes)
    {
        return CkRsa_VerifyHash($this->_cPtr, $hashBytes, $hashAlg, $sigBytes);
    }

    function VerifyHashENC($encodedHash, $hashAlg, $encodedSig)
    {
        return CkRsa_VerifyHashENC($this->_cPtr, $encodedHash, $hashAlg, $encodedSig);
    }

    function VerifyPrivateKey($xml)
    {
        return CkRsa_VerifyPrivateKey($this->_cPtr, $xml);
    }

    function VerifyString($originalString, $hashAlgorithm, $binarySig)
    {
        return CkRsa_VerifyString($this->_cPtr, $originalString, $hashAlgorithm, $binarySig);
    }

    function VerifyStringENC($originalString, $hashAlgorithm, $encodedSig)
    {
        return CkRsa_VerifyStringENC($this->_cPtr, $originalString, $hashAlgorithm, $encodedSig);
    }
}
