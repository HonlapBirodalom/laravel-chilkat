<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkHttpResponse
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkHttpResponse') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkHttpResponse();
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
        return CkHttpResponse_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkHttpResponse_put_Utf8($this->_cPtr, $b);
    }

    public function get_Body($outBytes)
    {
        CkHttpResponse_get_Body($this->_cPtr, $outBytes);
    }

    public function get_BodyQP($str)
    {
        CkHttpResponse_get_BodyQP($this->_cPtr, $str);
    }

    public function bodyQP()
    {
        return CkHttpResponse_bodyQP($this->_cPtr);
    }

    public function get_BodyStr($str)
    {
        CkHttpResponse_get_BodyStr($this->_cPtr, $str);
    }

    public function bodyStr()
    {
        return CkHttpResponse_bodyStr($this->_cPtr);
    }

    public function get_Charset($str)
    {
        CkHttpResponse_get_Charset($this->_cPtr, $str);
    }

    public function charset()
    {
        return CkHttpResponse_charset($this->_cPtr);
    }

    public function get_ContentLength()
    {
        return CkHttpResponse_get_ContentLength($this->_cPtr);
    }

    public function get_Date($outSysTime)
    {
        CkHttpResponse_get_Date($this->_cPtr, $outSysTime);
    }

    public function get_DateStr($str)
    {
        CkHttpResponse_get_DateStr($this->_cPtr, $str);
    }

    public function dateStr()
    {
        return CkHttpResponse_dateStr($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkHttpResponse_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkHttpResponse_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkHttpResponse_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Domain($str)
    {
        CkHttpResponse_get_Domain($this->_cPtr, $str);
    }

    public function domain()
    {
        return CkHttpResponse_domain($this->_cPtr);
    }

    public function get_FinalRedirectUrl($str)
    {
        CkHttpResponse_get_FinalRedirectUrl($this->_cPtr, $str);
    }

    public function finalRedirectUrl()
    {
        return CkHttpResponse_finalRedirectUrl($this->_cPtr);
    }

    public function get_FullMime($str)
    {
        CkHttpResponse_get_FullMime($this->_cPtr, $str);
    }

    public function fullMime()
    {
        return CkHttpResponse_fullMime($this->_cPtr);
    }

    public function get_Header($str)
    {
        CkHttpResponse_get_Header($this->_cPtr, $str);
    }

    public function header()
    {
        return CkHttpResponse_header($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkHttpResponse_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkHttpResponse_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkHttpResponse_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkHttpResponse_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkHttpResponse_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkHttpResponse_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkHttpResponse_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkHttpResponse_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumCookies()
    {
        return CkHttpResponse_get_NumCookies($this->_cPtr);
    }

    public function get_NumHeaderFields()
    {
        return CkHttpResponse_get_NumHeaderFields($this->_cPtr);
    }

    public function get_StatusCode()
    {
        return CkHttpResponse_get_StatusCode($this->_cPtr);
    }

    public function get_StatusLine($str)
    {
        CkHttpResponse_get_StatusLine($this->_cPtr, $str);
    }

    public function statusLine()
    {
        return CkHttpResponse_statusLine($this->_cPtr);
    }

    public function get_StatusText($str)
    {
        CkHttpResponse_get_StatusText($this->_cPtr, $str);
    }

    public function statusText()
    {
        return CkHttpResponse_statusText($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkHttpResponse_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkHttpResponse_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkHttpResponse_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkHttpResponse_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkHttpResponse_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkHttpResponse_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkHttpResponse_version($this->_cPtr);
    }

    public function GetBodyBd($binData)
    {
        return CkHttpResponse_GetBodyBd($this->_cPtr, $binData);
    }

    public function GetBodyJarr($jarr)
    {
        return CkHttpResponse_GetBodyJarr($this->_cPtr, $jarr);
    }

    public function GetBodyJson($json)
    {
        return CkHttpResponse_GetBodyJson($this->_cPtr, $json);
    }

    public function GetBodySb($sb)
    {
        return CkHttpResponse_GetBodySb($this->_cPtr, $sb);
    }

    public function GetBodyXml($xml)
    {
        return CkHttpResponse_GetBodyXml($this->_cPtr, $xml);
    }

    public function getCookieDomain($index)
    {
        return CkHttpResponse_getCookieDomain($this->_cPtr, $index);
    }

    public function cookieDomain($index)
    {
        return CkHttpResponse_cookieDomain($this->_cPtr, $index);
    }

    public function GetCookieExpires($index, $outSysTime)
    {
        return CkHttpResponse_GetCookieExpires($this->_cPtr, $index, $outSysTime);
    }

    public function getCookieExpiresStr($index)
    {
        return CkHttpResponse_getCookieExpiresStr($this->_cPtr, $index);
    }

    public function cookieExpiresStr($index)
    {
        return CkHttpResponse_cookieExpiresStr($this->_cPtr, $index);
    }

    public function getCookieName($index)
    {
        return CkHttpResponse_getCookieName($this->_cPtr, $index);
    }

    public function cookieName($index)
    {
        return CkHttpResponse_cookieName($this->_cPtr, $index);
    }

    public function getCookiePath($index)
    {
        return CkHttpResponse_getCookiePath($this->_cPtr, $index);
    }

    public function cookiePath($index)
    {
        return CkHttpResponse_cookiePath($this->_cPtr, $index);
    }

    public function getCookieValue($index)
    {
        return CkHttpResponse_getCookieValue($this->_cPtr, $index);
    }

    public function cookieValue($index)
    {
        return CkHttpResponse_cookieValue($this->_cPtr, $index);
    }

    public function getHeaderField($fieldName)
    {
        return CkHttpResponse_getHeaderField($this->_cPtr, $fieldName);
    }

    public function headerField($fieldName)
    {
        return CkHttpResponse_headerField($this->_cPtr, $fieldName);
    }

    public function getHeaderFieldAttr($fieldName, $attrName)
    {
        return CkHttpResponse_getHeaderFieldAttr($this->_cPtr, $fieldName, $attrName);
    }

    public function headerFieldAttr($fieldName, $attrName)
    {
        return CkHttpResponse_headerFieldAttr($this->_cPtr, $fieldName, $attrName);
    }

    public function getHeaderName($index)
    {
        return CkHttpResponse_getHeaderName($this->_cPtr, $index);
    }

    public function headerName($index)
    {
        return CkHttpResponse_headerName($this->_cPtr, $index);
    }

    public function getHeaderValue($index)
    {
        return CkHttpResponse_getHeaderValue($this->_cPtr, $index);
    }

    public function headerValue($index)
    {
        return CkHttpResponse_headerValue($this->_cPtr, $index);
    }

    public function LoadTaskResult($task)
    {
        return CkHttpResponse_LoadTaskResult($this->_cPtr, $task);
    }

    public function SaveBodyBinary($path)
    {
        return CkHttpResponse_SaveBodyBinary($this->_cPtr, $path);
    }

    public function SaveBodyText($bCrlf, $path)
    {
        return CkHttpResponse_SaveBodyText($this->_cPtr, $bCrlf, $path);
    }

    public function SaveLastError($path)
    {
        return CkHttpResponse_SaveLastError($this->_cPtr, $path);
    }

    public function urlEncParamValue($encodedParamString, $paramName)
    {
        return CkHttpResponse_urlEncParamValue($this->_cPtr, $encodedParamString, $paramName);
    }
}
