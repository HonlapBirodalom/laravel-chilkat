<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkDns
{
    public $_cPtr = null;
    protected $_pData = array();

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkDns') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkDns();
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
        return CkDns_get_Utf8($this->_cPtr);
    }

    function put_Utf8($b)
    {
        CkDns_put_Utf8($this->_cPtr, $b);
    }

    function put_EventCallbackObject($progress)
    {
        CkDns_put_EventCallbackObject($this->_cPtr, $progress);
    }

    function get_DebugLogFilePath($str)
    {
        CkDns_get_DebugLogFilePath($this->_cPtr, $str);
    }

    function debugLogFilePath()
    {
        return CkDns_debugLogFilePath($this->_cPtr);
    }

    function put_DebugLogFilePath($newVal)
    {
        CkDns_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    function get_HeartbeatMs()
    {
        return CkDns_get_HeartbeatMs($this->_cPtr);
    }

    function put_HeartbeatMs($newVal)
    {
        CkDns_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    function get_LastErrorHtml($str)
    {
        CkDns_get_LastErrorHtml($this->_cPtr, $str);
    }

    function lastErrorHtml()
    {
        return CkDns_lastErrorHtml($this->_cPtr);
    }

    function get_LastErrorText($str)
    {
        CkDns_get_LastErrorText($this->_cPtr, $str);
    }

    function lastErrorText()
    {
        return CkDns_lastErrorText($this->_cPtr);
    }

    function get_LastErrorXml($str)
    {
        CkDns_get_LastErrorXml($this->_cPtr, $str);
    }

    function lastErrorXml()
    {
        return CkDns_lastErrorXml($this->_cPtr);
    }

    function get_LastMethodSuccess()
    {
        return CkDns_get_LastMethodSuccess($this->_cPtr);
    }

    function put_LastMethodSuccess($newVal)
    {
        CkDns_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    function get_MaxWaitMs()
    {
        return CkDns_get_MaxWaitMs($this->_cPtr);
    }

    function put_MaxWaitMs($newVal)
    {
        CkDns_put_MaxWaitMs($this->_cPtr, $newVal);
    }

    function get_NumNameservers()
    {
        return CkDns_get_NumNameservers($this->_cPtr);
    }

    function get_TlsPref()
    {
        return CkDns_get_TlsPref($this->_cPtr);
    }

    function put_TlsPref($newVal)
    {
        CkDns_put_TlsPref($this->_cPtr, $newVal);
    }

    function get_VerboseLogging()
    {
        return CkDns_get_VerboseLogging($this->_cPtr);
    }

    function put_VerboseLogging($newVal)
    {
        CkDns_put_VerboseLogging($this->_cPtr, $newVal);
    }

    function get_Version($str)
    {
        CkDns_get_Version($this->_cPtr, $str);
    }

    function version()
    {
        return CkDns_version($this->_cPtr);
    }

    function AddDefaultNameservers()
    {
        CkDns_AddDefaultNameservers($this->_cPtr);
    }

    function AddNameserver($ipAddr, $supportsTls)
    {
        CkDns_AddNameserver($this->_cPtr, $ipAddr, $supportsTls);
    }

    function getNameserver($index)
    {
        return CkDns_getNameserver($this->_cPtr, $index);
    }

    function nameserver($index)
    {
        return CkDns_nameserver($this->_cPtr, $index);
    }

    function Query($recordType, $domain, $answer)
    {
        return CkDns_Query($this->_cPtr, $recordType, $domain, $answer);
    }

    function QueryAsync($recordType, $domain, $answer)
    {
        $r = CkDns_QueryAsync($this->_cPtr, $recordType, $domain, $answer);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function RemoveAllNameservers()
    {
        CkDns_RemoveAllNameservers($this->_cPtr);
    }

    function RemoveNameserver($ipAddr)
    {
        CkDns_RemoveNameserver($this->_cPtr, $ipAddr);
    }

    function SaveLastError($path)
    {
        return CkDns_SaveLastError($this->_cPtr, $path);
    }
}
