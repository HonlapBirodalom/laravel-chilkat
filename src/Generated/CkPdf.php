<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkPdf
{
    public $_cPtr = null;
    protected $_pData = array();

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkPdf') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkPdf();
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
        return CkPdf_get_Utf8($this->_cPtr);
    }

    function put_Utf8($b)
    {
        CkPdf_put_Utf8($this->_cPtr, $b);
    }

    function put_EventCallbackObject($progress)
    {
        CkPdf_put_EventCallbackObject($this->_cPtr, $progress);
    }

    function get_DebugLogFilePath($str)
    {
        CkPdf_get_DebugLogFilePath($this->_cPtr, $str);
    }

    function debugLogFilePath()
    {
        return CkPdf_debugLogFilePath($this->_cPtr);
    }

    function put_DebugLogFilePath($newVal)
    {
        CkPdf_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    function get_HasCertificationSig()
    {
        return CkPdf_get_HasCertificationSig($this->_cPtr);
    }

    function get_LastErrorHtml($str)
    {
        CkPdf_get_LastErrorHtml($this->_cPtr, $str);
    }

    function lastErrorHtml()
    {
        return CkPdf_lastErrorHtml($this->_cPtr);
    }

    function get_LastErrorText($str)
    {
        CkPdf_get_LastErrorText($this->_cPtr, $str);
    }

    function lastErrorText()
    {
        return CkPdf_lastErrorText($this->_cPtr);
    }

    function get_LastErrorXml($str)
    {
        CkPdf_get_LastErrorXml($this->_cPtr, $str);
    }

    function lastErrorXml()
    {
        return CkPdf_lastErrorXml($this->_cPtr);
    }

    function get_LastMethodSuccess()
    {
        return CkPdf_get_LastMethodSuccess($this->_cPtr);
    }

    function put_LastMethodSuccess($newVal)
    {
        CkPdf_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    function get_NumEmbeddedFiles()
    {
        return CkPdf_get_NumEmbeddedFiles($this->_cPtr);
    }

    function get_NumPages()
    {
        return CkPdf_get_NumPages($this->_cPtr);
    }

    function get_NumSignatures()
    {
        return CkPdf_get_NumSignatures($this->_cPtr);
    }

    function get_SigAllocateSize()
    {
        return CkPdf_get_SigAllocateSize($this->_cPtr);
    }

    function put_SigAllocateSize($newVal)
    {
        CkPdf_put_SigAllocateSize($this->_cPtr, $newVal);
    }

    function get_UncommonOptions($str)
    {
        CkPdf_get_UncommonOptions($this->_cPtr, $str);
    }

    function uncommonOptions()
    {
        return CkPdf_uncommonOptions($this->_cPtr);
    }

    function put_UncommonOptions($newVal)
    {
        CkPdf_put_UncommonOptions($this->_cPtr, $newVal);
    }

    function get_VerboseLogging()
    {
        return CkPdf_get_VerboseLogging($this->_cPtr);
    }

    function put_VerboseLogging($newVal)
    {
        CkPdf_put_VerboseLogging($this->_cPtr, $newVal);
    }

    function get_Version($str)
    {
        CkPdf_get_Version($this->_cPtr, $str);
    }

    function version()
    {
        return CkPdf_version($this->_cPtr);
    }

    function AddEmbeddedFiles($json, $outFilePath)
    {
        return CkPdf_AddEmbeddedFiles($this->_cPtr, $json, $outFilePath);
    }

    function AddEmbeddedFilesBd($json, $bd)
    {
        return CkPdf_AddEmbeddedFilesBd($this->_cPtr, $json, $bd);
    }

    function AddSigningCert($cert)
    {
        return CkPdf_AddSigningCert($this->_cPtr, $cert);
    }

    function AddVerificationInfo($jsonOptions, $outFilePath)
    {
        return CkPdf_AddVerificationInfo($this->_cPtr, $jsonOptions, $outFilePath);
    }

    function AddVerificationInfoAsync($jsonOptions, $outFilePath)
    {
        $r = CkPdf_AddVerificationInfoAsync($this->_cPtr, $jsonOptions, $outFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function GetDss($json)
    {
        return CkPdf_GetDss($this->_cPtr, $json);
    }

    function GetEmbeddedFileBd($index, $bd)
    {
        return CkPdf_GetEmbeddedFileBd($this->_cPtr, $index, $bd);
    }

    function GetEmbeddedFileInfo($index, $json)
    {
        return CkPdf_GetEmbeddedFileInfo($this->_cPtr, $index, $json);
    }

    function GetMetadata($sb)
    {
        return CkPdf_GetMetadata($this->_cPtr, $sb);
    }

    function GetSignatureContent($index, $bd)
    {
        return CkPdf_GetSignatureContent($this->_cPtr, $index, $bd);
    }

    function GetSignerCert($index, $cert)
    {
        return CkPdf_GetSignerCert($this->_cPtr, $index, $cert);
    }

    function GetUnsignedSigFields($json)
    {
        return CkPdf_GetUnsignedSigFields($this->_cPtr, $json);
    }

    function LastJsonData()
    {
        $r = CkPdf_LastJsonData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkJsonObject($r);
        }
        return $r;
    }

    function LoadBd($pdfData)
    {
        return CkPdf_LoadBd($this->_cPtr, $pdfData);
    }

    function LoadFile($filePath)
    {
        return CkPdf_LoadFile($this->_cPtr, $filePath);
    }

    function SaveLastError($path)
    {
        return CkPdf_SaveLastError($this->_cPtr, $path);
    }

    function SetHttpObj($http)
    {
        CkPdf_SetHttpObj($this->_cPtr, $http);
    }

    function SetSignatureJpeg($jpgData)
    {
        return CkPdf_SetSignatureJpeg($this->_cPtr, $jpgData);
    }

    function SetSigningCert($cert)
    {
        return CkPdf_SetSigningCert($this->_cPtr, $cert);
    }

    function SetSigningCert2($cert, $privateKey)
    {
        return CkPdf_SetSigningCert2($this->_cPtr, $cert, $privateKey);
    }

    function SignPdf($jsonOptions, $outFilePath)
    {
        return CkPdf_SignPdf($this->_cPtr, $jsonOptions, $outFilePath);
    }

    function SignPdfAsync($jsonOptions, $outFilePath)
    {
        $r = CkPdf_SignPdfAsync($this->_cPtr, $jsonOptions, $outFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function SignPdfBd($jsonOptions, $bd)
    {
        return CkPdf_SignPdfBd($this->_cPtr, $jsonOptions, $bd);
    }

    function SignPdfBdAsync($jsonOptions, $bd)
    {
        $r = CkPdf_SignPdfBdAsync($this->_cPtr, $jsonOptions, $bd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function VerifySignature($index, $sigInfo)
    {
        return CkPdf_VerifySignature($this->_cPtr, $index, $sigInfo);
    }
}
