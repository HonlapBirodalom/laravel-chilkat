<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkHttpRequest
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkHttpRequest') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkHttpRequest();
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
        return CkHttpRequest_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkHttpRequest_put_Utf8($this->_cPtr, $b);
    }

    public function get_Boundary($str)
    {
        CkHttpRequest_get_Boundary($this->_cPtr, $str);
    }

    public function boundary()
    {
        return CkHttpRequest_boundary($this->_cPtr);
    }

    public function put_Boundary($newVal)
    {
        CkHttpRequest_put_Boundary($this->_cPtr, $newVal);
    }

    public function get_Charset($str)
    {
        CkHttpRequest_get_Charset($this->_cPtr, $str);
    }

    public function charset()
    {
        return CkHttpRequest_charset($this->_cPtr);
    }

    public function put_Charset($newVal)
    {
        CkHttpRequest_put_Charset($this->_cPtr, $newVal);
    }

    public function get_ContentType($str)
    {
        CkHttpRequest_get_ContentType($this->_cPtr, $str);
    }

    public function contentType()
    {
        return CkHttpRequest_contentType($this->_cPtr);
    }

    public function put_ContentType($newVal)
    {
        CkHttpRequest_put_ContentType($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkHttpRequest_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkHttpRequest_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkHttpRequest_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_EntireHeader($str)
    {
        CkHttpRequest_get_EntireHeader($this->_cPtr, $str);
    }

    public function entireHeader()
    {
        return CkHttpRequest_entireHeader($this->_cPtr);
    }

    public function put_EntireHeader($newVal)
    {
        CkHttpRequest_put_EntireHeader($this->_cPtr, $newVal);
    }

    public function get_HttpVerb($str)
    {
        CkHttpRequest_get_HttpVerb($this->_cPtr, $str);
    }

    public function httpVerb()
    {
        return CkHttpRequest_httpVerb($this->_cPtr);
    }

    public function put_HttpVerb($newVal)
    {
        CkHttpRequest_put_HttpVerb($this->_cPtr, $newVal);
    }

    public function get_HttpVersion($str)
    {
        CkHttpRequest_get_HttpVersion($this->_cPtr, $str);
    }

    public function httpVersion()
    {
        return CkHttpRequest_httpVersion($this->_cPtr);
    }

    public function put_HttpVersion($newVal)
    {
        CkHttpRequest_put_HttpVersion($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkHttpRequest_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkHttpRequest_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkHttpRequest_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkHttpRequest_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkHttpRequest_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkHttpRequest_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkHttpRequest_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkHttpRequest_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumHeaderFields()
    {
        return CkHttpRequest_get_NumHeaderFields($this->_cPtr);
    }

    public function get_NumParams()
    {
        return CkHttpRequest_get_NumParams($this->_cPtr);
    }

    public function get_Path($str)
    {
        CkHttpRequest_get_Path($this->_cPtr, $str);
    }

    public function path()
    {
        return CkHttpRequest_path($this->_cPtr);
    }

    public function put_Path($newVal)
    {
        CkHttpRequest_put_Path($this->_cPtr, $newVal);
    }

    public function get_SendCharset()
    {
        return CkHttpRequest_get_SendCharset($this->_cPtr);
    }

    public function put_SendCharset($newVal)
    {
        CkHttpRequest_put_SendCharset($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkHttpRequest_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkHttpRequest_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkHttpRequest_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkHttpRequest_version($this->_cPtr);
    }

    public function AddBdForUpload($name, $remoteFilename, $byteData, $contentType)
    {
        return CkHttpRequest_AddBdForUpload($this->_cPtr, $name, $remoteFilename, $byteData, $contentType);
    }

    public function AddBytesForUpload($name, $remoteFileName, $byteData)
    {
        return CkHttpRequest_AddBytesForUpload($this->_cPtr, $name, $remoteFileName, $byteData);
    }

    public function AddBytesForUpload2($name, $remoteFileName, $byteData, $contentType)
    {
        return CkHttpRequest_AddBytesForUpload2($this->_cPtr, $name, $remoteFileName, $byteData, $contentType);
    }

    public function AddFileForUpload($name, $filePath)
    {
        return CkHttpRequest_AddFileForUpload($this->_cPtr, $name, $filePath);
    }

    public function AddFileForUpload2($name, $filePath, $contentType)
    {
        return CkHttpRequest_AddFileForUpload2($this->_cPtr, $name, $filePath, $contentType);
    }

    public function AddHeader($name, $value)
    {
        CkHttpRequest_AddHeader($this->_cPtr, $name, $value);
    }

    public function AddMwsSignature($domain, $mwsSecretKey)
    {
        return CkHttpRequest_AddMwsSignature($this->_cPtr, $domain, $mwsSecretKey);
    }

    public function AddParam($name, $value)
    {
        CkHttpRequest_AddParam($this->_cPtr, $name, $value);
    }

    public function AddStringForUpload($name, $filename, $strData, $charset)
    {
        return CkHttpRequest_AddStringForUpload($this->_cPtr, $name, $filename, $strData, $charset);
    }

    public function AddStringForUpload2($name, $filename, $strData, $charset, $contentType)
    {
        return CkHttpRequest_AddStringForUpload2($this->_cPtr, $name, $filename, $strData, $charset, $contentType);
    }

    public function AddSubHeader($index, $name, $value)
    {
        return CkHttpRequest_AddSubHeader($this->_cPtr, $index, $name, $value);
    }

    public function GenerateRequestFile($path)
    {
        return CkHttpRequest_GenerateRequestFile($this->_cPtr, $path);
    }

    public function generateRequestText()
    {
        return CkHttpRequest_generateRequestText($this->_cPtr);
    }

    public function getHeaderField($name)
    {
        return CkHttpRequest_getHeaderField($this->_cPtr, $name);
    }

    public function headerField($name)
    {
        return CkHttpRequest_headerField($this->_cPtr, $name);
    }

    public function getHeaderName($index)
    {
        return CkHttpRequest_getHeaderName($this->_cPtr, $index);
    }

    public function headerName($index)
    {
        return CkHttpRequest_headerName($this->_cPtr, $index);
    }

    public function getHeaderValue($index)
    {
        return CkHttpRequest_getHeaderValue($this->_cPtr, $index);
    }

    public function headerValue($index)
    {
        return CkHttpRequest_headerValue($this->_cPtr, $index);
    }

    public function getParam($name)
    {
        return CkHttpRequest_getParam($this->_cPtr, $name);
    }

    public function param($name)
    {
        return CkHttpRequest_param($this->_cPtr, $name);
    }

    public function getParamName($index)
    {
        return CkHttpRequest_getParamName($this->_cPtr, $index);
    }

    public function paramName($index)
    {
        return CkHttpRequest_paramName($this->_cPtr, $index);
    }

    public function getParamValue($index)
    {
        return CkHttpRequest_getParamValue($this->_cPtr, $index);
    }

    public function paramValue($index)
    {
        return CkHttpRequest_paramValue($this->_cPtr, $index);
    }

    public function getUrlEncodedParams()
    {
        return CkHttpRequest_getUrlEncodedParams($this->_cPtr);
    }

    public function urlEncodedParams()
    {
        return CkHttpRequest_urlEncodedParams($this->_cPtr);
    }

    public function LoadBodyFromBd($requestBody)
    {
        return CkHttpRequest_LoadBodyFromBd($this->_cPtr, $requestBody);
    }

    public function LoadBodyFromBytes($byteData)
    {
        return CkHttpRequest_LoadBodyFromBytes($this->_cPtr, $byteData);
    }

    public function LoadBodyFromFile($filePath)
    {
        return CkHttpRequest_LoadBodyFromFile($this->_cPtr, $filePath);
    }

    public function LoadBodyFromSb($requestBody, $charset)
    {
        return CkHttpRequest_LoadBodyFromSb($this->_cPtr, $requestBody, $charset);
    }

    public function LoadBodyFromString($bodyStr, $charset)
    {
        return CkHttpRequest_LoadBodyFromString($this->_cPtr, $bodyStr, $charset);
    }

    public function RemoveAllParams()
    {
        CkHttpRequest_RemoveAllParams($this->_cPtr);
    }

    public function RemoveHeader($name)
    {
        return CkHttpRequest_RemoveHeader($this->_cPtr, $name);
    }

    public function RemoveParam($name)
    {
        CkHttpRequest_RemoveParam($this->_cPtr, $name);
    }

    public function SaveLastError($path)
    {
        return CkHttpRequest_SaveLastError($this->_cPtr, $path);
    }

    public function SetFromUrl($url)
    {
        CkHttpRequest_SetFromUrl($this->_cPtr, $url);
    }

    public function StreamBodyFromFile($filePath)
    {
        return CkHttpRequest_StreamBodyFromFile($this->_cPtr, $filePath);
    }

    public function StreamChunkFromFile($path, $offset, $numBytes)
    {
        return CkHttpRequest_StreamChunkFromFile($this->_cPtr, $path, $offset, $numBytes);
    }

    public function UseGet()
    {
        CkHttpRequest_UseGet($this->_cPtr);
    }

    public function UseHead()
    {
        CkHttpRequest_UseHead($this->_cPtr);
    }

    public function UsePost()
    {
        CkHttpRequest_UsePost($this->_cPtr);
    }

    public function UsePostMultipartForm()
    {
        CkHttpRequest_UsePostMultipartForm($this->_cPtr);
    }

    public function UsePut()
    {
        CkHttpRequest_UsePut($this->_cPtr);
    }

    public function UseUpload()
    {
        CkHttpRequest_UseUpload($this->_cPtr);
    }

    public function UseUploadPut()
    {
        CkHttpRequest_UseUploadPut($this->_cPtr);
    }

    public function UseXmlHttp($xmlBody)
    {
        CkHttpRequest_UseXmlHttp($this->_cPtr, $xmlBody);
    }
}
