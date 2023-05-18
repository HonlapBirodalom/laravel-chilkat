<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkPublicKey
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkPublicKey') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkPublicKey();
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
        return CkPublicKey_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkPublicKey_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkPublicKey_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkPublicKey_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkPublicKey_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Empty()
    {
        return CkPublicKey_get_Empty($this->_cPtr);
    }

    public function get_KeySize()
    {
        return CkPublicKey_get_KeySize($this->_cPtr);
    }

    public function get_KeyType($str)
    {
        CkPublicKey_get_KeyType($this->_cPtr, $str);
    }

    public function keyType()
    {
        return CkPublicKey_keyType($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkPublicKey_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkPublicKey_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkPublicKey_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkPublicKey_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkPublicKey_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkPublicKey_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkPublicKey_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkPublicKey_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkPublicKey_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkPublicKey_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkPublicKey_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkPublicKey_version($this->_cPtr);
    }

    public function GetDer($preferPkcs1, $outBytes)
    {
        return CkPublicKey_GetDer($this->_cPtr, $preferPkcs1, $outBytes);
    }

    public function getEncoded($preferPkcs1, $encoding)
    {
        return CkPublicKey_getEncoded($this->_cPtr, $preferPkcs1, $encoding);
    }

    public function encoded($preferPkcs1, $encoding)
    {
        return CkPublicKey_encoded($this->_cPtr, $preferPkcs1, $encoding);
    }

    public function getJwk()
    {
        return CkPublicKey_getJwk($this->_cPtr);
    }

    public function jwk()
    {
        return CkPublicKey_jwk($this->_cPtr);
    }

    public function getJwkThumbprint($hashAlg)
    {
        return CkPublicKey_getJwkThumbprint($this->_cPtr, $hashAlg);
    }

    public function jwkThumbprint($hashAlg)
    {
        return CkPublicKey_jwkThumbprint($this->_cPtr, $hashAlg);
    }

    public function GetOpenSslDer($outData)
    {
        return CkPublicKey_GetOpenSslDer($this->_cPtr, $outData);
    }

    public function getOpenSslPem()
    {
        return CkPublicKey_getOpenSslPem($this->_cPtr);
    }

    public function openSslPem()
    {
        return CkPublicKey_openSslPem($this->_cPtr);
    }

    public function getPem($preferPkcs1)
    {
        return CkPublicKey_getPem($this->_cPtr, $preferPkcs1);
    }

    public function pem($preferPkcs1)
    {
        return CkPublicKey_pem($this->_cPtr, $preferPkcs1);
    }

    public function getPkcs1ENC($encoding)
    {
        return CkPublicKey_getPkcs1ENC($this->_cPtr, $encoding);
    }

    public function pkcs1ENC($encoding)
    {
        return CkPublicKey_pkcs1ENC($this->_cPtr, $encoding);
    }

    public function getPkcs8ENC($encoding)
    {
        return CkPublicKey_getPkcs8ENC($this->_cPtr, $encoding);
    }

    public function pkcs8ENC($encoding)
    {
        return CkPublicKey_pkcs8ENC($this->_cPtr, $encoding);
    }

    public function GetRsaDer($outData)
    {
        return CkPublicKey_GetRsaDer($this->_cPtr, $outData);
    }

    public function getXml()
    {
        return CkPublicKey_getXml($this->_cPtr);
    }

    public function xml()
    {
        return CkPublicKey_xml($this->_cPtr);
    }

    public function LoadBase64($keyStr)
    {
        return CkPublicKey_LoadBase64($this->_cPtr, $keyStr);
    }

    public function LoadBd($bd)
    {
        return CkPublicKey_LoadBd($this->_cPtr, $bd);
    }

    public function LoadEcdsa($curveName, $Qx, $Qy)
    {
        return CkPublicKey_LoadEcdsa($this->_cPtr, $curveName, $Qx, $Qy);
    }

    public function LoadEd25519($pubKey)
    {
        return CkPublicKey_LoadEd25519($this->_cPtr, $pubKey);
    }

    public function LoadFromBinary($keyBytes)
    {
        return CkPublicKey_LoadFromBinary($this->_cPtr, $keyBytes);
    }

    public function LoadFromFile($path)
    {
        return CkPublicKey_LoadFromFile($this->_cPtr, $path);
    }

    public function LoadFromString($keyString)
    {
        return CkPublicKey_LoadFromString($this->_cPtr, $keyString);
    }

    public function LoadOpenSslDer($data)
    {
        return CkPublicKey_LoadOpenSslDer($this->_cPtr, $data);
    }

    public function LoadOpenSslDerFile($path)
    {
        return CkPublicKey_LoadOpenSslDerFile($this->_cPtr, $path);
    }

    public function LoadOpenSslPem($str)
    {
        return CkPublicKey_LoadOpenSslPem($this->_cPtr, $str);
    }

    public function LoadOpenSslPemFile($path)
    {
        return CkPublicKey_LoadOpenSslPemFile($this->_cPtr, $path);
    }

    public function LoadPkcs1Pem($str)
    {
        return CkPublicKey_LoadPkcs1Pem($this->_cPtr, $str);
    }

    public function LoadRsaDer($data)
    {
        return CkPublicKey_LoadRsaDer($this->_cPtr, $data);
    }

    public function LoadRsaDerFile($path)
    {
        return CkPublicKey_LoadRsaDerFile($this->_cPtr, $path);
    }

    public function LoadXml($xml)
    {
        return CkPublicKey_LoadXml($this->_cPtr, $xml);
    }

    public function LoadXmlFile($path)
    {
        return CkPublicKey_LoadXmlFile($this->_cPtr, $path);
    }

    public function SaveDerFile($preferPkcs1, $path)
    {
        return CkPublicKey_SaveDerFile($this->_cPtr, $preferPkcs1, $path);
    }

    public function SaveLastError($path)
    {
        return CkPublicKey_SaveLastError($this->_cPtr, $path);
    }

    public function SaveOpenSslDerFile($path)
    {
        return CkPublicKey_SaveOpenSslDerFile($this->_cPtr, $path);
    }

    public function SaveOpenSslPemFile($path)
    {
        return CkPublicKey_SaveOpenSslPemFile($this->_cPtr, $path);
    }

    public function SavePemFile($preferPkcs1, $path)
    {
        return CkPublicKey_SavePemFile($this->_cPtr, $preferPkcs1, $path);
    }

    public function SaveRsaDerFile($path)
    {
        return CkPublicKey_SaveRsaDerFile($this->_cPtr, $path);
    }

    public function SaveXmlFile($path)
    {
        return CkPublicKey_SaveXmlFile($this->_cPtr, $path);
    }
}
