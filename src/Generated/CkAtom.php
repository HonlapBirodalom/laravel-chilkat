<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkAtom
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkAtom') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkAtom();
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
        return CkAtom_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkAtom_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkAtom_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkAtom_get_AbortCurrent($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkAtom_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkAtom_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkAtom_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkAtom_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkAtom_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkAtom_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkAtom_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkAtom_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkAtom_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkAtom_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkAtom_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumEntries()
    {
        return CkAtom_get_NumEntries($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkAtom_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkAtom_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkAtom_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkAtom_version($this->_cPtr);
    }

    public function AddElement($tag, $value)
    {
        return CkAtom_AddElement($this->_cPtr, $tag, $value);
    }

    public function AddElementDate($tag, $dateTime)
    {
        return CkAtom_AddElementDate($this->_cPtr, $tag, $dateTime);
    }

    public function AddElementDateStr($tag, $dateTimeStr)
    {
        return CkAtom_AddElementDateStr($this->_cPtr, $tag, $dateTimeStr);
    }

    public function AddElementDt($tag, $dateTime)
    {
        return CkAtom_AddElementDt($this->_cPtr, $tag, $dateTime);
    }

    public function AddElementHtml($tag, $htmlStr)
    {
        return CkAtom_AddElementHtml($this->_cPtr, $tag, $htmlStr);
    }

    public function AddElementXHtml($tag, $xmlStr)
    {
        return CkAtom_AddElementXHtml($this->_cPtr, $tag, $xmlStr);
    }

    public function AddElementXml($tag, $xmlStr)
    {
        return CkAtom_AddElementXml($this->_cPtr, $tag, $xmlStr);
    }

    public function AddEntry($xmlStr)
    {
        CkAtom_AddEntry($this->_cPtr, $xmlStr);
    }

    public function AddLink($rel, $href, $title, $typ)
    {
        CkAtom_AddLink($this->_cPtr, $rel, $href, $title, $typ);
    }

    public function AddPerson($tag, $name, $uri, $email)
    {
        CkAtom_AddPerson($this->_cPtr, $tag, $name, $uri, $email);
    }

    public function DeleteElement($tag, $index)
    {
        CkAtom_DeleteElement($this->_cPtr, $tag, $index);
    }

    public function DeleteElementAttr($tag, $index, $attrName)
    {
        CkAtom_DeleteElementAttr($this->_cPtr, $tag, $index, $attrName);
    }

    public function DeletePerson($tag, $index)
    {
        CkAtom_DeletePerson($this->_cPtr, $tag, $index);
    }

    public function DownloadAtom($url)
    {
        return CkAtom_DownloadAtom($this->_cPtr, $url);
    }

    public function DownloadAtomAsync($url)
    {
        $r = CkAtom_DownloadAtomAsync($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getElement($tag, $index)
    {
        return CkAtom_getElement($this->_cPtr, $tag, $index);
    }

    public function element($tag, $index)
    {
        return CkAtom_element($this->_cPtr, $tag, $index);
    }

    public function getElementAttr($tag, $index, $attrName)
    {
        return CkAtom_getElementAttr($this->_cPtr, $tag, $index, $attrName);
    }

    public function elementAttr($tag, $index, $attrName)
    {
        return CkAtom_elementAttr($this->_cPtr, $tag, $index, $attrName);
    }

    public function GetElementCount($tag)
    {
        return CkAtom_GetElementCount($this->_cPtr, $tag);
    }

    public function GetElementDate($tag, $index, $outSysTime)
    {
        return CkAtom_GetElementDate($this->_cPtr, $tag, $index, $outSysTime);
    }

    public function getElementDateStr($tag, $index)
    {
        return CkAtom_getElementDateStr($this->_cPtr, $tag, $index);
    }

    public function elementDateStr($tag, $index)
    {
        return CkAtom_elementDateStr($this->_cPtr, $tag, $index);
    }

    public function GetElementDt($tag, $index)
    {
        $r = CkAtom_GetElementDt($this->_cPtr, $tag, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetEntry($index)
    {
        $r = CkAtom_GetEntry($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkAtom($r);
        }

        return $r;
    }

    public function getLinkHref($relName)
    {
        return CkAtom_getLinkHref($this->_cPtr, $relName);
    }

    public function linkHref($relName)
    {
        return CkAtom_linkHref($this->_cPtr, $relName);
    }

    public function getPersonInfo($tag, $index, $tag2)
    {
        return CkAtom_getPersonInfo($this->_cPtr, $tag, $index, $tag2);
    }

    public function personInfo($tag, $index, $tag2)
    {
        return CkAtom_personInfo($this->_cPtr, $tag, $index, $tag2);
    }

    public function getTopAttr($attrName)
    {
        return CkAtom_getTopAttr($this->_cPtr, $attrName);
    }

    public function topAttr($attrName)
    {
        return CkAtom_topAttr($this->_cPtr, $attrName);
    }

    public function HasElement($tag)
    {
        return CkAtom_HasElement($this->_cPtr, $tag);
    }

    public function LoadTaskCaller($task)
    {
        return CkAtom_LoadTaskCaller($this->_cPtr, $task);
    }

    public function LoadXml($xmlStr)
    {
        return CkAtom_LoadXml($this->_cPtr, $xmlStr);
    }

    public function NewEntry()
    {
        CkAtom_NewEntry($this->_cPtr);
    }

    public function NewFeed()
    {
        CkAtom_NewFeed($this->_cPtr);
    }

    public function SaveLastError($path)
    {
        return CkAtom_SaveLastError($this->_cPtr, $path);
    }

    public function SetElementAttr($tag, $index, $attrName, $attrValue)
    {
        CkAtom_SetElementAttr($this->_cPtr, $tag, $index, $attrName, $attrValue);
    }

    public function SetTopAttr($attrName, $value)
    {
        CkAtom_SetTopAttr($this->_cPtr, $attrName, $value);
    }

    public function toXmlString()
    {
        return CkAtom_toXmlString($this->_cPtr);
    }

    public function UpdateElement($tag, $index, $value)
    {
        CkAtom_UpdateElement($this->_cPtr, $tag, $index, $value);
    }

    public function UpdateElementDate($tag, $index, $dateTime)
    {
        CkAtom_UpdateElementDate($this->_cPtr, $tag, $index, $dateTime);
    }

    public function UpdateElementDateStr($tag, $index, $dateTimeStr)
    {
        CkAtom_UpdateElementDateStr($this->_cPtr, $tag, $index, $dateTimeStr);
    }

    public function UpdateElementDt($tag, $index, $dateTime)
    {
        CkAtom_UpdateElementDt($this->_cPtr, $tag, $index, $dateTime);
    }

    public function UpdateElementHtml($tag, $index, $htmlStr)
    {
        CkAtom_UpdateElementHtml($this->_cPtr, $tag, $index, $htmlStr);
    }

    public function UpdateElementXHtml($tag, $index, $xmlStr)
    {
        CkAtom_UpdateElementXHtml($this->_cPtr, $tag, $index, $xmlStr);
    }

    public function UpdateElementXml($tag, $index, $xmlStr)
    {
        CkAtom_UpdateElementXml($this->_cPtr, $tag, $index, $xmlStr);
    }

    public function UpdatePerson($tag, $index, $name, $uri, $email)
    {
        CkAtom_UpdatePerson($this->_cPtr, $tag, $index, $name, $uri, $email);
    }
}
