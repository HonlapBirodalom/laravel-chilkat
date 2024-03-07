<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCodeSign
{
    public $_cPtr = null;
    protected $_pData = array();

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCodeSign') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkCodeSign();
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
        return CkCodeSign_get_Utf8($this->_cPtr);
    }

    function put_Utf8($b)
    {
        CkCodeSign_put_Utf8($this->_cPtr, $b);
    }

    function put_EventCallbackObject($progress)
    {
        CkCodeSign_put_EventCallbackObject($this->_cPtr, $progress);
    }

    function get_DebugLogFilePath($str)
    {
        CkCodeSign_get_DebugLogFilePath($this->_cPtr, $str);
    }

    function debugLogFilePath()
    {
        return CkCodeSign_debugLogFilePath($this->_cPtr);
    }

    function put_DebugLogFilePath($newVal)
    {
        CkCodeSign_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    function get_LastErrorHtml($str)
    {
        CkCodeSign_get_LastErrorHtml($this->_cPtr, $str);
    }

    function lastErrorHtml()
    {
        return CkCodeSign_lastErrorHtml($this->_cPtr);
    }

    function get_LastErrorText($str)
    {
        CkCodeSign_get_LastErrorText($this->_cPtr, $str);
    }

    function lastErrorText()
    {
        return CkCodeSign_lastErrorText($this->_cPtr);
    }

    function get_LastErrorXml($str)
    {
        CkCodeSign_get_LastErrorXml($this->_cPtr, $str);
    }

    function lastErrorXml()
    {
        return CkCodeSign_lastErrorXml($this->_cPtr);
    }

    function get_LastMethodSuccess()
    {
        return CkCodeSign_get_LastMethodSuccess($this->_cPtr);
    }

    function put_LastMethodSuccess($newVal)
    {
        CkCodeSign_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    function get_UncommonOptions($str)
    {
        CkCodeSign_get_UncommonOptions($this->_cPtr, $str);
    }

    function uncommonOptions()
    {
        return CkCodeSign_uncommonOptions($this->_cPtr);
    }

    function put_UncommonOptions($newVal)
    {
        CkCodeSign_put_UncommonOptions($this->_cPtr, $newVal);
    }

    function get_VerboseLogging()
    {
        return CkCodeSign_get_VerboseLogging($this->_cPtr);
    }

    function put_VerboseLogging($newVal)
    {
        CkCodeSign_put_VerboseLogging($this->_cPtr, $newVal);
    }

    function get_Version($str)
    {
        CkCodeSign_get_Version($this->_cPtr, $str);
    }

    function version()
    {
        return CkCodeSign_version($this->_cPtr);
    }

    function AddSignature($path, $cert, $options)
    {
        return CkCodeSign_AddSignature($this->_cPtr, $path, $cert, $options);
    }

    function AddSignatureAsync($path, $cert, $options)
    {
        $r = CkCodeSign_AddSignatureAsync($this->_cPtr, $path, $cert, $options);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function RemoveSignature($path)
    {
        return CkCodeSign_RemoveSignature($this->_cPtr, $path);
    }

    function SaveLastError($path)
    {
        return CkCodeSign_SaveLastError($this->_cPtr, $path);
    }

    function VerifySignature($path, $sigInfo)
    {
        return CkCodeSign_VerifySignature($this->_cPtr, $path, $sigInfo);
    }
}
