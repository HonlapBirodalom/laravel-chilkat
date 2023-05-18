<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkXmlDSig
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkXmlDSig') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkXmlDSig();
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
        return CkXmlDSig_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkXmlDSig_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkXmlDSig_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkXmlDSig_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkXmlDSig_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_ExternalRefDirs($str)
    {
        CkXmlDSig_get_ExternalRefDirs($this->_cPtr, $str);
    }

    public function externalRefDirs()
    {
        return CkXmlDSig_externalRefDirs($this->_cPtr);
    }

    public function put_ExternalRefDirs($newVal)
    {
        CkXmlDSig_put_ExternalRefDirs($this->_cPtr, $newVal);
    }

    public function get_IgnoreExternalRefs()
    {
        return CkXmlDSig_get_IgnoreExternalRefs($this->_cPtr);
    }

    public function put_IgnoreExternalRefs($newVal)
    {
        CkXmlDSig_put_IgnoreExternalRefs($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkXmlDSig_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkXmlDSig_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkXmlDSig_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkXmlDSig_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkXmlDSig_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkXmlDSig_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkXmlDSig_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkXmlDSig_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumReferences()
    {
        return CkXmlDSig_get_NumReferences($this->_cPtr);
    }

    public function get_NumSignatures()
    {
        return CkXmlDSig_get_NumSignatures($this->_cPtr);
    }

    public function get_RefFailReason()
    {
        return CkXmlDSig_get_RefFailReason($this->_cPtr);
    }

    public function get_Selector()
    {
        return CkXmlDSig_get_Selector($this->_cPtr);
    }

    public function put_Selector($newVal)
    {
        CkXmlDSig_put_Selector($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkXmlDSig_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkXmlDSig_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkXmlDSig_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkXmlDSig_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkXmlDSig_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkXmlDSig_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkXmlDSig_version($this->_cPtr);
    }

    public function get_WithComments()
    {
        return CkXmlDSig_get_WithComments($this->_cPtr);
    }

    public function put_WithComments($newVal)
    {
        CkXmlDSig_put_WithComments($this->_cPtr, $newVal);
    }

    public function AddEncapsulatedTimeStamp($json, $sbOut)
    {
        return CkXmlDSig_AddEncapsulatedTimeStamp($this->_cPtr, $json, $sbOut);
    }

    public function canonicalizeFragment($xml, $fragmentId, $version, $prefixList, $withComments)
    {
        return CkXmlDSig_canonicalizeFragment($this->_cPtr, $xml, $fragmentId, $version, $prefixList, $withComments);
    }

    public function canonicalizeXml($xml, $version, $withComments)
    {
        return CkXmlDSig_canonicalizeXml($this->_cPtr, $xml, $version, $withComments);
    }

    public function GetCerts($sa)
    {
        return CkXmlDSig_GetCerts($this->_cPtr, $sa);
    }

    public function GetKeyInfo()
    {
        $r = CkXmlDSig_GetKeyInfo($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetPublicKey()
    {
        $r = CkXmlDSig_GetPublicKey($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPublicKey($r);
        }

        return $r;
    }

    public function HasEncapsulatedTimeStamp()
    {
        return CkXmlDSig_HasEncapsulatedTimeStamp($this->_cPtr);
    }

    public function IsReferenceExternal($index)
    {
        return CkXmlDSig_IsReferenceExternal($this->_cPtr, $index);
    }

    public function LoadSignature($xmlSig)
    {
        return CkXmlDSig_LoadSignature($this->_cPtr, $xmlSig);
    }

    public function LoadSignatureBd($binData)
    {
        return CkXmlDSig_LoadSignatureBd($this->_cPtr, $binData);
    }

    public function LoadSignatureSb($sbXmlSig)
    {
        return CkXmlDSig_LoadSignatureSb($this->_cPtr, $sbXmlSig);
    }

    public function referenceUri($index)
    {
        return CkXmlDSig_referenceUri($this->_cPtr, $index);
    }

    public function SaveLastError($path)
    {
        return CkXmlDSig_SaveLastError($this->_cPtr, $path);
    }

    public function SetHmacKey($key, $encoding)
    {
        return CkXmlDSig_SetHmacKey($this->_cPtr, $key, $encoding);
    }

    public function SetHttpObj($http)
    {
        CkXmlDSig_SetHttpObj($this->_cPtr, $http);
    }

    public function SetPublicKey($pubKey)
    {
        return CkXmlDSig_SetPublicKey($this->_cPtr, $pubKey);
    }

    public function SetRefDataBd($index, $binData)
    {
        return CkXmlDSig_SetRefDataBd($this->_cPtr, $index, $binData);
    }

    public function SetRefDataFile($index, $path)
    {
        return CkXmlDSig_SetRefDataFile($this->_cPtr, $index, $path);
    }

    public function SetRefDataSb($index, $sb, $charset)
    {
        return CkXmlDSig_SetRefDataSb($this->_cPtr, $index, $sb, $charset);
    }

    public function UseCertVault($certVault)
    {
        return CkXmlDSig_UseCertVault($this->_cPtr, $certVault);
    }

    public function VerifyReferenceDigest($index)
    {
        return CkXmlDSig_VerifyReferenceDigest($this->_cPtr, $index);
    }

    public function VerifySignature($verifyReferenceDigests)
    {
        return CkXmlDSig_VerifySignature($this->_cPtr, $verifyReferenceDigests);
    }
}
