<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkEmailBundle
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkEmailBundle') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkEmailBundle();
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
        return CkEmailBundle_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkEmailBundle_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkEmailBundle_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkEmailBundle_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkEmailBundle_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkEmailBundle_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkEmailBundle_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkEmailBundle_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkEmailBundle_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkEmailBundle_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkEmailBundle_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkEmailBundle_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkEmailBundle_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_MessageCount()
    {
        return CkEmailBundle_get_MessageCount($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkEmailBundle_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkEmailBundle_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkEmailBundle_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkEmailBundle_version($this->_cPtr);
    }

    public function AddEmail($email)
    {
        return CkEmailBundle_AddEmail($this->_cPtr, $email);
    }

    public function FindByHeader($headerFieldName, $headerFieldValue)
    {
        $r = CkEmailBundle_FindByHeader($this->_cPtr, $headerFieldName, $headerFieldValue);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function GetEmail($index)
    {
        $r = CkEmailBundle_GetEmail($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function GetUidls()
    {
        $r = CkEmailBundle_GetUidls($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function getXml()
    {
        return CkEmailBundle_getXml($this->_cPtr);
    }

    public function xml()
    {
        return CkEmailBundle_xml($this->_cPtr);
    }

    public function LoadTaskResult($task)
    {
        return CkEmailBundle_LoadTaskResult($this->_cPtr, $task);
    }

    public function LoadXml($filename)
    {
        return CkEmailBundle_LoadXml($this->_cPtr, $filename);
    }

    public function LoadXmlString($xmlStr)
    {
        return CkEmailBundle_LoadXmlString($this->_cPtr, $xmlStr);
    }

    public function RemoveEmail($email)
    {
        return CkEmailBundle_RemoveEmail($this->_cPtr, $email);
    }

    public function RemoveEmailByIndex($index)
    {
        return CkEmailBundle_RemoveEmailByIndex($this->_cPtr, $index);
    }

    public function SaveLastError($path)
    {
        return CkEmailBundle_SaveLastError($this->_cPtr, $path);
    }

    public function SaveXml($filename)
    {
        return CkEmailBundle_SaveXml($this->_cPtr, $filename);
    }

    public function SortByDate($ascending)
    {
        CkEmailBundle_SortByDate($this->_cPtr, $ascending);
    }

    public function SortByRecipient($ascending)
    {
        CkEmailBundle_SortByRecipient($this->_cPtr, $ascending);
    }

    public function SortBySender($ascending)
    {
        CkEmailBundle_SortBySender($this->_cPtr, $ascending);
    }

    public function SortBySubject($ascending)
    {
        CkEmailBundle_SortBySubject($this->_cPtr, $ascending);
    }
}
