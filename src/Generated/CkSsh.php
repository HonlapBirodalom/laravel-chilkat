<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkSsh
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkSsh') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkSsh();
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
        return CkSsh_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkSsh_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkSsh_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkSsh_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkSsh_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_AuthFailReason()
    {
        return CkSsh_get_AuthFailReason($this->_cPtr);
    }

    public function get_CaretControl()
    {
        return CkSsh_get_CaretControl($this->_cPtr);
    }

    public function put_CaretControl($newVal)
    {
        CkSsh_put_CaretControl($this->_cPtr, $newVal);
    }

    public function get_ChannelOpenFailCode()
    {
        return CkSsh_get_ChannelOpenFailCode($this->_cPtr);
    }

    public function get_ChannelOpenFailReason($str)
    {
        CkSsh_get_ChannelOpenFailReason($this->_cPtr, $str);
    }

    public function channelOpenFailReason()
    {
        return CkSsh_channelOpenFailReason($this->_cPtr);
    }

    public function get_ClientIdentifier($str)
    {
        CkSsh_get_ClientIdentifier($this->_cPtr, $str);
    }

    public function clientIdentifier()
    {
        return CkSsh_clientIdentifier($this->_cPtr);
    }

    public function put_ClientIdentifier($newVal)
    {
        CkSsh_put_ClientIdentifier($this->_cPtr, $newVal);
    }

    public function get_ClientIpAddress($str)
    {
        CkSsh_get_ClientIpAddress($this->_cPtr, $str);
    }

    public function clientIpAddress()
    {
        return CkSsh_clientIpAddress($this->_cPtr);
    }

    public function put_ClientIpAddress($newVal)
    {
        CkSsh_put_ClientIpAddress($this->_cPtr, $newVal);
    }

    public function get_ClientPort()
    {
        return CkSsh_get_ClientPort($this->_cPtr);
    }

    public function put_ClientPort($newVal)
    {
        CkSsh_put_ClientPort($this->_cPtr, $newVal);
    }

    public function get_ConnectTimeoutMs()
    {
        return CkSsh_get_ConnectTimeoutMs($this->_cPtr);
    }

    public function put_ConnectTimeoutMs($newVal)
    {
        CkSsh_put_ConnectTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkSsh_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkSsh_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkSsh_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DisconnectCode()
    {
        return CkSsh_get_DisconnectCode($this->_cPtr);
    }

    public function get_DisconnectReason($str)
    {
        CkSsh_get_DisconnectReason($this->_cPtr, $str);
    }

    public function disconnectReason()
    {
        return CkSsh_disconnectReason($this->_cPtr);
    }

    public function get_EnableCompression()
    {
        return CkSsh_get_EnableCompression($this->_cPtr);
    }

    public function put_EnableCompression($newVal)
    {
        CkSsh_put_EnableCompression($this->_cPtr, $newVal);
    }

    public function get_ForceCipher($str)
    {
        CkSsh_get_ForceCipher($this->_cPtr, $str);
    }

    public function forceCipher()
    {
        return CkSsh_forceCipher($this->_cPtr);
    }

    public function put_ForceCipher($newVal)
    {
        CkSsh_put_ForceCipher($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkSsh_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkSsh_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_HostKeyAlg($str)
    {
        CkSsh_get_HostKeyAlg($this->_cPtr, $str);
    }

    public function hostKeyAlg()
    {
        return CkSsh_hostKeyAlg($this->_cPtr);
    }

    public function put_HostKeyAlg($newVal)
    {
        CkSsh_put_HostKeyAlg($this->_cPtr, $newVal);
    }

    public function get_HostKeyFingerprint($str)
    {
        CkSsh_get_HostKeyFingerprint($this->_cPtr, $str);
    }

    public function hostKeyFingerprint()
    {
        return CkSsh_hostKeyFingerprint($this->_cPtr);
    }

    public function get_HttpProxyAuthMethod($str)
    {
        CkSsh_get_HttpProxyAuthMethod($this->_cPtr, $str);
    }

    public function httpProxyAuthMethod()
    {
        return CkSsh_httpProxyAuthMethod($this->_cPtr);
    }

    public function put_HttpProxyAuthMethod($newVal)
    {
        CkSsh_put_HttpProxyAuthMethod($this->_cPtr, $newVal);
    }

    public function get_HttpProxyDomain($str)
    {
        CkSsh_get_HttpProxyDomain($this->_cPtr, $str);
    }

    public function httpProxyDomain()
    {
        return CkSsh_httpProxyDomain($this->_cPtr);
    }

    public function put_HttpProxyDomain($newVal)
    {
        CkSsh_put_HttpProxyDomain($this->_cPtr, $newVal);
    }

    public function get_HttpProxyHostname($str)
    {
        CkSsh_get_HttpProxyHostname($this->_cPtr, $str);
    }

    public function httpProxyHostname()
    {
        return CkSsh_httpProxyHostname($this->_cPtr);
    }

    public function put_HttpProxyHostname($newVal)
    {
        CkSsh_put_HttpProxyHostname($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPassword($str)
    {
        CkSsh_get_HttpProxyPassword($this->_cPtr, $str);
    }

    public function httpProxyPassword()
    {
        return CkSsh_httpProxyPassword($this->_cPtr);
    }

    public function put_HttpProxyPassword($newVal)
    {
        CkSsh_put_HttpProxyPassword($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPort()
    {
        return CkSsh_get_HttpProxyPort($this->_cPtr);
    }

    public function put_HttpProxyPort($newVal)
    {
        CkSsh_put_HttpProxyPort($this->_cPtr, $newVal);
    }

    public function get_HttpProxyUsername($str)
    {
        CkSsh_get_HttpProxyUsername($this->_cPtr, $str);
    }

    public function httpProxyUsername()
    {
        return CkSsh_httpProxyUsername($this->_cPtr);
    }

    public function put_HttpProxyUsername($newVal)
    {
        CkSsh_put_HttpProxyUsername($this->_cPtr, $newVal);
    }

    public function get_IdleTimeoutMs()
    {
        return CkSsh_get_IdleTimeoutMs($this->_cPtr);
    }

    public function put_IdleTimeoutMs($newVal)
    {
        CkSsh_put_IdleTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_IsConnected()
    {
        return CkSsh_get_IsConnected($this->_cPtr);
    }

    public function get_KeepSessionLog()
    {
        return CkSsh_get_KeepSessionLog($this->_cPtr);
    }

    public function put_KeepSessionLog($newVal)
    {
        CkSsh_put_KeepSessionLog($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkSsh_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkSsh_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkSsh_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkSsh_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkSsh_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkSsh_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkSsh_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkSsh_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_MaxPacketSize()
    {
        return CkSsh_get_MaxPacketSize($this->_cPtr);
    }

    public function put_MaxPacketSize($newVal)
    {
        CkSsh_put_MaxPacketSize($this->_cPtr, $newVal);
    }

    public function get_NumOpenChannels()
    {
        return CkSsh_get_NumOpenChannels($this->_cPtr);
    }

    public function get_PasswordChangeRequested()
    {
        return CkSsh_get_PasswordChangeRequested($this->_cPtr);
    }

    public function get_PreferIpv6()
    {
        return CkSsh_get_PreferIpv6($this->_cPtr);
    }

    public function put_PreferIpv6($newVal)
    {
        CkSsh_put_PreferIpv6($this->_cPtr, $newVal);
    }

    public function get_ReadTimeoutMs()
    {
        return CkSsh_get_ReadTimeoutMs($this->_cPtr);
    }

    public function put_ReadTimeoutMs($newVal)
    {
        CkSsh_put_ReadTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_ReqExecCharset($str)
    {
        CkSsh_get_ReqExecCharset($this->_cPtr, $str);
    }

    public function reqExecCharset()
    {
        return CkSsh_reqExecCharset($this->_cPtr);
    }

    public function put_ReqExecCharset($newVal)
    {
        CkSsh_put_ReqExecCharset($this->_cPtr, $newVal);
    }

    public function get_ServerIdentifier($str)
    {
        CkSsh_get_ServerIdentifier($this->_cPtr, $str);
    }

    public function serverIdentifier()
    {
        return CkSsh_serverIdentifier($this->_cPtr);
    }

    public function get_SessionLog($str)
    {
        CkSsh_get_SessionLog($this->_cPtr, $str);
    }

    public function sessionLog()
    {
        return CkSsh_sessionLog($this->_cPtr);
    }

    public function get_SocksHostname($str)
    {
        CkSsh_get_SocksHostname($this->_cPtr, $str);
    }

    public function socksHostname()
    {
        return CkSsh_socksHostname($this->_cPtr);
    }

    public function put_SocksHostname($newVal)
    {
        CkSsh_put_SocksHostname($this->_cPtr, $newVal);
    }

    public function get_SocksPassword($str)
    {
        CkSsh_get_SocksPassword($this->_cPtr, $str);
    }

    public function socksPassword()
    {
        return CkSsh_socksPassword($this->_cPtr);
    }

    public function put_SocksPassword($newVal)
    {
        CkSsh_put_SocksPassword($this->_cPtr, $newVal);
    }

    public function get_SocksPort()
    {
        return CkSsh_get_SocksPort($this->_cPtr);
    }

    public function put_SocksPort($newVal)
    {
        CkSsh_put_SocksPort($this->_cPtr, $newVal);
    }

    public function get_SocksUsername($str)
    {
        CkSsh_get_SocksUsername($this->_cPtr, $str);
    }

    public function socksUsername()
    {
        return CkSsh_socksUsername($this->_cPtr);
    }

    public function put_SocksUsername($newVal)
    {
        CkSsh_put_SocksUsername($this->_cPtr, $newVal);
    }

    public function get_SocksVersion()
    {
        return CkSsh_get_SocksVersion($this->_cPtr);
    }

    public function put_SocksVersion($newVal)
    {
        CkSsh_put_SocksVersion($this->_cPtr, $newVal);
    }

    public function get_SoRcvBuf()
    {
        return CkSsh_get_SoRcvBuf($this->_cPtr);
    }

    public function put_SoRcvBuf($newVal)
    {
        CkSsh_put_SoRcvBuf($this->_cPtr, $newVal);
    }

    public function get_SoSndBuf()
    {
        return CkSsh_get_SoSndBuf($this->_cPtr);
    }

    public function put_SoSndBuf($newVal)
    {
        CkSsh_put_SoSndBuf($this->_cPtr, $newVal);
    }

    public function get_StderrToStdout()
    {
        return CkSsh_get_StderrToStdout($this->_cPtr);
    }

    public function put_StderrToStdout($newVal)
    {
        CkSsh_put_StderrToStdout($this->_cPtr, $newVal);
    }

    public function get_StripColorCodes()
    {
        return CkSsh_get_StripColorCodes($this->_cPtr);
    }

    public function put_StripColorCodes($newVal)
    {
        CkSsh_put_StripColorCodes($this->_cPtr, $newVal);
    }

    public function get_TcpNoDelay()
    {
        return CkSsh_get_TcpNoDelay($this->_cPtr);
    }

    public function put_TcpNoDelay($newVal)
    {
        CkSsh_put_TcpNoDelay($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkSsh_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkSsh_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkSsh_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UserAuthBanner($str)
    {
        CkSsh_get_UserAuthBanner($this->_cPtr, $str);
    }

    public function userAuthBanner()
    {
        return CkSsh_userAuthBanner($this->_cPtr);
    }

    public function put_UserAuthBanner($newVal)
    {
        CkSsh_put_UserAuthBanner($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkSsh_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkSsh_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkSsh_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkSsh_version($this->_cPtr);
    }

    public function AuthenticatePk($username, $privateKey)
    {
        return CkSsh_AuthenticatePk($this->_cPtr, $username, $privateKey);
    }

    public function AuthenticatePkAsync($username, $privateKey)
    {
        $r = CkSsh_AuthenticatePkAsync($this->_cPtr, $username, $privateKey);
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
        return CkSsh_AuthenticatePw($this->_cPtr, $login, $password);
    }

    public function AuthenticatePwAsync($login, $password)
    {
        $r = CkSsh_AuthenticatePwAsync($this->_cPtr, $login, $password);
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
        return CkSsh_AuthenticatePwPk($this->_cPtr, $username, $password, $privateKey);
    }

    public function AuthenticatePwPkAsync($username, $password, $privateKey)
    {
        $r = CkSsh_AuthenticatePwPkAsync($this->_cPtr, $username, $password, $privateKey);
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
        return CkSsh_AuthenticateSecPw($this->_cPtr, $login, $password);
    }

    public function AuthenticateSecPwAsync($login, $password)
    {
        $r = CkSsh_AuthenticateSecPwAsync($this->_cPtr, $login, $password);
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
        return CkSsh_AuthenticateSecPwPk($this->_cPtr, $username, $password, $privateKey);
    }

    public function AuthenticateSecPwPkAsync($username, $password, $privateKey)
    {
        $r = CkSsh_AuthenticateSecPwPkAsync($this->_cPtr, $username, $password, $privateKey);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelIsOpen($channelNum)
    {
        return CkSsh_ChannelIsOpen($this->_cPtr, $channelNum);
    }

    public function ChannelPoll($channelNum, $pollTimeoutMs)
    {
        return CkSsh_ChannelPoll($this->_cPtr, $channelNum, $pollTimeoutMs);
    }

    public function ChannelPollAsync($channelNum, $pollTimeoutMs)
    {
        $r = CkSsh_ChannelPollAsync($this->_cPtr, $channelNum, $pollTimeoutMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelRead($channelNum)
    {
        return CkSsh_ChannelRead($this->_cPtr, $channelNum);
    }

    public function ChannelReadAsync($channelNum)
    {
        $r = CkSsh_ChannelReadAsync($this->_cPtr, $channelNum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelReadAndPoll($channelNum, $pollTimeoutMs)
    {
        return CkSsh_ChannelReadAndPoll($this->_cPtr, $channelNum, $pollTimeoutMs);
    }

    public function ChannelReadAndPollAsync($channelNum, $pollTimeoutMs)
    {
        $r = CkSsh_ChannelReadAndPollAsync($this->_cPtr, $channelNum, $pollTimeoutMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelReadAndPoll2($channelNum, $pollTimeoutMs, $maxNumBytes)
    {
        return CkSsh_ChannelReadAndPoll2($this->_cPtr, $channelNum, $pollTimeoutMs, $maxNumBytes);
    }

    public function ChannelReadAndPoll2Async($channelNum, $pollTimeoutMs, $maxNumBytes)
    {
        $r = CkSsh_ChannelReadAndPoll2Async($this->_cPtr, $channelNum, $pollTimeoutMs, $maxNumBytes);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelReceivedClose($channelNum)
    {
        return CkSsh_ChannelReceivedClose($this->_cPtr, $channelNum);
    }

    public function ChannelReceivedEof($channelNum)
    {
        return CkSsh_ChannelReceivedEof($this->_cPtr, $channelNum);
    }

    public function ChannelReceivedExitStatus($channelNum)
    {
        return CkSsh_ChannelReceivedExitStatus($this->_cPtr, $channelNum);
    }

    public function ChannelReceiveToClose($channelNum)
    {
        return CkSsh_ChannelReceiveToClose($this->_cPtr, $channelNum);
    }

    public function ChannelReceiveToCloseAsync($channelNum)
    {
        $r = CkSsh_ChannelReceiveToCloseAsync($this->_cPtr, $channelNum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelReceiveUntilMatch($channelNum, $matchPattern, $charset, $caseSensitive)
    {
        return CkSsh_ChannelReceiveUntilMatch($this->_cPtr, $channelNum, $matchPattern, $charset, $caseSensitive);
    }

    public function ChannelReceiveUntilMatchAsync($channelNum, $matchPattern, $charset, $caseSensitive)
    {
        $r = CkSsh_ChannelReceiveUntilMatchAsync($this->_cPtr, $channelNum, $matchPattern, $charset, $caseSensitive);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelReceiveUntilMatchN($channelNum, $matchPatterns, $charset, $caseSensitive)
    {
        return CkSsh_ChannelReceiveUntilMatchN($this->_cPtr, $channelNum, $matchPatterns, $charset, $caseSensitive);
    }

    public function ChannelReceiveUntilMatchNAsync($channelNum, $matchPatterns, $charset, $caseSensitive)
    {
        $r = CkSsh_ChannelReceiveUntilMatchNAsync($this->_cPtr, $channelNum, $matchPatterns, $charset, $caseSensitive);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelRelease($channelNum)
    {
        CkSsh_ChannelRelease($this->_cPtr, $channelNum);
    }

    public function ChannelSendClose($channelNum)
    {
        return CkSsh_ChannelSendClose($this->_cPtr, $channelNum);
    }

    public function ChannelSendCloseAsync($channelNum)
    {
        $r = CkSsh_ChannelSendCloseAsync($this->_cPtr, $channelNum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelSendData($channelNum, $byteData)
    {
        return CkSsh_ChannelSendData($this->_cPtr, $channelNum, $byteData);
    }

    public function ChannelSendDataAsync($channelNum, $byteData)
    {
        $r = CkSsh_ChannelSendDataAsync($this->_cPtr, $channelNum, $byteData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelSendEof($channelNum)
    {
        return CkSsh_ChannelSendEof($this->_cPtr, $channelNum);
    }

    public function ChannelSendEofAsync($channelNum)
    {
        $r = CkSsh_ChannelSendEofAsync($this->_cPtr, $channelNum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ChannelSendString($channelNum, $textData, $charset)
    {
        return CkSsh_ChannelSendString($this->_cPtr, $channelNum, $textData, $charset);
    }

    public function ChannelSendStringAsync($channelNum, $textData, $charset)
    {
        $r = CkSsh_ChannelSendStringAsync($this->_cPtr, $channelNum, $textData, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CheckConnection()
    {
        return CkSsh_CheckConnection($this->_cPtr);
    }

    public function ClearTtyModes()
    {
        CkSsh_ClearTtyModes($this->_cPtr);
    }

    public function Connect($domainName, $port)
    {
        return CkSsh_Connect($this->_cPtr, $domainName, $port);
    }

    public function ConnectAsync($domainName, $port)
    {
        $r = CkSsh_ConnectAsync($this->_cPtr, $domainName, $port);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ConnectThroughSsh($ssh, $hostname, $port)
    {
        return CkSsh_ConnectThroughSsh($this->_cPtr, $ssh, $hostname, $port);
    }

    public function ConnectThroughSshAsync($ssh, $hostname, $port)
    {
        $r = CkSsh_ConnectThroughSshAsync($this->_cPtr, $ssh, $hostname, $port);
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
        return CkSsh_continueKeyboardAuth($this->_cPtr, $response);
    }

    public function ContinueKeyboardAuthAsync($response)
    {
        $r = CkSsh_ContinueKeyboardAuthAsync($this->_cPtr, $response);
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
        CkSsh_Disconnect($this->_cPtr);
    }

    public function getAuthMethods()
    {
        return CkSsh_getAuthMethods($this->_cPtr);
    }

    public function authMethods()
    {
        return CkSsh_authMethods($this->_cPtr);
    }

    public function GetAuthMethodsAsync()
    {
        $r = CkSsh_GetAuthMethodsAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetChannelExitStatus($channelNum)
    {
        return CkSsh_GetChannelExitStatus($this->_cPtr, $channelNum);
    }

    public function GetChannelNumber($index)
    {
        return CkSsh_GetChannelNumber($this->_cPtr, $index);
    }

    public function getChannelType($index)
    {
        return CkSsh_getChannelType($this->_cPtr, $index);
    }

    public function channelType($index)
    {
        return CkSsh_channelType($this->_cPtr, $index);
    }

    public function getHostKeyFP($hashAlg, $includeKeyType, $includeHashName)
    {
        return CkSsh_getHostKeyFP($this->_cPtr, $hashAlg, $includeKeyType, $includeHashName);
    }

    public function hostKeyFP($hashAlg, $includeKeyType, $includeHashName)
    {
        return CkSsh_hostKeyFP($this->_cPtr, $hashAlg, $includeKeyType, $includeHashName);
    }

    public function GetReceivedData($channelNum, $outBytes)
    {
        return CkSsh_GetReceivedData($this->_cPtr, $channelNum, $outBytes);
    }

    public function GetReceivedDataN($channelNum, $maxNumBytes, $outBytes)
    {
        return CkSsh_GetReceivedDataN($this->_cPtr, $channelNum, $maxNumBytes, $outBytes);
    }

    public function GetReceivedNumBytes($channelNum)
    {
        return CkSsh_GetReceivedNumBytes($this->_cPtr, $channelNum);
    }

    public function GetReceivedStderr($channelNum, $outBytes)
    {
        return CkSsh_GetReceivedStderr($this->_cPtr, $channelNum, $outBytes);
    }

    public function getReceivedStderrText($channelNum, $charset)
    {
        return CkSsh_getReceivedStderrText($this->_cPtr, $channelNum, $charset);
    }

    public function receivedStderrText($channelNum, $charset)
    {
        return CkSsh_receivedStderrText($this->_cPtr, $channelNum, $charset);
    }

    public function getReceivedText($channelNum, $charset)
    {
        return CkSsh_getReceivedText($this->_cPtr, $channelNum, $charset);
    }

    public function receivedText($channelNum, $charset)
    {
        return CkSsh_receivedText($this->_cPtr, $channelNum, $charset);
    }

    public function getReceivedTextS($channelNum, $substr, $charset)
    {
        return CkSsh_getReceivedTextS($this->_cPtr, $channelNum, $substr, $charset);
    }

    public function receivedTextS($channelNum, $substr, $charset)
    {
        return CkSsh_receivedTextS($this->_cPtr, $channelNum, $substr, $charset);
    }

    public function LastJsonData()
    {
        $r = CkSsh_LastJsonData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function LoadTaskCaller($task)
    {
        return CkSsh_LoadTaskCaller($this->_cPtr, $task);
    }

    public function OpenCustomChannel($channelType)
    {
        return CkSsh_OpenCustomChannel($this->_cPtr, $channelType);
    }

    public function OpenCustomChannelAsync($channelType)
    {
        $r = CkSsh_OpenCustomChannelAsync($this->_cPtr, $channelType);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function OpenDirectTcpIpChannel($targetHostname, $targetPort)
    {
        return CkSsh_OpenDirectTcpIpChannel($this->_cPtr, $targetHostname, $targetPort);
    }

    public function OpenDirectTcpIpChannelAsync($targetHostname, $targetPort)
    {
        $r = CkSsh_OpenDirectTcpIpChannelAsync($this->_cPtr, $targetHostname, $targetPort);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function OpenSessionChannel()
    {
        return CkSsh_OpenSessionChannel($this->_cPtr);
    }

    public function OpenSessionChannelAsync()
    {
        $r = CkSsh_OpenSessionChannelAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function peekReceivedText($channelNum, $charset)
    {
        return CkSsh_peekReceivedText($this->_cPtr, $channelNum, $charset);
    }

    public function QuickCmdCheck($pollTimeoutMs)
    {
        return CkSsh_QuickCmdCheck($this->_cPtr, $pollTimeoutMs);
    }

    public function QuickCmdCheckAsync($pollTimeoutMs)
    {
        $r = CkSsh_QuickCmdCheckAsync($this->_cPtr, $pollTimeoutMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function QuickCmdSend($command)
    {
        return CkSsh_QuickCmdSend($this->_cPtr, $command);
    }

    public function QuickCmdSendAsync($command)
    {
        $r = CkSsh_QuickCmdSendAsync($this->_cPtr, $command);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function quickCommand($command, $charset)
    {
        return CkSsh_quickCommand($this->_cPtr, $command, $charset);
    }

    public function QuickCommandAsync($command, $charset)
    {
        $r = CkSsh_QuickCommandAsync($this->_cPtr, $command, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function QuickShell()
    {
        return CkSsh_QuickShell($this->_cPtr);
    }

    public function QuickShellAsync()
    {
        $r = CkSsh_QuickShellAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReKey()
    {
        return CkSsh_ReKey($this->_cPtr);
    }

    public function ReKeyAsync()
    {
        $r = CkSsh_ReKeyAsync($this->_cPtr);
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
        return CkSsh_SaveLastError($this->_cPtr, $path);
    }

    public function SendIgnore()
    {
        return CkSsh_SendIgnore($this->_cPtr);
    }

    public function SendIgnoreAsync()
    {
        $r = CkSsh_SendIgnoreAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqExec($channelNum, $commandLine)
    {
        return CkSsh_SendReqExec($this->_cPtr, $channelNum, $commandLine);
    }

    public function SendReqExecAsync($channelNum, $commandLine)
    {
        $r = CkSsh_SendReqExecAsync($this->_cPtr, $channelNum, $commandLine);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqPty($channelNum, $termType, $widthInChars, $heightInChars, $widthInPixels, $heightInPixels)
    {
        return CkSsh_SendReqPty($this->_cPtr, $channelNum, $termType, $widthInChars, $heightInChars, $widthInPixels, $heightInPixels);
    }

    public function SendReqPtyAsync($channelNum, $termType, $widthInChars, $heightInChars, $widthInPixels, $heightInPixels)
    {
        $r = CkSsh_SendReqPtyAsync($this->_cPtr, $channelNum, $termType, $widthInChars, $heightInChars, $widthInPixels, $heightInPixels);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqSetEnv($channelNum, $name, $value)
    {
        return CkSsh_SendReqSetEnv($this->_cPtr, $channelNum, $name, $value);
    }

    public function SendReqSetEnvAsync($channelNum, $name, $value)
    {
        $r = CkSsh_SendReqSetEnvAsync($this->_cPtr, $channelNum, $name, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqShell($channelNum)
    {
        return CkSsh_SendReqShell($this->_cPtr, $channelNum);
    }

    public function SendReqShellAsync($channelNum)
    {
        $r = CkSsh_SendReqShellAsync($this->_cPtr, $channelNum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqSignal($channelNum, $signalName)
    {
        return CkSsh_SendReqSignal($this->_cPtr, $channelNum, $signalName);
    }

    public function SendReqSignalAsync($channelNum, $signalName)
    {
        $r = CkSsh_SendReqSignalAsync($this->_cPtr, $channelNum, $signalName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqSubsystem($channelNum, $subsystemName)
    {
        return CkSsh_SendReqSubsystem($this->_cPtr, $channelNum, $subsystemName);
    }

    public function SendReqSubsystemAsync($channelNum, $subsystemName)
    {
        $r = CkSsh_SendReqSubsystemAsync($this->_cPtr, $channelNum, $subsystemName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqWindowChange($channelNum, $widthInChars, $heightInRows, $pixWidth, $pixHeight)
    {
        return CkSsh_SendReqWindowChange($this->_cPtr, $channelNum, $widthInChars, $heightInRows, $pixWidth, $pixHeight);
    }

    public function SendReqWindowChangeAsync($channelNum, $widthInChars, $heightInRows, $pixWidth, $pixHeight)
    {
        $r = CkSsh_SendReqWindowChangeAsync($this->_cPtr, $channelNum, $widthInChars, $heightInRows, $pixWidth, $pixHeight);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqX11Forwarding($channelNum, $singleConnection, $authProt, $authCookie, $screenNum)
    {
        return CkSsh_SendReqX11Forwarding($this->_cPtr, $channelNum, $singleConnection, $authProt, $authCookie, $screenNum);
    }

    public function SendReqX11ForwardingAsync($channelNum, $singleConnection, $authProt, $authCookie, $screenNum)
    {
        $r = CkSsh_SendReqX11ForwardingAsync($this->_cPtr, $channelNum, $singleConnection, $authProt, $authCookie, $screenNum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqXonXoff($channelNum, $clientCanDo)
    {
        return CkSsh_SendReqXonXoff($this->_cPtr, $channelNum, $clientCanDo);
    }

    public function SendReqXonXoffAsync($channelNum, $clientCanDo)
    {
        $r = CkSsh_SendReqXonXoffAsync($this->_cPtr, $channelNum, $clientCanDo);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetTtyMode($ttyName, $ttyValue)
    {
        return CkSsh_SetTtyMode($this->_cPtr, $ttyName, $ttyValue);
    }

    public function startKeyboardAuth($login)
    {
        return CkSsh_startKeyboardAuth($this->_cPtr, $login);
    }

    public function StartKeyboardAuthAsync($login)
    {
        $r = CkSsh_StartKeyboardAuthAsync($this->_cPtr, $login);
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
        return CkSsh_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function WaitForChannelMessage($pollTimeoutMs)
    {
        return CkSsh_WaitForChannelMessage($this->_cPtr, $pollTimeoutMs);
    }

    public function WaitForChannelMessageAsync($pollTimeoutMs)
    {
        $r = CkSsh_WaitForChannelMessageAsync($this->_cPtr, $pollTimeoutMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }
}
