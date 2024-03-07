<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCsp
{
    public $_cPtr = null;
    protected $_pData = array();

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCsp') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkCsp();
    }

    function __get($var)
    {
        if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __set($var, $value)
    {
        if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr, $value);
        $this->_pData[$var] = $value;
    }

    function __isset($var)
    {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function get_Utf8()
    {
        return CkCsp_get_Utf8($this->_cPtr);
    }

    function put_Utf8($b)
    {
        CkCsp_put_Utf8($this->_cPtr, $b);
    }

    function get_DebugLogFilePath($str)
    {
        CkCsp_get_DebugLogFilePath($this->_cPtr, $str);
    }

    function debugLogFilePath()
    {
        return CkCsp_debugLogFilePath($this->_cPtr);
    }

    function put_DebugLogFilePath($newVal)
    {
        CkCsp_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    function get_EncryptAlgorithm($str)
    {
        CkCsp_get_EncryptAlgorithm($this->_cPtr, $str);
    }

    function encryptAlgorithm()
    {
        return CkCsp_encryptAlgorithm($this->_cPtr);
    }

    function get_EncryptAlgorithmID()
    {
        return CkCsp_get_EncryptAlgorithmID($this->_cPtr);
    }

    function get_EncryptNumBits()
    {
        return CkCsp_get_EncryptNumBits($this->_cPtr);
    }

    function get_HashAlgorithm($str)
    {
        CkCsp_get_HashAlgorithm($this->_cPtr, $str);
    }

    function hashAlgorithm()
    {
        return CkCsp_hashAlgorithm($this->_cPtr);
    }

    function get_HashAlgorithmID()
    {
        return CkCsp_get_HashAlgorithmID($this->_cPtr);
    }

    function get_HashNumBits()
    {
        return CkCsp_get_HashNumBits($this->_cPtr);
    }

    function get_KeyContainerName($str)
    {
        CkCsp_get_KeyContainerName($this->_cPtr, $str);
    }

    function keyContainerName()
    {
        return CkCsp_keyContainerName($this->_cPtr);
    }

    function put_KeyContainerName($newVal)
    {
        CkCsp_put_KeyContainerName($this->_cPtr, $newVal);
    }

    function get_LastErrorHtml($str)
    {
        CkCsp_get_LastErrorHtml($this->_cPtr, $str);
    }

    function lastErrorHtml()
    {
        return CkCsp_lastErrorHtml($this->_cPtr);
    }

    function get_LastErrorText($str)
    {
        CkCsp_get_LastErrorText($this->_cPtr, $str);
    }

    function lastErrorText()
    {
        return CkCsp_lastErrorText($this->_cPtr);
    }

    function get_LastErrorXml($str)
    {
        CkCsp_get_LastErrorXml($this->_cPtr, $str);
    }

    function lastErrorXml()
    {
        return CkCsp_lastErrorXml($this->_cPtr);
    }

    function get_LastMethodSuccess()
    {
        return CkCsp_get_LastMethodSuccess($this->_cPtr);
    }

    function put_LastMethodSuccess($newVal)
    {
        CkCsp_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    function get_MachineKeyset()
    {
        return CkCsp_get_MachineKeyset($this->_cPtr);
    }

    function put_MachineKeyset($newVal)
    {
        CkCsp_put_MachineKeyset($this->_cPtr, $newVal);
    }

    function get_NumEncryptAlgorithms()
    {
        return CkCsp_get_NumEncryptAlgorithms($this->_cPtr);
    }

    function get_NumHashAlgorithms()
    {
        return CkCsp_get_NumHashAlgorithms($this->_cPtr);
    }

    function get_NumKeyContainers()
    {
        return CkCsp_get_NumKeyContainers($this->_cPtr);
    }

    function get_NumKeyExchangeAlgorithms()
    {
        return CkCsp_get_NumKeyExchangeAlgorithms($this->_cPtr);
    }

    function get_NumSignatureAlgorithms()
    {
        return CkCsp_get_NumSignatureAlgorithms($this->_cPtr);
    }

    function get_ProviderName($str)
    {
        CkCsp_get_ProviderName($this->_cPtr, $str);
    }

    function providerName()
    {
        return CkCsp_providerName($this->_cPtr);
    }

    function put_ProviderName($newVal)
    {
        CkCsp_put_ProviderName($this->_cPtr, $newVal);
    }

    function get_ProviderType()
    {
        return CkCsp_get_ProviderType($this->_cPtr);
    }

    function get_UncommonOptions($str)
    {
        CkCsp_get_UncommonOptions($this->_cPtr, $str);
    }

    function uncommonOptions()
    {
        return CkCsp_uncommonOptions($this->_cPtr);
    }

    function put_UncommonOptions($newVal)
    {
        CkCsp_put_UncommonOptions($this->_cPtr, $newVal);
    }

    function get_VerboseLogging()
    {
        return CkCsp_get_VerboseLogging($this->_cPtr);
    }

    function put_VerboseLogging($newVal)
    {
        CkCsp_put_VerboseLogging($this->_cPtr, $newVal);
    }

    function get_Version($str)
    {
        CkCsp_get_Version($this->_cPtr, $str);
    }

    function version()
    {
        return CkCsp_version($this->_cPtr);
    }

    function GetKeyContainerNames()
    {
        $r = CkCsp_GetKeyContainerNames($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkStringArray($r);
        }
        return $r;
    }

    function GetProviders($providerNames)
    {
        return CkCsp_GetProviders($this->_cPtr, $providerNames);
    }

    function HasEncryptAlgorithm($name, $numBits)
    {
        return CkCsp_HasEncryptAlgorithm($this->_cPtr, $name, $numBits);
    }

    function HasHashAlgorithm($name, $numBits)
    {
        return CkCsp_HasHashAlgorithm($this->_cPtr, $name, $numBits);
    }

    function Initialize()
    {
        return CkCsp_Initialize($this->_cPtr);
    }

    function nthEncryptionAlgorithm($index)
    {
        return CkCsp_nthEncryptionAlgorithm($this->_cPtr, $index);
    }

    function NthEncryptionNumBits($index)
    {
        return CkCsp_NthEncryptionNumBits($this->_cPtr, $index);
    }

    function nthHashAlgorithmName($index)
    {
        return CkCsp_nthHashAlgorithmName($this->_cPtr, $index);
    }

    function NthHashNumBits($index)
    {
        return CkCsp_NthHashNumBits($this->_cPtr, $index);
    }

    function nthKeyContainerName($index)
    {
        return CkCsp_nthKeyContainerName($this->_cPtr, $index);
    }

    function nthKeyExchangeAlgorithm($index)
    {
        return CkCsp_nthKeyExchangeAlgorithm($this->_cPtr, $index);
    }

    function NthKeyExchangeNumBits($index)
    {
        return CkCsp_NthKeyExchangeNumBits($this->_cPtr, $index);
    }

    function nthSignatureAlgorithm($index)
    {
        return CkCsp_nthSignatureAlgorithm($this->_cPtr, $index);
    }

    function NthSignatureNumBits($index)
    {
        return CkCsp_NthSignatureNumBits($this->_cPtr, $index);
    }

    function SaveLastError($path)
    {
        return CkCsp_SaveLastError($this->_cPtr, $path);
    }

    function SetEncryptAlgorithm($name)
    {
        return CkCsp_SetEncryptAlgorithm($this->_cPtr, $name);
    }

    function SetHashAlgorithm($name)
    {
        return CkCsp_SetHashAlgorithm($this->_cPtr, $name);
    }
}
