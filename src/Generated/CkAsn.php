<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkAsn
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkAsn') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkAsn();
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
        return CkAsn_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkAsn_put_Utf8($this->_cPtr, $b);
    }

    public function get_BoolValue()
    {
        return CkAsn_get_BoolValue($this->_cPtr);
    }

    public function put_BoolValue($newVal)
    {
        CkAsn_put_BoolValue($this->_cPtr, $newVal);
    }

    public function get_Constructed()
    {
        return CkAsn_get_Constructed($this->_cPtr);
    }

    public function get_ContentStr($str)
    {
        CkAsn_get_ContentStr($this->_cPtr, $str);
    }

    public function contentStr()
    {
        return CkAsn_contentStr($this->_cPtr);
    }

    public function put_ContentStr($newVal)
    {
        CkAsn_put_ContentStr($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkAsn_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkAsn_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkAsn_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_IntValue()
    {
        return CkAsn_get_IntValue($this->_cPtr);
    }

    public function put_IntValue($newVal)
    {
        CkAsn_put_IntValue($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkAsn_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkAsn_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkAsn_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkAsn_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkAsn_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkAsn_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkAsn_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkAsn_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumSubItems()
    {
        return CkAsn_get_NumSubItems($this->_cPtr);
    }

    public function get_Tag($str)
    {
        CkAsn_get_Tag($this->_cPtr, $str);
    }

    public function tag()
    {
        return CkAsn_tag($this->_cPtr);
    }

    public function get_TagValue()
    {
        return CkAsn_get_TagValue($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkAsn_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkAsn_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkAsn_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkAsn_version($this->_cPtr);
    }

    public function AppendBigInt($encodedBytes, $encoding)
    {
        return CkAsn_AppendBigInt($this->_cPtr, $encodedBytes, $encoding);
    }

    public function AppendBits($encodedBytes, $encoding)
    {
        return CkAsn_AppendBits($this->_cPtr, $encodedBytes, $encoding);
    }

    public function AppendBool($value)
    {
        return CkAsn_AppendBool($this->_cPtr, $value);
    }

    public function AppendContextConstructed($tag)
    {
        return CkAsn_AppendContextConstructed($this->_cPtr, $tag);
    }

    public function AppendContextPrimitive($tag, $encodedBytes, $encoding)
    {
        return CkAsn_AppendContextPrimitive($this->_cPtr, $tag, $encodedBytes, $encoding);
    }

    public function AppendInt($value)
    {
        return CkAsn_AppendInt($this->_cPtr, $value);
    }

    public function AppendNull()
    {
        return CkAsn_AppendNull($this->_cPtr);
    }

    public function AppendOctets($encodedBytes, $encoding)
    {
        return CkAsn_AppendOctets($this->_cPtr, $encodedBytes, $encoding);
    }

    public function AppendOid($oid)
    {
        return CkAsn_AppendOid($this->_cPtr, $oid);
    }

    public function AppendSequence()
    {
        return CkAsn_AppendSequence($this->_cPtr);
    }

    public function AppendSequence2()
    {
        return CkAsn_AppendSequence2($this->_cPtr);
    }

    public function AppendSequenceR()
    {
        $r = CkAsn_AppendSequenceR($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkAsn($r);
        }

        return $r;
    }

    public function AppendSet()
    {
        return CkAsn_AppendSet($this->_cPtr);
    }

    public function AppendSet2()
    {
        return CkAsn_AppendSet2($this->_cPtr);
    }

    public function AppendSetR()
    {
        $r = CkAsn_AppendSetR($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkAsn($r);
        }

        return $r;
    }

    public function AppendString($strType, $value)
    {
        return CkAsn_AppendString($this->_cPtr, $strType, $value);
    }

    public function AppendTime($timeFormat, $dateTimeStr)
    {
        return CkAsn_AppendTime($this->_cPtr, $timeFormat, $dateTimeStr);
    }

    public function asnToXml()
    {
        return CkAsn_asnToXml($this->_cPtr);
    }

    public function DeleteSubItem($index)
    {
        return CkAsn_DeleteSubItem($this->_cPtr, $index);
    }

    public function GetBinaryDer($outBytes)
    {
        return CkAsn_GetBinaryDer($this->_cPtr, $outBytes);
    }

    public function getEncodedContent($encoding)
    {
        return CkAsn_getEncodedContent($this->_cPtr, $encoding);
    }

    public function encodedContent($encoding)
    {
        return CkAsn_encodedContent($this->_cPtr, $encoding);
    }

    public function getEncodedDer($encoding)
    {
        return CkAsn_getEncodedDer($this->_cPtr, $encoding);
    }

    public function encodedDer($encoding)
    {
        return CkAsn_encodedDer($this->_cPtr, $encoding);
    }

    public function GetLastSubItem()
    {
        $r = CkAsn_GetLastSubItem($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkAsn($r);
        }

        return $r;
    }

    public function GetSubItem($index)
    {
        $r = CkAsn_GetSubItem($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkAsn($r);
        }

        return $r;
    }

    public function LoadAsnXml($xmlStr)
    {
        return CkAsn_LoadAsnXml($this->_cPtr, $xmlStr);
    }

    public function LoadBd($bd)
    {
        return CkAsn_LoadBd($this->_cPtr, $bd);
    }

    public function LoadBinary($derBytes)
    {
        return CkAsn_LoadBinary($this->_cPtr, $derBytes);
    }

    public function LoadBinaryFile($path)
    {
        return CkAsn_LoadBinaryFile($this->_cPtr, $path);
    }

    public function LoadEncoded($asnContent, $encoding)
    {
        return CkAsn_LoadEncoded($this->_cPtr, $asnContent, $encoding);
    }

    public function SaveLastError($path)
    {
        return CkAsn_SaveLastError($this->_cPtr, $path);
    }

    public function SetEncodedContent($encodedBytes, $encoding)
    {
        return CkAsn_SetEncodedContent($this->_cPtr, $encodedBytes, $encoding);
    }

    public function WriteBd($bd)
    {
        return CkAsn_WriteBd($this->_cPtr, $bd);
    }

    public function WriteBinaryDer($path)
    {
        return CkAsn_WriteBinaryDer($this->_cPtr, $path);
    }
}
