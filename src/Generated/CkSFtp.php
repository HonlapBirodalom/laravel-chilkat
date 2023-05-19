<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkSFtp
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkSFtp') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkSFtp();
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
        return CkSFtp_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkSFtp_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkSFtp_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkSFtp_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkSFtp_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_AccumulateBuffer($outBytes)
    {
        CkSFtp_get_AccumulateBuffer($this->_cPtr, $outBytes);
    }

    public function get_AuthFailReason()
    {
        return CkSFtp_get_AuthFailReason($this->_cPtr);
    }

    public function get_BandwidthThrottleDown()
    {
        return CkSFtp_get_BandwidthThrottleDown($this->_cPtr);
    }

    public function put_BandwidthThrottleDown($newVal)
    {
        CkSFtp_put_BandwidthThrottleDown($this->_cPtr, $newVal);
    }

    public function get_BandwidthThrottleUp()
    {
        return CkSFtp_get_BandwidthThrottleUp($this->_cPtr);
    }

    public function put_BandwidthThrottleUp($newVal)
    {
        CkSFtp_put_BandwidthThrottleUp($this->_cPtr, $newVal);
    }

    public function get_ClientIdentifier($str)
    {
        CkSFtp_get_ClientIdentifier($this->_cPtr, $str);
    }

    public function clientIdentifier()
    {
        return CkSFtp_clientIdentifier($this->_cPtr);
    }

    public function put_ClientIdentifier($newVal)
    {
        CkSFtp_put_ClientIdentifier($this->_cPtr, $newVal);
    }

    public function get_ClientIpAddress($str)
    {
        CkSFtp_get_ClientIpAddress($this->_cPtr, $str);
    }

    public function clientIpAddress()
    {
        return CkSFtp_clientIpAddress($this->_cPtr);
    }

    public function put_ClientIpAddress($newVal)
    {
        CkSFtp_put_ClientIpAddress($this->_cPtr, $newVal);
    }

    public function get_ConnectTimeoutMs()
    {
        return CkSFtp_get_ConnectTimeoutMs($this->_cPtr);
    }

    public function put_ConnectTimeoutMs($newVal)
    {
        CkSFtp_put_ConnectTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkSFtp_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkSFtp_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkSFtp_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DisconnectCode()
    {
        return CkSFtp_get_DisconnectCode($this->_cPtr);
    }

    public function get_DisconnectReason($str)
    {
        CkSFtp_get_DisconnectReason($this->_cPtr, $str);
    }

    public function disconnectReason()
    {
        return CkSFtp_disconnectReason($this->_cPtr);
    }

    public function get_EnableCache()
    {
        return CkSFtp_get_EnableCache($this->_cPtr);
    }

    public function put_EnableCache($newVal)
    {
        CkSFtp_put_EnableCache($this->_cPtr, $newVal);
    }

    public function get_EnableCompression()
    {
        return CkSFtp_get_EnableCompression($this->_cPtr);
    }

    public function put_EnableCompression($newVal)
    {
        CkSFtp_put_EnableCompression($this->_cPtr, $newVal);
    }

    public function get_FilenameCharset($str)
    {
        CkSFtp_get_FilenameCharset($this->_cPtr, $str);
    }

    public function filenameCharset()
    {
        return CkSFtp_filenameCharset($this->_cPtr);
    }

    public function put_FilenameCharset($newVal)
    {
        CkSFtp_put_FilenameCharset($this->_cPtr, $newVal);
    }

    public function get_ForceCipher($str)
    {
        CkSFtp_get_ForceCipher($this->_cPtr, $str);
    }

    public function forceCipher()
    {
        return CkSFtp_forceCipher($this->_cPtr);
    }

    public function put_ForceCipher($newVal)
    {
        CkSFtp_put_ForceCipher($this->_cPtr, $newVal);
    }

    public function get_ForceV3()
    {
        return CkSFtp_get_ForceV3($this->_cPtr);
    }

    public function put_ForceV3($newVal)
    {
        CkSFtp_put_ForceV3($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkSFtp_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkSFtp_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_HostKeyAlg($str)
    {
        CkSFtp_get_HostKeyAlg($this->_cPtr, $str);
    }

    public function hostKeyAlg()
    {
        return CkSFtp_hostKeyAlg($this->_cPtr);
    }

    public function put_HostKeyAlg($newVal)
    {
        CkSFtp_put_HostKeyAlg($this->_cPtr, $newVal);
    }

    public function get_HostKeyFingerprint($str)
    {
        CkSFtp_get_HostKeyFingerprint($this->_cPtr, $str);
    }

    public function hostKeyFingerprint()
    {
        return CkSFtp_hostKeyFingerprint($this->_cPtr);
    }

    public function get_HttpProxyAuthMethod($str)
    {
        CkSFtp_get_HttpProxyAuthMethod($this->_cPtr, $str);
    }

    public function httpProxyAuthMethod()
    {
        return CkSFtp_httpProxyAuthMethod($this->_cPtr);
    }

    public function put_HttpProxyAuthMethod($newVal)
    {
        CkSFtp_put_HttpProxyAuthMethod($this->_cPtr, $newVal);
    }

    public function get_HttpProxyDomain($str)
    {
        CkSFtp_get_HttpProxyDomain($this->_cPtr, $str);
    }

    public function httpProxyDomain()
    {
        return CkSFtp_httpProxyDomain($this->_cPtr);
    }

    public function put_HttpProxyDomain($newVal)
    {
        CkSFtp_put_HttpProxyDomain($this->_cPtr, $newVal);
    }

    public function get_HttpProxyHostname($str)
    {
        CkSFtp_get_HttpProxyHostname($this->_cPtr, $str);
    }

    public function httpProxyHostname()
    {
        return CkSFtp_httpProxyHostname($this->_cPtr);
    }

    public function put_HttpProxyHostname($newVal)
    {
        CkSFtp_put_HttpProxyHostname($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPassword($str)
    {
        CkSFtp_get_HttpProxyPassword($this->_cPtr, $str);
    }

    public function httpProxyPassword()
    {
        return CkSFtp_httpProxyPassword($this->_cPtr);
    }

    public function put_HttpProxyPassword($newVal)
    {
        CkSFtp_put_HttpProxyPassword($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPort()
    {
        return CkSFtp_get_HttpProxyPort($this->_cPtr);
    }

    public function put_HttpProxyPort($newVal)
    {
        CkSFtp_put_HttpProxyPort($this->_cPtr, $newVal);
    }

    public function get_HttpProxyUsername($str)
    {
        CkSFtp_get_HttpProxyUsername($this->_cPtr, $str);
    }

    public function httpProxyUsername()
    {
        return CkSFtp_httpProxyUsername($this->_cPtr);
    }

    public function put_HttpProxyUsername($newVal)
    {
        CkSFtp_put_HttpProxyUsername($this->_cPtr, $newVal);
    }

    public function get_IdleTimeoutMs()
    {
        return CkSFtp_get_IdleTimeoutMs($this->_cPtr);
    }

    public function put_IdleTimeoutMs($newVal)
    {
        CkSFtp_put_IdleTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_IncludeDotDirs()
    {
        return CkSFtp_get_IncludeDotDirs($this->_cPtr);
    }

    public function put_IncludeDotDirs($newVal)
    {
        CkSFtp_put_IncludeDotDirs($this->_cPtr, $newVal);
    }

    public function get_InitializeFailCode()
    {
        return CkSFtp_get_InitializeFailCode($this->_cPtr);
    }

    public function get_InitializeFailReason($str)
    {
        CkSFtp_get_InitializeFailReason($this->_cPtr, $str);
    }

    public function initializeFailReason()
    {
        return CkSFtp_initializeFailReason($this->_cPtr);
    }

    public function get_IsConnected()
    {
        return CkSFtp_get_IsConnected($this->_cPtr);
    }

    public function get_KeepSessionLog()
    {
        return CkSFtp_get_KeepSessionLog($this->_cPtr);
    }

    public function put_KeepSessionLog($newVal)
    {
        CkSFtp_put_KeepSessionLog($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkSFtp_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkSFtp_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkSFtp_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkSFtp_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkSFtp_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkSFtp_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkSFtp_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkSFtp_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LastStatusCode()
    {
        return CkSFtp_get_LastStatusCode($this->_cPtr);
    }

    public function get_LastStatusMessage($str)
    {
        CkSFtp_get_LastStatusMessage($this->_cPtr, $str);
    }

    public function lastStatusMessage()
    {
        return CkSFtp_lastStatusMessage($this->_cPtr);
    }

    public function get_MaxPacketSize()
    {
        return CkSFtp_get_MaxPacketSize($this->_cPtr);
    }

    public function put_MaxPacketSize($newVal)
    {
        CkSFtp_put_MaxPacketSize($this->_cPtr, $newVal);
    }

    public function get_PasswordChangeRequested()
    {
        return CkSFtp_get_PasswordChangeRequested($this->_cPtr);
    }

    public function get_PercentDoneScale()
    {
        return CkSFtp_get_PercentDoneScale($this->_cPtr);
    }

    public function put_PercentDoneScale($newVal)
    {
        CkSFtp_put_PercentDoneScale($this->_cPtr, $newVal);
    }

    public function get_PreferIpv6()
    {
        return CkSFtp_get_PreferIpv6($this->_cPtr);
    }

    public function put_PreferIpv6($newVal)
    {
        CkSFtp_put_PreferIpv6($this->_cPtr, $newVal);
    }

    public function get_PreserveDate()
    {
        return CkSFtp_get_PreserveDate($this->_cPtr);
    }

    public function put_PreserveDate($newVal)
    {
        CkSFtp_put_PreserveDate($this->_cPtr, $newVal);
    }

    public function get_ProtocolVersion()
    {
        return CkSFtp_get_ProtocolVersion($this->_cPtr);
    }

    public function get_ReadDirMustMatch($str)
    {
        CkSFtp_get_ReadDirMustMatch($this->_cPtr, $str);
    }

    public function readDirMustMatch()
    {
        return CkSFtp_readDirMustMatch($this->_cPtr);
    }

    public function put_ReadDirMustMatch($newVal)
    {
        CkSFtp_put_ReadDirMustMatch($this->_cPtr, $newVal);
    }

    public function get_ReadDirMustNotMatch($str)
    {
        CkSFtp_get_ReadDirMustNotMatch($this->_cPtr, $str);
    }

    public function readDirMustNotMatch()
    {
        return CkSFtp_readDirMustNotMatch($this->_cPtr);
    }

    public function put_ReadDirMustNotMatch($newVal)
    {
        CkSFtp_put_ReadDirMustNotMatch($this->_cPtr, $newVal);
    }

    public function get_ServerIdentifier($str)
    {
        CkSFtp_get_ServerIdentifier($this->_cPtr, $str);
    }

    public function serverIdentifier()
    {
        return CkSFtp_serverIdentifier($this->_cPtr);
    }

    public function get_SessionLog($str)
    {
        CkSFtp_get_SessionLog($this->_cPtr, $str);
    }

    public function sessionLog()
    {
        return CkSFtp_sessionLog($this->_cPtr);
    }

    public function get_SocksHostname($str)
    {
        CkSFtp_get_SocksHostname($this->_cPtr, $str);
    }

    public function socksHostname()
    {
        return CkSFtp_socksHostname($this->_cPtr);
    }

    public function put_SocksHostname($newVal)
    {
        CkSFtp_put_SocksHostname($this->_cPtr, $newVal);
    }

    public function get_SocksPassword($str)
    {
        CkSFtp_get_SocksPassword($this->_cPtr, $str);
    }

    public function socksPassword()
    {
        return CkSFtp_socksPassword($this->_cPtr);
    }

    public function put_SocksPassword($newVal)
    {
        CkSFtp_put_SocksPassword($this->_cPtr, $newVal);
    }

    public function get_SocksPort()
    {
        return CkSFtp_get_SocksPort($this->_cPtr);
    }

    public function put_SocksPort($newVal)
    {
        CkSFtp_put_SocksPort($this->_cPtr, $newVal);
    }

    public function get_SocksUsername($str)
    {
        CkSFtp_get_SocksUsername($this->_cPtr, $str);
    }

    public function socksUsername()
    {
        return CkSFtp_socksUsername($this->_cPtr);
    }

    public function put_SocksUsername($newVal)
    {
        CkSFtp_put_SocksUsername($this->_cPtr, $newVal);
    }

    public function get_SocksVersion()
    {
        return CkSFtp_get_SocksVersion($this->_cPtr);
    }

    public function put_SocksVersion($newVal)
    {
        CkSFtp_put_SocksVersion($this->_cPtr, $newVal);
    }

    public function get_SoRcvBuf()
    {
        return CkSFtp_get_SoRcvBuf($this->_cPtr);
    }

    public function put_SoRcvBuf($newVal)
    {
        CkSFtp_put_SoRcvBuf($this->_cPtr, $newVal);
    }

    public function get_SoSndBuf()
    {
        return CkSFtp_get_SoSndBuf($this->_cPtr);
    }

    public function put_SoSndBuf($newVal)
    {
        CkSFtp_put_SoSndBuf($this->_cPtr, $newVal);
    }

    public function get_SyncCreateAllLocalDirs()
    {
        return CkSFtp_get_SyncCreateAllLocalDirs($this->_cPtr);
    }

    public function put_SyncCreateAllLocalDirs($newVal)
    {
        CkSFtp_put_SyncCreateAllLocalDirs($this->_cPtr, $newVal);
    }

    public function get_SyncDirectives($str)
    {
        CkSFtp_get_SyncDirectives($this->_cPtr, $str);
    }

    public function syncDirectives()
    {
        return CkSFtp_syncDirectives($this->_cPtr);
    }

    public function put_SyncDirectives($newVal)
    {
        CkSFtp_put_SyncDirectives($this->_cPtr, $newVal);
    }

    public function get_SyncedFiles($str)
    {
        CkSFtp_get_SyncedFiles($this->_cPtr, $str);
    }

    public function syncedFiles()
    {
        return CkSFtp_syncedFiles($this->_cPtr);
    }

    public function put_SyncedFiles($newVal)
    {
        CkSFtp_put_SyncedFiles($this->_cPtr, $newVal);
    }

    public function get_SyncMustMatch($str)
    {
        CkSFtp_get_SyncMustMatch($this->_cPtr, $str);
    }

    public function syncMustMatch()
    {
        return CkSFtp_syncMustMatch($this->_cPtr);
    }

    public function put_SyncMustMatch($newVal)
    {
        CkSFtp_put_SyncMustMatch($this->_cPtr, $newVal);
    }

    public function get_SyncMustMatchDir($str)
    {
        CkSFtp_get_SyncMustMatchDir($this->_cPtr, $str);
    }

    public function syncMustMatchDir()
    {
        return CkSFtp_syncMustMatchDir($this->_cPtr);
    }

    public function put_SyncMustMatchDir($newVal)
    {
        CkSFtp_put_SyncMustMatchDir($this->_cPtr, $newVal);
    }

    public function get_SyncMustNotMatch($str)
    {
        CkSFtp_get_SyncMustNotMatch($this->_cPtr, $str);
    }

    public function syncMustNotMatch()
    {
        return CkSFtp_syncMustNotMatch($this->_cPtr);
    }

    public function put_SyncMustNotMatch($newVal)
    {
        CkSFtp_put_SyncMustNotMatch($this->_cPtr, $newVal);
    }

    public function get_SyncMustNotMatchDir($str)
    {
        CkSFtp_get_SyncMustNotMatchDir($this->_cPtr, $str);
    }

    public function syncMustNotMatchDir()
    {
        return CkSFtp_syncMustNotMatchDir($this->_cPtr);
    }

    public function put_SyncMustNotMatchDir($newVal)
    {
        CkSFtp_put_SyncMustNotMatchDir($this->_cPtr, $newVal);
    }

    public function get_TcpNoDelay()
    {
        return CkSFtp_get_TcpNoDelay($this->_cPtr);
    }

    public function put_TcpNoDelay($newVal)
    {
        CkSFtp_put_TcpNoDelay($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkSFtp_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkSFtp_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkSFtp_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UploadChunkSize()
    {
        return CkSFtp_get_UploadChunkSize($this->_cPtr);
    }

    public function put_UploadChunkSize($newVal)
    {
        CkSFtp_put_UploadChunkSize($this->_cPtr, $newVal);
    }

    public function get_UserAuthBanner($str)
    {
        CkSFtp_get_UserAuthBanner($this->_cPtr, $str);
    }

    public function userAuthBanner()
    {
        return CkSFtp_userAuthBanner($this->_cPtr);
    }

    public function put_UserAuthBanner($newVal)
    {
        CkSFtp_put_UserAuthBanner($this->_cPtr, $newVal);
    }

    public function get_UtcMode()
    {
        return CkSFtp_get_UtcMode($this->_cPtr);
    }

    public function put_UtcMode($newVal)
    {
        CkSFtp_put_UtcMode($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkSFtp_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkSFtp_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkSFtp_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkSFtp_version($this->_cPtr);
    }

    public function get_XferByteCount()
    {
        return CkSFtp_get_XferByteCount($this->_cPtr);
    }

    public function AccumulateBytes($handle, $maxBytes)
    {
        return CkSFtp_AccumulateBytes($this->_cPtr, $handle, $maxBytes);
    }

    public function AccumulateBytesAsync($handle, $maxBytes)
    {
        $r = CkSFtp_AccumulateBytesAsync($this->_cPtr, $handle, $maxBytes);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function add64($n1, $n2)
    {
        return CkSFtp_add64($this->_cPtr, $n1, $n2);
    }

    public function AuthenticatePk($username, $privateKey)
    {
        return CkSFtp_AuthenticatePk($this->_cPtr, $username, $privateKey);
    }

    public function AuthenticatePkAsync($username, $privateKey)
    {
        $r = CkSFtp_AuthenticatePkAsync($this->_cPtr, $username, $privateKey);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AuthenticatePw($login, $password)
    {
        return CkSFtp_AuthenticatePw($this->_cPtr, $login, $password);
    }

    public function AuthenticatePwAsync($login, $password)
    {
        $r = CkSFtp_AuthenticatePwAsync($this->_cPtr, $login, $password);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AuthenticatePwPk($username, $password, $privateKey)
    {
        return CkSFtp_AuthenticatePwPk($this->_cPtr, $username, $password, $privateKey);
    }

    public function AuthenticatePwPkAsync($username, $password, $privateKey)
    {
        $r = CkSFtp_AuthenticatePwPkAsync($this->_cPtr, $username, $password, $privateKey);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AuthenticateSecPw($login, $password)
    {
        return CkSFtp_AuthenticateSecPw($this->_cPtr, $login, $password);
    }

    public function AuthenticateSecPwAsync($login, $password)
    {
        $r = CkSFtp_AuthenticateSecPwAsync($this->_cPtr, $login, $password);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AuthenticateSecPwPk($username, $password, $privateKey)
    {
        return CkSFtp_AuthenticateSecPwPk($this->_cPtr, $username, $password, $privateKey);
    }

    public function AuthenticateSecPwPkAsync($username, $password, $privateKey)
    {
        $r = CkSFtp_AuthenticateSecPwPkAsync($this->_cPtr, $username, $password, $privateKey);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ClearAccumulateBuffer()
    {
        CkSFtp_ClearAccumulateBuffer($this->_cPtr);
    }

    public function ClearCache()
    {
        CkSFtp_ClearCache($this->_cPtr);
    }

    public function ClearSessionLog()
    {
        CkSFtp_ClearSessionLog($this->_cPtr);
    }

    public function CloseHandle($handle)
    {
        return CkSFtp_CloseHandle($this->_cPtr, $handle);
    }

    public function CloseHandleAsync($handle)
    {
        $r = CkSFtp_CloseHandleAsync($this->_cPtr, $handle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Connect($domainName, $port)
    {
        return CkSFtp_Connect($this->_cPtr, $domainName, $port);
    }

    public function ConnectAsync($domainName, $port)
    {
        $r = CkSFtp_ConnectAsync($this->_cPtr, $domainName, $port);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ConnectThroughSsh($sshConn, $hostname, $port)
    {
        return CkSFtp_ConnectThroughSsh($this->_cPtr, $sshConn, $hostname, $port);
    }

    public function ConnectThroughSshAsync($sshConn, $hostname, $port)
    {
        $r = CkSFtp_ConnectThroughSshAsync($this->_cPtr, $sshConn, $hostname, $port);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function continueKeyboardAuth($response)
    {
        return CkSFtp_continueKeyboardAuth($this->_cPtr, $response);
    }

    public function ContinueKeyboardAuthAsync($response)
    {
        $r = CkSFtp_ContinueKeyboardAuthAsync($this->_cPtr, $response);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CopyFileAttr($localFilename, $remoteFilename, $isHandle)
    {
        return CkSFtp_CopyFileAttr($this->_cPtr, $localFilename, $remoteFilename, $isHandle);
    }

    public function CopyFileAttrAsync($localFilename, $remoteFilename, $isHandle)
    {
        $r = CkSFtp_CopyFileAttrAsync($this->_cPtr, $localFilename, $remoteFilename, $isHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CreateDir($path)
    {
        return CkSFtp_CreateDir($this->_cPtr, $path);
    }

    public function CreateDirAsync($path)
    {
        $r = CkSFtp_CreateDirAsync($this->_cPtr, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Disconnect()
    {
        CkSFtp_Disconnect($this->_cPtr);
    }

    public function DownloadBd($remoteFilePath, $binData)
    {
        return CkSFtp_DownloadBd($this->_cPtr, $remoteFilePath, $binData);
    }

    public function DownloadBdAsync($remoteFilePath, $binData)
    {
        $r = CkSFtp_DownloadBdAsync($this->_cPtr, $remoteFilePath, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DownloadFile($handle, $toFilename)
    {
        return CkSFtp_DownloadFile($this->_cPtr, $handle, $toFilename);
    }

    public function DownloadFileAsync($handle, $toFilename)
    {
        $r = CkSFtp_DownloadFileAsync($this->_cPtr, $handle, $toFilename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DownloadFileByName($remoteFilePath, $localFilePath)
    {
        return CkSFtp_DownloadFileByName($this->_cPtr, $remoteFilePath, $localFilePath);
    }

    public function DownloadFileByNameAsync($remoteFilePath, $localFilePath)
    {
        $r = CkSFtp_DownloadFileByNameAsync($this->_cPtr, $remoteFilePath, $localFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DownloadSb($remoteFilePath, $charset, $sb)
    {
        return CkSFtp_DownloadSb($this->_cPtr, $remoteFilePath, $charset, $sb);
    }

    public function DownloadSbAsync($remoteFilePath, $charset, $sb)
    {
        $r = CkSFtp_DownloadSbAsync($this->_cPtr, $remoteFilePath, $charset, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Eof($handle)
    {
        return CkSFtp_Eof($this->_cPtr, $handle);
    }

    public function FileExists($remotePath, $followLinks)
    {
        return CkSFtp_FileExists($this->_cPtr, $remotePath, $followLinks);
    }

    public function FileExistsAsync($remotePath, $followLinks)
    {
        $r = CkSFtp_FileExistsAsync($this->_cPtr, $remotePath, $followLinks);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Fsync($handle)
    {
        return CkSFtp_Fsync($this->_cPtr, $handle);
    }

    public function FsyncAsync($handle)
    {
        $r = CkSFtp_FsyncAsync($this->_cPtr, $handle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetFileCreateDt($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileCreateDt($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetFileCreateDtAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileCreateDtAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetFileCreateTime($pathOrHandle, $bFollowLinks, $bIsHandle, $outSysTime)
    {
        return CkSFtp_GetFileCreateTime($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle, $outSysTime);
    }

    public function getFileCreateTimeStr($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_getFileCreateTimeStr($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function fileCreateTimeStr($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_fileCreateTimeStr($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function GetFileCreateTimeStrAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileCreateTimeStrAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getFileGroup($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_getFileGroup($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function fileGroup($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_fileGroup($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function GetFileGroupAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileGroupAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetFileLastAccess($pathOrHandle, $bFollowLinks, $bIsHandle, $outSysTime)
    {
        return CkSFtp_GetFileLastAccess($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle, $outSysTime);
    }

    public function GetFileLastAccessDt($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileLastAccessDt($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetFileLastAccessDtAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileLastAccessDtAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getFileLastAccessStr($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_getFileLastAccessStr($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function fileLastAccessStr($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_fileLastAccessStr($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function GetFileLastAccessStrAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileLastAccessStrAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetFileLastModified($pathOrHandle, $bFollowLinks, $bIsHandle, $outSysTime)
    {
        return CkSFtp_GetFileLastModified($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle, $outSysTime);
    }

    public function GetFileLastModifiedDt($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileLastModifiedDt($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function GetFileLastModifiedDtAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileLastModifiedDtAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getFileLastModifiedStr($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_getFileLastModifiedStr($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function fileLastModifiedStr($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_fileLastModifiedStr($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function GetFileLastModifiedStrAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileLastModifiedStrAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getFileOwner($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_getFileOwner($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function fileOwner($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_fileOwner($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function GetFileOwnerAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFileOwnerAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetFilePermissions($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_GetFilePermissions($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function GetFilePermissionsAsync($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        $r = CkSFtp_GetFilePermissionsAsync($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetFileSize32($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_GetFileSize32($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function GetFileSize64($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_GetFileSize64($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function getFileSizeStr($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_getFileSizeStr($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function fileSizeStr($pathOrHandle, $bFollowLinks, $bIsHandle)
    {
        return CkSFtp_fileSizeStr($this->_cPtr, $pathOrHandle, $bFollowLinks, $bIsHandle);
    }

    public function getHostKeyFP($hashAlg, $includeKeyType, $includeHashName)
    {
        return CkSFtp_getHostKeyFP($this->_cPtr, $hashAlg, $includeKeyType, $includeHashName);
    }

    public function hostKeyFP($hashAlg, $includeKeyType, $includeHashName)
    {
        return CkSFtp_hostKeyFP($this->_cPtr, $hashAlg, $includeKeyType, $includeHashName);
    }

    public function HardLink($oldPath, $newPath)
    {
        return CkSFtp_HardLink($this->_cPtr, $oldPath, $newPath);
    }

    public function HardLinkAsync($oldPath, $newPath)
    {
        $r = CkSFtp_HardLinkAsync($this->_cPtr, $oldPath, $newPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function InitializeSftp()
    {
        return CkSFtp_InitializeSftp($this->_cPtr);
    }

    public function InitializeSftpAsync()
    {
        $r = CkSFtp_InitializeSftpAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function LastJsonData()
    {
        $r = CkSFtp_LastJsonData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function LastReadFailed($handle)
    {
        return CkSFtp_LastReadFailed($this->_cPtr, $handle);
    }

    public function LastReadNumBytes($handle)
    {
        return CkSFtp_LastReadNumBytes($this->_cPtr, $handle);
    }

    public function LoadTaskCaller($task)
    {
        return CkSFtp_LoadTaskCaller($this->_cPtr, $task);
    }

    public function openDir($path)
    {
        return CkSFtp_openDir($this->_cPtr, $path);
    }

    public function OpenDirAsync($path)
    {
        $r = CkSFtp_OpenDirAsync($this->_cPtr, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function openFile($remotePath, $access, $createDisposition)
    {
        return CkSFtp_openFile($this->_cPtr, $remotePath, $access, $createDisposition);
    }

    public function OpenFileAsync($remotePath, $access, $createDisposition)
    {
        $r = CkSFtp_OpenFileAsync($this->_cPtr, $remotePath, $access, $createDisposition);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadDir($handle)
    {
        $r = CkSFtp_ReadDir($this->_cPtr, $handle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkSFtpDir($r);
        }

        return $r;
    }

    public function ReadDirAsync($handle)
    {
        $r = CkSFtp_ReadDirAsync($this->_cPtr, $handle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadFileBd($handle, $numBytes, $bd)
    {
        return CkSFtp_ReadFileBd($this->_cPtr, $handle, $numBytes, $bd);
    }

    public function ReadFileBdAsync($handle, $numBytes, $bd)
    {
        $r = CkSFtp_ReadFileBdAsync($this->_cPtr, $handle, $numBytes, $bd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadFileBytes($handle, $numBytes, $outBytes)
    {
        return CkSFtp_ReadFileBytes($this->_cPtr, $handle, $numBytes, $outBytes);
    }

    public function ReadFileBytesAsync($handle, $numBytes)
    {
        $r = CkSFtp_ReadFileBytesAsync($this->_cPtr, $handle, $numBytes);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadFileBytes32($handle, $offset, $numBytes, $outBytes)
    {
        return CkSFtp_ReadFileBytes32($this->_cPtr, $handle, $offset, $numBytes, $outBytes);
    }

    public function ReadFileBytes64($handle, $offset, $numBytes, $outBytes)
    {
        return CkSFtp_ReadFileBytes64($this->_cPtr, $handle, $offset, $numBytes, $outBytes);
    }

    public function ReadFileBytes64s($handle, $offset, $numBytes, $outBytes)
    {
        return CkSFtp_ReadFileBytes64s($this->_cPtr, $handle, $offset, $numBytes, $outBytes);
    }

    public function readFileText($handle, $numBytes, $charset)
    {
        return CkSFtp_readFileText($this->_cPtr, $handle, $numBytes, $charset);
    }

    public function ReadFileTextAsync($handle, $numBytes, $charset)
    {
        $r = CkSFtp_ReadFileTextAsync($this->_cPtr, $handle, $numBytes, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function readFileText32($handle, $offset, $numBytes, $charset)
    {
        return CkSFtp_readFileText32($this->_cPtr, $handle, $offset, $numBytes, $charset);
    }

    public function readFileText64($handle, $offset, $numBytes, $charset)
    {
        return CkSFtp_readFileText64($this->_cPtr, $handle, $offset, $numBytes, $charset);
    }

    public function readFileText64s($handle, $offset, $numBytes, $charset)
    {
        return CkSFtp_readFileText64s($this->_cPtr, $handle, $offset, $numBytes, $charset);
    }

    public function readLink($path)
    {
        return CkSFtp_readLink($this->_cPtr, $path);
    }

    public function ReadLinkAsync($path)
    {
        $r = CkSFtp_ReadLinkAsync($this->_cPtr, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function realPath($originalPath, $composePath)
    {
        return CkSFtp_realPath($this->_cPtr, $originalPath, $composePath);
    }

    public function RealPathAsync($originalPath, $composePath)
    {
        $r = CkSFtp_RealPathAsync($this->_cPtr, $originalPath, $composePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function RemoveDir($path)
    {
        return CkSFtp_RemoveDir($this->_cPtr, $path);
    }

    public function RemoveDirAsync($path)
    {
        $r = CkSFtp_RemoveDirAsync($this->_cPtr, $path);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function RemoveFile($filename)
    {
        return CkSFtp_RemoveFile($this->_cPtr, $filename);
    }

    public function RemoveFileAsync($filename)
    {
        $r = CkSFtp_RemoveFileAsync($this->_cPtr, $filename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function RenameFileOrDir($oldPath, $newPath)
    {
        return CkSFtp_RenameFileOrDir($this->_cPtr, $oldPath, $newPath);
    }

    public function RenameFileOrDirAsync($oldPath, $newPath)
    {
        $r = CkSFtp_RenameFileOrDirAsync($this->_cPtr, $oldPath, $newPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ResumeDownloadFileByName($remoteFilePath, $localFilePath)
    {
        return CkSFtp_ResumeDownloadFileByName($this->_cPtr, $remoteFilePath, $localFilePath);
    }

    public function ResumeDownloadFileByNameAsync($remoteFilePath, $localFilePath)
    {
        $r = CkSFtp_ResumeDownloadFileByNameAsync($this->_cPtr, $remoteFilePath, $localFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ResumeUploadFileByName($remoteFilePath, $localFilePath)
    {
        return CkSFtp_ResumeUploadFileByName($this->_cPtr, $remoteFilePath, $localFilePath);
    }

    public function ResumeUploadFileByNameAsync($remoteFilePath, $localFilePath)
    {
        $r = CkSFtp_ResumeUploadFileByNameAsync($this->_cPtr, $remoteFilePath, $localFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SaveLastError($path)
    {
        return CkSFtp_SaveLastError($this->_cPtr, $path);
    }

    public function SendIgnore()
    {
        return CkSFtp_SendIgnore($this->_cPtr);
    }

    public function SendIgnoreAsync()
    {
        $r = CkSFtp_SendIgnoreAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetCreateDt($pathOrHandle, $isHandle, $createDateTime)
    {
        return CkSFtp_SetCreateDt($this->_cPtr, $pathOrHandle, $isHandle, $createDateTime);
    }

    public function SetCreateDtAsync($pathOrHandle, $isHandle, $createDateTime)
    {
        $r = CkSFtp_SetCreateDtAsync($this->_cPtr, $pathOrHandle, $isHandle, $createDateTime);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetCreateTime($pathOrHandle, $isHandle, $createDateTime)
    {
        return CkSFtp_SetCreateTime($this->_cPtr, $pathOrHandle, $isHandle, $createDateTime);
    }

    public function SetCreateTimeStr($pathOrHandle, $bIsHandle, $dateTimeStr)
    {
        return CkSFtp_SetCreateTimeStr($this->_cPtr, $pathOrHandle, $bIsHandle, $dateTimeStr);
    }

    public function SetCreateTimeStrAsync($pathOrHandle, $bIsHandle, $dateTimeStr)
    {
        $r = CkSFtp_SetCreateTimeStrAsync($this->_cPtr, $pathOrHandle, $bIsHandle, $dateTimeStr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetLastAccessDt($pathOrHandle, $isHandle, $accessDateTime)
    {
        return CkSFtp_SetLastAccessDt($this->_cPtr, $pathOrHandle, $isHandle, $accessDateTime);
    }

    public function SetLastAccessDtAsync($pathOrHandle, $isHandle, $accessDateTime)
    {
        $r = CkSFtp_SetLastAccessDtAsync($this->_cPtr, $pathOrHandle, $isHandle, $accessDateTime);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetLastAccessTime($pathOrHandle, $isHandle, $accessDateTime)
    {
        return CkSFtp_SetLastAccessTime($this->_cPtr, $pathOrHandle, $isHandle, $accessDateTime);
    }

    public function SetLastAccessTimeStr($pathOrHandle, $bIsHandle, $dateTimeStr)
    {
        return CkSFtp_SetLastAccessTimeStr($this->_cPtr, $pathOrHandle, $bIsHandle, $dateTimeStr);
    }

    public function SetLastAccessTimeStrAsync($pathOrHandle, $bIsHandle, $dateTimeStr)
    {
        $r = CkSFtp_SetLastAccessTimeStrAsync($this->_cPtr, $pathOrHandle, $bIsHandle, $dateTimeStr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetLastModifiedDt($pathOrHandle, $isHandle, $modifiedDateTime)
    {
        return CkSFtp_SetLastModifiedDt($this->_cPtr, $pathOrHandle, $isHandle, $modifiedDateTime);
    }

    public function SetLastModifiedDtAsync($pathOrHandle, $isHandle, $modifiedDateTime)
    {
        $r = CkSFtp_SetLastModifiedDtAsync($this->_cPtr, $pathOrHandle, $isHandle, $modifiedDateTime);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetLastModifiedTime($pathOrHandle, $isHandle, $modifiedDateTime)
    {
        return CkSFtp_SetLastModifiedTime($this->_cPtr, $pathOrHandle, $isHandle, $modifiedDateTime);
    }

    public function SetLastModifiedTimeStr($pathOrHandle, $bIsHandle, $dateTimeStr)
    {
        return CkSFtp_SetLastModifiedTimeStr($this->_cPtr, $pathOrHandle, $bIsHandle, $dateTimeStr);
    }

    public function SetLastModifiedTimeStrAsync($pathOrHandle, $bIsHandle, $dateTimeStr)
    {
        $r = CkSFtp_SetLastModifiedTimeStrAsync($this->_cPtr, $pathOrHandle, $bIsHandle, $dateTimeStr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetOwnerAndGroup($pathOrHandle, $isHandle, $owner, $group)
    {
        return CkSFtp_SetOwnerAndGroup($this->_cPtr, $pathOrHandle, $isHandle, $owner, $group);
    }

    public function SetOwnerAndGroupAsync($pathOrHandle, $isHandle, $owner, $group)
    {
        $r = CkSFtp_SetOwnerAndGroupAsync($this->_cPtr, $pathOrHandle, $isHandle, $owner, $group);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetPermissions($pathOrHandle, $isHandle, $permissions)
    {
        return CkSFtp_SetPermissions($this->_cPtr, $pathOrHandle, $isHandle, $permissions);
    }

    public function SetPermissionsAsync($pathOrHandle, $isHandle, $permissions)
    {
        $r = CkSFtp_SetPermissionsAsync($this->_cPtr, $pathOrHandle, $isHandle, $permissions);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function startKeyboardAuth($login)
    {
        return CkSFtp_startKeyboardAuth($this->_cPtr, $login);
    }

    public function StartKeyboardAuthAsync($login)
    {
        $r = CkSFtp_StartKeyboardAuthAsync($this->_cPtr, $login);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SymLink($oldPath, $newPath)
    {
        return CkSFtp_SymLink($this->_cPtr, $oldPath, $newPath);
    }

    public function SymLinkAsync($oldPath, $newPath)
    {
        $r = CkSFtp_SymLinkAsync($this->_cPtr, $oldPath, $newPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SyncTreeDownload($remoteRoot, $localRoot, $mode, $recurse)
    {
        return CkSFtp_SyncTreeDownload($this->_cPtr, $remoteRoot, $localRoot, $mode, $recurse);
    }

    public function SyncTreeDownloadAsync($remoteRoot, $localRoot, $mode, $recurse)
    {
        $r = CkSFtp_SyncTreeDownloadAsync($this->_cPtr, $remoteRoot, $localRoot, $mode, $recurse);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SyncTreeUpload($localBaseDir, $remoteBaseDir, $mode, $bRecurse)
    {
        return CkSFtp_SyncTreeUpload($this->_cPtr, $localBaseDir, $remoteBaseDir, $mode, $bRecurse);
    }

    public function SyncTreeUploadAsync($localBaseDir, $remoteBaseDir, $mode, $bRecurse)
    {
        $r = CkSFtp_SyncTreeUploadAsync($this->_cPtr, $localBaseDir, $remoteBaseDir, $mode, $bRecurse);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UnlockComponent($unlockCode)
    {
        return CkSFtp_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function UploadBd($binData, $remoteFilePath)
    {
        return CkSFtp_UploadBd($this->_cPtr, $binData, $remoteFilePath);
    }

    public function UploadBdAsync($binData, $remoteFilePath)
    {
        $r = CkSFtp_UploadBdAsync($this->_cPtr, $binData, $remoteFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UploadFile($handle, $fromLocalFilePath)
    {
        return CkSFtp_UploadFile($this->_cPtr, $handle, $fromLocalFilePath);
    }

    public function UploadFileAsync($handle, $fromLocalFilePath)
    {
        $r = CkSFtp_UploadFileAsync($this->_cPtr, $handle, $fromLocalFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UploadFileByName($remoteFilePath, $localFilePath)
    {
        return CkSFtp_UploadFileByName($this->_cPtr, $remoteFilePath, $localFilePath);
    }

    public function UploadFileByNameAsync($remoteFilePath, $localFilePath)
    {
        $r = CkSFtp_UploadFileByNameAsync($this->_cPtr, $remoteFilePath, $localFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UploadSb($sb, $remoteFilePath, $charset, $includeBom)
    {
        return CkSFtp_UploadSb($this->_cPtr, $sb, $remoteFilePath, $charset, $includeBom);
    }

    public function UploadSbAsync($sb, $remoteFilePath, $charset, $includeBom)
    {
        $r = CkSFtp_UploadSbAsync($this->_cPtr, $sb, $remoteFilePath, $charset, $includeBom);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteFileBd($handle, $bd)
    {
        return CkSFtp_WriteFileBd($this->_cPtr, $handle, $bd);
    }

    public function WriteFileBdAsync($handle, $bd)
    {
        $r = CkSFtp_WriteFileBdAsync($this->_cPtr, $handle, $bd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteFileBytes($handle, $byteData)
    {
        return CkSFtp_WriteFileBytes($this->_cPtr, $handle, $byteData);
    }

    public function WriteFileBytesAsync($handle, $byteData)
    {
        $r = CkSFtp_WriteFileBytesAsync($this->_cPtr, $handle, $byteData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteFileBytes32($handle, $offset, $data)
    {
        return CkSFtp_WriteFileBytes32($this->_cPtr, $handle, $offset, $data);
    }

    public function WriteFileBytes64($handle, $offset64, $data)
    {
        return CkSFtp_WriteFileBytes64($this->_cPtr, $handle, $offset64, $data);
    }

    public function WriteFileBytes64s($handle, $offset64, $data)
    {
        return CkSFtp_WriteFileBytes64s($this->_cPtr, $handle, $offset64, $data);
    }

    public function WriteFileText($handle, $charset, $textData)
    {
        return CkSFtp_WriteFileText($this->_cPtr, $handle, $charset, $textData);
    }

    public function WriteFileTextAsync($handle, $charset, $textData)
    {
        $r = CkSFtp_WriteFileTextAsync($this->_cPtr, $handle, $charset, $textData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteFileText32($handle, $offset32, $charset, $textData)
    {
        return CkSFtp_WriteFileText32($this->_cPtr, $handle, $offset32, $charset, $textData);
    }

    public function WriteFileText64($handle, $offset64, $charset, $textData)
    {
        return CkSFtp_WriteFileText64($this->_cPtr, $handle, $offset64, $charset, $textData);
    }

    public function WriteFileText64s($handle, $offset64, $charset, $textData)
    {
        return CkSFtp_WriteFileText64s($this->_cPtr, $handle, $offset64, $charset, $textData);
    }
}
