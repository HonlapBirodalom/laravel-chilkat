<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkMailboxes
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkMailboxes') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkMailboxes();
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
        return CkMailboxes_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkMailboxes_put_Utf8($this->_cPtr, $b);
    }

    public function get_Count()
    {
        return CkMailboxes_get_Count($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkMailboxes_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkMailboxes_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function getFlags($index)
    {
        return CkMailboxes_getFlags($this->_cPtr, $index);
    }

    public function flags($index)
    {
        return CkMailboxes_flags($this->_cPtr, $index);
    }

    public function GetMailboxIndex($mbxName)
    {
        return CkMailboxes_GetMailboxIndex($this->_cPtr, $mbxName);
    }

    public function getName($index)
    {
        return CkMailboxes_getName($this->_cPtr, $index);
    }

    public function name($index)
    {
        return CkMailboxes_name($this->_cPtr, $index);
    }

    public function getNthFlag($index, $flagIndex)
    {
        return CkMailboxes_getNthFlag($this->_cPtr, $index, $flagIndex);
    }

    public function nthFlag($index, $flagIndex)
    {
        return CkMailboxes_nthFlag($this->_cPtr, $index, $flagIndex);
    }

    public function GetNumFlags($index)
    {
        return CkMailboxes_GetNumFlags($this->_cPtr, $index);
    }

    public function HasFlag($index, $flagName)
    {
        return CkMailboxes_HasFlag($this->_cPtr, $index, $flagName);
    }

    public function HasInferiors($index)
    {
        return CkMailboxes_HasInferiors($this->_cPtr, $index);
    }

    public function IsMarked($index)
    {
        return CkMailboxes_IsMarked($this->_cPtr, $index);
    }

    public function IsSelectable($index)
    {
        return CkMailboxes_IsSelectable($this->_cPtr, $index);
    }

    public function LoadTaskResult($task)
    {
        return CkMailboxes_LoadTaskResult($this->_cPtr, $task);
    }
}
