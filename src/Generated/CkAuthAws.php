<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkAuthAws
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkAuthAws') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkAuthAws();
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
        return CkAuthAws_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkAuthAws_put_Utf8($this->_cPtr, $b);
    }

    public function get_AccessKey($str)
    {
        CkAuthAws_get_AccessKey($this->_cPtr, $str);
    }

    public function accessKey()
    {
        return CkAuthAws_accessKey($this->_cPtr);
    }

    public function put_AccessKey($newVal)
    {
        CkAuthAws_put_AccessKey($this->_cPtr, $newVal);
    }

    public function get_CanonicalizedResourceV2($str)
    {
        CkAuthAws_get_CanonicalizedResourceV2($this->_cPtr, $str);
    }

    public function canonicalizedResourceV2()
    {
        return CkAuthAws_canonicalizedResourceV2($this->_cPtr);
    }

    public function put_CanonicalizedResourceV2($newVal)
    {
        CkAuthAws_put_CanonicalizedResourceV2($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkAuthAws_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkAuthAws_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkAuthAws_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkAuthAws_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkAuthAws_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkAuthAws_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkAuthAws_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkAuthAws_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkAuthAws_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkAuthAws_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkAuthAws_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_PrecomputedMd5($str)
    {
        CkAuthAws_get_PrecomputedMd5($this->_cPtr, $str);
    }

    public function precomputedMd5()
    {
        return CkAuthAws_precomputedMd5($this->_cPtr);
    }

    public function put_PrecomputedMd5($newVal)
    {
        CkAuthAws_put_PrecomputedMd5($this->_cPtr, $newVal);
    }

    public function get_PrecomputedSha256($str)
    {
        CkAuthAws_get_PrecomputedSha256($this->_cPtr, $str);
    }

    public function precomputedSha256()
    {
        return CkAuthAws_precomputedSha256($this->_cPtr);
    }

    public function put_PrecomputedSha256($newVal)
    {
        CkAuthAws_put_PrecomputedSha256($this->_cPtr, $newVal);
    }

    public function get_Region($str)
    {
        CkAuthAws_get_Region($this->_cPtr, $str);
    }

    public function region()
    {
        return CkAuthAws_region($this->_cPtr);
    }

    public function put_Region($newVal)
    {
        CkAuthAws_put_Region($this->_cPtr, $newVal);
    }

    public function get_SecretKey($str)
    {
        CkAuthAws_get_SecretKey($this->_cPtr, $str);
    }

    public function secretKey()
    {
        return CkAuthAws_secretKey($this->_cPtr);
    }

    public function put_SecretKey($newVal)
    {
        CkAuthAws_put_SecretKey($this->_cPtr, $newVal);
    }

    public function get_ServiceName($str)
    {
        CkAuthAws_get_ServiceName($this->_cPtr, $str);
    }

    public function serviceName()
    {
        return CkAuthAws_serviceName($this->_cPtr);
    }

    public function put_ServiceName($newVal)
    {
        CkAuthAws_put_ServiceName($this->_cPtr, $newVal);
    }

    public function get_SignatureVersion()
    {
        return CkAuthAws_get_SignatureVersion($this->_cPtr);
    }

    public function put_SignatureVersion($newVal)
    {
        CkAuthAws_put_SignatureVersion($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkAuthAws_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkAuthAws_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkAuthAws_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkAuthAws_version($this->_cPtr);
    }

    public function genPresignedUrl($httpVerb, $useHttps, $domain, $path, $numSecondsValid, $awsService)
    {
        return CkAuthAws_genPresignedUrl($this->_cPtr, $httpVerb, $useHttps, $domain, $path, $numSecondsValid, $awsService);
    }

    public function SaveLastError($path)
    {
        return CkAuthAws_SaveLastError($this->_cPtr, $path);
    }
}