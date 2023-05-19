<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkStringArray
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkStringArray') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkStringArray();
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
        return CkStringArray_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkStringArray_put_Utf8($this->_cPtr, $b);
    }

    public function get_Count()
    {
        return CkStringArray_get_Count($this->_cPtr);
    }

    public function get_Crlf()
    {
        return CkStringArray_get_Crlf($this->_cPtr);
    }

    public function put_Crlf($newVal)
    {
        CkStringArray_put_Crlf($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkStringArray_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkStringArray_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkStringArray_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkStringArray_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkStringArray_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkStringArray_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkStringArray_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkStringArray_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkStringArray_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkStringArray_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkStringArray_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Length()
    {
        return CkStringArray_get_Length($this->_cPtr);
    }

    public function get_Trim()
    {
        return CkStringArray_get_Trim($this->_cPtr);
    }

    public function put_Trim($newVal)
    {
        CkStringArray_put_Trim($this->_cPtr, $newVal);
    }

    public function get_Unique()
    {
        return CkStringArray_get_Unique($this->_cPtr);
    }

    public function put_Unique($newVal)
    {
        CkStringArray_put_Unique($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkStringArray_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkStringArray_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkStringArray_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkStringArray_version($this->_cPtr);
    }

    public function Append($str)
    {
        return CkStringArray_Append($this->_cPtr, $str);
    }

    public function AppendSerialized($encodedStr)
    {
        return CkStringArray_AppendSerialized($this->_cPtr, $encodedStr);
    }

    public function Clear()
    {
        CkStringArray_Clear($this->_cPtr);
    }

    public function Contains($str)
    {
        return CkStringArray_Contains($this->_cPtr, $str);
    }

    public function Find($findStr, $startIndex)
    {
        return CkStringArray_Find($this->_cPtr, $findStr, $startIndex);
    }

    public function FindFirstMatch($matchPattern, $startIndex)
    {
        return CkStringArray_FindFirstMatch($this->_cPtr, $matchPattern, $startIndex);
    }

    public function getString($index)
    {
        return CkStringArray_getString($this->_cPtr, $index);
    }

    public function string($index)
    {
        return CkStringArray_string($this->_cPtr, $index);
    }

    public function GetStringLen($index)
    {
        return CkStringArray_GetStringLen($this->_cPtr, $index);
    }

    public function InsertAt($index, $str)
    {
        CkStringArray_InsertAt($this->_cPtr, $index, $str);
    }

    public function lastString()
    {
        return CkStringArray_lastString($this->_cPtr);
    }

    public function LoadFromFile($path)
    {
        return CkStringArray_LoadFromFile($this->_cPtr, $path);
    }

    public function LoadFromFile2($path, $charset)
    {
        return CkStringArray_LoadFromFile2($this->_cPtr, $path, $charset);
    }

    public function LoadFromText($str)
    {
        CkStringArray_LoadFromText($this->_cPtr, $str);
    }

    public function LoadTaskResult($task)
    {
        return CkStringArray_LoadTaskResult($this->_cPtr, $task);
    }

    public function pop()
    {
        return CkStringArray_pop($this->_cPtr);
    }

    public function Prepend($str)
    {
        CkStringArray_Prepend($this->_cPtr, $str);
    }

    public function Remove($str)
    {
        CkStringArray_Remove($this->_cPtr, $str);
    }

    public function RemoveAt($index)
    {
        return CkStringArray_RemoveAt($this->_cPtr, $index);
    }

    public function ReplaceAt($index, $str)
    {
        CkStringArray_ReplaceAt($this->_cPtr, $index, $str);
    }

    public function SaveLastError($path)
    {
        return CkStringArray_SaveLastError($this->_cPtr, $path);
    }

    public function SaveNthToFile($index, $saveToPath)
    {
        return CkStringArray_SaveNthToFile($this->_cPtr, $index, $saveToPath);
    }

    public function SaveToFile($path)
    {
        return CkStringArray_SaveToFile($this->_cPtr, $path);
    }

    public function SaveToFile2($saveToPath, $charset)
    {
        return CkStringArray_SaveToFile2($this->_cPtr, $saveToPath, $charset);
    }

    public function saveToText()
    {
        return CkStringArray_saveToText($this->_cPtr);
    }

    public function serialize()
    {
        return CkStringArray_serialize($this->_cPtr);
    }

    public function Sort($ascending)
    {
        CkStringArray_Sort($this->_cPtr, $ascending);
    }

    public function SplitAndAppend($str, $boundary)
    {
        CkStringArray_SplitAndAppend($this->_cPtr, $str, $boundary);
    }

    public function strAt($index)
    {
        return CkStringArray_strAt($this->_cPtr, $index);
    }

    public function Subtract($stringArrayObj)
    {
        CkStringArray_Subtract($this->_cPtr, $stringArrayObj);
    }

    public function Union($stringArrayObj)
    {
        CkStringArray_Union($this->_cPtr, $stringArrayObj);
    }
}
