<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkEcc
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkEcc') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkEcc();
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
        return CkEcc_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkEcc_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkEcc_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkEcc_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkEcc_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkEcc_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkEcc_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkEcc_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkEcc_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkEcc_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkEcc_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkEcc_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkEcc_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkEcc_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkEcc_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkEcc_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkEcc_version($this->_cPtr);
    }

    public function GenEccKey($curveName, $prng)
    {
        $r = CkEcc_GenEccKey($this->_cPtr, $curveName, $prng);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPrivateKey($r);
        }

        return $r;
    }

    public function GenEccKey2($curveName, $encodedK, $encoding)
    {
        $r = CkEcc_GenEccKey2($this->_cPtr, $curveName, $encodedK, $encoding);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPrivateKey($r);
        }

        return $r;
    }

    public function SaveLastError($path)
    {
        return CkEcc_SaveLastError($this->_cPtr, $path);
    }

    public function sharedSecretENC($privKey, $pubKey, $encoding)
    {
        return CkEcc_sharedSecretENC($this->_cPtr, $privKey, $pubKey, $encoding);
    }

    public function signBd($bdData, $hashAlg, $encoding, $privKey, $prng)
    {
        return CkEcc_signBd($this->_cPtr, $bdData, $hashAlg, $encoding, $privKey, $prng);
    }

    public function signBdUsingCert($bdData, $hashAlg, $encoding, $cert)
    {
        return CkEcc_signBdUsingCert($this->_cPtr, $bdData, $hashAlg, $encoding, $cert);
    }

    public function signHashENC($encodedHash, $encoding, $privkey, $prng)
    {
        return CkEcc_signHashENC($this->_cPtr, $encodedHash, $encoding, $privkey, $prng);
    }

    public function VerifyBd($bdData, $hashAlg, $encodedSig, $encoding, $pubkey)
    {
        return CkEcc_VerifyBd($this->_cPtr, $bdData, $hashAlg, $encodedSig, $encoding, $pubkey);
    }

    public function VerifyHashENC($encodedHash, $encodedSig, $encoding, $pubkey)
    {
        return CkEcc_VerifyHashENC($this->_cPtr, $encodedHash, $encodedSig, $encoding, $pubkey);
    }
}
