<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkHashtable
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkHashtable') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkHashtable();
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
        return CkHashtable_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkHashtable_put_Utf8($this->_cPtr, $b);
    }

    public function get_LastMethodSuccess()
    {
        return CkHashtable_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkHashtable_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function AddFromXmlSb($sbXml)
    {
        return CkHashtable_AddFromXmlSb($this->_cPtr, $sbXml);
    }

    public function AddInt($key, $value)
    {
        return CkHashtable_AddInt($this->_cPtr, $key, $value);
    }

    public function AddQueryParams($queryParams)
    {
        return CkHashtable_AddQueryParams($this->_cPtr, $queryParams);
    }

    public function AddStr($key, $value)
    {
        return CkHashtable_AddStr($this->_cPtr, $key, $value);
    }

    public function Clear()
    {
        CkHashtable_Clear($this->_cPtr);
    }

    public function ClearWithNewCapacity($capacity)
    {
        return CkHashtable_ClearWithNewCapacity($this->_cPtr, $capacity);
    }

    public function Contains($key)
    {
        return CkHashtable_Contains($this->_cPtr, $key);
    }

    public function ContainsIntKey($key)
    {
        return CkHashtable_ContainsIntKey($this->_cPtr, $key);
    }

    public function GetKeys($strTable)
    {
        return CkHashtable_GetKeys($this->_cPtr, $strTable);
    }

    public function LookupInt($key)
    {
        return CkHashtable_LookupInt($this->_cPtr, $key);
    }

    public function lookupStr($key)
    {
        return CkHashtable_lookupStr($this->_cPtr, $key);
    }

    public function Remove($key)
    {
        return CkHashtable_Remove($this->_cPtr, $key);
    }

    public function toQueryString()
    {
        return CkHashtable_toQueryString($this->_cPtr);
    }

    public function ToXmlSb($sbXml)
    {
        return CkHashtable_ToXmlSb($this->_cPtr, $sbXml);
    }
}
