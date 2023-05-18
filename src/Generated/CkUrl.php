<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkUrl
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkUrl') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkUrl();
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
        return CkUrl_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkUrl_put_Utf8($this->_cPtr, $b);
    }

    public function get_Frag($str)
    {
        CkUrl_get_Frag($this->_cPtr, $str);
    }

    public function frag()
    {
        return CkUrl_frag($this->_cPtr);
    }

    public function get_Host($str)
    {
        CkUrl_get_Host($this->_cPtr, $str);
    }

    public function host()
    {
        return CkUrl_host($this->_cPtr);
    }

    public function get_HostType($str)
    {
        CkUrl_get_HostType($this->_cPtr, $str);
    }

    public function hostType()
    {
        return CkUrl_hostType($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkUrl_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkUrl_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Login($str)
    {
        CkUrl_get_Login($this->_cPtr, $str);
    }

    public function login()
    {
        return CkUrl_login($this->_cPtr);
    }

    public function get_Password($str)
    {
        CkUrl_get_Password($this->_cPtr, $str);
    }

    public function password()
    {
        return CkUrl_password($this->_cPtr);
    }

    public function get_Path($str)
    {
        CkUrl_get_Path($this->_cPtr, $str);
    }

    public function path()
    {
        return CkUrl_path($this->_cPtr);
    }

    public function get_PathWithQueryParams($str)
    {
        CkUrl_get_PathWithQueryParams($this->_cPtr, $str);
    }

    public function pathWithQueryParams()
    {
        return CkUrl_pathWithQueryParams($this->_cPtr);
    }

    public function get_Port()
    {
        return CkUrl_get_Port($this->_cPtr);
    }

    public function get_Query($str)
    {
        CkUrl_get_Query($this->_cPtr, $str);
    }

    public function query()
    {
        return CkUrl_query($this->_cPtr);
    }

    public function get_Ssl()
    {
        return CkUrl_get_Ssl($this->_cPtr);
    }

    public function ParseUrl($url)
    {
        return CkUrl_ParseUrl($this->_cPtr, $url);
    }
}
