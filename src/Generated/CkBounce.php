<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkBounce
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkBounce') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkBounce();
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
        return CkBounce_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkBounce_put_Utf8($this->_cPtr, $b);
    }

    public function get_BounceAddress($str)
    {
        CkBounce_get_BounceAddress($this->_cPtr, $str);
    }

    public function bounceAddress()
    {
        return CkBounce_bounceAddress($this->_cPtr);
    }

    public function get_BounceData($str)
    {
        CkBounce_get_BounceData($this->_cPtr, $str);
    }

    public function bounceData()
    {
        return CkBounce_bounceData($this->_cPtr);
    }

    public function get_BounceType()
    {
        return CkBounce_get_BounceType($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkBounce_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkBounce_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkBounce_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkBounce_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkBounce_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkBounce_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkBounce_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkBounce_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkBounce_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkBounce_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkBounce_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkBounce_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkBounce_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkBounce_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkBounce_version($this->_cPtr);
    }

    public function ExamineEmail($email)
    {
        return CkBounce_ExamineEmail($this->_cPtr, $email);
    }

    public function ExamineEml($emlFilename)
    {
        return CkBounce_ExamineEml($this->_cPtr, $emlFilename);
    }

    public function ExamineMime($mimeText)
    {
        return CkBounce_ExamineMime($this->_cPtr, $mimeText);
    }

    public function SaveLastError($path)
    {
        return CkBounce_SaveLastError($this->_cPtr, $path);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkBounce_UnlockComponent($this->_cPtr, $unlockCode);
    }
}