<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkFtp2Progress extends CkBaseProgress
{
    public $_cPtr = null;

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkFtp2Progress') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkFtp2Progress();
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
        return CkBaseProgress::__get($var);
    }

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr, $value);
        CkBaseProgress::__set($var, $value);
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return CkBaseProgress::__isset($var);
    }

    function BeginDownloadFile($pathUtf8)
    {
        return CkFtp2Progress_BeginDownloadFile($this->_cPtr, $pathUtf8);
    }

    function VerifyDownloadDir($pathUtf8)
    {
        return CkFtp2Progress_VerifyDownloadDir($this->_cPtr, $pathUtf8);
    }

    function BeginUploadFile($pathUtf8)
    {
        return CkFtp2Progress_BeginUploadFile($this->_cPtr, $pathUtf8);
    }

    function VerifyUploadDir($pathUtf8)
    {
        return CkFtp2Progress_VerifyUploadDir($this->_cPtr, $pathUtf8);
    }

    function VerifyDeleteDir($pathUtf8)
    {
        return CkFtp2Progress_VerifyDeleteDir($this->_cPtr, $pathUtf8);
    }

    function VerifyDeleteFile($pathUtf8)
    {
        return CkFtp2Progress_VerifyDeleteFile($this->_cPtr, $pathUtf8);
    }
}
