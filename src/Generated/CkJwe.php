<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkJwe
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkJwe') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkJwe();
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
        return CkJwe_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkJwe_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkJwe_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkJwe_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkJwe_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkJwe_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkJwe_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkJwe_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkJwe_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkJwe_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkJwe_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkJwe_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkJwe_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumRecipients()
    {
        return CkJwe_get_NumRecipients($this->_cPtr);
    }

    public function get_PreferCompact()
    {
        return CkJwe_get_PreferCompact($this->_cPtr);
    }

    public function put_PreferCompact($newVal)
    {
        CkJwe_put_PreferCompact($this->_cPtr, $newVal);
    }

    public function get_PreferFlattened()
    {
        return CkJwe_get_PreferFlattened($this->_cPtr);
    }

    public function put_PreferFlattened($newVal)
    {
        CkJwe_put_PreferFlattened($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkJwe_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkJwe_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkJwe_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkJwe_version($this->_cPtr);
    }

    public function decrypt($index, $charset)
    {
        return CkJwe_decrypt($this->_cPtr, $index, $charset);
    }

    public function DecryptBd($index, $bd)
    {
        return CkJwe_DecryptBd($this->_cPtr, $index, $bd);
    }

    public function DecryptSb($index, $charset, $contentSb)
    {
        return CkJwe_DecryptSb($this->_cPtr, $index, $charset, $contentSb);
    }

    public function encrypt($content, $charset)
    {
        return CkJwe_encrypt($this->_cPtr, $content, $charset);
    }

    public function EncryptBd($contentBd, $jweSb)
    {
        return CkJwe_EncryptBd($this->_cPtr, $contentBd, $jweSb);
    }

    public function EncryptSb($contentSb, $charset, $jweSb)
    {
        return CkJwe_EncryptSb($this->_cPtr, $contentSb, $charset, $jweSb);
    }

    public function FindRecipient($paramName, $paramValue, $caseSensitive)
    {
        return CkJwe_FindRecipient($this->_cPtr, $paramName, $paramValue, $caseSensitive);
    }

    public function GetHeader($json)
    {
        return CkJwe_GetHeader($this->_cPtr, $json);
    }

    public function GetProtectedHeader($json)
    {
        return CkJwe_GetProtectedHeader($this->_cPtr, $json);
    }

    public function LoadJwe($jwe)
    {
        return CkJwe_LoadJwe($this->_cPtr, $jwe);
    }

    public function LoadJweSb($sb)
    {
        return CkJwe_LoadJweSb($this->_cPtr, $sb);
    }

    public function SaveLastError($path)
    {
        return CkJwe_SaveLastError($this->_cPtr, $path);
    }

    public function SetAad($aad, $charset)
    {
        return CkJwe_SetAad($this->_cPtr, $aad, $charset);
    }

    public function SetAadBd($aad)
    {
        return CkJwe_SetAadBd($this->_cPtr, $aad);
    }

    public function SetPassword($index, $password)
    {
        return CkJwe_SetPassword($this->_cPtr, $index, $password);
    }

    public function SetPrivateKey($index, $privKey)
    {
        return CkJwe_SetPrivateKey($this->_cPtr, $index, $privKey);
    }

    public function SetProtectedHeader($json)
    {
        return CkJwe_SetProtectedHeader($this->_cPtr, $json);
    }

    public function SetPublicKey($index, $pubKey)
    {
        return CkJwe_SetPublicKey($this->_cPtr, $index, $pubKey);
    }

    public function SetRecipientHeader($index, $json)
    {
        return CkJwe_SetRecipientHeader($this->_cPtr, $index, $json);
    }

    public function SetUnprotectedHeader($json)
    {
        return CkJwe_SetUnprotectedHeader($this->_cPtr, $json);
    }

    public function SetWrappingKey($index, $encodedKey, $encoding)
    {
        return CkJwe_SetWrappingKey($this->_cPtr, $index, $encodedKey, $encoding);
    }
}
