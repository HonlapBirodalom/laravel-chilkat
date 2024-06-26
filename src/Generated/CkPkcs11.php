<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkPkcs11
{
    public $_cPtr = null;
    protected $_pData = array();

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkPkcs11') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkPkcs11();
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
        return CkPkcs11_get_Utf8($this->_cPtr);
    }

    function put_Utf8($b)
    {
        CkPkcs11_put_Utf8($this->_cPtr, $b);
    }

    function get_DebugLogFilePath($str)
    {
        CkPkcs11_get_DebugLogFilePath($this->_cPtr, $str);
    }

    function debugLogFilePath()
    {
        return CkPkcs11_debugLogFilePath($this->_cPtr);
    }

    function put_DebugLogFilePath($newVal)
    {
        CkPkcs11_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    function get_LastErrorHtml($str)
    {
        CkPkcs11_get_LastErrorHtml($this->_cPtr, $str);
    }

    function lastErrorHtml()
    {
        return CkPkcs11_lastErrorHtml($this->_cPtr);
    }

    function get_LastErrorText($str)
    {
        CkPkcs11_get_LastErrorText($this->_cPtr, $str);
    }

    function lastErrorText()
    {
        return CkPkcs11_lastErrorText($this->_cPtr);
    }

    function get_LastErrorXml($str)
    {
        CkPkcs11_get_LastErrorXml($this->_cPtr, $str);
    }

    function lastErrorXml()
    {
        return CkPkcs11_lastErrorXml($this->_cPtr);
    }

    function get_LastMethodSuccess()
    {
        return CkPkcs11_get_LastMethodSuccess($this->_cPtr);
    }

    function put_LastMethodSuccess($newVal)
    {
        CkPkcs11_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    function get_NumCerts()
    {
        return CkPkcs11_get_NumCerts($this->_cPtr);
    }

    function get_SharedLibPath($str)
    {
        CkPkcs11_get_SharedLibPath($this->_cPtr, $str);
    }

    function sharedLibPath()
    {
        return CkPkcs11_sharedLibPath($this->_cPtr);
    }

    function put_SharedLibPath($newVal)
    {
        CkPkcs11_put_SharedLibPath($this->_cPtr, $newVal);
    }

    function get_SigContextPin($str)
    {
        CkPkcs11_get_SigContextPin($this->_cPtr, $str);
    }

    function sigContextPin()
    {
        return CkPkcs11_sigContextPin($this->_cPtr);
    }

    function put_SigContextPin($newVal)
    {
        CkPkcs11_put_SigContextPin($this->_cPtr, $newVal);
    }

    function get_VerboseLogging()
    {
        return CkPkcs11_get_VerboseLogging($this->_cPtr);
    }

    function put_VerboseLogging($newVal)
    {
        CkPkcs11_put_VerboseLogging($this->_cPtr, $newVal);
    }

    function get_Version($str)
    {
        CkPkcs11_get_Version($this->_cPtr, $str);
    }

    function version()
    {
        return CkPkcs11_version($this->_cPtr);
    }

    function CloseSession()
    {
        return CkPkcs11_CloseSession($this->_cPtr);
    }

    function CreatePkcs11Object($attrs)
    {
        return CkPkcs11_CreatePkcs11Object($this->_cPtr, $attrs);
    }

    function DestroyObject($hObject)
    {
        return CkPkcs11_DestroyObject($this->_cPtr, $hObject);
    }

    function Discover($onlyTokensPresent, $json)
    {
        return CkPkcs11_Discover($this->_cPtr, $onlyTokensPresent, $json);
    }

    function ExportPublicKey($keyHandle, $pubKey)
    {
        return CkPkcs11_ExportPublicKey($this->_cPtr, $keyHandle, $pubKey);
    }

    function FindAllCerts()
    {
        return CkPkcs11_FindAllCerts($this->_cPtr);
    }

    function FindAllKeys($keyClass, $json)
    {
        return CkPkcs11_FindAllKeys($this->_cPtr, $keyClass, $json);
    }

    function FindCert($certPart, $partValue, $cert)
    {
        return CkPkcs11_FindCert($this->_cPtr, $certPart, $partValue, $cert);
    }

    function FindObject($jsonTemplate)
    {
        return CkPkcs11_FindObject($this->_cPtr, $jsonTemplate);
    }

    function GenEcKey($publicAttrs, $privateAttrs, $jsonOut, $pubKey)
    {
        return CkPkcs11_GenEcKey($this->_cPtr, $publicAttrs, $privateAttrs, $jsonOut, $pubKey);
    }

    function GenRsaKey($publicAttrs, $privateAttrs, $jsonOut, $pubKey)
    {
        return CkPkcs11_GenRsaKey($this->_cPtr, $publicAttrs, $privateAttrs, $jsonOut, $pubKey);
    }

    function GenSecretKey($keyType, $jsonTemplate)
    {
        return CkPkcs11_GenSecretKey($this->_cPtr, $keyType, $jsonTemplate);
    }

    function GetCert($index, $cert)
    {
        return CkPkcs11_GetCert($this->_cPtr, $index, $cert);
    }

    function ImportPrivateKey($privKey, $jsonTemplate)
    {
        return CkPkcs11_ImportPrivateKey($this->_cPtr, $privKey, $jsonTemplate);
    }

    function ImportSshKey($sshKey, $jsonTemplate)
    {
        return CkPkcs11_ImportSshKey($this->_cPtr, $sshKey, $jsonTemplate);
    }

    function Initialize()
    {
        return CkPkcs11_Initialize($this->_cPtr);
    }

    function InitPin($pin)
    {
        return CkPkcs11_InitPin($this->_cPtr, $pin);
    }

    function InitToken($slotId, $pin, $tokenLabel)
    {
        return CkPkcs11_InitToken($this->_cPtr, $slotId, $pin, $tokenLabel);
    }

    function Login($userType, $pin)
    {
        return CkPkcs11_Login($this->_cPtr, $userType, $pin);
    }

    function Logout()
    {
        return CkPkcs11_Logout($this->_cPtr);
    }

    function OpenSession($slotId, $readWrite)
    {
        return CkPkcs11_OpenSession($this->_cPtr, $slotId, $readWrite);
    }

    function QuickSession($userType, $pin)
    {
        return CkPkcs11_QuickSession($this->_cPtr, $userType, $pin);
    }

    function SaveLastError($path)
    {
        return CkPkcs11_SaveLastError($this->_cPtr, $path);
    }

    function SetPin($oldPin, $newPin)
    {
        return CkPkcs11_SetPin($this->_cPtr, $oldPin, $newPin);
    }
}
