<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkGlobal
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkGlobal') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkGlobal();
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
        return CkGlobal_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkGlobal_put_Utf8($this->_cPtr, $b);
    }

    public function get_AnsiCodePage()
    {
        return CkGlobal_get_AnsiCodePage($this->_cPtr);
    }

    public function put_AnsiCodePage($newVal)
    {
        CkGlobal_put_AnsiCodePage($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkGlobal_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkGlobal_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkGlobal_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DefaultNtlmVersion()
    {
        return CkGlobal_get_DefaultNtlmVersion($this->_cPtr);
    }

    public function put_DefaultNtlmVersion($newVal)
    {
        CkGlobal_put_DefaultNtlmVersion($this->_cPtr, $newVal);
    }

    public function get_DefaultUtf8()
    {
        return CkGlobal_get_DefaultUtf8($this->_cPtr);
    }

    public function put_DefaultUtf8($newVal)
    {
        CkGlobal_put_DefaultUtf8($this->_cPtr, $newVal);
    }

    public function get_DnsTimeToLive()
    {
        return CkGlobal_get_DnsTimeToLive($this->_cPtr);
    }

    public function put_DnsTimeToLive($newVal)
    {
        CkGlobal_put_DnsTimeToLive($this->_cPtr, $newVal);
    }

    public function get_EnableDnsCaching()
    {
        return CkGlobal_get_EnableDnsCaching($this->_cPtr);
    }

    public function put_EnableDnsCaching($newVal)
    {
        CkGlobal_put_EnableDnsCaching($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkGlobal_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkGlobal_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkGlobal_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkGlobal_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkGlobal_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkGlobal_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkGlobal_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkGlobal_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_MaxThreads()
    {
        return CkGlobal_get_MaxThreads($this->_cPtr);
    }

    public function put_MaxThreads($newVal)
    {
        CkGlobal_put_MaxThreads($this->_cPtr, $newVal);
    }

    public function get_PreferIpv6()
    {
        return CkGlobal_get_PreferIpv6($this->_cPtr);
    }

    public function put_PreferIpv6($newVal)
    {
        CkGlobal_put_PreferIpv6($this->_cPtr, $newVal);
    }

    public function get_ThreadPoolLogPath($str)
    {
        CkGlobal_get_ThreadPoolLogPath($this->_cPtr, $str);
    }

    public function threadPoolLogPath()
    {
        return CkGlobal_threadPoolLogPath($this->_cPtr);
    }

    public function put_ThreadPoolLogPath($newVal)
    {
        CkGlobal_put_ThreadPoolLogPath($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkGlobal_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkGlobal_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkGlobal_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UnlockStatus()
    {
        return CkGlobal_get_UnlockStatus($this->_cPtr);
    }

    public function get_UsePkcsConstructedEncoding()
    {
        return CkGlobal_get_UsePkcsConstructedEncoding($this->_cPtr);
    }

    public function put_UsePkcsConstructedEncoding($newVal)
    {
        CkGlobal_put_UsePkcsConstructedEncoding($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkGlobal_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkGlobal_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_VerboseTls()
    {
        return CkGlobal_get_VerboseTls($this->_cPtr);
    }

    public function put_VerboseTls($newVal)
    {
        CkGlobal_put_VerboseTls($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkGlobal_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkGlobal_version($this->_cPtr);
    }

    public function DnsClearCache()
    {
        return CkGlobal_DnsClearCache($this->_cPtr);
    }

    public function FinalizeThreadPool()
    {
        return CkGlobal_FinalizeThreadPool($this->_cPtr);
    }

    public function SaveLastError($path)
    {
        return CkGlobal_SaveLastError($this->_cPtr, $path);
    }

    public function ThreadPoolLogLine($str)
    {
        return CkGlobal_ThreadPoolLogLine($this->_cPtr, $str);
    }

    public function UnlockBundle($bundleUnlockCode)
    {
        return CkGlobal_UnlockBundle($this->_cPtr, $bundleUnlockCode);
    }
}
