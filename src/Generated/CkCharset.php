<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCharset
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCharset') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkCharset();
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
        return CkCharset_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkCharset_put_Utf8($this->_cPtr, $b);
    }

    public function get_AltToCharset($str)
    {
        CkCharset_get_AltToCharset($this->_cPtr, $str);
    }

    public function altToCharset()
    {
        return CkCharset_altToCharset($this->_cPtr);
    }

    public function put_AltToCharset($newVal)
    {
        CkCharset_put_AltToCharset($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkCharset_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkCharset_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkCharset_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_ErrorAction()
    {
        return CkCharset_get_ErrorAction($this->_cPtr);
    }

    public function put_ErrorAction($newVal)
    {
        CkCharset_put_ErrorAction($this->_cPtr, $newVal);
    }

    public function get_FromCharset($str)
    {
        CkCharset_get_FromCharset($this->_cPtr, $str);
    }

    public function fromCharset()
    {
        return CkCharset_fromCharset($this->_cPtr);
    }

    public function put_FromCharset($newVal)
    {
        CkCharset_put_FromCharset($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkCharset_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkCharset_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkCharset_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkCharset_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkCharset_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkCharset_lastErrorXml($this->_cPtr);
    }

    public function get_LastInputAsHex($str)
    {
        CkCharset_get_LastInputAsHex($this->_cPtr, $str);
    }

    public function lastInputAsHex()
    {
        return CkCharset_lastInputAsHex($this->_cPtr);
    }

    public function get_LastInputAsQP($str)
    {
        CkCharset_get_LastInputAsQP($this->_cPtr, $str);
    }

    public function lastInputAsQP()
    {
        return CkCharset_lastInputAsQP($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkCharset_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkCharset_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LastOutputAsHex($str)
    {
        CkCharset_get_LastOutputAsHex($this->_cPtr, $str);
    }

    public function lastOutputAsHex()
    {
        return CkCharset_lastOutputAsHex($this->_cPtr);
    }

    public function get_LastOutputAsQP($str)
    {
        CkCharset_get_LastOutputAsQP($this->_cPtr, $str);
    }

    public function lastOutputAsQP()
    {
        return CkCharset_lastOutputAsQP($this->_cPtr);
    }

    public function get_SaveLast()
    {
        return CkCharset_get_SaveLast($this->_cPtr);
    }

    public function put_SaveLast($newVal)
    {
        CkCharset_put_SaveLast($this->_cPtr, $newVal);
    }

    public function get_ToCharset($str)
    {
        CkCharset_get_ToCharset($this->_cPtr, $str);
    }

    public function toCharset()
    {
        return CkCharset_toCharset($this->_cPtr);
    }

    public function put_ToCharset($newVal)
    {
        CkCharset_put_ToCharset($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkCharset_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkCharset_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkCharset_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkCharset_version($this->_cPtr);
    }

    public function CharsetToCodePage($charsetName)
    {
        return CkCharset_CharsetToCodePage($this->_cPtr, $charsetName);
    }

    public function codePageToCharset($codePage)
    {
        return CkCharset_codePageToCharset($this->_cPtr, $codePage);
    }

    public function ConvertData($inData, $outData)
    {
        return CkCharset_ConvertData($this->_cPtr, $inData, $outData);
    }

    public function ConvertFile($inPath, $destPath)
    {
        return CkCharset_ConvertFile($this->_cPtr, $inPath, $destPath);
    }

    public function ConvertFileNoPreamble($inPath, $destPath)
    {
        return CkCharset_ConvertFileNoPreamble($this->_cPtr, $inPath, $destPath);
    }

    public function ConvertFromUnicode($inData, $outBytes)
    {
        return CkCharset_ConvertFromUnicode($this->_cPtr, $inData, $outBytes);
    }

    public function ConvertFromUtf16($uniData, $outMbData)
    {
        return CkCharset_ConvertFromUtf16($this->_cPtr, $uniData, $outMbData);
    }

    public function ConvertHtml($inData, $outHtml)
    {
        return CkCharset_ConvertHtml($this->_cPtr, $inData, $outHtml);
    }

    public function ConvertHtmlFile($inPath, $destPath)
    {
        return CkCharset_ConvertHtmlFile($this->_cPtr, $inPath, $destPath);
    }

    public function convertToUnicode($inData)
    {
        return CkCharset_convertToUnicode($this->_cPtr, $inData);
    }

    public function ConvertToUtf16($mbData, $outUniData)
    {
        return CkCharset_ConvertToUtf16($this->_cPtr, $mbData, $outUniData);
    }

    public function entityEncodeDec($str)
    {
        return CkCharset_entityEncodeDec($this->_cPtr, $str);
    }

    public function entityEncodeHex($str)
    {
        return CkCharset_entityEncodeHex($this->_cPtr, $str);
    }

    public function getHtmlCharset($inData)
    {
        return CkCharset_getHtmlCharset($this->_cPtr, $inData);
    }

    public function htmlCharset($inData)
    {
        return CkCharset_htmlCharset($this->_cPtr, $inData);
    }

    public function getHtmlFileCharset($htmlFilePath)
    {
        return CkCharset_getHtmlFileCharset($this->_cPtr, $htmlFilePath);
    }

    public function htmlFileCharset($htmlFilePath)
    {
        return CkCharset_htmlFileCharset($this->_cPtr, $htmlFilePath);
    }

    public function htmlDecodeToStr($inStr)
    {
        return CkCharset_htmlDecodeToStr($this->_cPtr, $inStr);
    }

    public function HtmlEntityDecode($inHtml, $outData)
    {
        return CkCharset_HtmlEntityDecode($this->_cPtr, $inHtml, $outData);
    }

    public function HtmlEntityDecodeFile($inPath, $destPath)
    {
        return CkCharset_HtmlEntityDecodeFile($this->_cPtr, $inPath, $destPath);
    }

    public function lowerCase($inStr)
    {
        return CkCharset_lowerCase($this->_cPtr, $inStr);
    }

    public function ReadFile($path, $outData)
    {
        return CkCharset_ReadFile($this->_cPtr, $path, $outData);
    }

    public function readFileToString($path, $charset)
    {
        return CkCharset_readFileToString($this->_cPtr, $path, $charset);
    }

    public function SaveLastError($path)
    {
        return CkCharset_SaveLastError($this->_cPtr, $path);
    }

    public function SetErrorBytes($data)
    {
        CkCharset_SetErrorBytes($this->_cPtr, $data);
    }

    public function SetErrorString($str, $charset)
    {
        CkCharset_SetErrorString($this->_cPtr, $str, $charset);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkCharset_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function upperCase($inStr)
    {
        return CkCharset_upperCase($this->_cPtr, $inStr);
    }

    public function urlDecodeStr($inStr)
    {
        return CkCharset_urlDecodeStr($this->_cPtr, $inStr);
    }

    public function VerifyData($charset, $inData)
    {
        return CkCharset_VerifyData($this->_cPtr, $charset, $inData);
    }

    public function VerifyFile($charset, $path)
    {
        return CkCharset_VerifyFile($this->_cPtr, $charset, $path);
    }

    public function WriteFile($path, $byteData)
    {
        return CkCharset_WriteFile($this->_cPtr, $path, $byteData);
    }

    public function WriteStringToFile($textData, $path, $charset)
    {
        return CkCharset_WriteStringToFile($this->_cPtr, $textData, $path, $charset);
    }
}
