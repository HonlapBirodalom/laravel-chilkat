<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkHttpProgress extends CkBaseProgress
{
    public $_cPtr = null;

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkHttpProgress') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkHttpProgress();
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

    public function HttpRedirect($originalUrl, $redirectUrl)
    {
        return CkHttpProgress_HttpRedirect($this->_cPtr, $originalUrl, $redirectUrl);
    }

    public function HttpChunked()
    {
        CkHttpProgress_HttpChunked($this->_cPtr);
    }

    public function HttpBeginReceive()
    {
        CkHttpProgress_HttpBeginReceive($this->_cPtr);
    }

    public function HttpEndReceive($success)
    {
        CkHttpProgress_HttpEndReceive($this->_cPtr, $success);
    }

    public function HttpBeginSend()
    {
        CkHttpProgress_HttpBeginSend($this->_cPtr);
    }

    public function HttpEndSend($success)
    {
        CkHttpProgress_HttpEndSend($this->_cPtr, $success);
    }

    public function ReceiveRate($byteCount, $bytesPerSec)
    {
        CkHttpProgress_ReceiveRate($this->_cPtr, $byteCount, $bytesPerSec);
    }

    public function SendRate($byteCount, $bytesPerSec)
    {
        CkHttpProgress_SendRate($this->_cPtr, $byteCount, $bytesPerSec);
    }
}
