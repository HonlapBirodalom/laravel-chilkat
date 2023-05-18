<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkOAuth1
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkOAuth1') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkOAuth1();
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
        return CkOAuth1_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkOAuth1_put_Utf8($this->_cPtr, $b);
    }

    public function get_AuthorizationHeader($str)
    {
        CkOAuth1_get_AuthorizationHeader($this->_cPtr, $str);
    }

    public function authorizationHeader()
    {
        return CkOAuth1_authorizationHeader($this->_cPtr);
    }

    public function get_BaseString($str)
    {
        CkOAuth1_get_BaseString($this->_cPtr, $str);
    }

    public function baseString()
    {
        return CkOAuth1_baseString($this->_cPtr);
    }

    public function get_ConsumerKey($str)
    {
        CkOAuth1_get_ConsumerKey($this->_cPtr, $str);
    }

    public function consumerKey()
    {
        return CkOAuth1_consumerKey($this->_cPtr);
    }

    public function put_ConsumerKey($newVal)
    {
        CkOAuth1_put_ConsumerKey($this->_cPtr, $newVal);
    }

    public function get_ConsumerSecret($str)
    {
        CkOAuth1_get_ConsumerSecret($this->_cPtr, $str);
    }

    public function consumerSecret()
    {
        return CkOAuth1_consumerSecret($this->_cPtr);
    }

    public function put_ConsumerSecret($newVal)
    {
        CkOAuth1_put_ConsumerSecret($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkOAuth1_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkOAuth1_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkOAuth1_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_EncodedSignature($str)
    {
        CkOAuth1_get_EncodedSignature($this->_cPtr, $str);
    }

    public function encodedSignature()
    {
        return CkOAuth1_encodedSignature($this->_cPtr);
    }

    public function get_GeneratedUrl($str)
    {
        CkOAuth1_get_GeneratedUrl($this->_cPtr, $str);
    }

    public function generatedUrl()
    {
        return CkOAuth1_generatedUrl($this->_cPtr);
    }

    public function get_HmacKey($str)
    {
        CkOAuth1_get_HmacKey($this->_cPtr, $str);
    }

    public function hmacKey()
    {
        return CkOAuth1_hmacKey($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkOAuth1_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkOAuth1_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkOAuth1_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkOAuth1_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkOAuth1_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkOAuth1_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkOAuth1_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkOAuth1_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Nonce($str)
    {
        CkOAuth1_get_Nonce($this->_cPtr, $str);
    }

    public function nonce()
    {
        return CkOAuth1_nonce($this->_cPtr);
    }

    public function put_Nonce($newVal)
    {
        CkOAuth1_put_Nonce($this->_cPtr, $newVal);
    }

    public function get_OauthMethod($str)
    {
        CkOAuth1_get_OauthMethod($this->_cPtr, $str);
    }

    public function oauthMethod()
    {
        return CkOAuth1_oauthMethod($this->_cPtr);
    }

    public function put_OauthMethod($newVal)
    {
        CkOAuth1_put_OauthMethod($this->_cPtr, $newVal);
    }

    public function get_OauthUrl($str)
    {
        CkOAuth1_get_OauthUrl($this->_cPtr, $str);
    }

    public function oauthUrl()
    {
        return CkOAuth1_oauthUrl($this->_cPtr);
    }

    public function put_OauthUrl($newVal)
    {
        CkOAuth1_put_OauthUrl($this->_cPtr, $newVal);
    }

    public function get_OauthVersion($str)
    {
        CkOAuth1_get_OauthVersion($this->_cPtr, $str);
    }

    public function oauthVersion()
    {
        return CkOAuth1_oauthVersion($this->_cPtr);
    }

    public function put_OauthVersion($newVal)
    {
        CkOAuth1_put_OauthVersion($this->_cPtr, $newVal);
    }

    public function get_QueryString($str)
    {
        CkOAuth1_get_QueryString($this->_cPtr, $str);
    }

    public function queryString()
    {
        return CkOAuth1_queryString($this->_cPtr);
    }

    public function get_Realm($str)
    {
        CkOAuth1_get_Realm($this->_cPtr, $str);
    }

    public function realm()
    {
        return CkOAuth1_realm($this->_cPtr);
    }

    public function put_Realm($newVal)
    {
        CkOAuth1_put_Realm($this->_cPtr, $newVal);
    }

    public function get_Signature($str)
    {
        CkOAuth1_get_Signature($this->_cPtr, $str);
    }

    public function signature()
    {
        return CkOAuth1_signature($this->_cPtr);
    }

    public function get_SignatureMethod($str)
    {
        CkOAuth1_get_SignatureMethod($this->_cPtr, $str);
    }

    public function signatureMethod()
    {
        return CkOAuth1_signatureMethod($this->_cPtr);
    }

    public function put_SignatureMethod($newVal)
    {
        CkOAuth1_put_SignatureMethod($this->_cPtr, $newVal);
    }

    public function get_Timestamp($str)
    {
        CkOAuth1_get_Timestamp($this->_cPtr, $str);
    }

    public function timestamp()
    {
        return CkOAuth1_timestamp($this->_cPtr);
    }

    public function put_Timestamp($newVal)
    {
        CkOAuth1_put_Timestamp($this->_cPtr, $newVal);
    }

    public function get_Token($str)
    {
        CkOAuth1_get_Token($this->_cPtr, $str);
    }

    public function token()
    {
        return CkOAuth1_token($this->_cPtr);
    }

    public function put_Token($newVal)
    {
        CkOAuth1_put_Token($this->_cPtr, $newVal);
    }

    public function get_TokenSecret($str)
    {
        CkOAuth1_get_TokenSecret($this->_cPtr, $str);
    }

    public function tokenSecret()
    {
        return CkOAuth1_tokenSecret($this->_cPtr);
    }

    public function put_TokenSecret($newVal)
    {
        CkOAuth1_put_TokenSecret($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkOAuth1_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkOAuth1_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkOAuth1_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkOAuth1_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkOAuth1_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkOAuth1_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkOAuth1_version($this->_cPtr);
    }

    public function AddParam($name, $value)
    {
        return CkOAuth1_AddParam($this->_cPtr, $name, $value);
    }

    public function Generate()
    {
        return CkOAuth1_Generate($this->_cPtr);
    }

    public function GenNonce($numBytes)
    {
        return CkOAuth1_GenNonce($this->_cPtr, $numBytes);
    }

    public function GenTimestamp()
    {
        return CkOAuth1_GenTimestamp($this->_cPtr);
    }

    public function RemoveParam($name)
    {
        return CkOAuth1_RemoveParam($this->_cPtr, $name);
    }

    public function SaveLastError($path)
    {
        return CkOAuth1_SaveLastError($this->_cPtr, $path);
    }

    public function SetRsaKey($privKey)
    {
        return CkOAuth1_SetRsaKey($this->_cPtr, $privKey);
    }
}
