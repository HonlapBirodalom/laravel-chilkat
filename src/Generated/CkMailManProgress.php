<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkMailManProgress extends CkBaseProgress
{
    public $_cPtr = null;

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkMailManProgress') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkMailManProgress();
    }

    public function __get($var)
    {
        if ($var === 'thisown') {
            return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
        }

        return CkBaseProgress::__get($var);
    }

    public function __set($var, $value)
    {
        if ($var === 'thisown') {
            return swig_chilkat_9_5_0_alter_newobject($this->_cPtr, $value);
        }
        CkBaseProgress::__set($var, $value);
    }

    public function __isset($var)
    {
        if ($var === 'thisown') {
            return true;
        }

        return CkBaseProgress::__isset($var);
    }

    public function EmailReceived($subject, $fromAddr, $fromName, $returnPath, $date, $uidl, $sizeInBytes)
    {
        CkMailManProgress_EmailReceived($this->_cPtr, $subject, $fromAddr, $fromName, $returnPath, $date, $uidl, $sizeInBytes);
    }
}
