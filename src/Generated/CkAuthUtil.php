<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkAuthUtil
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkAuthUtil') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkAuthUtil();
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
        return CkAuthUtil_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkAuthUtil_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkAuthUtil_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkAuthUtil_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkAuthUtil_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkAuthUtil_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkAuthUtil_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkAuthUtil_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkAuthUtil_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkAuthUtil_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkAuthUtil_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkAuthUtil_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkAuthUtil_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkAuthUtil_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkAuthUtil_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkAuthUtil_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkAuthUtil_version($this->_cPtr);
    }

    public function SaveLastError($path)
    {
        return CkAuthUtil_SaveLastError($this->_cPtr, $path);
    }

    public function walmartSignature($requestUrl, $consumerId, $privateKey, $requestMethod)
    {
        return CkAuthUtil_walmartSignature($this->_cPtr, $requestUrl, $consumerId, $privateKey, $requestMethod);
    }
}
