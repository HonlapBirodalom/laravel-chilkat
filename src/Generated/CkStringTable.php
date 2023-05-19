<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkStringTable
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkStringTable') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkStringTable();
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
        return CkStringTable_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkStringTable_put_Utf8($this->_cPtr, $b);
    }

    public function get_Count()
    {
        return CkStringTable_get_Count($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkStringTable_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkStringTable_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkStringTable_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkStringTable_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkStringTable_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkStringTable_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkStringTable_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkStringTable_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkStringTable_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkStringTable_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkStringTable_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkStringTable_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkStringTable_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkStringTable_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkStringTable_version($this->_cPtr);
    }

    public function Append($value)
    {
        return CkStringTable_Append($this->_cPtr, $value);
    }

    public function AppendFromFile($maxLineLen, $charset, $path)
    {
        return CkStringTable_AppendFromFile($this->_cPtr, $maxLineLen, $charset, $path);
    }

    public function AppendFromSb($sb)
    {
        return CkStringTable_AppendFromSb($this->_cPtr, $sb);
    }

    public function Clear()
    {
        CkStringTable_Clear($this->_cPtr);
    }

    public function FindSubstring($startIndex, $substr, $caseSensitive)
    {
        return CkStringTable_FindSubstring($this->_cPtr, $startIndex, $substr, $caseSensitive);
    }

    public function getStrings($startIdx, $count, $crlf)
    {
        return CkStringTable_getStrings($this->_cPtr, $startIdx, $count, $crlf);
    }

    public function strings($startIdx, $count, $crlf)
    {
        return CkStringTable_strings($this->_cPtr, $startIdx, $count, $crlf);
    }

    public function IntAt($index)
    {
        return CkStringTable_IntAt($this->_cPtr, $index);
    }

    public function SaveLastError($path)
    {
        return CkStringTable_SaveLastError($this->_cPtr, $path);
    }

    public function SaveToFile($charset, $bCrlf, $path)
    {
        return CkStringTable_SaveToFile($this->_cPtr, $charset, $bCrlf, $path);
    }

    public function Sort($ascending, $caseSensitive)
    {
        return CkStringTable_Sort($this->_cPtr, $ascending, $caseSensitive);
    }

    public function SplitAndAppend($inStr, $delimiterChar, $exceptDoubleQuoted, $exceptEscaped)
    {
        return CkStringTable_SplitAndAppend($this->_cPtr, $inStr, $delimiterChar, $exceptDoubleQuoted, $exceptEscaped);
    }

    public function stringAt($index)
    {
        return CkStringTable_stringAt($this->_cPtr, $index);
    }
}
