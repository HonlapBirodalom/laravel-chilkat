<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkSecureString
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkSecureString') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkSecureString();
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
        return CkSecureString_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkSecureString_put_Utf8($this->_cPtr, $b);
    }

    public function get_LastMethodSuccess()
    {
        return CkSecureString_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkSecureString_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_MaintainHash($str)
    {
        CkSecureString_get_MaintainHash($this->_cPtr, $str);
    }

    public function maintainHash()
    {
        return CkSecureString_maintainHash($this->_cPtr);
    }

    public function put_MaintainHash($newVal)
    {
        CkSecureString_put_MaintainHash($this->_cPtr, $newVal);
    }

    public function get_ReadOnly()
    {
        return CkSecureString_get_ReadOnly($this->_cPtr);
    }

    public function put_ReadOnly($newVal)
    {
        CkSecureString_put_ReadOnly($this->_cPtr, $newVal);
    }

    public function access()
    {
        return CkSecureString_access($this->_cPtr);
    }

    public function Append($str)
    {
        return CkSecureString_Append($this->_cPtr, $str);
    }

    public function AppendSb($sb)
    {
        return CkSecureString_AppendSb($this->_cPtr, $sb);
    }

    public function AppendSecure($secStr)
    {
        return CkSecureString_AppendSecure($this->_cPtr, $secStr);
    }

    public function hashVal($encoding)
    {
        return CkSecureString_hashVal($this->_cPtr, $encoding);
    }

    public function LoadFile($path, $charset)
    {
        return CkSecureString_LoadFile($this->_cPtr, $path, $charset);
    }

    public function SecStrEquals($secStr)
    {
        return CkSecureString_SecStrEquals($this->_cPtr, $secStr);
    }

    public function VerifyHash($hashVal, $encoding)
    {
        return CkSecureString_VerifyHash($this->_cPtr, $hashVal, $encoding);
    }
}
