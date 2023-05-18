<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkDsa
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkDsa') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkDsa();
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
        return CkDsa_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkDsa_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkDsa_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkDsa_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkDsa_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_GroupSize()
    {
        return CkDsa_get_GroupSize($this->_cPtr);
    }

    public function put_GroupSize($newVal)
    {
        CkDsa_put_GroupSize($this->_cPtr, $newVal);
    }

    public function get_Hash($outBytes)
    {
        CkDsa_get_Hash($this->_cPtr, $outBytes);
    }

    public function put_Hash($inBytes)
    {
        CkDsa_put_Hash($this->_cPtr, $inBytes);
    }

    public function get_HexG($str)
    {
        CkDsa_get_HexG($this->_cPtr, $str);
    }

    public function hexG()
    {
        return CkDsa_hexG($this->_cPtr);
    }

    public function get_HexP($str)
    {
        CkDsa_get_HexP($this->_cPtr, $str);
    }

    public function hexP()
    {
        return CkDsa_hexP($this->_cPtr);
    }

    public function get_HexQ($str)
    {
        CkDsa_get_HexQ($this->_cPtr, $str);
    }

    public function hexQ()
    {
        return CkDsa_hexQ($this->_cPtr);
    }

    public function get_HexX($str)
    {
        CkDsa_get_HexX($this->_cPtr, $str);
    }

    public function hexX()
    {
        return CkDsa_hexX($this->_cPtr);
    }

    public function get_HexY($str)
    {
        CkDsa_get_HexY($this->_cPtr, $str);
    }

    public function hexY()
    {
        return CkDsa_hexY($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkDsa_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkDsa_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkDsa_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkDsa_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkDsa_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkDsa_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkDsa_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkDsa_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Signature($outBytes)
    {
        CkDsa_get_Signature($this->_cPtr, $outBytes);
    }

    public function put_Signature($inBytes)
    {
        CkDsa_put_Signature($this->_cPtr, $inBytes);
    }

    public function get_UncommonOptions($str)
    {
        CkDsa_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkDsa_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkDsa_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkDsa_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkDsa_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkDsa_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkDsa_version($this->_cPtr);
    }

    public function FromDer($derData)
    {
        return CkDsa_FromDer($this->_cPtr, $derData);
    }

    public function FromDerFile($path)
    {
        return CkDsa_FromDerFile($this->_cPtr, $path);
    }

    public function FromEncryptedPem($password, $pemData)
    {
        return CkDsa_FromEncryptedPem($this->_cPtr, $password, $pemData);
    }

    public function FromPem($pemData)
    {
        return CkDsa_FromPem($this->_cPtr, $pemData);
    }

    public function FromPublicDer($derData)
    {
        return CkDsa_FromPublicDer($this->_cPtr, $derData);
    }

    public function FromPublicDerFile($path)
    {
        return CkDsa_FromPublicDerFile($this->_cPtr, $path);
    }

    public function FromPublicPem($pemData)
    {
        return CkDsa_FromPublicPem($this->_cPtr, $pemData);
    }

    public function FromXml($xmlKey)
    {
        return CkDsa_FromXml($this->_cPtr, $xmlKey);
    }

    public function GenKey($numBits)
    {
        return CkDsa_GenKey($this->_cPtr, $numBits);
    }

    public function GenKey2($keyLenBits, $modLenBits)
    {
        return CkDsa_GenKey2($this->_cPtr, $keyLenBits, $modLenBits);
    }

    public function GenKeyFromParamsDer($derBytes)
    {
        return CkDsa_GenKeyFromParamsDer($this->_cPtr, $derBytes);
    }

    public function GenKeyFromParamsDerFile($path)
    {
        return CkDsa_GenKeyFromParamsDerFile($this->_cPtr, $path);
    }

    public function GenKeyFromParamsPem($pem)
    {
        return CkDsa_GenKeyFromParamsPem($this->_cPtr, $pem);
    }

    public function GenKeyFromParamsPemFile($path)
    {
        return CkDsa_GenKeyFromParamsPemFile($this->_cPtr, $path);
    }

    public function GenKeyFromPQG($pHex, $qHex, $gHex)
    {
        return CkDsa_GenKeyFromPQG($this->_cPtr, $pHex, $qHex, $gHex);
    }

    public function getEncodedHash($encoding)
    {
        return CkDsa_getEncodedHash($this->_cPtr, $encoding);
    }

    public function encodedHash($encoding)
    {
        return CkDsa_encodedHash($this->_cPtr, $encoding);
    }

    public function getEncodedSignature($encoding)
    {
        return CkDsa_getEncodedSignature($this->_cPtr, $encoding);
    }

    public function encodedSignature($encoding)
    {
        return CkDsa_encodedSignature($this->_cPtr, $encoding);
    }

    public function loadText($path)
    {
        return CkDsa_loadText($this->_cPtr, $path);
    }

    public function SaveLastError($path)
    {
        return CkDsa_SaveLastError($this->_cPtr, $path);
    }

    public function SaveText($strToSave, $path)
    {
        return CkDsa_SaveText($this->_cPtr, $strToSave, $path);
    }

    public function SetEncodedHash($encoding, $encodedHash)
    {
        return CkDsa_SetEncodedHash($this->_cPtr, $encoding, $encodedHash);
    }

    public function SetEncodedSignature($encoding, $encodedSig)
    {
        return CkDsa_SetEncodedSignature($this->_cPtr, $encoding, $encodedSig);
    }

    public function SetEncodedSignatureRS($encoding, $encodedR, $encodedS)
    {
        return CkDsa_SetEncodedSignatureRS($this->_cPtr, $encoding, $encodedR, $encodedS);
    }

    public function SetKeyExplicit($groupSizeInBytes, $pHex, $qHex, $gHex, $xHex)
    {
        return CkDsa_SetKeyExplicit($this->_cPtr, $groupSizeInBytes, $pHex, $qHex, $gHex, $xHex);
    }

    public function SetPubKeyExplicit($groupSizeInBytes, $pHex, $qHex, $gHex, $yHex)
    {
        return CkDsa_SetPubKeyExplicit($this->_cPtr, $groupSizeInBytes, $pHex, $qHex, $gHex, $yHex);
    }

    public function SignHash()
    {
        return CkDsa_SignHash($this->_cPtr);
    }

    public function ToDer($outBytes)
    {
        return CkDsa_ToDer($this->_cPtr, $outBytes);
    }

    public function ToDerFile($path)
    {
        return CkDsa_ToDerFile($this->_cPtr, $path);
    }

    public function toEncryptedPem($password)
    {
        return CkDsa_toEncryptedPem($this->_cPtr, $password);
    }

    public function toPem()
    {
        return CkDsa_toPem($this->_cPtr);
    }

    public function ToPublicDer($outBytes)
    {
        return CkDsa_ToPublicDer($this->_cPtr, $outBytes);
    }

    public function ToPublicDerFile($path)
    {
        return CkDsa_ToPublicDerFile($this->_cPtr, $path);
    }

    public function toPublicPem()
    {
        return CkDsa_toPublicPem($this->_cPtr);
    }

    public function toXml($bPublicOnly)
    {
        return CkDsa_toXml($this->_cPtr, $bPublicOnly);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkDsa_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function Verify()
    {
        return CkDsa_Verify($this->_cPtr);
    }

    public function VerifyKey()
    {
        return CkDsa_VerifyKey($this->_cPtr);
    }
}
