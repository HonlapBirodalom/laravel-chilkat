<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCert
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCert') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkCert();
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
        return CkCert_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkCert_put_Utf8($this->_cPtr, $b);
    }

    public function get_AuthorityKeyId($str)
    {
        CkCert_get_AuthorityKeyId($this->_cPtr, $str);
    }

    public function authorityKeyId()
    {
        return CkCert_authorityKeyId($this->_cPtr);
    }

    public function get_AvoidWindowsPkAccess()
    {
        return CkCert_get_AvoidWindowsPkAccess($this->_cPtr);
    }

    public function put_AvoidWindowsPkAccess($newVal)
    {
        CkCert_put_AvoidWindowsPkAccess($this->_cPtr, $newVal);
    }

    public function get_CertVersion()
    {
        return CkCert_get_CertVersion($this->_cPtr);
    }

    public function get_CspName($str)
    {
        CkCert_get_CspName($this->_cPtr, $str);
    }

    public function cspName()
    {
        return CkCert_cspName($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkCert_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkCert_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkCert_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Expired()
    {
        return CkCert_get_Expired($this->_cPtr);
    }

    public function get_ExtendedKeyUsage($str)
    {
        CkCert_get_ExtendedKeyUsage($this->_cPtr, $str);
    }

    public function extendedKeyUsage()
    {
        return CkCert_extendedKeyUsage($this->_cPtr);
    }

    public function get_ForClientAuthentication()
    {
        return CkCert_get_ForClientAuthentication($this->_cPtr);
    }

    public function get_ForCodeSigning()
    {
        return CkCert_get_ForCodeSigning($this->_cPtr);
    }

    public function get_ForSecureEmail()
    {
        return CkCert_get_ForSecureEmail($this->_cPtr);
    }

    public function get_ForServerAuthentication()
    {
        return CkCert_get_ForServerAuthentication($this->_cPtr);
    }

    public function get_ForTimeStamping()
    {
        return CkCert_get_ForTimeStamping($this->_cPtr);
    }

    public function get_HasKeyContainer()
    {
        return CkCert_get_HasKeyContainer($this->_cPtr);
    }

    public function get_IntendedKeyUsage()
    {
        return CkCert_get_IntendedKeyUsage($this->_cPtr);
    }

    public function get_IsRoot()
    {
        return CkCert_get_IsRoot($this->_cPtr);
    }

    public function get_IssuerC($str)
    {
        CkCert_get_IssuerC($this->_cPtr, $str);
    }

    public function issuerC()
    {
        return CkCert_issuerC($this->_cPtr);
    }

    public function get_IssuerCN($str)
    {
        CkCert_get_IssuerCN($this->_cPtr, $str);
    }

    public function issuerCN()
    {
        return CkCert_issuerCN($this->_cPtr);
    }

    public function get_IssuerDN($str)
    {
        CkCert_get_IssuerDN($this->_cPtr, $str);
    }

    public function issuerDN()
    {
        return CkCert_issuerDN($this->_cPtr);
    }

    public function get_IssuerE($str)
    {
        CkCert_get_IssuerE($this->_cPtr, $str);
    }

    public function issuerE()
    {
        return CkCert_issuerE($this->_cPtr);
    }

    public function get_IssuerL($str)
    {
        CkCert_get_IssuerL($this->_cPtr, $str);
    }

    public function issuerL()
    {
        return CkCert_issuerL($this->_cPtr);
    }

    public function get_IssuerO($str)
    {
        CkCert_get_IssuerO($this->_cPtr, $str);
    }

    public function issuerO()
    {
        return CkCert_issuerO($this->_cPtr);
    }

    public function get_IssuerOU($str)
    {
        CkCert_get_IssuerOU($this->_cPtr, $str);
    }

    public function issuerOU()
    {
        return CkCert_issuerOU($this->_cPtr);
    }

    public function get_IssuerS($str)
    {
        CkCert_get_IssuerS($this->_cPtr, $str);
    }

    public function issuerS()
    {
        return CkCert_issuerS($this->_cPtr);
    }

    public function get_KeyContainerName($str)
    {
        CkCert_get_KeyContainerName($this->_cPtr, $str);
    }

    public function keyContainerName()
    {
        return CkCert_keyContainerName($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkCert_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkCert_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkCert_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkCert_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkCert_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkCert_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkCert_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkCert_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_MachineKeyset()
    {
        return CkCert_get_MachineKeyset($this->_cPtr);
    }

    public function get_OcspUrl($str)
    {
        CkCert_get_OcspUrl($this->_cPtr, $str);
    }

    public function ocspUrl()
    {
        return CkCert_ocspUrl($this->_cPtr);
    }

    public function get_PrivateKeyExportable()
    {
        return CkCert_get_PrivateKeyExportable($this->_cPtr);
    }

    public function get_Revoked()
    {
        return CkCert_get_Revoked($this->_cPtr);
    }

    public function get_Rfc822Name($str)
    {
        CkCert_get_Rfc822Name($this->_cPtr, $str);
    }

    public function rfc822Name()
    {
        return CkCert_rfc822Name($this->_cPtr);
    }

    public function get_SelfSigned()
    {
        return CkCert_get_SelfSigned($this->_cPtr);
    }

    public function get_SerialDecimal($str)
    {
        CkCert_get_SerialDecimal($this->_cPtr, $str);
    }

    public function serialDecimal()
    {
        return CkCert_serialDecimal($this->_cPtr);
    }

    public function get_SerialNumber($str)
    {
        CkCert_get_SerialNumber($this->_cPtr, $str);
    }

    public function serialNumber()
    {
        return CkCert_serialNumber($this->_cPtr);
    }

    public function get_Sha1Thumbprint($str)
    {
        CkCert_get_Sha1Thumbprint($this->_cPtr, $str);
    }

    public function sha1Thumbprint()
    {
        return CkCert_sha1Thumbprint($this->_cPtr);
    }

    public function get_SignatureVerified()
    {
        return CkCert_get_SignatureVerified($this->_cPtr);
    }

    public function get_Silent()
    {
        return CkCert_get_Silent($this->_cPtr);
    }

    public function get_SmartCardNoDialog()
    {
        return CkCert_get_SmartCardNoDialog($this->_cPtr);
    }

    public function put_SmartCardNoDialog($newVal)
    {
        CkCert_put_SmartCardNoDialog($this->_cPtr, $newVal);
    }

    public function get_SmartCardPin($str)
    {
        CkCert_get_SmartCardPin($this->_cPtr, $str);
    }

    public function smartCardPin()
    {
        return CkCert_smartCardPin($this->_cPtr);
    }

    public function put_SmartCardPin($newVal)
    {
        CkCert_put_SmartCardPin($this->_cPtr, $newVal);
    }

    public function get_SubjectAlternativeName($str)
    {
        CkCert_get_SubjectAlternativeName($this->_cPtr, $str);
    }

    public function subjectAlternativeName()
    {
        return CkCert_subjectAlternativeName($this->_cPtr);
    }

    public function get_SubjectC($str)
    {
        CkCert_get_SubjectC($this->_cPtr, $str);
    }

    public function subjectC()
    {
        return CkCert_subjectC($this->_cPtr);
    }

    public function get_SubjectCN($str)
    {
        CkCert_get_SubjectCN($this->_cPtr, $str);
    }

    public function subjectCN()
    {
        return CkCert_subjectCN($this->_cPtr);
    }

    public function get_SubjectDN($str)
    {
        CkCert_get_SubjectDN($this->_cPtr, $str);
    }

    public function subjectDN()
    {
        return CkCert_subjectDN($this->_cPtr);
    }

    public function get_SubjectE($str)
    {
        CkCert_get_SubjectE($this->_cPtr, $str);
    }

    public function subjectE()
    {
        return CkCert_subjectE($this->_cPtr);
    }

    public function get_SubjectKeyId($str)
    {
        CkCert_get_SubjectKeyId($this->_cPtr, $str);
    }

    public function subjectKeyId()
    {
        return CkCert_subjectKeyId($this->_cPtr);
    }

    public function get_SubjectL($str)
    {
        CkCert_get_SubjectL($this->_cPtr, $str);
    }

    public function subjectL()
    {
        return CkCert_subjectL($this->_cPtr);
    }

    public function get_SubjectO($str)
    {
        CkCert_get_SubjectO($this->_cPtr, $str);
    }

    public function subjectO()
    {
        return CkCert_subjectO($this->_cPtr);
    }

    public function get_SubjectOU($str)
    {
        CkCert_get_SubjectOU($this->_cPtr, $str);
    }

    public function subjectOU()
    {
        return CkCert_subjectOU($this->_cPtr);
    }

    public function get_SubjectS($str)
    {
        CkCert_get_SubjectS($this->_cPtr, $str);
    }

    public function subjectS()
    {
        return CkCert_subjectS($this->_cPtr);
    }

    public function get_TrustedRoot()
    {
        return CkCert_get_TrustedRoot($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkCert_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkCert_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkCert_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_ValidFrom($outSysTime)
    {
        CkCert_get_ValidFrom($this->_cPtr, $outSysTime);
    }

    public function get_ValidFromStr($str)
    {
        CkCert_get_ValidFromStr($this->_cPtr, $str);
    }

    public function validFromStr()
    {
        return CkCert_validFromStr($this->_cPtr);
    }

    public function get_ValidTo($outSysTime)
    {
        CkCert_get_ValidTo($this->_cPtr, $outSysTime);
    }

    public function get_ValidToStr($str)
    {
        CkCert_get_ValidToStr($this->_cPtr, $str);
    }

    public function validToStr()
    {
        return CkCert_validToStr($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkCert_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkCert_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkCert_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkCert_version($this->_cPtr);
    }

    public function CheckRevoked()
    {
        return CkCert_CheckRevoked($this->_cPtr);
    }

    public function CheckSmartCardPin()
    {
        return CkCert_CheckSmartCardPin($this->_cPtr);
    }

    public function ExportCertDer($outData)
    {
        return CkCert_ExportCertDer($this->_cPtr, $outData);
    }

    public function ExportCertDerBd($cerData)
    {
        return CkCert_ExportCertDerBd($this->_cPtr, $cerData);
    }

    public function ExportCertDerFile($path)
    {
        return CkCert_ExportCertDerFile($this->_cPtr, $path);
    }

    public function exportCertPem()
    {
        return CkCert_exportCertPem($this->_cPtr);
    }

    public function ExportCertPemFile($path)
    {
        return CkCert_ExportCertPemFile($this->_cPtr, $path);
    }

    public function exportCertXml()
    {
        return CkCert_exportCertXml($this->_cPtr);
    }

    public function ExportPrivateKey()
    {
        $r = CkCert_ExportPrivateKey($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPrivateKey($r);
        }

        return $r;
    }

    public function ExportPublicKey()
    {
        $r = CkCert_ExportPublicKey($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkPublicKey($r);
        }

        return $r;
    }

    public function ExportToPfxBd($password, $includeCertChain, $pfxData)
    {
        return CkCert_ExportToPfxBd($this->_cPtr, $password, $includeCertChain, $pfxData);
    }

    public function ExportToPfxData($password, $includeCertChain, $outBytes)
    {
        return CkCert_ExportToPfxData($this->_cPtr, $password, $includeCertChain, $outBytes);
    }

    public function ExportToPfxFile($pfxFilename, $pfxPassword, $bIncludeCertChain)
    {
        return CkCert_ExportToPfxFile($this->_cPtr, $pfxFilename, $pfxPassword, $bIncludeCertChain);
    }

    public function FindIssuer()
    {
        $r = CkCert_FindIssuer($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetCertChain()
    {
        $r = CkCert_GetCertChain($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCertChain($r);
        }

        return $r;
    }

    public function getEncoded()
    {
        return CkCert_getEncoded($this->_cPtr);
    }

    public function encoded()
    {
        return CkCert_encoded($this->_cPtr);
    }

    public function getExtensionAsText($oid)
    {
        return CkCert_getExtensionAsText($this->_cPtr, $oid);
    }

    public function extensionAsText($oid)
    {
        return CkCert_extensionAsText($this->_cPtr, $oid);
    }

    public function getExtensionAsXml($oid)
    {
        return CkCert_getExtensionAsXml($this->_cPtr, $oid);
    }

    public function extensionAsXml($oid)
    {
        return CkCert_extensionAsXml($this->_cPtr, $oid);
    }

    public function getPrivateKeyPem()
    {
        return CkCert_getPrivateKeyPem($this->_cPtr);
    }

    public function privateKeyPem()
    {
        return CkCert_privateKeyPem($this->_cPtr);
    }

    public function GetPubKeyDer($preferPkcs1, $bd)
    {
        return CkCert_GetPubKeyDer($this->_cPtr, $preferPkcs1, $bd);
    }

    public function GetSignature($bd)
    {
        return CkCert_GetSignature($this->_cPtr, $bd);
    }

    public function getSpkiFingerprint($hashAlg, $encoding)
    {
        return CkCert_getSpkiFingerprint($this->_cPtr, $hashAlg, $encoding);
    }

    public function spkiFingerprint($hashAlg, $encoding)
    {
        return CkCert_spkiFingerprint($this->_cPtr, $hashAlg, $encoding);
    }

    public function getSubjectPart($partNameOrOid)
    {
        return CkCert_getSubjectPart($this->_cPtr, $partNameOrOid);
    }

    public function subjectPart($partNameOrOid)
    {
        return CkCert_subjectPart($this->_cPtr, $partNameOrOid);
    }

    public function GetValidFromDt()
    {
        $r = CkCert_GetValidFromDt($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetValidToDt()
    {
        $r = CkCert_GetValidToDt($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function hashOf($part, $hashAlg, $encoding)
    {
        return CkCert_hashOf($this->_cPtr, $part, $hashAlg, $encoding);
    }

    public function HasPrivateKey()
    {
        return CkCert_HasPrivateKey($this->_cPtr);
    }

    public function LoadByCommonName($cn)
    {
        return CkCert_LoadByCommonName($this->_cPtr, $cn);
    }

    public function LoadByEmailAddress($emailAddress)
    {
        return CkCert_LoadByEmailAddress($this->_cPtr, $emailAddress);
    }

    public function LoadByIssuerAndSerialNumber($issuerCN, $serialNumber)
    {
        return CkCert_LoadByIssuerAndSerialNumber($this->_cPtr, $issuerCN, $serialNumber);
    }

    public function LoadBySubjectOid($oid, $value)
    {
        return CkCert_LoadBySubjectOid($this->_cPtr, $oid, $value);
    }

    public function LoadByThumbprint($thumbprint, $encoding)
    {
        return CkCert_LoadByThumbprint($this->_cPtr, $thumbprint, $encoding);
    }

    public function LoadFromBase64($encodedCert)
    {
        return CkCert_LoadFromBase64($this->_cPtr, $encodedCert);
    }

    public function LoadFromBd($certBytes)
    {
        return CkCert_LoadFromBd($this->_cPtr, $certBytes);
    }

    public function LoadFromBinary($data)
    {
        return CkCert_LoadFromBinary($this->_cPtr, $data);
    }

    public function LoadFromFile($path)
    {
        return CkCert_LoadFromFile($this->_cPtr, $path);
    }

    public function LoadFromSmartcard($csp)
    {
        return CkCert_LoadFromSmartcard($this->_cPtr, $csp);
    }

    public function LoadPem($strPem)
    {
        return CkCert_LoadPem($this->_cPtr, $strPem);
    }

    public function LoadPfxBd($pfxData, $password)
    {
        return CkCert_LoadPfxBd($this->_cPtr, $pfxData, $password);
    }

    public function LoadPfxData($pfxData, $password)
    {
        return CkCert_LoadPfxData($this->_cPtr, $pfxData, $password);
    }

    public function LoadPfxFile($pfxPath, $password)
    {
        return CkCert_LoadPfxFile($this->_cPtr, $pfxPath, $password);
    }

    public function LoadTaskResult($task)
    {
        return CkCert_LoadTaskResult($this->_cPtr, $task);
    }

    public function PemFileToDerFile($fromPath, $toPath)
    {
        return CkCert_PemFileToDerFile($this->_cPtr, $fromPath, $toPath);
    }

    public function SaveLastError($path)
    {
        return CkCert_SaveLastError($this->_cPtr, $path);
    }

    public function SaveToFile($path)
    {
        return CkCert_SaveToFile($this->_cPtr, $path);
    }

    public function SetFromEncoded($encodedCert)
    {
        return CkCert_SetFromEncoded($this->_cPtr, $encodedCert);
    }

    public function SetPrivateKey($privKey)
    {
        return CkCert_SetPrivateKey($this->_cPtr, $privKey);
    }

    public function SetPrivateKeyPem($privKeyPem)
    {
        return CkCert_SetPrivateKeyPem($this->_cPtr, $privKeyPem);
    }

    public function UseCertVault($vault)
    {
        return CkCert_UseCertVault($this->_cPtr, $vault);
    }

    public function VerifySignature()
    {
        return CkCert_VerifySignature($this->_cPtr);
    }

    public function x509PKIPathv1()
    {
        return CkCert_x509PKIPathv1($this->_cPtr);
    }
}
