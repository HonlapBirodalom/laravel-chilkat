<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkMessageSet
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkMessageSet') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkMessageSet();
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
        return CkMessageSet_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkMessageSet_put_Utf8($this->_cPtr, $b);
    }

    public function get_Count()
    {
        return CkMessageSet_get_Count($this->_cPtr);
    }

    public function get_HasUids()
    {
        return CkMessageSet_get_HasUids($this->_cPtr);
    }

    public function put_HasUids($newVal)
    {
        CkMessageSet_put_HasUids($this->_cPtr, $newVal);
    }

    public function get_LastMethodSuccess()
    {
        return CkMessageSet_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkMessageSet_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function ContainsId($msgId)
    {
        return CkMessageSet_ContainsId($this->_cPtr, $msgId);
    }

    public function FromCompactString($str)
    {
        return CkMessageSet_FromCompactString($this->_cPtr, $str);
    }

    public function GetId($index)
    {
        return CkMessageSet_GetId($this->_cPtr, $index);
    }

    public function InsertId($id)
    {
        CkMessageSet_InsertId($this->_cPtr, $id);
    }

    public function LoadTaskResult($task)
    {
        return CkMessageSet_LoadTaskResult($this->_cPtr, $task);
    }

    public function RemoveId($id)
    {
        CkMessageSet_RemoveId($this->_cPtr, $id);
    }

    public function toCommaSeparatedStr()
    {
        return CkMessageSet_toCommaSeparatedStr($this->_cPtr);
    }

    public function toCompactString()
    {
        return CkMessageSet_toCompactString($this->_cPtr);
    }
}
