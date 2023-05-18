<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkEdDSA
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkEdDSA') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkEdDSA();
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
        return CkEdDSA_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkEdDSA_put_Utf8($this->_cPtr, $b);
    }

    public function get_Algorithm($str)
    {
        CkEdDSA_get_Algorithm($this->_cPtr, $str);
    }

    public function algorithm()
    {
        return CkEdDSA_algorithm($this->_cPtr);
    }

    public function put_Algorithm($newVal)
    {
        CkEdDSA_put_Algorithm($this->_cPtr, $newVal);
    }

    public function get_Context($str)
    {
        CkEdDSA_get_Context($this->_cPtr, $str);
    }

    public function context()
    {
        return CkEdDSA_context($this->_cPtr);
    }

    public function put_Context($newVal)
    {
        CkEdDSA_put_Context($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkEdDSA_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkEdDSA_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkEdDSA_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkEdDSA_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkEdDSA_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkEdDSA_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkEdDSA_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkEdDSA_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkEdDSA_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkEdDSA_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkEdDSA_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkEdDSA_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkEdDSA_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkEdDSA_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkEdDSA_version($this->_cPtr);
    }

    public function GenEd25519Key($prng, $privKey)
    {
        return CkEdDSA_GenEd25519Key($this->_cPtr, $prng, $privKey);
    }

    public function SaveLastError($path)
    {
        return CkEdDSA_SaveLastError($this->_cPtr, $path);
    }

    public function sharedSecretENC($privkey, $pubkey, $encoding)
    {
        return CkEdDSA_sharedSecretENC($this->_cPtr, $privkey, $pubkey, $encoding);
    }

    public function signBdENC($bd, $encoding, $privkey)
    {
        return CkEdDSA_signBdENC($this->_cPtr, $bd, $encoding, $privkey);
    }

    public function VerifyBdENC($bd, $encodedSig, $enocding, $pubkey)
    {
        return CkEdDSA_VerifyBdENC($this->_cPtr, $bd, $encodedSig, $enocding, $pubkey);
    }
}