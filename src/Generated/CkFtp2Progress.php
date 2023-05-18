<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkFtp2Progress extends CkBaseProgress
{
    public $_cPtr = null;

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkFtp2Progress') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkFtp2Progress();
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

    public function BeginDownloadFile($pathUtf8)
    {
        return CkFtp2Progress_BeginDownloadFile($this->_cPtr, $pathUtf8);
    }

    public function VerifyDownloadDir($pathUtf8)
    {
        return CkFtp2Progress_VerifyDownloadDir($this->_cPtr, $pathUtf8);
    }

    public function BeginUploadFile($pathUtf8)
    {
        return CkFtp2Progress_BeginUploadFile($this->_cPtr, $pathUtf8);
    }

    public function VerifyUploadDir($pathUtf8)
    {
        return CkFtp2Progress_VerifyUploadDir($this->_cPtr, $pathUtf8);
    }

    public function VerifyDeleteDir($pathUtf8)
    {
        return CkFtp2Progress_VerifyDeleteDir($this->_cPtr, $pathUtf8);
    }

    public function VerifyDeleteFile($pathUtf8)
    {
        return CkFtp2Progress_VerifyDeleteFile($this->_cPtr, $pathUtf8);
    }

    public function EndUploadFile($pathUtf8, $numBytes)
    {
        CkFtp2Progress_EndUploadFile($this->_cPtr, $pathUtf8, $numBytes);
    }

    public function EndDownloadFile($pathUtf8, $numBytes)
    {
        CkFtp2Progress_EndDownloadFile($this->_cPtr, $pathUtf8, $numBytes);
    }

    public function UploadRate($byteCount, $bytesPerSec)
    {
        CkFtp2Progress_UploadRate($this->_cPtr, $byteCount, $bytesPerSec);
    }

    public function DownloadRate($byteCount, $bytesPerSec)
    {
        CkFtp2Progress_DownloadRate($this->_cPtr, $byteCount, $bytesPerSec);
    }
}
