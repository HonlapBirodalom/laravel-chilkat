<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkAuthAzureStorage
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkAuthAzureStorage') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkAuthAzureStorage();
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
        return CkAuthAzureStorage_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkAuthAzureStorage_put_Utf8($this->_cPtr, $b);
    }

    public function get_AccessKey($str)
    {
        CkAuthAzureStorage_get_AccessKey($this->_cPtr, $str);
    }

    public function accessKey()
    {
        return CkAuthAzureStorage_accessKey($this->_cPtr);
    }

    public function put_AccessKey($newVal)
    {
        CkAuthAzureStorage_put_AccessKey($this->_cPtr, $newVal);
    }

    public function get_Account($str)
    {
        CkAuthAzureStorage_get_Account($this->_cPtr, $str);
    }

    public function account()
    {
        return CkAuthAzureStorage_account($this->_cPtr);
    }

    public function put_Account($newVal)
    {
        CkAuthAzureStorage_put_Account($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkAuthAzureStorage_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkAuthAzureStorage_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkAuthAzureStorage_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkAuthAzureStorage_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkAuthAzureStorage_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkAuthAzureStorage_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkAuthAzureStorage_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkAuthAzureStorage_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkAuthAzureStorage_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkAuthAzureStorage_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkAuthAzureStorage_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Scheme($str)
    {
        CkAuthAzureStorage_get_Scheme($this->_cPtr, $str);
    }

    public function scheme()
    {
        return CkAuthAzureStorage_scheme($this->_cPtr);
    }

    public function put_Scheme($newVal)
    {
        CkAuthAzureStorage_put_Scheme($this->_cPtr, $newVal);
    }

    public function get_Service($str)
    {
        CkAuthAzureStorage_get_Service($this->_cPtr, $str);
    }

    public function service()
    {
        return CkAuthAzureStorage_service($this->_cPtr);
    }

    public function put_Service($newVal)
    {
        CkAuthAzureStorage_put_Service($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkAuthAzureStorage_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkAuthAzureStorage_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkAuthAzureStorage_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkAuthAzureStorage_version($this->_cPtr);
    }

    public function get_XMsVersion($str)
    {
        CkAuthAzureStorage_get_XMsVersion($this->_cPtr, $str);
    }

    public function xMsVersion()
    {
        return CkAuthAzureStorage_xMsVersion($this->_cPtr);
    }

    public function put_XMsVersion($newVal)
    {
        CkAuthAzureStorage_put_XMsVersion($this->_cPtr, $newVal);
    }

    public function SaveLastError($path)
    {
        return CkAuthAzureStorage_SaveLastError($this->_cPtr, $path);
    }
}
