<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCsr
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCsr') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkCsr();
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
        return CkCsr_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkCsr_put_Utf8($this->_cPtr, $b);
    }

    public function get_CommonName($str)
    {
        CkCsr_get_CommonName($this->_cPtr, $str);
    }

    public function commonName()
    {
        return CkCsr_commonName($this->_cPtr);
    }

    public function put_CommonName($newVal)
    {
        CkCsr_put_CommonName($this->_cPtr, $newVal);
    }

    public function get_Company($str)
    {
        CkCsr_get_Company($this->_cPtr, $str);
    }

    public function company()
    {
        return CkCsr_company($this->_cPtr);
    }

    public function put_Company($newVal)
    {
        CkCsr_put_Company($this->_cPtr, $newVal);
    }

    public function get_CompanyDivision($str)
    {
        CkCsr_get_CompanyDivision($this->_cPtr, $str);
    }

    public function companyDivision()
    {
        return CkCsr_companyDivision($this->_cPtr);
    }

    public function put_CompanyDivision($newVal)
    {
        CkCsr_put_CompanyDivision($this->_cPtr, $newVal);
    }

    public function get_Country($str)
    {
        CkCsr_get_Country($this->_cPtr, $str);
    }

    public function country()
    {
        return CkCsr_country($this->_cPtr);
    }

    public function put_Country($newVal)
    {
        CkCsr_put_Country($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkCsr_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkCsr_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkCsr_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_EmailAddress($str)
    {
        CkCsr_get_EmailAddress($this->_cPtr, $str);
    }

    public function emailAddress()
    {
        return CkCsr_emailAddress($this->_cPtr);
    }

    public function put_EmailAddress($newVal)
    {
        CkCsr_put_EmailAddress($this->_cPtr, $newVal);
    }

    public function get_HashAlgorithm($str)
    {
        CkCsr_get_HashAlgorithm($this->_cPtr, $str);
    }

    public function hashAlgorithm()
    {
        return CkCsr_hashAlgorithm($this->_cPtr);
    }

    public function put_HashAlgorithm($newVal)
    {
        CkCsr_put_HashAlgorithm($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkCsr_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkCsr_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkCsr_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkCsr_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkCsr_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkCsr_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkCsr_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkCsr_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Locality($str)
    {
        CkCsr_get_Locality($this->_cPtr, $str);
    }

    public function locality()
    {
        return CkCsr_locality($this->_cPtr);
    }

    public function put_Locality($newVal)
    {
        CkCsr_put_Locality($this->_cPtr, $newVal);
    }

    public function get_MgfHashAlg($str)
    {
        CkCsr_get_MgfHashAlg($this->_cPtr, $str);
    }

    public function mgfHashAlg()
    {
        return CkCsr_mgfHashAlg($this->_cPtr);
    }

    public function put_MgfHashAlg($newVal)
    {
        CkCsr_put_MgfHashAlg($this->_cPtr, $newVal);
    }

    public function get_PssPadding()
    {
        return CkCsr_get_PssPadding($this->_cPtr);
    }

    public function put_PssPadding($newVal)
    {
        CkCsr_put_PssPadding($this->_cPtr, $newVal);
    }

    public function get_State($str)
    {
        CkCsr_get_State($this->_cPtr, $str);
    }

    public function state()
    {
        return CkCsr_state($this->_cPtr);
    }

    public function put_State($newVal)
    {
        CkCsr_put_State($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkCsr_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkCsr_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkCsr_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkCsr_version($this->_cPtr);
    }

    public function AddSan($sanType, $sanValue)
    {
        return CkCsr_AddSan($this->_cPtr, $sanType, $sanValue);
    }

    public function GenCsrBd($privKey, $csrData)
    {
        return CkCsr_GenCsrBd($this->_cPtr, $privKey, $csrData);
    }

    public function genCsrPem($privKey)
    {
        return CkCsr_genCsrPem($this->_cPtr, $privKey);
    }

    public function GetExtensionRequest($extensionReqXml)
    {
        return CkCsr_GetExtensionRequest($this->_cPtr, $extensionReqXml);
    }

    public function GetPublicKey($pubkey)
    {
        return CkCsr_GetPublicKey($this->_cPtr, $pubkey);
    }

    public function GetSans($sans)
    {
        return CkCsr_GetSans($this->_cPtr, $sans);
    }

    public function getSubjectField($oid)
    {
        return CkCsr_getSubjectField($this->_cPtr, $oid);
    }

    public function subjectField($oid)
    {
        return CkCsr_subjectField($this->_cPtr, $oid);
    }

    public function LoadCsrPem($csrPemStr)
    {
        return CkCsr_LoadCsrPem($this->_cPtr, $csrPemStr);
    }

    public function SaveLastError($path)
    {
        return CkCsr_SaveLastError($this->_cPtr, $path);
    }

    public function SetExtensionRequest($extensionReqXml)
    {
        return CkCsr_SetExtensionRequest($this->_cPtr, $extensionReqXml);
    }

    public function SetSubjectField($oid, $value, $asnType)
    {
        return CkCsr_SetSubjectField($this->_cPtr, $oid, $value, $asnType);
    }

    public function VerifyCsr()
    {
        return CkCsr_VerifyCsr($this->_cPtr);
    }
}
