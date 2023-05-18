<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkBaseProgress
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkBaseProgress') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkBaseProgress();
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

    public function AbortCheck()
    {
        return CkBaseProgress_AbortCheck($this->_cPtr);
    }

    public function PercentDone($pctDone)
    {
        return CkBaseProgress_PercentDone($this->_cPtr, $pctDone);
    }

    public function ProgressInfo($name, $value)
    {
        CkBaseProgress_ProgressInfo($this->_cPtr, $name, $value);
    }

    public function TaskCompleted($task)
    {
        CkBaseProgress_TaskCompleted($this->_cPtr, $task);
    }

    public function TextData($data)
    {
        CkBaseProgress_TextData($this->_cPtr, $data);
    }
}
