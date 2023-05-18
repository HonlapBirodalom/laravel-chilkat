<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkSshKey
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkSshKey') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkSshKey();
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
        return CkSshKey_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkSshKey_put_Utf8($this->_cPtr, $b);
    }

    public function get_Comment($str)
    {
        CkSshKey_get_Comment($this->_cPtr, $str);
    }

    public function comment()
    {
        return CkSshKey_comment($this->_cPtr);
    }

    public function put_Comment($newVal)
    {
        CkSshKey_put_Comment($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkSshKey_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkSshKey_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkSshKey_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_IsDsaKey()
    {
        return CkSshKey_get_IsDsaKey($this->_cPtr);
    }

    public function get_IsPrivateKey()
    {
        return CkSshKey_get_IsPrivateKey($this->_cPtr);
    }

    public function get_IsRsaKey()
    {
        return CkSshKey_get_IsRsaKey($this->_cPtr);
    }

    public function get_KeyType($str)
    {
        CkSshKey_get_KeyType($this->_cPtr, $str);
    }

    public function keyType()
    {
        return CkSshKey_keyType($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkSshKey_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkSshKey_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkSshKey_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkSshKey_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkSshKey_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkSshKey_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkSshKey_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkSshKey_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Password($str)
    {
        CkSshKey_get_Password($this->_cPtr, $str);
    }

    public function password()
    {
        return CkSshKey_password($this->_cPtr);
    }

    public function put_Password($newVal)
    {
        CkSshKey_put_Password($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkSshKey_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkSshKey_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkSshKey_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkSshKey_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkSshKey_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkSshKey_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkSshKey_version($this->_cPtr);
    }

    public function FromOpenSshPrivateKey($keyStr)
    {
        return CkSshKey_FromOpenSshPrivateKey($this->_cPtr, $keyStr);
    }

    public function FromOpenSshPublicKey($keyStr)
    {
        return CkSshKey_FromOpenSshPublicKey($this->_cPtr, $keyStr);
    }

    public function FromPuttyPrivateKey($keyStr)
    {
        return CkSshKey_FromPuttyPrivateKey($this->_cPtr, $keyStr);
    }

    public function FromRfc4716PublicKey($keyStr)
    {
        return CkSshKey_FromRfc4716PublicKey($this->_cPtr, $keyStr);
    }

    public function FromXml($xmlKey)
    {
        return CkSshKey_FromXml($this->_cPtr, $xmlKey);
    }

    public function GenerateDsaKey($numBits)
    {
        return CkSshKey_GenerateDsaKey($this->_cPtr, $numBits);
    }

    public function GenerateEcdsaKey($curveName)
    {
        return CkSshKey_GenerateEcdsaKey($this->_cPtr, $curveName);
    }

    public function GenerateEd25519Key()
    {
        return CkSshKey_GenerateEd25519Key($this->_cPtr);
    }

    public function GenerateRsaKey($numBits, $exponent)
    {
        return CkSshKey_GenerateRsaKey($this->_cPtr, $numBits, $exponent);
    }

    public function genFingerprint()
    {
        return CkSshKey_genFingerprint($this->_cPtr);
    }

    public function loadText($filename)
    {
        return CkSshKey_loadText($this->_cPtr, $filename);
    }

    public function SaveLastError($path)
    {
        return CkSshKey_SaveLastError($this->_cPtr, $path);
    }

    public function SaveText($strToSave, $filename)
    {
        return CkSshKey_SaveText($this->_cPtr, $strToSave, $filename);
    }

    public function toOpenSshPrivateKey($bEncrypt)
    {
        return CkSshKey_toOpenSshPrivateKey($this->_cPtr, $bEncrypt);
    }

    public function toOpenSshPublicKey()
    {
        return CkSshKey_toOpenSshPublicKey($this->_cPtr);
    }

    public function toPuttyPrivateKey($bEncrypt)
    {
        return CkSshKey_toPuttyPrivateKey($this->_cPtr, $bEncrypt);
    }

    public function toRfc4716PublicKey()
    {
        return CkSshKey_toRfc4716PublicKey($this->_cPtr);
    }

    public function toXml()
    {
        return CkSshKey_toXml($this->_cPtr);
    }
}
