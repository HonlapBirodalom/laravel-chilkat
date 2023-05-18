<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkAuthAzureSAS
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkAuthAzureSAS') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkAuthAzureSAS();
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
        return CkAuthAzureSAS_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkAuthAzureSAS_put_Utf8($this->_cPtr, $b);
    }

    public function get_AccessKey($str)
    {
        CkAuthAzureSAS_get_AccessKey($this->_cPtr, $str);
    }

    public function accessKey()
    {
        return CkAuthAzureSAS_accessKey($this->_cPtr);
    }

    public function put_AccessKey($newVal)
    {
        CkAuthAzureSAS_put_AccessKey($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkAuthAzureSAS_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkAuthAzureSAS_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkAuthAzureSAS_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkAuthAzureSAS_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkAuthAzureSAS_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkAuthAzureSAS_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkAuthAzureSAS_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkAuthAzureSAS_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkAuthAzureSAS_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkAuthAzureSAS_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkAuthAzureSAS_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_StringToSign($str)
    {
        CkAuthAzureSAS_get_StringToSign($this->_cPtr, $str);
    }

    public function stringToSign()
    {
        return CkAuthAzureSAS_stringToSign($this->_cPtr);
    }

    public function put_StringToSign($newVal)
    {
        CkAuthAzureSAS_put_StringToSign($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkAuthAzureSAS_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkAuthAzureSAS_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkAuthAzureSAS_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkAuthAzureSAS_version($this->_cPtr);
    }

    public function Clear()
    {
        CkAuthAzureSAS_Clear($this->_cPtr);
    }

    public function generateToken()
    {
        return CkAuthAzureSAS_generateToken($this->_cPtr);
    }

    public function SaveLastError($path)
    {
        return CkAuthAzureSAS_SaveLastError($this->_cPtr, $path);
    }

    public function SetNonTokenParam($name, $value)
    {
        return CkAuthAzureSAS_SetNonTokenParam($this->_cPtr, $name, $value);
    }

    public function SetTokenParam($name, $authParamName, $value)
    {
        return CkAuthAzureSAS_SetTokenParam($this->_cPtr, $name, $authParamName, $value);
    }
}
