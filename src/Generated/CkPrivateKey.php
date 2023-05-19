<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkPrivateKey
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkPrivateKey') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkPrivateKey();
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
        return CkPrivateKey_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkPrivateKey_put_Utf8($this->_cPtr, $b);
    }

    public function get_BitLength()
    {
        return CkPrivateKey_get_BitLength($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkPrivateKey_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkPrivateKey_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkPrivateKey_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_KeyType($str)
    {
        CkPrivateKey_get_KeyType($this->_cPtr, $str);
    }

    public function keyType()
    {
        return CkPrivateKey_keyType($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkPrivateKey_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkPrivateKey_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkPrivateKey_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkPrivateKey_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkPrivateKey_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkPrivateKey_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkPrivateKey_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkPrivateKey_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Pkcs8EncryptAlg($str)
    {
        CkPrivateKey_get_Pkcs8EncryptAlg($this->_cPtr, $str);
    }

    public function pkcs8EncryptAlg()
    {
        return CkPrivateKey_pkcs8EncryptAlg($this->_cPtr);
    }

    public function put_Pkcs8EncryptAlg($newVal)
    {
        CkPrivateKey_put_Pkcs8EncryptAlg($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkPrivateKey_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkPrivateKey_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkPrivateKey_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkPrivateKey_version($this->_cPtr);
    }

    public function getJwk()
    {
        return CkPrivateKey_getJwk($this->_cPtr);
    }

    public function jwk()
    {
        return CkPrivateKey_jwk($this->_cPtr);
    }

    public function getJwkThumbprint($hashAlg)
    {
        return CkPrivateKey_getJwkThumbprint($this->_cPtr, $hashAlg);
    }

    public function jwkThumbprint($hashAlg)
    {
        return CkPrivateKey_jwkThumbprint($this->_cPtr, $hashAlg);
    }

    public function GetPkcs1($outBytes)
    {
        return CkPrivateKey_GetPkcs1($this->_cPtr, $outBytes);
    }

    public function getPkcs1ENC($encoding)
    {
        return CkPrivateKey_getPkcs1ENC($this->_cPtr, $encoding);
    }

    public function pkcs1ENC($encoding)
    {
        return CkPrivateKey_pkcs1ENC($this->_cPtr, $encoding);
    }

    public function getPkcs1Pem()
    {
        return CkPrivateKey_getPkcs1Pem($this->_cPtr);
    }

    public function pkcs1Pem()
    {
        return CkPrivateKey_pkcs1Pem($this->_cPtr);
    }

    public function GetPkcs8($outData)
    {
        return CkPrivateKey_GetPkcs8($this->_cPtr, $outData);
    }

    public function getPkcs8ENC($encoding)
    {
        return CkPrivateKey_getPkcs8ENC($this->_cPtr, $encoding);
    }

    public function pkcs8ENC($encoding)
    {
        return CkPrivateKey_pkcs8ENC($this->_cPtr, $encoding);
    }

    public function GetPkcs8Encrypted($password, $outBytes)
    {
        return CkPrivateKey_GetPkcs8Encrypted($this->_cPtr, $password, $outBytes);
    }

    public function getPkcs8EncryptedENC($encoding, $password)
    {
        return CkPrivateKey_getPkcs8EncryptedENC($this->_cPtr, $encoding, $password);
    }

    public function pkcs8EncryptedENC($encoding, $password)
    {
        return CkPrivateKey_pkcs8EncryptedENC($this->_cPtr, $encoding, $password);
    }

    public function getPkcs8EncryptedPem($password)
    {
        return CkPrivateKey_getPkcs8EncryptedPem($this->_cPtr, $password);
    }

    public function pkcs8EncryptedPem($password)
    {
        return CkPrivateKey_pkcs8EncryptedPem($this->_cPtr, $password);
    }

    public function getPkcs8Pem()
    {
        return CkPrivateKey_getPkcs8Pem($this->_cPtr);
    }

    public function pkcs8Pem()
    {
        return CkPrivateKey_pkcs8Pem($this->_cPtr);
    }

    public function GetPublicKey()
    {
        $r = CkPrivateKey_GetPublicKey($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPublicKey($r);
        }

        return $r;
    }

    public function getRawHex($pubKey)
    {
        return CkPrivateKey_getRawHex($this->_cPtr, $pubKey);
    }

    public function rawHex($pubKey)
    {
        return CkPrivateKey_rawHex($this->_cPtr, $pubKey);
    }

    public function GetRsaDer($outData)
    {
        return CkPrivateKey_GetRsaDer($this->_cPtr, $outData);
    }

    public function getRsaPem()
    {
        return CkPrivateKey_getRsaPem($this->_cPtr);
    }

    public function rsaPem()
    {
        return CkPrivateKey_rsaPem($this->_cPtr);
    }

    public function getXml()
    {
        return CkPrivateKey_getXml($this->_cPtr);
    }

    public function xml()
    {
        return CkPrivateKey_xml($this->_cPtr);
    }

    public function LoadAnyFormat($privKeyData, $password)
    {
        return CkPrivateKey_LoadAnyFormat($this->_cPtr, $privKeyData, $password);
    }

    public function LoadAnyFormatFile($path, $password)
    {
        return CkPrivateKey_LoadAnyFormatFile($this->_cPtr, $path, $password);
    }

    public function LoadEd25519($privKey, $pubKey)
    {
        return CkPrivateKey_LoadEd25519($this->_cPtr, $privKey, $pubKey);
    }

    public function LoadEncryptedPem($pemStr, $password)
    {
        return CkPrivateKey_LoadEncryptedPem($this->_cPtr, $pemStr, $password);
    }

    public function LoadEncryptedPemFile($path, $password)
    {
        return CkPrivateKey_LoadEncryptedPemFile($this->_cPtr, $path, $password);
    }

    public function LoadJwk($jsonStr)
    {
        return CkPrivateKey_LoadJwk($this->_cPtr, $jsonStr);
    }

    public function LoadPem($str)
    {
        return CkPrivateKey_LoadPem($this->_cPtr, $str);
    }

    public function LoadPemFile($path)
    {
        return CkPrivateKey_LoadPemFile($this->_cPtr, $path);
    }

    public function LoadPkcs1($data)
    {
        return CkPrivateKey_LoadPkcs1($this->_cPtr, $data);
    }

    public function LoadPkcs1File($path)
    {
        return CkPrivateKey_LoadPkcs1File($this->_cPtr, $path);
    }

    public function LoadPkcs8($data)
    {
        return CkPrivateKey_LoadPkcs8($this->_cPtr, $data);
    }

    public function LoadPkcs8Encrypted($data, $password)
    {
        return CkPrivateKey_LoadPkcs8Encrypted($this->_cPtr, $data, $password);
    }

    public function LoadPkcs8EncryptedFile($path, $password)
    {
        return CkPrivateKey_LoadPkcs8EncryptedFile($this->_cPtr, $path, $password);
    }

    public function LoadPkcs8File($path)
    {
        return CkPrivateKey_LoadPkcs8File($this->_cPtr, $path);
    }

    public function LoadRsaDer($data)
    {
        return CkPrivateKey_LoadRsaDer($this->_cPtr, $data);
    }

    public function LoadRsaDerFile($path)
    {
        return CkPrivateKey_LoadRsaDerFile($this->_cPtr, $path);
    }

    public function LoadXml($xml)
    {
        return CkPrivateKey_LoadXml($this->_cPtr, $xml);
    }

    public function LoadXmlFile($path)
    {
        return CkPrivateKey_LoadXmlFile($this->_cPtr, $path);
    }

    public function SaveLastError($path)
    {
        return CkPrivateKey_SaveLastError($this->_cPtr, $path);
    }

    public function SavePemFile($path)
    {
        return CkPrivateKey_SavePemFile($this->_cPtr, $path);
    }

    public function SavePkcs1File($path)
    {
        return CkPrivateKey_SavePkcs1File($this->_cPtr, $path);
    }

    public function SavePkcs8EncryptedFile($password, $path)
    {
        return CkPrivateKey_SavePkcs8EncryptedFile($this->_cPtr, $password, $path);
    }

    public function SavePkcs8EncryptedPemFile($password, $path)
    {
        return CkPrivateKey_SavePkcs8EncryptedPemFile($this->_cPtr, $password, $path);
    }

    public function SavePkcs8File($path)
    {
        return CkPrivateKey_SavePkcs8File($this->_cPtr, $path);
    }

    public function SavePkcs8PemFile($path)
    {
        return CkPrivateKey_SavePkcs8PemFile($this->_cPtr, $path);
    }

    public function SaveRsaDerFile($path)
    {
        return CkPrivateKey_SaveRsaDerFile($this->_cPtr, $path);
    }

    public function SaveRsaPemFile($path)
    {
        return CkPrivateKey_SaveRsaPemFile($this->_cPtr, $path);
    }

    public function SaveXmlFile($path)
    {
        return CkPrivateKey_SaveXmlFile($this->_cPtr, $path);
    }
}
