<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkRss
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkRss') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkRss();
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
        return CkRss_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkRss_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkRss_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_DebugLogFilePath($str)
    {
        CkRss_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkRss_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkRss_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkRss_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkRss_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkRss_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkRss_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkRss_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkRss_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkRss_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkRss_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumChannels()
    {
        return CkRss_get_NumChannels($this->_cPtr);
    }

    public function get_NumItems()
    {
        return CkRss_get_NumItems($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkRss_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkRss_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkRss_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkRss_version($this->_cPtr);
    }

    public function AddNewChannel()
    {
        $r = CkRss_AddNewChannel($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkRss($r);
        }

        return $r;
    }

    public function AddNewImage()
    {
        $r = CkRss_AddNewImage($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkRss($r);
        }

        return $r;
    }

    public function AddNewItem()
    {
        $r = CkRss_AddNewItem($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkRss($r);
        }

        return $r;
    }

    public function DownloadRss($url)
    {
        return CkRss_DownloadRss($this->_cPtr, $url);
    }

    public function DownloadRssAsync($url)
    {
        $r = CkRss_DownloadRssAsync($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getAttr($tag, $attrName)
    {
        return CkRss_getAttr($this->_cPtr, $tag, $attrName);
    }

    public function attr($tag, $attrName)
    {
        return CkRss_attr($this->_cPtr, $tag, $attrName);
    }

    public function GetChannel($index)
    {
        $r = CkRss_GetChannel($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkRss($r);
        }

        return $r;
    }

    public function GetCount($tag)
    {
        return CkRss_GetCount($this->_cPtr, $tag);
    }

    public function GetDate($tag, $outSysTime)
    {
        return CkRss_GetDate($this->_cPtr, $tag, $outSysTime);
    }

    public function getDateStr($tag)
    {
        return CkRss_getDateStr($this->_cPtr, $tag);
    }

    public function dateStr($tag)
    {
        return CkRss_dateStr($this->_cPtr, $tag);
    }

    public function GetImage()
    {
        $r = CkRss_GetImage($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkRss($r);
        }

        return $r;
    }

    public function GetInt($tag)
    {
        return CkRss_GetInt($this->_cPtr, $tag);
    }

    public function GetItem($index)
    {
        $r = CkRss_GetItem($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkRss($r);
        }

        return $r;
    }

    public function getString($tag)
    {
        return CkRss_getString($this->_cPtr, $tag);
    }

    public function string($tag)
    {
        return CkRss_string($this->_cPtr, $tag);
    }

    public function LoadRssFile($filePath)
    {
        return CkRss_LoadRssFile($this->_cPtr, $filePath);
    }

    public function LoadRssString($rssString)
    {
        return CkRss_LoadRssString($this->_cPtr, $rssString);
    }

    public function LoadTaskCaller($task)
    {
        return CkRss_LoadTaskCaller($this->_cPtr, $task);
    }

    public function mGetAttr($tag, $index, $attrName)
    {
        return CkRss_mGetAttr($this->_cPtr, $tag, $index, $attrName);
    }

    public function mGetString($tag, $index)
    {
        return CkRss_mGetString($this->_cPtr, $tag, $index);
    }

    public function MSetAttr($tag, $idx, $attrName, $value)
    {
        return CkRss_MSetAttr($this->_cPtr, $tag, $idx, $attrName, $value);
    }

    public function MSetString($tag, $idx, $value)
    {
        return CkRss_MSetString($this->_cPtr, $tag, $idx, $value);
    }

    public function NewRss()
    {
        CkRss_NewRss($this->_cPtr);
    }

    public function Remove($tag)
    {
        CkRss_Remove($this->_cPtr, $tag);
    }

    public function SaveLastError($path)
    {
        return CkRss_SaveLastError($this->_cPtr, $path);
    }

    public function SetAttr($tag, $attrName, $value)
    {
        CkRss_SetAttr($this->_cPtr, $tag, $attrName, $value);
    }

    public function SetDate($tag, $dateTime)
    {
        CkRss_SetDate($this->_cPtr, $tag, $dateTime);
    }

    public function SetDateNow($tag)
    {
        CkRss_SetDateNow($this->_cPtr, $tag);
    }

    public function SetDateStr($tag, $dateTimeStr)
    {
        CkRss_SetDateStr($this->_cPtr, $tag, $dateTimeStr);
    }

    public function SetInt($tag, $value)
    {
        CkRss_SetInt($this->_cPtr, $tag, $value);
    }

    public function SetString($tag, $value)
    {
        CkRss_SetString($this->_cPtr, $tag, $value);
    }

    public function toXmlString()
    {
        return CkRss_toXmlString($this->_cPtr);
    }
}
