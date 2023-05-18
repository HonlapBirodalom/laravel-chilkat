<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkMime
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkMime') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkMime();
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
        return CkMime_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkMime_put_Utf8($this->_cPtr, $b);
    }

    public function get_Boundary($str)
    {
        CkMime_get_Boundary($this->_cPtr, $str);
    }

    public function boundary()
    {
        return CkMime_boundary($this->_cPtr);
    }

    public function put_Boundary($newVal)
    {
        CkMime_put_Boundary($this->_cPtr, $newVal);
    }

    public function get_Charset($str)
    {
        CkMime_get_Charset($this->_cPtr, $str);
    }

    public function charset()
    {
        return CkMime_charset($this->_cPtr);
    }

    public function put_Charset($newVal)
    {
        CkMime_put_Charset($this->_cPtr, $newVal);
    }

    public function get_CmsOptions($str)
    {
        CkMime_get_CmsOptions($this->_cPtr, $str);
    }

    public function cmsOptions()
    {
        return CkMime_cmsOptions($this->_cPtr);
    }

    public function put_CmsOptions($newVal)
    {
        CkMime_put_CmsOptions($this->_cPtr, $newVal);
    }

    public function get_ContentType($str)
    {
        CkMime_get_ContentType($this->_cPtr, $str);
    }

    public function contentType()
    {
        return CkMime_contentType($this->_cPtr);
    }

    public function put_ContentType($newVal)
    {
        CkMime_put_ContentType($this->_cPtr, $newVal);
    }

    public function get_CurrentDateTime($str)
    {
        CkMime_get_CurrentDateTime($this->_cPtr, $str);
    }

    public function currentDateTime()
    {
        return CkMime_currentDateTime($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkMime_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkMime_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkMime_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Disposition($str)
    {
        CkMime_get_Disposition($this->_cPtr, $str);
    }

    public function disposition()
    {
        return CkMime_disposition($this->_cPtr);
    }

    public function put_Disposition($newVal)
    {
        CkMime_put_Disposition($this->_cPtr, $newVal);
    }

    public function get_Encoding($str)
    {
        CkMime_get_Encoding($this->_cPtr, $str);
    }

    public function encoding()
    {
        return CkMime_encoding($this->_cPtr);
    }

    public function put_Encoding($newVal)
    {
        CkMime_put_Encoding($this->_cPtr, $newVal);
    }

    public function get_Filename($str)
    {
        CkMime_get_Filename($this->_cPtr, $str);
    }

    public function filename()
    {
        return CkMime_filename($this->_cPtr);
    }

    public function put_Filename($newVal)
    {
        CkMime_put_Filename($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkMime_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkMime_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkMime_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkMime_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkMime_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkMime_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkMime_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkMime_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Micalg($str)
    {
        CkMime_get_Micalg($this->_cPtr, $str);
    }

    public function micalg()
    {
        return CkMime_micalg($this->_cPtr);
    }

    public function put_Micalg($newVal)
    {
        CkMime_put_Micalg($this->_cPtr, $newVal);
    }

    public function get_Name($str)
    {
        CkMime_get_Name($this->_cPtr, $str);
    }

    public function name()
    {
        return CkMime_name($this->_cPtr);
    }

    public function put_Name($newVal)
    {
        CkMime_put_Name($this->_cPtr, $newVal);
    }

    public function get_NumEncryptCerts()
    {
        return CkMime_get_NumEncryptCerts($this->_cPtr);
    }

    public function get_NumHeaderFields()
    {
        return CkMime_get_NumHeaderFields($this->_cPtr);
    }

    public function get_NumParts()
    {
        return CkMime_get_NumParts($this->_cPtr);
    }

    public function get_NumSignerCerts()
    {
        return CkMime_get_NumSignerCerts($this->_cPtr);
    }

    public function get_OaepHash($str)
    {
        CkMime_get_OaepHash($this->_cPtr, $str);
    }

    public function oaepHash()
    {
        return CkMime_oaepHash($this->_cPtr);
    }

    public function put_OaepHash($newVal)
    {
        CkMime_put_OaepHash($this->_cPtr, $newVal);
    }

    public function get_OaepMgfHash($str)
    {
        CkMime_get_OaepMgfHash($this->_cPtr, $str);
    }

    public function oaepMgfHash()
    {
        return CkMime_oaepMgfHash($this->_cPtr);
    }

    public function put_OaepMgfHash($newVal)
    {
        CkMime_put_OaepMgfHash($this->_cPtr, $newVal);
    }

    public function get_OaepPadding()
    {
        return CkMime_get_OaepPadding($this->_cPtr);
    }

    public function put_OaepPadding($newVal)
    {
        CkMime_put_OaepPadding($this->_cPtr, $newVal);
    }

    public function get_Pkcs7CryptAlg($str)
    {
        CkMime_get_Pkcs7CryptAlg($this->_cPtr, $str);
    }

    public function pkcs7CryptAlg()
    {
        return CkMime_pkcs7CryptAlg($this->_cPtr);
    }

    public function put_Pkcs7CryptAlg($newVal)
    {
        CkMime_put_Pkcs7CryptAlg($this->_cPtr, $newVal);
    }

    public function get_Pkcs7KeyLength()
    {
        return CkMime_get_Pkcs7KeyLength($this->_cPtr);
    }

    public function put_Pkcs7KeyLength($newVal)
    {
        CkMime_put_Pkcs7KeyLength($this->_cPtr, $newVal);
    }

    public function get_Protocol($str)
    {
        CkMime_get_Protocol($this->_cPtr, $str);
    }

    public function protocol()
    {
        return CkMime_protocol($this->_cPtr);
    }

    public function put_Protocol($newVal)
    {
        CkMime_put_Protocol($this->_cPtr, $newVal);
    }

    public function get_SigningAlg($str)
    {
        CkMime_get_SigningAlg($this->_cPtr, $str);
    }

    public function signingAlg()
    {
        return CkMime_signingAlg($this->_cPtr);
    }

    public function put_SigningAlg($newVal)
    {
        CkMime_put_SigningAlg($this->_cPtr, $newVal);
    }

    public function get_SigningHashAlg($str)
    {
        CkMime_get_SigningHashAlg($this->_cPtr, $str);
    }

    public function signingHashAlg()
    {
        return CkMime_signingHashAlg($this->_cPtr);
    }

    public function put_SigningHashAlg($newVal)
    {
        CkMime_put_SigningHashAlg($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkMime_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkMime_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkMime_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UnwrapExtras()
    {
        return CkMime_get_UnwrapExtras($this->_cPtr);
    }

    public function put_UnwrapExtras($newVal)
    {
        CkMime_put_UnwrapExtras($this->_cPtr, $newVal);
    }

    public function get_UseMmDescription()
    {
        return CkMime_get_UseMmDescription($this->_cPtr);
    }

    public function put_UseMmDescription($newVal)
    {
        CkMime_put_UseMmDescription($this->_cPtr, $newVal);
    }

    public function get_UseXPkcs7()
    {
        return CkMime_get_UseXPkcs7($this->_cPtr);
    }

    public function put_UseXPkcs7($newVal)
    {
        CkMime_put_UseXPkcs7($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkMime_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkMime_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkMime_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkMime_version($this->_cPtr);
    }

    public function AddContentLength()
    {
        CkMime_AddContentLength($this->_cPtr);
    }

    public function AddDecryptCert($cert)
    {
        return CkMime_AddDecryptCert($this->_cPtr, $cert);
    }

    public function AddDetachedSignature($cert)
    {
        return CkMime_AddDetachedSignature($this->_cPtr, $cert);
    }

    public function AddDetachedSignature2($cert, $transferHeaderFields)
    {
        return CkMime_AddDetachedSignature2($this->_cPtr, $cert, $transferHeaderFields);
    }

    public function AddDetachedSignaturePk($cert, $privateKey)
    {
        return CkMime_AddDetachedSignaturePk($this->_cPtr, $cert, $privateKey);
    }

    public function AddDetachedSignaturePk2($cert, $privateKey, $transferHeaderFields)
    {
        return CkMime_AddDetachedSignaturePk2($this->_cPtr, $cert, $privateKey, $transferHeaderFields);
    }

    public function AddEncryptCert($cert)
    {
        return CkMime_AddEncryptCert($this->_cPtr, $cert);
    }

    public function AddHeaderField($name, $value)
    {
        return CkMime_AddHeaderField($this->_cPtr, $name, $value);
    }

    public function AddPfxSourceData($pfxFileData, $pfxPassword)
    {
        return CkMime_AddPfxSourceData($this->_cPtr, $pfxFileData, $pfxPassword);
    }

    public function AddPfxSourceFile($pfxFilePath, $password)
    {
        return CkMime_AddPfxSourceFile($this->_cPtr, $pfxFilePath, $password);
    }

    public function AppendPart($mime)
    {
        return CkMime_AppendPart($this->_cPtr, $mime);
    }

    public function AppendPartFromFile($filename)
    {
        return CkMime_AppendPartFromFile($this->_cPtr, $filename);
    }

    public function asnBodyToXml()
    {
        return CkMime_asnBodyToXml($this->_cPtr);
    }

    public function ClearEncryptCerts()
    {
        CkMime_ClearEncryptCerts($this->_cPtr);
    }

    public function ContainsEncryptedParts()
    {
        return CkMime_ContainsEncryptedParts($this->_cPtr);
    }

    public function ContainsSignedParts()
    {
        return CkMime_ContainsSignedParts($this->_cPtr);
    }

    public function Convert8Bit()
    {
        CkMime_Convert8Bit($this->_cPtr);
    }

    public function ConvertToMultipartAlt()
    {
        return CkMime_ConvertToMultipartAlt($this->_cPtr);
    }

    public function ConvertToMultipartMixed()
    {
        return CkMime_ConvertToMultipartMixed($this->_cPtr);
    }

    public function ConvertToSigned($cert)
    {
        return CkMime_ConvertToSigned($this->_cPtr, $cert);
    }

    public function ConvertToSignedPk($cert, $privateKey)
    {
        return CkMime_ConvertToSignedPk($this->_cPtr, $cert, $privateKey);
    }

    public function Decrypt()
    {
        return CkMime_Decrypt($this->_cPtr);
    }

    public function Decrypt2($cert, $privateKey)
    {
        return CkMime_Decrypt2($this->_cPtr, $cert, $privateKey);
    }

    public function DecryptUsingCert($cert)
    {
        return CkMime_DecryptUsingCert($this->_cPtr, $cert);
    }

    public function DecryptUsingPfxData($pfxData, $password)
    {
        return CkMime_DecryptUsingPfxData($this->_cPtr, $pfxData, $password);
    }

    public function DecryptUsingPfxFile($pfxFilePath, $pfxPassword)
    {
        return CkMime_DecryptUsingPfxFile($this->_cPtr, $pfxFilePath, $pfxPassword);
    }

    public function Encrypt($cert)
    {
        return CkMime_Encrypt($this->_cPtr, $cert);
    }

    public function EncryptN()
    {
        return CkMime_EncryptN($this->_cPtr);
    }

    public function ExtractPartsToFiles($dirPath)
    {
        $r = CkMime_ExtractPartsToFiles($this->_cPtr, $dirPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function FindIssuer($cert)
    {
        $r = CkMime_FindIssuer($this->_cPtr, $cert);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetBodyBd($binDat)
    {
        return CkMime_GetBodyBd($this->_cPtr, $binDat);
    }

    public function GetBodyBinary($outData)
    {
        return CkMime_GetBodyBinary($this->_cPtr, $outData);
    }

    public function getBodyDecoded()
    {
        return CkMime_getBodyDecoded($this->_cPtr);
    }

    public function bodyDecoded()
    {
        return CkMime_bodyDecoded($this->_cPtr);
    }

    public function getBodyEncoded()
    {
        return CkMime_getBodyEncoded($this->_cPtr);
    }

    public function bodyEncoded()
    {
        return CkMime_bodyEncoded($this->_cPtr);
    }

    public function GetEncryptCert($index)
    {
        $r = CkMime_GetEncryptCert($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function getEntireBody()
    {
        return CkMime_getEntireBody($this->_cPtr);
    }

    public function entireBody()
    {
        return CkMime_entireBody($this->_cPtr);
    }

    public function getEntireHead()
    {
        return CkMime_getEntireHead($this->_cPtr);
    }

    public function entireHead()
    {
        return CkMime_entireHead($this->_cPtr);
    }

    public function getHeaderField($fieldName)
    {
        return CkMime_getHeaderField($this->_cPtr, $fieldName);
    }

    public function headerField($fieldName)
    {
        return CkMime_headerField($this->_cPtr, $fieldName);
    }

    public function getHeaderFieldAttribute($name, $attrName)
    {
        return CkMime_getHeaderFieldAttribute($this->_cPtr, $name, $attrName);
    }

    public function headerFieldAttribute($name, $attrName)
    {
        return CkMime_headerFieldAttribute($this->_cPtr, $name, $attrName);
    }

    public function getHeaderFieldName($index)
    {
        return CkMime_getHeaderFieldName($this->_cPtr, $index);
    }

    public function headerFieldName($index)
    {
        return CkMime_headerFieldName($this->_cPtr, $index);
    }

    public function getHeaderFieldValue($index)
    {
        return CkMime_getHeaderFieldValue($this->_cPtr, $index);
    }

    public function headerFieldValue($index)
    {
        return CkMime_headerFieldValue($this->_cPtr, $index);
    }

    public function getMime()
    {
        return CkMime_getMime($this->_cPtr);
    }

    public function mime()
    {
        return CkMime_mime($this->_cPtr);
    }

    public function GetMimeBd($bindat)
    {
        return CkMime_GetMimeBd($this->_cPtr, $bindat);
    }

    public function GetMimeBytes($outBytes)
    {
        return CkMime_GetMimeBytes($this->_cPtr, $outBytes);
    }

    public function GetMimeSb($sb)
    {
        return CkMime_GetMimeSb($this->_cPtr, $sb);
    }

    public function GetPart($index)
    {
        $r = CkMime_GetPart($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkMime($r);
        }

        return $r;
    }

    public function GetSignatureSigningTime($index, $outSysTime)
    {
        return CkMime_GetSignatureSigningTime($this->_cPtr, $index, $outSysTime);
    }

    public function getSignatureSigningTimeStr($index)
    {
        return CkMime_getSignatureSigningTimeStr($this->_cPtr, $index);
    }

    public function signatureSigningTimeStr($index)
    {
        return CkMime_signatureSigningTimeStr($this->_cPtr, $index);
    }

    public function GetSignerCert($index)
    {
        $r = CkMime_GetSignerCert($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetSignerCertChain($index)
    {
        $r = CkMime_GetSignerCertChain($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCertChain($r);
        }

        return $r;
    }

    public function getStructure($fmt)
    {
        return CkMime_getStructure($this->_cPtr, $fmt);
    }

    public function structure($fmt)
    {
        return CkMime_structure($this->_cPtr, $fmt);
    }

    public function getXml()
    {
        return CkMime_getXml($this->_cPtr);
    }

    public function xml()
    {
        return CkMime_xml($this->_cPtr);
    }

    public function HasSignatureSigningTime($index)
    {
        return CkMime_HasSignatureSigningTime($this->_cPtr, $index);
    }

    public function IsApplicationData()
    {
        return CkMime_IsApplicationData($this->_cPtr);
    }

    public function IsAttachment()
    {
        return CkMime_IsAttachment($this->_cPtr);
    }

    public function IsAudio()
    {
        return CkMime_IsAudio($this->_cPtr);
    }

    public function IsEncrypted()
    {
        return CkMime_IsEncrypted($this->_cPtr);
    }

    public function IsHtml()
    {
        return CkMime_IsHtml($this->_cPtr);
    }

    public function IsImage()
    {
        return CkMime_IsImage($this->_cPtr);
    }

    public function IsMultipart()
    {
        return CkMime_IsMultipart($this->_cPtr);
    }

    public function IsMultipartAlternative()
    {
        return CkMime_IsMultipartAlternative($this->_cPtr);
    }

    public function IsMultipartMixed()
    {
        return CkMime_IsMultipartMixed($this->_cPtr);
    }

    public function IsMultipartRelated()
    {
        return CkMime_IsMultipartRelated($this->_cPtr);
    }

    public function IsPlainText()
    {
        return CkMime_IsPlainText($this->_cPtr);
    }

    public function IsSigned()
    {
        return CkMime_IsSigned($this->_cPtr);
    }

    public function IsText()
    {
        return CkMime_IsText($this->_cPtr);
    }

    public function IsUnlocked()
    {
        return CkMime_IsUnlocked($this->_cPtr);
    }

    public function IsVideo()
    {
        return CkMime_IsVideo($this->_cPtr);
    }

    public function IsXml()
    {
        return CkMime_IsXml($this->_cPtr);
    }

    public function LastJsonData()
    {
        $r = CkMime_LastJsonData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function LoadMime($mimeMsg)
    {
        return CkMime_LoadMime($this->_cPtr, $mimeMsg);
    }

    public function LoadMimeBd($bindat)
    {
        return CkMime_LoadMimeBd($this->_cPtr, $bindat);
    }

    public function LoadMimeBytes($binData)
    {
        return CkMime_LoadMimeBytes($this->_cPtr, $binData);
    }

    public function LoadMimeFile($fileName)
    {
        return CkMime_LoadMimeFile($this->_cPtr, $fileName);
    }

    public function LoadMimeSb($sb)
    {
        return CkMime_LoadMimeSb($this->_cPtr, $sb);
    }

    public function LoadXml($xml)
    {
        return CkMime_LoadXml($this->_cPtr, $xml);
    }

    public function LoadXmlFile($fileName)
    {
        return CkMime_LoadXmlFile($this->_cPtr, $fileName);
    }

    public function NewMessageRfc822($mimeObject)
    {
        return CkMime_NewMessageRfc822($this->_cPtr, $mimeObject);
    }

    public function NewMultipartAlternative()
    {
        return CkMime_NewMultipartAlternative($this->_cPtr);
    }

    public function NewMultipartMixed()
    {
        return CkMime_NewMultipartMixed($this->_cPtr);
    }

    public function NewMultipartRelated()
    {
        return CkMime_NewMultipartRelated($this->_cPtr);
    }

    public function RemoveHeaderField($fieldName, $bAllOccurrences)
    {
        CkMime_RemoveHeaderField($this->_cPtr, $fieldName, $bAllOccurrences);
    }

    public function RemovePart($index)
    {
        return CkMime_RemovePart($this->_cPtr, $index);
    }

    public function SaveBody($filename)
    {
        return CkMime_SaveBody($this->_cPtr, $filename);
    }

    public function SaveLastError($path)
    {
        return CkMime_SaveLastError($this->_cPtr, $path);
    }

    public function SaveMime($filename)
    {
        return CkMime_SaveMime($this->_cPtr, $filename);
    }

    public function SaveXml($filename)
    {
        return CkMime_SaveXml($this->_cPtr, $filename);
    }

    public function SetBody($str)
    {
        CkMime_SetBody($this->_cPtr, $str);
    }

    public function SetBodyFromBinary($binData)
    {
        return CkMime_SetBodyFromBinary($this->_cPtr, $binData);
    }

    public function SetBodyFromEncoded($encoding, $str)
    {
        return CkMime_SetBodyFromEncoded($this->_cPtr, $encoding, $str);
    }

    public function SetBodyFromFile($fileName)
    {
        return CkMime_SetBodyFromFile($this->_cPtr, $fileName);
    }

    public function SetBodyFromHtml($str)
    {
        return CkMime_SetBodyFromHtml($this->_cPtr, $str);
    }

    public function SetBodyFromPlainText($str)
    {
        return CkMime_SetBodyFromPlainText($this->_cPtr, $str);
    }

    public function SetBodyFromXml($str)
    {
        return CkMime_SetBodyFromXml($this->_cPtr, $str);
    }

    public function SetHeaderField($name, $value)
    {
        return CkMime_SetHeaderField($this->_cPtr, $name, $value);
    }

    public function SetVerifyCert($cert)
    {
        return CkMime_SetVerifyCert($this->_cPtr, $cert);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkMime_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function UnwrapSecurity()
    {
        return CkMime_UnwrapSecurity($this->_cPtr);
    }

    public function UrlEncodeBody($charset)
    {
        CkMime_UrlEncodeBody($this->_cPtr, $charset);
    }

    public function UseCertVault($vault)
    {
        return CkMime_UseCertVault($this->_cPtr, $vault);
    }

    public function Verify()
    {
        return CkMime_Verify($this->_cPtr);
    }
}
