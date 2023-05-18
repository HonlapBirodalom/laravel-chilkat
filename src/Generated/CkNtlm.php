<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkNtlm
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkNtlm') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkNtlm();
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
        return CkNtlm_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkNtlm_put_Utf8($this->_cPtr, $b);
    }

    public function get_ClientChallenge($str)
    {
        CkNtlm_get_ClientChallenge($this->_cPtr, $str);
    }

    public function clientChallenge()
    {
        return CkNtlm_clientChallenge($this->_cPtr);
    }

    public function put_ClientChallenge($newVal)
    {
        CkNtlm_put_ClientChallenge($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkNtlm_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkNtlm_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkNtlm_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DnsComputerName($str)
    {
        CkNtlm_get_DnsComputerName($this->_cPtr, $str);
    }

    public function dnsComputerName()
    {
        return CkNtlm_dnsComputerName($this->_cPtr);
    }

    public function put_DnsComputerName($newVal)
    {
        CkNtlm_put_DnsComputerName($this->_cPtr, $newVal);
    }

    public function get_DnsDomainName($str)
    {
        CkNtlm_get_DnsDomainName($this->_cPtr, $str);
    }

    public function dnsDomainName()
    {
        return CkNtlm_dnsDomainName($this->_cPtr);
    }

    public function put_DnsDomainName($newVal)
    {
        CkNtlm_put_DnsDomainName($this->_cPtr, $newVal);
    }

    public function get_Domain($str)
    {
        CkNtlm_get_Domain($this->_cPtr, $str);
    }

    public function domain()
    {
        return CkNtlm_domain($this->_cPtr);
    }

    public function put_Domain($newVal)
    {
        CkNtlm_put_Domain($this->_cPtr, $newVal);
    }

    public function get_EncodingMode($str)
    {
        CkNtlm_get_EncodingMode($this->_cPtr, $str);
    }

    public function encodingMode()
    {
        return CkNtlm_encodingMode($this->_cPtr);
    }

    public function put_EncodingMode($newVal)
    {
        CkNtlm_put_EncodingMode($this->_cPtr, $newVal);
    }

    public function get_Flags($str)
    {
        CkNtlm_get_Flags($this->_cPtr, $str);
    }

    public function flags()
    {
        return CkNtlm_flags($this->_cPtr);
    }

    public function put_Flags($newVal)
    {
        CkNtlm_put_Flags($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkNtlm_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkNtlm_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkNtlm_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkNtlm_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkNtlm_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkNtlm_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkNtlm_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkNtlm_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NetBiosComputerName($str)
    {
        CkNtlm_get_NetBiosComputerName($this->_cPtr, $str);
    }

    public function netBiosComputerName()
    {
        return CkNtlm_netBiosComputerName($this->_cPtr);
    }

    public function put_NetBiosComputerName($newVal)
    {
        CkNtlm_put_NetBiosComputerName($this->_cPtr, $newVal);
    }

    public function get_NetBiosDomainName($str)
    {
        CkNtlm_get_NetBiosDomainName($this->_cPtr, $str);
    }

    public function netBiosDomainName()
    {
        return CkNtlm_netBiosDomainName($this->_cPtr);
    }

    public function put_NetBiosDomainName($newVal)
    {
        CkNtlm_put_NetBiosDomainName($this->_cPtr, $newVal);
    }

    public function get_NtlmVersion()
    {
        return CkNtlm_get_NtlmVersion($this->_cPtr);
    }

    public function put_NtlmVersion($newVal)
    {
        CkNtlm_put_NtlmVersion($this->_cPtr, $newVal);
    }

    public function get_OemCodePage()
    {
        return CkNtlm_get_OemCodePage($this->_cPtr);
    }

    public function put_OemCodePage($newVal)
    {
        CkNtlm_put_OemCodePage($this->_cPtr, $newVal);
    }

    public function get_Password($str)
    {
        CkNtlm_get_Password($this->_cPtr, $str);
    }

    public function password()
    {
        return CkNtlm_password($this->_cPtr);
    }

    public function put_Password($newVal)
    {
        CkNtlm_put_Password($this->_cPtr, $newVal);
    }

    public function get_ServerChallenge($str)
    {
        CkNtlm_get_ServerChallenge($this->_cPtr, $str);
    }

    public function serverChallenge()
    {
        return CkNtlm_serverChallenge($this->_cPtr);
    }

    public function put_ServerChallenge($newVal)
    {
        CkNtlm_put_ServerChallenge($this->_cPtr, $newVal);
    }

    public function get_TargetName($str)
    {
        CkNtlm_get_TargetName($this->_cPtr, $str);
    }

    public function targetName()
    {
        return CkNtlm_targetName($this->_cPtr);
    }

    public function put_TargetName($newVal)
    {
        CkNtlm_put_TargetName($this->_cPtr, $newVal);
    }

    public function get_UserName($str)
    {
        CkNtlm_get_UserName($this->_cPtr, $str);
    }

    public function userName()
    {
        return CkNtlm_userName($this->_cPtr);
    }

    public function put_UserName($newVal)
    {
        CkNtlm_put_UserName($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkNtlm_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkNtlm_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkNtlm_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkNtlm_version($this->_cPtr);
    }

    public function get_Workstation($str)
    {
        CkNtlm_get_Workstation($this->_cPtr, $str);
    }

    public function workstation()
    {
        return CkNtlm_workstation($this->_cPtr);
    }

    public function put_Workstation($newVal)
    {
        CkNtlm_put_Workstation($this->_cPtr, $newVal);
    }

    public function CompareType3($msg1, $msg2)
    {
        return CkNtlm_CompareType3($this->_cPtr, $msg1, $msg2);
    }

    public function genType1()
    {
        return CkNtlm_genType1($this->_cPtr);
    }

    public function genType2($type1Msg)
    {
        return CkNtlm_genType2($this->_cPtr, $type1Msg);
    }

    public function genType3($type2Msg)
    {
        return CkNtlm_genType3($this->_cPtr, $type2Msg);
    }

    public function LoadType3($type3Msg)
    {
        return CkNtlm_LoadType3($this->_cPtr, $type3Msg);
    }

    public function parseType1($type1Msg)
    {
        return CkNtlm_parseType1($this->_cPtr, $type1Msg);
    }

    public function parseType2($type2Msg)
    {
        return CkNtlm_parseType2($this->_cPtr, $type2Msg);
    }

    public function parseType3($type3Msg)
    {
        return CkNtlm_parseType3($this->_cPtr, $type3Msg);
    }

    public function SaveLastError($path)
    {
        return CkNtlm_SaveLastError($this->_cPtr, $path);
    }

    public function SetFlag($flagLetter, $onOrOff)
    {
        return CkNtlm_SetFlag($this->_cPtr, $flagLetter, $onOrOff);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkNtlm_UnlockComponent($this->_cPtr, $unlockCode);
    }
}
