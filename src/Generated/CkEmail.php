<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkEmail
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkEmail') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkEmail();
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
        return CkEmail_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkEmail_put_Utf8($this->_cPtr, $b);
    }

    public function get_Body($str)
    {
        CkEmail_get_Body($this->_cPtr, $str);
    }

    public function body()
    {
        return CkEmail_body($this->_cPtr);
    }

    public function put_Body($newVal)
    {
        CkEmail_put_Body($this->_cPtr, $newVal);
    }

    public function get_BounceAddress($str)
    {
        CkEmail_get_BounceAddress($this->_cPtr, $str);
    }

    public function bounceAddress()
    {
        return CkEmail_bounceAddress($this->_cPtr);
    }

    public function put_BounceAddress($newVal)
    {
        CkEmail_put_BounceAddress($this->_cPtr, $newVal);
    }

    public function get_Charset($str)
    {
        CkEmail_get_Charset($this->_cPtr, $str);
    }

    public function charset()
    {
        return CkEmail_charset($this->_cPtr);
    }

    public function put_Charset($newVal)
    {
        CkEmail_put_Charset($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkEmail_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkEmail_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkEmail_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Decrypted()
    {
        return CkEmail_get_Decrypted($this->_cPtr);
    }

    public function get_EmailDate($outSysTime)
    {
        CkEmail_get_EmailDate($this->_cPtr, $outSysTime);
    }

    public function put_EmailDate($sysTime)
    {
        CkEmail_put_EmailDate($this->_cPtr, $sysTime);
    }

    public function get_EmailDateStr($str)
    {
        CkEmail_get_EmailDateStr($this->_cPtr, $str);
    }

    public function emailDateStr()
    {
        return CkEmail_emailDateStr($this->_cPtr);
    }

    public function put_EmailDateStr($newVal)
    {
        CkEmail_put_EmailDateStr($this->_cPtr, $newVal);
    }

    public function get_EncryptedBy($str)
    {
        CkEmail_get_EncryptedBy($this->_cPtr, $str);
    }

    public function encryptedBy()
    {
        return CkEmail_encryptedBy($this->_cPtr);
    }

    public function get_FileDistList($str)
    {
        CkEmail_get_FileDistList($this->_cPtr, $str);
    }

    public function fileDistList()
    {
        return CkEmail_fileDistList($this->_cPtr);
    }

    public function put_FileDistList($newVal)
    {
        CkEmail_put_FileDistList($this->_cPtr, $newVal);
    }

    public function get_From($str)
    {
        CkEmail_get_From($this->_cPtr, $str);
    }

    public function ck_from()
    {
        return CkEmail_ck_from($this->_cPtr);
    }

    public function put_From($newVal)
    {
        CkEmail_put_From($this->_cPtr, $newVal);
    }

    public function get_FromAddress($str)
    {
        CkEmail_get_FromAddress($this->_cPtr, $str);
    }

    public function fromAddress()
    {
        return CkEmail_fromAddress($this->_cPtr);
    }

    public function put_FromAddress($newVal)
    {
        CkEmail_put_FromAddress($this->_cPtr, $newVal);
    }

    public function get_FromName($str)
    {
        CkEmail_get_FromName($this->_cPtr, $str);
    }

    public function fromName()
    {
        return CkEmail_fromName($this->_cPtr);
    }

    public function put_FromName($newVal)
    {
        CkEmail_put_FromName($this->_cPtr, $newVal);
    }

    public function get_Header($str)
    {
        CkEmail_get_Header($this->_cPtr, $str);
    }

    public function header()
    {
        return CkEmail_header($this->_cPtr);
    }

    public function get_Language($str)
    {
        CkEmail_get_Language($this->_cPtr, $str);
    }

    public function language()
    {
        return CkEmail_language($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkEmail_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkEmail_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkEmail_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkEmail_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkEmail_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkEmail_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkEmail_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkEmail_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LocalDate($outSysTime)
    {
        CkEmail_get_LocalDate($this->_cPtr, $outSysTime);
    }

    public function put_LocalDate($sysTime)
    {
        CkEmail_put_LocalDate($this->_cPtr, $sysTime);
    }

    public function get_LocalDateStr($str)
    {
        CkEmail_get_LocalDateStr($this->_cPtr, $str);
    }

    public function localDateStr()
    {
        return CkEmail_localDateStr($this->_cPtr);
    }

    public function put_LocalDateStr($newVal)
    {
        CkEmail_put_LocalDateStr($this->_cPtr, $newVal);
    }

    public function get_Mailer($str)
    {
        CkEmail_get_Mailer($this->_cPtr, $str);
    }

    public function mailer()
    {
        return CkEmail_mailer($this->_cPtr);
    }

    public function put_Mailer($newVal)
    {
        CkEmail_put_Mailer($this->_cPtr, $newVal);
    }

    public function get_NumAlternatives()
    {
        return CkEmail_get_NumAlternatives($this->_cPtr);
    }

    public function get_NumAttachedMessages()
    {
        return CkEmail_get_NumAttachedMessages($this->_cPtr);
    }

    public function get_NumAttachments()
    {
        return CkEmail_get_NumAttachments($this->_cPtr);
    }

    public function get_NumBcc()
    {
        return CkEmail_get_NumBcc($this->_cPtr);
    }

    public function get_NumCC()
    {
        return CkEmail_get_NumCC($this->_cPtr);
    }

    public function get_NumDaysOld()
    {
        return CkEmail_get_NumDaysOld($this->_cPtr);
    }

    public function get_NumDigests()
    {
        return CkEmail_get_NumDigests($this->_cPtr);
    }

    public function get_NumHeaderFields()
    {
        return CkEmail_get_NumHeaderFields($this->_cPtr);
    }

    public function get_NumRelatedItems()
    {
        return CkEmail_get_NumRelatedItems($this->_cPtr);
    }

    public function get_NumReplacePatterns()
    {
        return CkEmail_get_NumReplacePatterns($this->_cPtr);
    }

    public function get_NumReports()
    {
        return CkEmail_get_NumReports($this->_cPtr);
    }

    public function get_NumTo()
    {
        return CkEmail_get_NumTo($this->_cPtr);
    }

    public function get_OaepHash($str)
    {
        CkEmail_get_OaepHash($this->_cPtr, $str);
    }

    public function oaepHash()
    {
        return CkEmail_oaepHash($this->_cPtr);
    }

    public function put_OaepHash($newVal)
    {
        CkEmail_put_OaepHash($this->_cPtr, $newVal);
    }

    public function get_OaepMgfHash($str)
    {
        CkEmail_get_OaepMgfHash($this->_cPtr, $str);
    }

    public function oaepMgfHash()
    {
        return CkEmail_oaepMgfHash($this->_cPtr);
    }

    public function put_OaepMgfHash($newVal)
    {
        CkEmail_put_OaepMgfHash($this->_cPtr, $newVal);
    }

    public function get_OaepPadding()
    {
        return CkEmail_get_OaepPadding($this->_cPtr);
    }

    public function put_OaepPadding($newVal)
    {
        CkEmail_put_OaepPadding($this->_cPtr, $newVal);
    }

    public function get_OverwriteExisting()
    {
        return CkEmail_get_OverwriteExisting($this->_cPtr);
    }

    public function put_OverwriteExisting($newVal)
    {
        CkEmail_put_OverwriteExisting($this->_cPtr, $newVal);
    }

    public function get_Pkcs7CryptAlg($str)
    {
        CkEmail_get_Pkcs7CryptAlg($this->_cPtr, $str);
    }

    public function pkcs7CryptAlg()
    {
        return CkEmail_pkcs7CryptAlg($this->_cPtr);
    }

    public function put_Pkcs7CryptAlg($newVal)
    {
        CkEmail_put_Pkcs7CryptAlg($this->_cPtr, $newVal);
    }

    public function get_Pkcs7KeyLength()
    {
        return CkEmail_get_Pkcs7KeyLength($this->_cPtr);
    }

    public function put_Pkcs7KeyLength($newVal)
    {
        CkEmail_put_Pkcs7KeyLength($this->_cPtr, $newVal);
    }

    public function get_PreferredCharset($str)
    {
        CkEmail_get_PreferredCharset($this->_cPtr, $str);
    }

    public function preferredCharset()
    {
        return CkEmail_preferredCharset($this->_cPtr);
    }

    public function put_PreferredCharset($newVal)
    {
        CkEmail_put_PreferredCharset($this->_cPtr, $newVal);
    }

    public function get_PrependHeaders()
    {
        return CkEmail_get_PrependHeaders($this->_cPtr);
    }

    public function put_PrependHeaders($newVal)
    {
        CkEmail_put_PrependHeaders($this->_cPtr, $newVal);
    }

    public function get_ReceivedEncrypted()
    {
        return CkEmail_get_ReceivedEncrypted($this->_cPtr);
    }

    public function get_ReceivedSigned()
    {
        return CkEmail_get_ReceivedSigned($this->_cPtr);
    }

    public function get_ReplyTo($str)
    {
        CkEmail_get_ReplyTo($this->_cPtr, $str);
    }

    public function replyTo()
    {
        return CkEmail_replyTo($this->_cPtr);
    }

    public function put_ReplyTo($newVal)
    {
        CkEmail_put_ReplyTo($this->_cPtr, $newVal);
    }

    public function get_ReturnReceipt()
    {
        return CkEmail_get_ReturnReceipt($this->_cPtr);
    }

    public function put_ReturnReceipt($newVal)
    {
        CkEmail_put_ReturnReceipt($this->_cPtr, $newVal);
    }

    public function get_SendEncrypted()
    {
        return CkEmail_get_SendEncrypted($this->_cPtr);
    }

    public function put_SendEncrypted($newVal)
    {
        CkEmail_put_SendEncrypted($this->_cPtr, $newVal);
    }

    public function get_Sender($str)
    {
        CkEmail_get_Sender($this->_cPtr, $str);
    }

    public function sender()
    {
        return CkEmail_sender($this->_cPtr);
    }

    public function put_Sender($newVal)
    {
        CkEmail_put_Sender($this->_cPtr, $newVal);
    }

    public function get_SendSigned()
    {
        return CkEmail_get_SendSigned($this->_cPtr);
    }

    public function put_SendSigned($newVal)
    {
        CkEmail_put_SendSigned($this->_cPtr, $newVal);
    }

    public function get_SignaturesValid()
    {
        return CkEmail_get_SignaturesValid($this->_cPtr);
    }

    public function get_SignedBy($str)
    {
        CkEmail_get_SignedBy($this->_cPtr, $str);
    }

    public function signedBy()
    {
        return CkEmail_signedBy($this->_cPtr);
    }

    public function get_SigningAlg($str)
    {
        CkEmail_get_SigningAlg($this->_cPtr, $str);
    }

    public function signingAlg()
    {
        return CkEmail_signingAlg($this->_cPtr);
    }

    public function put_SigningAlg($newVal)
    {
        CkEmail_put_SigningAlg($this->_cPtr, $newVal);
    }

    public function get_SigningHashAlg($str)
    {
        CkEmail_get_SigningHashAlg($this->_cPtr, $str);
    }

    public function signingHashAlg()
    {
        return CkEmail_signingHashAlg($this->_cPtr);
    }

    public function put_SigningHashAlg($newVal)
    {
        CkEmail_put_SigningHashAlg($this->_cPtr, $newVal);
    }

    public function get_Size()
    {
        return CkEmail_get_Size($this->_cPtr);
    }

    public function get_Subject($str)
    {
        CkEmail_get_Subject($this->_cPtr, $str);
    }

    public function subject()
    {
        return CkEmail_subject($this->_cPtr);
    }

    public function put_Subject($newVal)
    {
        CkEmail_put_Subject($this->_cPtr, $newVal);
    }

    public function get_Uidl($str)
    {
        CkEmail_get_Uidl($this->_cPtr, $str);
    }

    public function uidl()
    {
        return CkEmail_uidl($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkEmail_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkEmail_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkEmail_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UnpackUseRelPaths()
    {
        return CkEmail_get_UnpackUseRelPaths($this->_cPtr);
    }

    public function put_UnpackUseRelPaths($newVal)
    {
        CkEmail_put_UnpackUseRelPaths($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkEmail_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkEmail_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkEmail_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkEmail_version($this->_cPtr);
    }

    public function AddAttachmentBd($filename, $binData, $contentType)
    {
        return CkEmail_AddAttachmentBd($this->_cPtr, $filename, $binData, $contentType);
    }

    public function AddAttachmentHeader($index, $fieldName, $fieldValue)
    {
        CkEmail_AddAttachmentHeader($this->_cPtr, $index, $fieldName, $fieldValue);
    }

    public function AddBcc($friendlyName, $emailAddress)
    {
        return CkEmail_AddBcc($this->_cPtr, $friendlyName, $emailAddress);
    }

    public function AddCC($friendlyName, $emailAddress)
    {
        return CkEmail_AddCC($this->_cPtr, $friendlyName, $emailAddress);
    }

    public function AddDataAttachment($fileName, $content)
    {
        return CkEmail_AddDataAttachment($this->_cPtr, $fileName, $content);
    }

    public function AddDataAttachment2($fileName, $content, $contentType)
    {
        return CkEmail_AddDataAttachment2($this->_cPtr, $fileName, $content, $contentType);
    }

    public function AddEncryptCert($cert)
    {
        return CkEmail_AddEncryptCert($this->_cPtr, $cert);
    }

    public function addFileAttachment($path)
    {
        return CkEmail_addFileAttachment($this->_cPtr, $path);
    }

    public function AddFileAttachment2($path, $contentType)
    {
        return CkEmail_AddFileAttachment2($this->_cPtr, $path, $contentType);
    }

    public function AddHeaderField($fieldName, $fieldValue)
    {
        CkEmail_AddHeaderField($this->_cPtr, $fieldName, $fieldValue);
    }

    public function AddHeaderField2($fieldName, $fieldValue)
    {
        CkEmail_AddHeaderField2($this->_cPtr, $fieldName, $fieldValue);
    }

    public function AddHtmlAlternativeBody($body)
    {
        return CkEmail_AddHtmlAlternativeBody($this->_cPtr, $body);
    }

    public function AddiCalendarAlternativeBody($icalContent, $methodName)
    {
        return CkEmail_AddiCalendarAlternativeBody($this->_cPtr, $icalContent, $methodName);
    }

    public function AddMultipleBcc($commaSeparatedAddresses)
    {
        return CkEmail_AddMultipleBcc($this->_cPtr, $commaSeparatedAddresses);
    }

    public function AddMultipleCC($commaSeparatedAddresses)
    {
        return CkEmail_AddMultipleCC($this->_cPtr, $commaSeparatedAddresses);
    }

    public function AddMultipleTo($commaSeparatedAddresses)
    {
        return CkEmail_AddMultipleTo($this->_cPtr, $commaSeparatedAddresses);
    }

    public function AddPfxSourceData($pfxBytes, $pfxPassword)
    {
        return CkEmail_AddPfxSourceData($this->_cPtr, $pfxBytes, $pfxPassword);
    }

    public function AddPfxSourceFile($pfxFilePath, $pfxPassword)
    {
        return CkEmail_AddPfxSourceFile($this->_cPtr, $pfxFilePath, $pfxPassword);
    }

    public function AddPlainTextAlternativeBody($body)
    {
        return CkEmail_AddPlainTextAlternativeBody($this->_cPtr, $body);
    }

    public function addRelatedBd($filename, $binData)
    {
        return CkEmail_addRelatedBd($this->_cPtr, $filename, $binData);
    }

    public function AddRelatedBd2($binData, $fileNameInHtml)
    {
        return CkEmail_AddRelatedBd2($this->_cPtr, $binData, $fileNameInHtml);
    }

    public function addRelatedData($fileName, $inData)
    {
        return CkEmail_addRelatedData($this->_cPtr, $fileName, $inData);
    }

    public function AddRelatedData2($inData, $fileNameInHtml)
    {
        CkEmail_AddRelatedData2($this->_cPtr, $inData, $fileNameInHtml);
    }

    public function addRelatedFile($path)
    {
        return CkEmail_addRelatedFile($this->_cPtr, $path);
    }

    public function AddRelatedFile2($filenameOnDisk, $filenameInHtml)
    {
        return CkEmail_AddRelatedFile2($this->_cPtr, $filenameOnDisk, $filenameInHtml);
    }

    public function AddRelatedHeader($index, $fieldName, $fieldValue)
    {
        CkEmail_AddRelatedHeader($this->_cPtr, $index, $fieldName, $fieldValue);
    }

    public function addRelatedString($nameInHtml, $str, $charset)
    {
        return CkEmail_addRelatedString($this->_cPtr, $nameInHtml, $str, $charset);
    }

    public function AddRelatedString2($fileNameInHtml, $content, $charset)
    {
        CkEmail_AddRelatedString2($this->_cPtr, $fileNameInHtml, $content, $charset);
    }

    public function AddStringAttachment($path, $content)
    {
        return CkEmail_AddStringAttachment($this->_cPtr, $path, $content);
    }

    public function AddStringAttachment2($path, $content, $charset)
    {
        return CkEmail_AddStringAttachment2($this->_cPtr, $path, $content, $charset);
    }

    public function AddTo($friendlyName, $emailAddress)
    {
        return CkEmail_AddTo($this->_cPtr, $friendlyName, $emailAddress);
    }

    public function AesDecrypt($password)
    {
        return CkEmail_AesDecrypt($this->_cPtr, $password);
    }

    public function AesEncrypt($password)
    {
        return CkEmail_AesEncrypt($this->_cPtr, $password);
    }

    public function AppendToBody($str)
    {
        CkEmail_AppendToBody($this->_cPtr, $str);
    }

    public function ApplyFixups($fixups)
    {
        return CkEmail_ApplyFixups($this->_cPtr, $fixups);
    }

    public function AspUnpack($prefix, $saveDir, $urlPath, $cleanFiles)
    {
        return CkEmail_AspUnpack($this->_cPtr, $prefix, $saveDir, $urlPath, $cleanFiles);
    }

    public function AspUnpack2($prefix, $saveDir, $urlPath, $cleanFiles, $outHtml)
    {
        return CkEmail_AspUnpack2($this->_cPtr, $prefix, $saveDir, $urlPath, $cleanFiles, $outHtml);
    }

    public function AttachEmail($email)
    {
        return CkEmail_AttachEmail($this->_cPtr, $email);
    }

    public function AttachMessage($mimeBytes)
    {
        return CkEmail_AttachMessage($this->_cPtr, $mimeBytes);
    }

    public function bEncodeBytes($inData, $charset)
    {
        return CkEmail_bEncodeBytes($this->_cPtr, $inData, $charset);
    }

    public function bEncodeString($str, $charset)
    {
        return CkEmail_bEncodeString($this->_cPtr, $str, $charset);
    }

    public function Clear()
    {
        CkEmail_Clear($this->_cPtr);
    }

    public function ClearBcc()
    {
        CkEmail_ClearBcc($this->_cPtr);
    }

    public function ClearCC()
    {
        CkEmail_ClearCC($this->_cPtr);
    }

    public function ClearEncryptCerts()
    {
        CkEmail_ClearEncryptCerts($this->_cPtr);
    }

    public function ClearTo()
    {
        CkEmail_ClearTo($this->_cPtr);
    }

    public function c_Clone()
    {
        $r = CkEmail_c_Clone($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function computeGlobalKey($encoding, $bFold)
    {
        return CkEmail_computeGlobalKey($this->_cPtr, $encoding, $bFold);
    }

    public function computeGlobalKey2($encoding, $bFold)
    {
        return CkEmail_computeGlobalKey2($this->_cPtr, $encoding, $bFold);
    }

    public function ConvertInlineImages()
    {
        return CkEmail_ConvertInlineImages($this->_cPtr);
    }

    public function CreateDsn($humanReadableMessage, $xmlStatusFields, $bHeaderOnly)
    {
        $r = CkEmail_CreateDsn($this->_cPtr, $humanReadableMessage, $xmlStatusFields, $bHeaderOnly);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function CreateForward()
    {
        $r = CkEmail_CreateForward($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function CreateMdn($humanReadableMessage, $xmlStatusFields, $bHeaderOnly)
    {
        $r = CkEmail_CreateMdn($this->_cPtr, $humanReadableMessage, $xmlStatusFields, $bHeaderOnly);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function CreateReply()
    {
        $r = CkEmail_CreateReply($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function createTempMht($inFilename)
    {
        return CkEmail_createTempMht($this->_cPtr, $inFilename);
    }

    public function DropAttachments()
    {
        CkEmail_DropAttachments($this->_cPtr);
    }

    public function DropRelatedItem($index)
    {
        CkEmail_DropRelatedItem($this->_cPtr, $index);
    }

    public function DropRelatedItems()
    {
        CkEmail_DropRelatedItems($this->_cPtr);
    }

    public function DropSingleAttachment($index)
    {
        return CkEmail_DropSingleAttachment($this->_cPtr, $index);
    }

    public function FindIssuer($cert)
    {
        $r = CkEmail_FindIssuer($this->_cPtr, $cert);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function generateFilename()
    {
        return CkEmail_generateFilename($this->_cPtr);
    }

    public function getAlternativeBody($index)
    {
        return CkEmail_getAlternativeBody($this->_cPtr, $index);
    }

    public function alternativeBody($index)
    {
        return CkEmail_alternativeBody($this->_cPtr, $index);
    }

    public function GetAlternativeBodyBd($index, $binData)
    {
        return CkEmail_GetAlternativeBodyBd($this->_cPtr, $index, $binData);
    }

    public function getAlternativeBodyByContentType($contentType)
    {
        return CkEmail_getAlternativeBodyByContentType($this->_cPtr, $contentType);
    }

    public function alternativeBodyByContentType($contentType)
    {
        return CkEmail_alternativeBodyByContentType($this->_cPtr, $contentType);
    }

    public function getAlternativeContentType($index)
    {
        return CkEmail_getAlternativeContentType($this->_cPtr, $index);
    }

    public function alternativeContentType($index)
    {
        return CkEmail_alternativeContentType($this->_cPtr, $index);
    }

    public function getAltHeaderField($index, $fieldName)
    {
        return CkEmail_getAltHeaderField($this->_cPtr, $index, $fieldName);
    }

    public function altHeaderField($index, $fieldName)
    {
        return CkEmail_altHeaderField($this->_cPtr, $index, $fieldName);
    }

    public function GetAttachedMessage($index)
    {
        $r = CkEmail_GetAttachedMessage($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function getAttachedMessageAttr($index, $fieldName, $attrName)
    {
        return CkEmail_getAttachedMessageAttr($this->_cPtr, $index, $fieldName, $attrName);
    }

    public function attachedMessageAttr($index, $fieldName, $attrName)
    {
        return CkEmail_attachedMessageAttr($this->_cPtr, $index, $fieldName, $attrName);
    }

    public function getAttachedMessageFilename($index)
    {
        return CkEmail_getAttachedMessageFilename($this->_cPtr, $index);
    }

    public function attachedMessageFilename($index)
    {
        return CkEmail_attachedMessageFilename($this->_cPtr, $index);
    }

    public function getAttachmentAttr($index, $fieldName, $attrName)
    {
        return CkEmail_getAttachmentAttr($this->_cPtr, $index, $fieldName, $attrName);
    }

    public function attachmentAttr($index, $fieldName, $attrName)
    {
        return CkEmail_attachmentAttr($this->_cPtr, $index, $fieldName, $attrName);
    }

    public function GetAttachmentBd($index, $binData)
    {
        return CkEmail_GetAttachmentBd($this->_cPtr, $index, $binData);
    }

    public function getAttachmentContentID($index)
    {
        return CkEmail_getAttachmentContentID($this->_cPtr, $index);
    }

    public function attachmentContentID($index)
    {
        return CkEmail_attachmentContentID($this->_cPtr, $index);
    }

    public function getAttachmentContentType($index)
    {
        return CkEmail_getAttachmentContentType($this->_cPtr, $index);
    }

    public function attachmentContentType($index)
    {
        return CkEmail_attachmentContentType($this->_cPtr, $index);
    }

    public function GetAttachmentData($index, $outData)
    {
        return CkEmail_GetAttachmentData($this->_cPtr, $index, $outData);
    }

    public function getAttachmentFilename($index)
    {
        return CkEmail_getAttachmentFilename($this->_cPtr, $index);
    }

    public function attachmentFilename($index)
    {
        return CkEmail_attachmentFilename($this->_cPtr, $index);
    }

    public function getAttachmentHeader($attachIndex, $fieldName)
    {
        return CkEmail_getAttachmentHeader($this->_cPtr, $attachIndex, $fieldName);
    }

    public function attachmentHeader($attachIndex, $fieldName)
    {
        return CkEmail_attachmentHeader($this->_cPtr, $attachIndex, $fieldName);
    }

    public function GetAttachmentSize($index)
    {
        return CkEmail_GetAttachmentSize($this->_cPtr, $index);
    }

    public function getAttachmentString($index, $charset)
    {
        return CkEmail_getAttachmentString($this->_cPtr, $index, $charset);
    }

    public function attachmentString($index, $charset)
    {
        return CkEmail_attachmentString($this->_cPtr, $index, $charset);
    }

    public function getAttachmentStringCrLf($index, $charset)
    {
        return CkEmail_getAttachmentStringCrLf($this->_cPtr, $index, $charset);
    }

    public function attachmentStringCrLf($index, $charset)
    {
        return CkEmail_attachmentStringCrLf($this->_cPtr, $index, $charset);
    }

    public function getBcc($index)
    {
        return CkEmail_getBcc($this->_cPtr, $index);
    }

    public function bcc($index)
    {
        return CkEmail_bcc($this->_cPtr, $index);
    }

    public function getBccAddr($index)
    {
        return CkEmail_getBccAddr($this->_cPtr, $index);
    }

    public function bccAddr($index)
    {
        return CkEmail_bccAddr($this->_cPtr, $index);
    }

    public function getBccName($index)
    {
        return CkEmail_getBccName($this->_cPtr, $index);
    }

    public function bccName($index)
    {
        return CkEmail_bccName($this->_cPtr, $index);
    }

    public function getCC($index)
    {
        return CkEmail_getCC($this->_cPtr, $index);
    }

    public function cC($index)
    {
        return CkEmail_cC($this->_cPtr, $index);
    }

    public function getCcAddr($index)
    {
        return CkEmail_getCcAddr($this->_cPtr, $index);
    }

    public function ccAddr($index)
    {
        return CkEmail_ccAddr($this->_cPtr, $index);
    }

    public function getCcName($index)
    {
        return CkEmail_getCcName($this->_cPtr, $index);
    }

    public function ccName($index)
    {
        return CkEmail_ccName($this->_cPtr, $index);
    }

    public function getDeliveryStatusInfo($fieldName)
    {
        return CkEmail_getDeliveryStatusInfo($this->_cPtr, $fieldName);
    }

    public function deliveryStatusInfo($fieldName)
    {
        return CkEmail_deliveryStatusInfo($this->_cPtr, $fieldName);
    }

    public function GetDigest($index)
    {
        $r = CkEmail_GetDigest($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function GetDsnFinalRecipients()
    {
        $r = CkEmail_GetDsnFinalRecipients($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function GetDt()
    {
        $r = CkEmail_GetDt($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetEncryptCert()
    {
        $r = CkEmail_GetEncryptCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetEncryptedByCert()
    {
        $r = CkEmail_GetEncryptedByCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetFileContent($path, $outData)
    {
        return CkEmail_GetFileContent($this->_cPtr, $path, $outData);
    }

    public function getHeaderField($fieldName)
    {
        return CkEmail_getHeaderField($this->_cPtr, $fieldName);
    }

    public function headerField($fieldName)
    {
        return CkEmail_headerField($this->_cPtr, $fieldName);
    }

    public function getHeaderFieldName($index)
    {
        return CkEmail_getHeaderFieldName($this->_cPtr, $index);
    }

    public function headerFieldName($index)
    {
        return CkEmail_headerFieldName($this->_cPtr, $index);
    }

    public function getHeaderFieldValue($index)
    {
        return CkEmail_getHeaderFieldValue($this->_cPtr, $index);
    }

    public function headerFieldValue($index)
    {
        return CkEmail_headerFieldValue($this->_cPtr, $index);
    }

    public function getHtmlBody()
    {
        return CkEmail_getHtmlBody($this->_cPtr);
    }

    public function htmlBody()
    {
        return CkEmail_htmlBody($this->_cPtr);
    }

    public function GetImapUid()
    {
        return CkEmail_GetImapUid($this->_cPtr);
    }

    public function GetLinkedDomains()
    {
        $r = CkEmail_GetLinkedDomains($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function GetMbHeaderField($fieldName, $charset, $outBytes)
    {
        return CkEmail_GetMbHeaderField($this->_cPtr, $fieldName, $charset, $outBytes);
    }

    public function GetMbHtmlBody($charset, $outData)
    {
        return CkEmail_GetMbHtmlBody($this->_cPtr, $charset, $outData);
    }

    public function GetMbPlainTextBody($charset, $outData)
    {
        return CkEmail_GetMbPlainTextBody($this->_cPtr, $charset, $outData);
    }

    public function getMime()
    {
        return CkEmail_getMime($this->_cPtr);
    }

    public function mime()
    {
        return CkEmail_mime($this->_cPtr);
    }

    public function GetMimeBd($bindat)
    {
        return CkEmail_GetMimeBd($this->_cPtr, $bindat);
    }

    public function GetMimeBinary($outBytes)
    {
        return CkEmail_GetMimeBinary($this->_cPtr, $outBytes);
    }

    public function GetMimeSb($sb)
    {
        return CkEmail_GetMimeSb($this->_cPtr, $sb);
    }

    public function GetNthBinaryPartOfType($index, $contentType, $inlineOnly, $excludeAttachments, $outBytes)
    {
        return CkEmail_GetNthBinaryPartOfType($this->_cPtr, $index, $contentType, $inlineOnly, $excludeAttachments, $outBytes);
    }

    public function getNthTextPartOfType($index, $contentType, $inlineOnly, $excludeAttachments)
    {
        return CkEmail_getNthTextPartOfType($this->_cPtr, $index, $contentType, $inlineOnly, $excludeAttachments);
    }

    public function nthTextPartOfType($index, $contentType, $inlineOnly, $excludeAttachments)
    {
        return CkEmail_nthTextPartOfType($this->_cPtr, $index, $contentType, $inlineOnly, $excludeAttachments);
    }

    public function GetNumPartsOfType($contentType, $inlineOnly, $excludeAttachments)
    {
        return CkEmail_GetNumPartsOfType($this->_cPtr, $contentType, $inlineOnly, $excludeAttachments);
    }

    public function getPlainTextBody()
    {
        return CkEmail_getPlainTextBody($this->_cPtr);
    }

    public function plainTextBody()
    {
        return CkEmail_plainTextBody($this->_cPtr);
    }

    public function getRelatedAttr($index, $fieldName, $attrName)
    {
        return CkEmail_getRelatedAttr($this->_cPtr, $index, $fieldName, $attrName);
    }

    public function relatedAttr($index, $fieldName, $attrName)
    {
        return CkEmail_relatedAttr($this->_cPtr, $index, $fieldName, $attrName);
    }

    public function getRelatedContentID($index)
    {
        return CkEmail_getRelatedContentID($this->_cPtr, $index);
    }

    public function relatedContentID($index)
    {
        return CkEmail_relatedContentID($this->_cPtr, $index);
    }

    public function getRelatedContentLocation($index)
    {
        return CkEmail_getRelatedContentLocation($this->_cPtr, $index);
    }

    public function relatedContentLocation($index)
    {
        return CkEmail_relatedContentLocation($this->_cPtr, $index);
    }

    public function getRelatedContentType($index)
    {
        return CkEmail_getRelatedContentType($this->_cPtr, $index);
    }

    public function relatedContentType($index)
    {
        return CkEmail_relatedContentType($this->_cPtr, $index);
    }

    public function GetRelatedData($index, $outBuffer)
    {
        return CkEmail_GetRelatedData($this->_cPtr, $index, $outBuffer);
    }

    public function getRelatedFilename($index)
    {
        return CkEmail_getRelatedFilename($this->_cPtr, $index);
    }

    public function relatedFilename($index)
    {
        return CkEmail_relatedFilename($this->_cPtr, $index);
    }

    public function getRelatedString($index, $charset)
    {
        return CkEmail_getRelatedString($this->_cPtr, $index, $charset);
    }

    public function relatedString($index, $charset)
    {
        return CkEmail_relatedString($this->_cPtr, $index, $charset);
    }

    public function getRelatedStringCrLf($index, $charset)
    {
        return CkEmail_getRelatedStringCrLf($this->_cPtr, $index, $charset);
    }

    public function relatedStringCrLf($index, $charset)
    {
        return CkEmail_relatedStringCrLf($this->_cPtr, $index, $charset);
    }

    public function getReplacePattern($index)
    {
        return CkEmail_getReplacePattern($this->_cPtr, $index);
    }

    public function replacePattern($index)
    {
        return CkEmail_replacePattern($this->_cPtr, $index);
    }

    public function getReplaceString($index)
    {
        return CkEmail_getReplaceString($this->_cPtr, $index);
    }

    public function replaceString($index)
    {
        return CkEmail_replaceString($this->_cPtr, $index);
    }

    public function getReplaceString2($pattern)
    {
        return CkEmail_getReplaceString2($this->_cPtr, $pattern);
    }

    public function replaceString2($pattern)
    {
        return CkEmail_replaceString2($this->_cPtr, $pattern);
    }

    public function getReport($index)
    {
        return CkEmail_getReport($this->_cPtr, $index);
    }

    public function report($index)
    {
        return CkEmail_report($this->_cPtr, $index);
    }

    public function GetSignedByCert()
    {
        $r = CkEmail_GetSignedByCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetSignedByCertChain()
    {
        $r = CkEmail_GetSignedByCertChain($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCertChain($r);
        }

        return $r;
    }

    public function GetSigningCert()
    {
        $r = CkEmail_GetSigningCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function getTo($index)
    {
        return CkEmail_getTo($this->_cPtr, $index);
    }

    public function to($index)
    {
        return CkEmail_to($this->_cPtr, $index);
    }

    public function getToAddr($index)
    {
        return CkEmail_getToAddr($this->_cPtr, $index);
    }

    public function toAddr($index)
    {
        return CkEmail_toAddr($this->_cPtr, $index);
    }

    public function getToName($index)
    {
        return CkEmail_getToName($this->_cPtr, $index);
    }

    public function toName($index)
    {
        return CkEmail_toName($this->_cPtr, $index);
    }

    public function getXml()
    {
        return CkEmail_getXml($this->_cPtr);
    }

    public function xml()
    {
        return CkEmail_xml($this->_cPtr);
    }

    public function HasHeaderMatching($fieldName, $valuePattern, $caseSensitive)
    {
        return CkEmail_HasHeaderMatching($this->_cPtr, $fieldName, $valuePattern, $caseSensitive);
    }

    public function HasHtmlBody()
    {
        return CkEmail_HasHtmlBody($this->_cPtr);
    }

    public function HasPlainTextBody()
    {
        return CkEmail_HasPlainTextBody($this->_cPtr);
    }

    public function IsMultipartReport()
    {
        return CkEmail_IsMultipartReport($this->_cPtr);
    }

    public function LoadEml($mimePath)
    {
        return CkEmail_LoadEml($this->_cPtr, $mimePath);
    }

    public function LoadTaskResult($task)
    {
        return CkEmail_LoadTaskResult($this->_cPtr, $task);
    }

    public function LoadXml($xmlPath)
    {
        return CkEmail_LoadXml($this->_cPtr, $xmlPath);
    }

    public function LoadXmlString($xmlStr)
    {
        return CkEmail_LoadXmlString($this->_cPtr, $xmlStr);
    }

    public function qEncodeBytes($inData, $charset)
    {
        return CkEmail_qEncodeBytes($this->_cPtr, $inData, $charset);
    }

    public function qEncodeString($str, $charset)
    {
        return CkEmail_qEncodeString($this->_cPtr, $str, $charset);
    }

    public function RemoveAttachedMessage($idx)
    {
        CkEmail_RemoveAttachedMessage($this->_cPtr, $idx);
    }

    public function RemoveAttachedMessages()
    {
        CkEmail_RemoveAttachedMessages($this->_cPtr);
    }

    public function RemoveAttachmentPaths()
    {
        CkEmail_RemoveAttachmentPaths($this->_cPtr);
    }

    public function RemoveHeaderField($fieldName)
    {
        CkEmail_RemoveHeaderField($this->_cPtr, $fieldName);
    }

    public function RemoveHtmlAlternative()
    {
        CkEmail_RemoveHtmlAlternative($this->_cPtr);
    }

    public function RemovePlainTextAlternative()
    {
        CkEmail_RemovePlainTextAlternative($this->_cPtr);
    }

    public function SaveAllAttachments($dirPath)
    {
        return CkEmail_SaveAllAttachments($this->_cPtr, $dirPath);
    }

    public function SaveAttachedFile($index, $dirPath)
    {
        return CkEmail_SaveAttachedFile($this->_cPtr, $index, $dirPath);
    }

    public function SaveEml($emlFilePath)
    {
        return CkEmail_SaveEml($this->_cPtr, $emlFilePath);
    }

    public function SaveLastError($path)
    {
        return CkEmail_SaveLastError($this->_cPtr, $path);
    }

    public function SaveRelatedItem($index, $dirPath)
    {
        return CkEmail_SaveRelatedItem($this->_cPtr, $index, $dirPath);
    }

    public function SaveXml($path)
    {
        return CkEmail_SaveXml($this->_cPtr, $path);
    }

    public function SetAttachmentCharset($index, $charset)
    {
        return CkEmail_SetAttachmentCharset($this->_cPtr, $index, $charset);
    }

    public function SetAttachmentDisposition($index, $disposition)
    {
        return CkEmail_SetAttachmentDisposition($this->_cPtr, $index, $disposition);
    }

    public function SetAttachmentFilename($index, $filename)
    {
        return CkEmail_SetAttachmentFilename($this->_cPtr, $index, $filename);
    }

    public function SetBinaryBody($byteData, $contentType, $disposition, $filename)
    {
        return CkEmail_SetBinaryBody($this->_cPtr, $byteData, $contentType, $disposition, $filename);
    }

    public function SetDecryptCert($cert)
    {
        return CkEmail_SetDecryptCert($this->_cPtr, $cert);
    }

    public function SetDecryptCert2($cert, $key)
    {
        return CkEmail_SetDecryptCert2($this->_cPtr, $cert, $key);
    }

    public function SetDt($dt)
    {
        return CkEmail_SetDt($this->_cPtr, $dt);
    }

    public function SetEdifactBody($message, $name, $filename, $charset)
    {
        CkEmail_SetEdifactBody($this->_cPtr, $message, $name, $filename, $charset);
    }

    public function SetEncryptCert($cert)
    {
        return CkEmail_SetEncryptCert($this->_cPtr, $cert);
    }

    public function SetFromMimeBd($bindat)
    {
        return CkEmail_SetFromMimeBd($this->_cPtr, $bindat);
    }

    public function SetFromMimeBytes($mimeBytes)
    {
        return CkEmail_SetFromMimeBytes($this->_cPtr, $mimeBytes);
    }

    public function SetFromMimeBytes2($mimeBytes, $charset)
    {
        return CkEmail_SetFromMimeBytes2($this->_cPtr, $mimeBytes, $charset);
    }

    public function SetFromMimeSb($sb)
    {
        return CkEmail_SetFromMimeSb($this->_cPtr, $sb);
    }

    public function SetFromMimeText($mimeText)
    {
        return CkEmail_SetFromMimeText($this->_cPtr, $mimeText);
    }

    public function SetFromXmlText($xmlStr)
    {
        return CkEmail_SetFromXmlText($this->_cPtr, $xmlStr);
    }

    public function SetHtmlBody($html)
    {
        CkEmail_SetHtmlBody($this->_cPtr, $html);
    }

    public function SetMbHtmlBody($charset, $inData)
    {
        return CkEmail_SetMbHtmlBody($this->_cPtr, $charset, $inData);
    }

    public function SetMbPlainTextBody($charset, $inData)
    {
        return CkEmail_SetMbPlainTextBody($this->_cPtr, $charset, $inData);
    }

    public function SetRelatedFilename($index, $path)
    {
        return CkEmail_SetRelatedFilename($this->_cPtr, $index, $path);
    }

    public function SetReplacePattern($pattern, $replaceString)
    {
        return CkEmail_SetReplacePattern($this->_cPtr, $pattern, $replaceString);
    }

    public function SetSigningCert($cert)
    {
        return CkEmail_SetSigningCert($this->_cPtr, $cert);
    }

    public function SetSigningCert2($cert, $key)
    {
        return CkEmail_SetSigningCert2($this->_cPtr, $cert, $key);
    }

    public function SetTextBody($bodyText, $contentType)
    {
        CkEmail_SetTextBody($this->_cPtr, $bodyText, $contentType);
    }

    public function UidlEquals($e)
    {
        return CkEmail_UidlEquals($this->_cPtr, $e);
    }

    public function UnpackHtml($unpackDir, $htmlFilename, $partsSubdir)
    {
        return CkEmail_UnpackHtml($this->_cPtr, $unpackDir, $htmlFilename, $partsSubdir);
    }

    public function UnSpamify()
    {
        CkEmail_UnSpamify($this->_cPtr);
    }

    public function UnzipAttachments()
    {
        return CkEmail_UnzipAttachments($this->_cPtr);
    }

    public function UseCertVault($vault)
    {
        return CkEmail_UseCertVault($this->_cPtr, $vault);
    }

    public function ZipAttachments($zipFilename)
    {
        return CkEmail_ZipAttachments($this->_cPtr, $zipFilename);
    }
}
