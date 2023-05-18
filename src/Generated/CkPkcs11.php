<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkPkcs11
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkPkcs11') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkPkcs11();
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
        return CkPkcs11_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkPkcs11_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkPkcs11_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkPkcs11_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkPkcs11_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkPkcs11_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkPkcs11_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkPkcs11_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkPkcs11_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkPkcs11_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkPkcs11_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkPkcs11_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkPkcs11_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumCerts()
    {
        return CkPkcs11_get_NumCerts($this->_cPtr);
    }

    public function get_SharedLibPath($str)
    {
        CkPkcs11_get_SharedLibPath($this->_cPtr, $str);
    }

    public function sharedLibPath()
    {
        return CkPkcs11_sharedLibPath($this->_cPtr);
    }

    public function put_SharedLibPath($newVal)
    {
        CkPkcs11_put_SharedLibPath($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkPkcs11_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkPkcs11_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkPkcs11_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkPkcs11_version($this->_cPtr);
    }

    public function CloseSession()
    {
        return CkPkcs11_CloseSession($this->_cPtr);
    }

    public function Discover($onlyTokensPresent, $json)
    {
        return CkPkcs11_Discover($this->_cPtr, $onlyTokensPresent, $json);
    }

    public function FindAllCerts()
    {
        return CkPkcs11_FindAllCerts($this->_cPtr);
    }

    public function FindCert($certPart, $partValue, $cert)
    {
        return CkPkcs11_FindCert($this->_cPtr, $certPart, $partValue, $cert);
    }

    public function GetCert($index, $cert)
    {
        return CkPkcs11_GetCert($this->_cPtr, $index, $cert);
    }

    public function Initialize()
    {
        return CkPkcs11_Initialize($this->_cPtr);
    }

    public function InitPin($pin)
    {
        return CkPkcs11_InitPin($this->_cPtr, $pin);
    }

    public function InitToken($slotId, $pin, $tokenLabel)
    {
        return CkPkcs11_InitToken($this->_cPtr, $slotId, $pin, $tokenLabel);
    }

    public function Login($userType, $pin)
    {
        return CkPkcs11_Login($this->_cPtr, $userType, $pin);
    }

    public function Logout()
    {
        return CkPkcs11_Logout($this->_cPtr);
    }

    public function OpenSession($slotId, $readWrite)
    {
        return CkPkcs11_OpenSession($this->_cPtr, $slotId, $readWrite);
    }

    public function SaveLastError($path)
    {
        return CkPkcs11_SaveLastError($this->_cPtr, $path);
    }

    public function SetPin($oldPin, $newPin)
    {
        return CkPkcs11_SetPin($this->_cPtr, $oldPin, $newPin);
    }
}
