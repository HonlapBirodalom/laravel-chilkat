<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkXmlCertVault
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkXmlCertVault') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkXmlCertVault();
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
        return CkXmlCertVault_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkXmlCertVault_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkXmlCertVault_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkXmlCertVault_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkXmlCertVault_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkXmlCertVault_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkXmlCertVault_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkXmlCertVault_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkXmlCertVault_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkXmlCertVault_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkXmlCertVault_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkXmlCertVault_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkXmlCertVault_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_MasterPassword($str)
    {
        CkXmlCertVault_get_MasterPassword($this->_cPtr, $str);
    }

    public function masterPassword()
    {
        return CkXmlCertVault_masterPassword($this->_cPtr);
    }

    public function put_MasterPassword($newVal)
    {
        CkXmlCertVault_put_MasterPassword($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkXmlCertVault_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkXmlCertVault_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkXmlCertVault_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkXmlCertVault_version($this->_cPtr);
    }

    public function AddCert($cert)
    {
        return CkXmlCertVault_AddCert($this->_cPtr, $cert);
    }

    public function AddCertBinary($certBytes)
    {
        return CkXmlCertVault_AddCertBinary($this->_cPtr, $certBytes);
    }

    public function AddCertChain($certChain)
    {
        return CkXmlCertVault_AddCertChain($this->_cPtr, $certChain);
    }

    public function AddCertEncoded($encodedBytes, $encoding)
    {
        return CkXmlCertVault_AddCertEncoded($this->_cPtr, $encodedBytes, $encoding);
    }

    public function AddCertFile($path)
    {
        return CkXmlCertVault_AddCertFile($this->_cPtr, $path);
    }

    public function AddCertString($certData)
    {
        return CkXmlCertVault_AddCertString($this->_cPtr, $certData);
    }

    public function AddPemFile($path, $password)
    {
        return CkXmlCertVault_AddPemFile($this->_cPtr, $path, $password);
    }

    public function AddPfx($pfx)
    {
        return CkXmlCertVault_AddPfx($this->_cPtr, $pfx);
    }

    public function AddPfxBinary($pfxBytes, $password)
    {
        return CkXmlCertVault_AddPfxBinary($this->_cPtr, $pfxBytes, $password);
    }

    public function AddPfxEncoded($encodedBytes, $encoding, $password)
    {
        return CkXmlCertVault_AddPfxEncoded($this->_cPtr, $encodedBytes, $encoding, $password);
    }

    public function AddPfxFile($path, $password)
    {
        return CkXmlCertVault_AddPfxFile($this->_cPtr, $path, $password);
    }

    public function getXml()
    {
        return CkXmlCertVault_getXml($this->_cPtr);
    }

    public function xml()
    {
        return CkXmlCertVault_xml($this->_cPtr);
    }

    public function LoadXml($xml)
    {
        return CkXmlCertVault_LoadXml($this->_cPtr, $xml);
    }

    public function LoadXmlFile($path)
    {
        return CkXmlCertVault_LoadXmlFile($this->_cPtr, $path);
    }

    public function SaveLastError($path)
    {
        return CkXmlCertVault_SaveLastError($this->_cPtr, $path);
    }

    public function SaveXml($path)
    {
        return CkXmlCertVault_SaveXml($this->_cPtr, $path);
    }
}
