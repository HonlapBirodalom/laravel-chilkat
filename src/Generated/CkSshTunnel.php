<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkSshTunnel
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkSshTunnel') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkSshTunnel();
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
        return CkSshTunnel_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkSshTunnel_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkSshTunnel_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkSshTunnel_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkSshTunnel_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_AcceptLog($str)
    {
        CkSshTunnel_get_AcceptLog($this->_cPtr, $str);
    }

    public function acceptLog()
    {
        return CkSshTunnel_acceptLog($this->_cPtr);
    }

    public function put_AcceptLog($newVal)
    {
        CkSshTunnel_put_AcceptLog($this->_cPtr, $newVal);
    }

    public function get_AcceptLogPath($str)
    {
        CkSshTunnel_get_AcceptLogPath($this->_cPtr, $str);
    }

    public function acceptLogPath()
    {
        return CkSshTunnel_acceptLogPath($this->_cPtr);
    }

    public function put_AcceptLogPath($newVal)
    {
        CkSshTunnel_put_AcceptLogPath($this->_cPtr, $newVal);
    }

    public function get_ConnectTimeoutMs()
    {
        return CkSshTunnel_get_ConnectTimeoutMs($this->_cPtr);
    }

    public function put_ConnectTimeoutMs($newVal)
    {
        CkSshTunnel_put_ConnectTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkSshTunnel_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkSshTunnel_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkSshTunnel_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DestHostname($str)
    {
        CkSshTunnel_get_DestHostname($this->_cPtr, $str);
    }

    public function destHostname()
    {
        return CkSshTunnel_destHostname($this->_cPtr);
    }

    public function put_DestHostname($newVal)
    {
        CkSshTunnel_put_DestHostname($this->_cPtr, $newVal);
    }

    public function get_DestPort()
    {
        return CkSshTunnel_get_DestPort($this->_cPtr);
    }

    public function put_DestPort($newVal)
    {
        CkSshTunnel_put_DestPort($this->_cPtr, $newVal);
    }

    public function get_DynamicPortForwarding()
    {
        return CkSshTunnel_get_DynamicPortForwarding($this->_cPtr);
    }

    public function put_DynamicPortForwarding($newVal)
    {
        CkSshTunnel_put_DynamicPortForwarding($this->_cPtr, $newVal);
    }

    public function get_HostKeyFingerprint($str)
    {
        CkSshTunnel_get_HostKeyFingerprint($this->_cPtr, $str);
    }

    public function hostKeyFingerprint()
    {
        return CkSshTunnel_hostKeyFingerprint($this->_cPtr);
    }

    public function get_HttpProxyAuthMethod($str)
    {
        CkSshTunnel_get_HttpProxyAuthMethod($this->_cPtr, $str);
    }

    public function httpProxyAuthMethod()
    {
        return CkSshTunnel_httpProxyAuthMethod($this->_cPtr);
    }

    public function put_HttpProxyAuthMethod($newVal)
    {
        CkSshTunnel_put_HttpProxyAuthMethod($this->_cPtr, $newVal);
    }

    public function get_HttpProxyDomain($str)
    {
        CkSshTunnel_get_HttpProxyDomain($this->_cPtr, $str);
    }

    public function httpProxyDomain()
    {
        return CkSshTunnel_httpProxyDomain($this->_cPtr);
    }

    public function put_HttpProxyDomain($newVal)
    {
        CkSshTunnel_put_HttpProxyDomain($this->_cPtr, $newVal);
    }

    public function get_HttpProxyHostname($str)
    {
        CkSshTunnel_get_HttpProxyHostname($this->_cPtr, $str);
    }

    public function httpProxyHostname()
    {
        return CkSshTunnel_httpProxyHostname($this->_cPtr);
    }

    public function put_HttpProxyHostname($newVal)
    {
        CkSshTunnel_put_HttpProxyHostname($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPassword($str)
    {
        CkSshTunnel_get_HttpProxyPassword($this->_cPtr, $str);
    }

    public function httpProxyPassword()
    {
        return CkSshTunnel_httpProxyPassword($this->_cPtr);
    }

    public function put_HttpProxyPassword($newVal)
    {
        CkSshTunnel_put_HttpProxyPassword($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPort()
    {
        return CkSshTunnel_get_HttpProxyPort($this->_cPtr);
    }

    public function put_HttpProxyPort($newVal)
    {
        CkSshTunnel_put_HttpProxyPort($this->_cPtr, $newVal);
    }

    public function get_HttpProxyUsername($str)
    {
        CkSshTunnel_get_HttpProxyUsername($this->_cPtr, $str);
    }

    public function httpProxyUsername()
    {
        return CkSshTunnel_httpProxyUsername($this->_cPtr);
    }

    public function put_HttpProxyUsername($newVal)
    {
        CkSshTunnel_put_HttpProxyUsername($this->_cPtr, $newVal);
    }

    public function get_IdleTimeoutMs()
    {
        return CkSshTunnel_get_IdleTimeoutMs($this->_cPtr);
    }

    public function put_IdleTimeoutMs($newVal)
    {
        CkSshTunnel_put_IdleTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_InboundSocksPassword($str)
    {
        CkSshTunnel_get_InboundSocksPassword($this->_cPtr, $str);
    }

    public function inboundSocksPassword()
    {
        return CkSshTunnel_inboundSocksPassword($this->_cPtr);
    }

    public function put_InboundSocksPassword($newVal)
    {
        CkSshTunnel_put_InboundSocksPassword($this->_cPtr, $newVal);
    }

    public function get_InboundSocksUsername($str)
    {
        CkSshTunnel_get_InboundSocksUsername($this->_cPtr, $str);
    }

    public function inboundSocksUsername()
    {
        return CkSshTunnel_inboundSocksUsername($this->_cPtr);
    }

    public function put_InboundSocksUsername($newVal)
    {
        CkSshTunnel_put_InboundSocksUsername($this->_cPtr, $newVal);
    }

    public function get_IsAccepting()
    {
        return CkSshTunnel_get_IsAccepting($this->_cPtr);
    }

    public function get_KeepAcceptLog()
    {
        return CkSshTunnel_get_KeepAcceptLog($this->_cPtr);
    }

    public function put_KeepAcceptLog($newVal)
    {
        CkSshTunnel_put_KeepAcceptLog($this->_cPtr, $newVal);
    }

    public function get_KeepTunnelLog()
    {
        return CkSshTunnel_get_KeepTunnelLog($this->_cPtr);
    }

    public function put_KeepTunnelLog($newVal)
    {
        CkSshTunnel_put_KeepTunnelLog($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkSshTunnel_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkSshTunnel_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkSshTunnel_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkSshTunnel_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkSshTunnel_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkSshTunnel_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkSshTunnel_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkSshTunnel_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_ListenBindIpAddress($str)
    {
        CkSshTunnel_get_ListenBindIpAddress($this->_cPtr, $str);
    }

    public function listenBindIpAddress()
    {
        return CkSshTunnel_listenBindIpAddress($this->_cPtr);
    }

    public function put_ListenBindIpAddress($newVal)
    {
        CkSshTunnel_put_ListenBindIpAddress($this->_cPtr, $newVal);
    }

    public function get_ListenPort()
    {
        return CkSshTunnel_get_ListenPort($this->_cPtr);
    }

    public function get_OutboundBindIpAddress($str)
    {
        CkSshTunnel_get_OutboundBindIpAddress($this->_cPtr, $str);
    }

    public function outboundBindIpAddress()
    {
        return CkSshTunnel_outboundBindIpAddress($this->_cPtr);
    }

    public function put_OutboundBindIpAddress($newVal)
    {
        CkSshTunnel_put_OutboundBindIpAddress($this->_cPtr, $newVal);
    }

    public function get_OutboundBindPort()
    {
        return CkSshTunnel_get_OutboundBindPort($this->_cPtr);
    }

    public function put_OutboundBindPort($newVal)
    {
        CkSshTunnel_put_OutboundBindPort($this->_cPtr, $newVal);
    }

    public function get_PreferIpv6()
    {
        return CkSshTunnel_get_PreferIpv6($this->_cPtr);
    }

    public function put_PreferIpv6($newVal)
    {
        CkSshTunnel_put_PreferIpv6($this->_cPtr, $newVal);
    }

    public function get_SocksHostname($str)
    {
        CkSshTunnel_get_SocksHostname($this->_cPtr, $str);
    }

    public function socksHostname()
    {
        return CkSshTunnel_socksHostname($this->_cPtr);
    }

    public function put_SocksHostname($newVal)
    {
        CkSshTunnel_put_SocksHostname($this->_cPtr, $newVal);
    }

    public function get_SocksPassword($str)
    {
        CkSshTunnel_get_SocksPassword($this->_cPtr, $str);
    }

    public function socksPassword()
    {
        return CkSshTunnel_socksPassword($this->_cPtr);
    }

    public function put_SocksPassword($newVal)
    {
        CkSshTunnel_put_SocksPassword($this->_cPtr, $newVal);
    }

    public function get_SocksPort()
    {
        return CkSshTunnel_get_SocksPort($this->_cPtr);
    }

    public function put_SocksPort($newVal)
    {
        CkSshTunnel_put_SocksPort($this->_cPtr, $newVal);
    }

    public function get_SocksUsername($str)
    {
        CkSshTunnel_get_SocksUsername($this->_cPtr, $str);
    }

    public function socksUsername()
    {
        return CkSshTunnel_socksUsername($this->_cPtr);
    }

    public function put_SocksUsername($newVal)
    {
        CkSshTunnel_put_SocksUsername($this->_cPtr, $newVal);
    }

    public function get_SocksVersion()
    {
        return CkSshTunnel_get_SocksVersion($this->_cPtr);
    }

    public function put_SocksVersion($newVal)
    {
        CkSshTunnel_put_SocksVersion($this->_cPtr, $newVal);
    }

    public function get_SoRcvBuf()
    {
        return CkSshTunnel_get_SoRcvBuf($this->_cPtr);
    }

    public function put_SoRcvBuf($newVal)
    {
        CkSshTunnel_put_SoRcvBuf($this->_cPtr, $newVal);
    }

    public function get_SoSndBuf()
    {
        return CkSshTunnel_get_SoSndBuf($this->_cPtr);
    }

    public function put_SoSndBuf($newVal)
    {
        CkSshTunnel_put_SoSndBuf($this->_cPtr, $newVal);
    }

    public function get_TcpNoDelay()
    {
        return CkSshTunnel_get_TcpNoDelay($this->_cPtr);
    }

    public function put_TcpNoDelay($newVal)
    {
        CkSshTunnel_put_TcpNoDelay($this->_cPtr, $newVal);
    }

    public function get_TunnelLog($str)
    {
        CkSshTunnel_get_TunnelLog($this->_cPtr, $str);
    }

    public function tunnelLog()
    {
        return CkSshTunnel_tunnelLog($this->_cPtr);
    }

    public function put_TunnelLog($newVal)
    {
        CkSshTunnel_put_TunnelLog($this->_cPtr, $newVal);
    }

    public function get_TunnelLogPath($str)
    {
        CkSshTunnel_get_TunnelLogPath($this->_cPtr, $str);
    }

    public function tunnelLogPath()
    {
        return CkSshTunnel_tunnelLogPath($this->_cPtr);
    }

    public function put_TunnelLogPath($newVal)
    {
        CkSshTunnel_put_TunnelLogPath($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkSshTunnel_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkSshTunnel_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkSshTunnel_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkSshTunnel_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkSshTunnel_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkSshTunnel_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkSshTunnel_version($this->_cPtr);
    }

    public function AuthenticatePk($username, $privateKey)
    {
        return CkSshTunnel_AuthenticatePk($this->_cPtr, $username, $privateKey);
    }

    public function AuthenticatePkAsync($username, $privateKey)
    {
        $r = CkSshTunnel_AuthenticatePkAsync($this->_cPtr, $username, $privateKey);
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
        return CkSshTunnel_AuthenticatePw($this->_cPtr, $login, $password);
    }

    public function AuthenticatePwAsync($login, $password)
    {
        $r = CkSshTunnel_AuthenticatePwAsync($this->_cPtr, $login, $password);
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
        return CkSshTunnel_AuthenticatePwPk($this->_cPtr, $username, $password, $privateKey);
    }

    public function AuthenticatePwPkAsync($username, $password, $privateKey)
    {
        $r = CkSshTunnel_AuthenticatePwPkAsync($this->_cPtr, $username, $password, $privateKey);
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
        return CkSshTunnel_AuthenticateSecPw($this->_cPtr, $login, $password);
    }

    public function AuthenticateSecPwAsync($login, $password)
    {
        $r = CkSshTunnel_AuthenticateSecPwAsync($this->_cPtr, $login, $password);
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
        return CkSshTunnel_AuthenticateSecPwPk($this->_cPtr, $username, $password, $privateKey);
    }

    public function AuthenticateSecPwPkAsync($username, $password, $privateKey)
    {
        $r = CkSshTunnel_AuthenticateSecPwPkAsync($this->_cPtr, $username, $password, $privateKey);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function BeginAccepting($listenPort)
    {
        return CkSshTunnel_BeginAccepting($this->_cPtr, $listenPort);
    }

    public function BeginAcceptingAsync($listenPort)
    {
        $r = CkSshTunnel_BeginAcceptingAsync($this->_cPtr, $listenPort);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CloseTunnel($waitForThreads)
    {
        return CkSshTunnel_CloseTunnel($this->_cPtr, $waitForThreads);
    }

    public function Connect($hostname, $port)
    {
        return CkSshTunnel_Connect($this->_cPtr, $hostname, $port);
    }

    public function ConnectAsync($hostname, $port)
    {
        $r = CkSshTunnel_ConnectAsync($this->_cPtr, $hostname, $port);
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
        return CkSshTunnel_ConnectThroughSsh($this->_cPtr, $ssh, $hostname, $port);
    }

    public function ConnectThroughSshAsync($ssh, $hostname, $port)
    {
        $r = CkSshTunnel_ConnectThroughSshAsync($this->_cPtr, $ssh, $hostname, $port);
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
        return CkSshTunnel_continueKeyboardAuth($this->_cPtr, $response);
    }

    public function ContinueKeyboardAuthAsync($response)
    {
        $r = CkSshTunnel_ContinueKeyboardAuthAsync($this->_cPtr, $response);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DisconnectAllClients($waitForThreads)
    {
        return CkSshTunnel_DisconnectAllClients($this->_cPtr, $waitForThreads);
    }

    public function getCurrentState()
    {
        return CkSshTunnel_getCurrentState($this->_cPtr);
    }

    public function currentState()
    {
        return CkSshTunnel_currentState($this->_cPtr);
    }

    public function IsSshConnected()
    {
        return CkSshTunnel_IsSshConnected($this->_cPtr);
    }

    public function LoadTaskCaller($task)
    {
        return CkSshTunnel_LoadTaskCaller($this->_cPtr, $task);
    }

    public function SaveLastError($path)
    {
        return CkSshTunnel_SaveLastError($this->_cPtr, $path);
    }

    public function startKeyboardAuth($login)
    {
        return CkSshTunnel_startKeyboardAuth($this->_cPtr, $login);
    }

    public function StartKeyboardAuthAsync($login)
    {
        $r = CkSshTunnel_StartKeyboardAuthAsync($this->_cPtr, $login);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function StopAccepting($waitForThread)
    {
        return CkSshTunnel_StopAccepting($this->_cPtr, $waitForThread);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkSshTunnel_UnlockComponent($this->_cPtr, $unlockCode);
    }
}
