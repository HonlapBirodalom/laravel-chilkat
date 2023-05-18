<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkPdf
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkPdf') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkPdf();
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
        return CkPdf_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkPdf_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkPdf_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_DebugLogFilePath($str)
    {
        CkPdf_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkPdf_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkPdf_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkPdf_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkPdf_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkPdf_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkPdf_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkPdf_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkPdf_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkPdf_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkPdf_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumPages()
    {
        return CkPdf_get_NumPages($this->_cPtr);
    }

    public function get_NumSignatures()
    {
        return CkPdf_get_NumSignatures($this->_cPtr);
    }

    public function get_SigAllocateSize()
    {
        return CkPdf_get_SigAllocateSize($this->_cPtr);
    }

    public function put_SigAllocateSize($newVal)
    {
        CkPdf_put_SigAllocateSize($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkPdf_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkPdf_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkPdf_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkPdf_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkPdf_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkPdf_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkPdf_version($this->_cPtr);
    }

    public function AddSigningCert($cert)
    {
        return CkPdf_AddSigningCert($this->_cPtr, $cert);
    }

    public function AddVerificationInfo($jsonOptions, $outFilePath)
    {
        return CkPdf_AddVerificationInfo($this->_cPtr, $jsonOptions, $outFilePath);
    }

    public function AddVerificationInfoAsync($jsonOptions, $outFilePath)
    {
        $r = CkPdf_AddVerificationInfoAsync($this->_cPtr, $jsonOptions, $outFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetDss($json)
    {
        return CkPdf_GetDss($this->_cPtr, $json);
    }

    public function GetMetadata($sb)
    {
        return CkPdf_GetMetadata($this->_cPtr, $sb);
    }

    public function GetSignatureContent($index, $bd)
    {
        return CkPdf_GetSignatureContent($this->_cPtr, $index, $bd);
    }

    public function GetSignerCert($index, $cert)
    {
        return CkPdf_GetSignerCert($this->_cPtr, $index, $cert);
    }

    public function GetUnsignedSigFields($json)
    {
        return CkPdf_GetUnsignedSigFields($this->_cPtr, $json);
    }

    public function LastJsonData()
    {
        $r = CkPdf_LastJsonData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function LoadBd($pdfData)
    {
        return CkPdf_LoadBd($this->_cPtr, $pdfData);
    }

    public function LoadFile($filePath)
    {
        return CkPdf_LoadFile($this->_cPtr, $filePath);
    }

    public function SaveLastError($path)
    {
        return CkPdf_SaveLastError($this->_cPtr, $path);
    }

    public function SetHttpObj($http)
    {
        CkPdf_SetHttpObj($this->_cPtr, $http);
    }

    public function SetSignatureJpeg($jpgData)
    {
        return CkPdf_SetSignatureJpeg($this->_cPtr, $jpgData);
    }

    public function SetSigningCert($cert)
    {
        return CkPdf_SetSigningCert($this->_cPtr, $cert);
    }

    public function SetSigningCert2($cert, $privateKey)
    {
        return CkPdf_SetSigningCert2($this->_cPtr, $cert, $privateKey);
    }

    public function SignPdf($jsonOptions, $outFilePath)
    {
        return CkPdf_SignPdf($this->_cPtr, $jsonOptions, $outFilePath);
    }

    public function SignPdfAsync($jsonOptions, $outFilePath)
    {
        $r = CkPdf_SignPdfAsync($this->_cPtr, $jsonOptions, $outFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function VerifySignature($index, $sigInfo)
    {
        return CkPdf_VerifySignature($this->_cPtr, $index, $sigInfo);
    }
}
