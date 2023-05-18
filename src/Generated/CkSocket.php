<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkSocket
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkSocket') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkSocket();
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
        return CkSocket_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkSocket_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkSocket_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkSocket_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkSocket_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_AcceptFailReason()
    {
        return CkSocket_get_AcceptFailReason($this->_cPtr);
    }

    public function get_AlpnProtocol($str)
    {
        CkSocket_get_AlpnProtocol($this->_cPtr, $str);
    }

    public function alpnProtocol()
    {
        return CkSocket_alpnProtocol($this->_cPtr);
    }

    public function put_AlpnProtocol($newVal)
    {
        CkSocket_put_AlpnProtocol($this->_cPtr, $newVal);
    }

    public function get_BandwidthThrottleDown()
    {
        return CkSocket_get_BandwidthThrottleDown($this->_cPtr);
    }

    public function put_BandwidthThrottleDown($newVal)
    {
        CkSocket_put_BandwidthThrottleDown($this->_cPtr, $newVal);
    }

    public function get_BandwidthThrottleUp()
    {
        return CkSocket_get_BandwidthThrottleUp($this->_cPtr);
    }

    public function put_BandwidthThrottleUp($newVal)
    {
        CkSocket_put_BandwidthThrottleUp($this->_cPtr, $newVal);
    }

    public function get_BigEndian()
    {
        return CkSocket_get_BigEndian($this->_cPtr);
    }

    public function put_BigEndian($newVal)
    {
        CkSocket_put_BigEndian($this->_cPtr, $newVal);
    }

    public function get_ClientIpAddress($str)
    {
        CkSocket_get_ClientIpAddress($this->_cPtr, $str);
    }

    public function clientIpAddress()
    {
        return CkSocket_clientIpAddress($this->_cPtr);
    }

    public function put_ClientIpAddress($newVal)
    {
        CkSocket_put_ClientIpAddress($this->_cPtr, $newVal);
    }

    public function get_ClientPort()
    {
        return CkSocket_get_ClientPort($this->_cPtr);
    }

    public function put_ClientPort($newVal)
    {
        CkSocket_put_ClientPort($this->_cPtr, $newVal);
    }

    public function get_ConnectFailReason()
    {
        return CkSocket_get_ConnectFailReason($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkSocket_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkSocket_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkSocket_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_ElapsedSeconds()
    {
        return CkSocket_get_ElapsedSeconds($this->_cPtr);
    }

    public function get_HeartbeatMs()
    {
        return CkSocket_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkSocket_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_HttpProxyAuthMethod($str)
    {
        CkSocket_get_HttpProxyAuthMethod($this->_cPtr, $str);
    }

    public function httpProxyAuthMethod()
    {
        return CkSocket_httpProxyAuthMethod($this->_cPtr);
    }

    public function put_HttpProxyAuthMethod($newVal)
    {
        CkSocket_put_HttpProxyAuthMethod($this->_cPtr, $newVal);
    }

    public function get_HttpProxyDomain($str)
    {
        CkSocket_get_HttpProxyDomain($this->_cPtr, $str);
    }

    public function httpProxyDomain()
    {
        return CkSocket_httpProxyDomain($this->_cPtr);
    }

    public function put_HttpProxyDomain($newVal)
    {
        CkSocket_put_HttpProxyDomain($this->_cPtr, $newVal);
    }

    public function get_HttpProxyForHttp()
    {
        return CkSocket_get_HttpProxyForHttp($this->_cPtr);
    }

    public function put_HttpProxyForHttp($newVal)
    {
        CkSocket_put_HttpProxyForHttp($this->_cPtr, $newVal);
    }

    public function get_HttpProxyHostname($str)
    {
        CkSocket_get_HttpProxyHostname($this->_cPtr, $str);
    }

    public function httpProxyHostname()
    {
        return CkSocket_httpProxyHostname($this->_cPtr);
    }

    public function put_HttpProxyHostname($newVal)
    {
        CkSocket_put_HttpProxyHostname($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPassword($str)
    {
        CkSocket_get_HttpProxyPassword($this->_cPtr, $str);
    }

    public function httpProxyPassword()
    {
        return CkSocket_httpProxyPassword($this->_cPtr);
    }

    public function put_HttpProxyPassword($newVal)
    {
        CkSocket_put_HttpProxyPassword($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPort()
    {
        return CkSocket_get_HttpProxyPort($this->_cPtr);
    }

    public function put_HttpProxyPort($newVal)
    {
        CkSocket_put_HttpProxyPort($this->_cPtr, $newVal);
    }

    public function get_HttpProxyUsername($str)
    {
        CkSocket_get_HttpProxyUsername($this->_cPtr, $str);
    }

    public function httpProxyUsername()
    {
        return CkSocket_httpProxyUsername($this->_cPtr);
    }

    public function put_HttpProxyUsername($newVal)
    {
        CkSocket_put_HttpProxyUsername($this->_cPtr, $newVal);
    }

    public function get_IsConnected()
    {
        return CkSocket_get_IsConnected($this->_cPtr);
    }

    public function get_KeepAlive()
    {
        return CkSocket_get_KeepAlive($this->_cPtr);
    }

    public function put_KeepAlive($newVal)
    {
        CkSocket_put_KeepAlive($this->_cPtr, $newVal);
    }

    public function get_KeepSessionLog()
    {
        return CkSocket_get_KeepSessionLog($this->_cPtr);
    }

    public function put_KeepSessionLog($newVal)
    {
        CkSocket_put_KeepSessionLog($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkSocket_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkSocket_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkSocket_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkSocket_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkSocket_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkSocket_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodFailed()
    {
        return CkSocket_get_LastMethodFailed($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkSocket_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkSocket_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_ListenIpv6()
    {
        return CkSocket_get_ListenIpv6($this->_cPtr);
    }

    public function put_ListenIpv6($newVal)
    {
        CkSocket_put_ListenIpv6($this->_cPtr, $newVal);
    }

    public function get_ListenPort()
    {
        return CkSocket_get_ListenPort($this->_cPtr);
    }

    public function get_LocalIpAddress($str)
    {
        CkSocket_get_LocalIpAddress($this->_cPtr, $str);
    }

    public function localIpAddress()
    {
        return CkSocket_localIpAddress($this->_cPtr);
    }

    public function get_LocalPort()
    {
        return CkSocket_get_LocalPort($this->_cPtr);
    }

    public function get_MaxReadIdleMs()
    {
        return CkSocket_get_MaxReadIdleMs($this->_cPtr);
    }

    public function put_MaxReadIdleMs($newVal)
    {
        CkSocket_put_MaxReadIdleMs($this->_cPtr, $newVal);
    }

    public function get_MaxSendIdleMs()
    {
        return CkSocket_get_MaxSendIdleMs($this->_cPtr);
    }

    public function put_MaxSendIdleMs($newVal)
    {
        CkSocket_put_MaxSendIdleMs($this->_cPtr, $newVal);
    }

    public function get_MyIpAddress($str)
    {
        CkSocket_get_MyIpAddress($this->_cPtr, $str);
    }

    public function myIpAddress()
    {
        return CkSocket_myIpAddress($this->_cPtr);
    }

    public function get_NumReceivedClientCerts()
    {
        return CkSocket_get_NumReceivedClientCerts($this->_cPtr);
    }

    public function get_NumSocketsInSet()
    {
        return CkSocket_get_NumSocketsInSet($this->_cPtr);
    }

    public function get_NumSslAcceptableClientCAs()
    {
        return CkSocket_get_NumSslAcceptableClientCAs($this->_cPtr);
    }

    public function get_ObjectId()
    {
        return CkSocket_get_ObjectId($this->_cPtr);
    }

    public function get_PercentDoneScale()
    {
        return CkSocket_get_PercentDoneScale($this->_cPtr);
    }

    public function put_PercentDoneScale($newVal)
    {
        CkSocket_put_PercentDoneScale($this->_cPtr, $newVal);
    }

    public function get_PreferIpv6()
    {
        return CkSocket_get_PreferIpv6($this->_cPtr);
    }

    public function put_PreferIpv6($newVal)
    {
        CkSocket_put_PreferIpv6($this->_cPtr, $newVal);
    }

    public function get_RcvBytesPerSec()
    {
        return CkSocket_get_RcvBytesPerSec($this->_cPtr);
    }

    public function get_ReceivedCount()
    {
        return CkSocket_get_ReceivedCount($this->_cPtr);
    }

    public function put_ReceivedCount($newVal)
    {
        CkSocket_put_ReceivedCount($this->_cPtr, $newVal);
    }

    public function get_ReceivedInt()
    {
        return CkSocket_get_ReceivedInt($this->_cPtr);
    }

    public function put_ReceivedInt($newVal)
    {
        CkSocket_put_ReceivedInt($this->_cPtr, $newVal);
    }

    public function get_ReceiveFailReason()
    {
        return CkSocket_get_ReceiveFailReason($this->_cPtr);
    }

    public function get_ReceivePacketSize()
    {
        return CkSocket_get_ReceivePacketSize($this->_cPtr);
    }

    public function put_ReceivePacketSize($newVal)
    {
        CkSocket_put_ReceivePacketSize($this->_cPtr, $newVal);
    }

    public function get_RemoteIpAddress($str)
    {
        CkSocket_get_RemoteIpAddress($this->_cPtr, $str);
    }

    public function remoteIpAddress()
    {
        return CkSocket_remoteIpAddress($this->_cPtr);
    }

    public function get_RemotePort()
    {
        return CkSocket_get_RemotePort($this->_cPtr);
    }

    public function get_RequireSslCertVerify()
    {
        return CkSocket_get_RequireSslCertVerify($this->_cPtr);
    }

    public function put_RequireSslCertVerify($newVal)
    {
        CkSocket_put_RequireSslCertVerify($this->_cPtr, $newVal);
    }

    public function get_SelectorIndex()
    {
        return CkSocket_get_SelectorIndex($this->_cPtr);
    }

    public function put_SelectorIndex($newVal)
    {
        CkSocket_put_SelectorIndex($this->_cPtr, $newVal);
    }

    public function get_SelectorReadIndex()
    {
        return CkSocket_get_SelectorReadIndex($this->_cPtr);
    }

    public function put_SelectorReadIndex($newVal)
    {
        CkSocket_put_SelectorReadIndex($this->_cPtr, $newVal);
    }

    public function get_SelectorWriteIndex()
    {
        return CkSocket_get_SelectorWriteIndex($this->_cPtr);
    }

    public function put_SelectorWriteIndex($newVal)
    {
        CkSocket_put_SelectorWriteIndex($this->_cPtr, $newVal);
    }

    public function get_SendBytesPerSec()
    {
        return CkSocket_get_SendBytesPerSec($this->_cPtr);
    }

    public function get_SendFailReason()
    {
        return CkSocket_get_SendFailReason($this->_cPtr);
    }

    public function get_SendPacketSize()
    {
        return CkSocket_get_SendPacketSize($this->_cPtr);
    }

    public function put_SendPacketSize($newVal)
    {
        CkSocket_put_SendPacketSize($this->_cPtr, $newVal);
    }

    public function get_SessionLog($str)
    {
        CkSocket_get_SessionLog($this->_cPtr, $str);
    }

    public function sessionLog()
    {
        return CkSocket_sessionLog($this->_cPtr);
    }

    public function get_SessionLogEncoding($str)
    {
        CkSocket_get_SessionLogEncoding($this->_cPtr, $str);
    }

    public function sessionLogEncoding()
    {
        return CkSocket_sessionLogEncoding($this->_cPtr);
    }

    public function put_SessionLogEncoding($newVal)
    {
        CkSocket_put_SessionLogEncoding($this->_cPtr, $newVal);
    }

    public function get_SniHostname($str)
    {
        CkSocket_get_SniHostname($this->_cPtr, $str);
    }

    public function sniHostname()
    {
        return CkSocket_sniHostname($this->_cPtr);
    }

    public function put_SniHostname($newVal)
    {
        CkSocket_put_SniHostname($this->_cPtr, $newVal);
    }

    public function get_SocksHostname($str)
    {
        CkSocket_get_SocksHostname($this->_cPtr, $str);
    }

    public function socksHostname()
    {
        return CkSocket_socksHostname($this->_cPtr);
    }

    public function put_SocksHostname($newVal)
    {
        CkSocket_put_SocksHostname($this->_cPtr, $newVal);
    }

    public function get_SocksPassword($str)
    {
        CkSocket_get_SocksPassword($this->_cPtr, $str);
    }

    public function socksPassword()
    {
        return CkSocket_socksPassword($this->_cPtr);
    }

    public function put_SocksPassword($newVal)
    {
        CkSocket_put_SocksPassword($this->_cPtr, $newVal);
    }

    public function get_SocksPort()
    {
        return CkSocket_get_SocksPort($this->_cPtr);
    }

    public function put_SocksPort($newVal)
    {
        CkSocket_put_SocksPort($this->_cPtr, $newVal);
    }

    public function get_SocksUsername($str)
    {
        CkSocket_get_SocksUsername($this->_cPtr, $str);
    }

    public function socksUsername()
    {
        return CkSocket_socksUsername($this->_cPtr);
    }

    public function put_SocksUsername($newVal)
    {
        CkSocket_put_SocksUsername($this->_cPtr, $newVal);
    }

    public function get_SocksVersion()
    {
        return CkSocket_get_SocksVersion($this->_cPtr);
    }

    public function put_SocksVersion($newVal)
    {
        CkSocket_put_SocksVersion($this->_cPtr, $newVal);
    }

    public function get_SoRcvBuf()
    {
        return CkSocket_get_SoRcvBuf($this->_cPtr);
    }

    public function put_SoRcvBuf($newVal)
    {
        CkSocket_put_SoRcvBuf($this->_cPtr, $newVal);
    }

    public function get_SoReuseAddr()
    {
        return CkSocket_get_SoReuseAddr($this->_cPtr);
    }

    public function put_SoReuseAddr($newVal)
    {
        CkSocket_put_SoReuseAddr($this->_cPtr, $newVal);
    }

    public function get_SoSndBuf()
    {
        return CkSocket_get_SoSndBuf($this->_cPtr);
    }

    public function put_SoSndBuf($newVal)
    {
        CkSocket_put_SoSndBuf($this->_cPtr, $newVal);
    }

    public function get_Ssl()
    {
        return CkSocket_get_Ssl($this->_cPtr);
    }

    public function put_Ssl($newVal)
    {
        CkSocket_put_Ssl($this->_cPtr, $newVal);
    }

    public function get_SslAllowedCiphers($str)
    {
        CkSocket_get_SslAllowedCiphers($this->_cPtr, $str);
    }

    public function sslAllowedCiphers()
    {
        return CkSocket_sslAllowedCiphers($this->_cPtr);
    }

    public function put_SslAllowedCiphers($newVal)
    {
        CkSocket_put_SslAllowedCiphers($this->_cPtr, $newVal);
    }

    public function get_SslProtocol($str)
    {
        CkSocket_get_SslProtocol($this->_cPtr, $str);
    }

    public function sslProtocol()
    {
        return CkSocket_sslProtocol($this->_cPtr);
    }

    public function put_SslProtocol($newVal)
    {
        CkSocket_put_SslProtocol($this->_cPtr, $newVal);
    }

    public function get_StringCharset($str)
    {
        CkSocket_get_StringCharset($this->_cPtr, $str);
    }

    public function stringCharset()
    {
        return CkSocket_stringCharset($this->_cPtr);
    }

    public function put_StringCharset($newVal)
    {
        CkSocket_put_StringCharset($this->_cPtr, $newVal);
    }

    public function get_TcpNoDelay()
    {
        return CkSocket_get_TcpNoDelay($this->_cPtr);
    }

    public function put_TcpNoDelay($newVal)
    {
        CkSocket_put_TcpNoDelay($this->_cPtr, $newVal);
    }

    public function get_TlsCipherSuite($str)
    {
        CkSocket_get_TlsCipherSuite($this->_cPtr, $str);
    }

    public function tlsCipherSuite()
    {
        return CkSocket_tlsCipherSuite($this->_cPtr);
    }

    public function get_TlsPinSet($str)
    {
        CkSocket_get_TlsPinSet($this->_cPtr, $str);
    }

    public function tlsPinSet()
    {
        return CkSocket_tlsPinSet($this->_cPtr);
    }

    public function put_TlsPinSet($newVal)
    {
        CkSocket_put_TlsPinSet($this->_cPtr, $newVal);
    }

    public function get_TlsVersion($str)
    {
        CkSocket_get_TlsVersion($this->_cPtr, $str);
    }

    public function tlsVersion()
    {
        return CkSocket_tlsVersion($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkSocket_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkSocket_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkSocket_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UserData($str)
    {
        CkSocket_get_UserData($this->_cPtr, $str);
    }

    public function userData()
    {
        return CkSocket_userData($this->_cPtr);
    }

    public function put_UserData($newVal)
    {
        CkSocket_put_UserData($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkSocket_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkSocket_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkSocket_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkSocket_version($this->_cPtr);
    }

    public function AcceptNextConnection($maxWaitMs)
    {
        $r = CkSocket_AcceptNextConnection($this->_cPtr, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkSocket($r);
        }

        return $r;
    }

    public function AcceptNextConnectionAsync($maxWaitMs)
    {
        $r = CkSocket_AcceptNextConnectionAsync($this->_cPtr, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AddSslAcceptableClientCaDn($certAuthDN)
    {
        return CkSocket_AddSslAcceptableClientCaDn($this->_cPtr, $certAuthDN);
    }

    public function BindAndListen($port, $backLog)
    {
        return CkSocket_BindAndListen($this->_cPtr, $port, $backLog);
    }

    public function BindAndListenAsync($port, $backLog)
    {
        $r = CkSocket_BindAndListenAsync($this->_cPtr, $port, $backLog);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function BindAndListenPortRange($beginPort, $endPort, $backLog)
    {
        return CkSocket_BindAndListenPortRange($this->_cPtr, $beginPort, $endPort, $backLog);
    }

    public function BindAndListenPortRangeAsync($beginPort, $endPort, $backLog)
    {
        $r = CkSocket_BindAndListenPortRangeAsync($this->_cPtr, $beginPort, $endPort, $backLog);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function buildHttpGetRequest($url)
    {
        return CkSocket_buildHttpGetRequest($this->_cPtr, $url);
    }

    public function CheckWriteable($maxWaitMs)
    {
        return CkSocket_CheckWriteable($this->_cPtr, $maxWaitMs);
    }

    public function CheckWriteableAsync($maxWaitMs)
    {
        $r = CkSocket_CheckWriteableAsync($this->_cPtr, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ClearSessionLog()
    {
        CkSocket_ClearSessionLog($this->_cPtr);
    }

    public function CloneSocket()
    {
        $r = CkSocket_CloneSocket($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkSocket($r);
        }

        return $r;
    }

    public function Close($maxWaitMs)
    {
        return CkSocket_Close($this->_cPtr, $maxWaitMs);
    }

    public function CloseAsync($maxWaitMs)
    {
        $r = CkSocket_CloseAsync($this->_cPtr, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Connect($hostname, $port, $ssl, $maxWaitMs)
    {
        return CkSocket_Connect($this->_cPtr, $hostname, $port, $ssl, $maxWaitMs);
    }

    public function ConnectAsync($hostname, $port, $ssl, $maxWaitMs)
    {
        $r = CkSocket_ConnectAsync($this->_cPtr, $hostname, $port, $ssl, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ConvertFromSsl()
    {
        return CkSocket_ConvertFromSsl($this->_cPtr);
    }

    public function ConvertFromSslAsync()
    {
        $r = CkSocket_ConvertFromSslAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ConvertToSsl()
    {
        return CkSocket_ConvertToSsl($this->_cPtr);
    }

    public function ConvertToSslAsync()
    {
        $r = CkSocket_ConvertToSslAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DnsCacheClear()
    {
        CkSocket_DnsCacheClear($this->_cPtr);
    }

    public function dnsLookup($hostname, $maxWaitMs)
    {
        return CkSocket_dnsLookup($this->_cPtr, $hostname, $maxWaitMs);
    }

    public function DnsLookupAsync($hostname, $maxWaitMs)
    {
        $r = CkSocket_DnsLookupAsync($this->_cPtr, $hostname, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetMyCert()
    {
        $r = CkSocket_GetMyCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetReceivedClientCert($index)
    {
        $r = CkSocket_GetReceivedClientCert($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function getSslAcceptableClientCaDn($index)
    {
        return CkSocket_getSslAcceptableClientCaDn($this->_cPtr, $index);
    }

    public function sslAcceptableClientCaDn($index)
    {
        return CkSocket_sslAcceptableClientCaDn($this->_cPtr, $index);
    }

    public function GetSslServerCert()
    {
        $r = CkSocket_GetSslServerCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function InitSslServer($cert)
    {
        return CkSocket_InitSslServer($this->_cPtr, $cert);
    }

    public function IsUnlocked()
    {
        return CkSocket_IsUnlocked($this->_cPtr);
    }

    public function LastJsonData()
    {
        $r = CkSocket_LastJsonData($this->_cPtr);
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
        return CkSocket_LoadTaskCaller($this->_cPtr, $task);
    }

    public function LoadTaskResult($task)
    {
        return CkSocket_LoadTaskResult($this->_cPtr, $task);
    }

    public function PollDataAvailable()
    {
        return CkSocket_PollDataAvailable($this->_cPtr);
    }

    public function PollDataAvailableAsync()
    {
        $r = CkSocket_PollDataAvailableAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveBd($binData)
    {
        return CkSocket_ReceiveBd($this->_cPtr, $binData);
    }

    public function ReceiveBdAsync($binData)
    {
        $r = CkSocket_ReceiveBdAsync($this->_cPtr, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveBdN($numBytes, $binData)
    {
        return CkSocket_ReceiveBdN($this->_cPtr, $numBytes, $binData);
    }

    public function ReceiveBdNAsync($numBytes, $binData)
    {
        $r = CkSocket_ReceiveBdNAsync($this->_cPtr, $numBytes, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveByte($bUnsigned)
    {
        return CkSocket_ReceiveByte($this->_cPtr, $bUnsigned);
    }

    public function ReceiveByteAsync($bUnsigned)
    {
        $r = CkSocket_ReceiveByteAsync($this->_cPtr, $bUnsigned);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveBytes($outData)
    {
        return CkSocket_ReceiveBytes($this->_cPtr, $outData);
    }

    public function ReceiveBytesAsync()
    {
        $r = CkSocket_ReceiveBytesAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function receiveBytesENC($encodingAlg)
    {
        return CkSocket_receiveBytesENC($this->_cPtr, $encodingAlg);
    }

    public function ReceiveBytesENCAsync($encodingAlg)
    {
        $r = CkSocket_ReceiveBytesENCAsync($this->_cPtr, $encodingAlg);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveBytesN($numBytes, $outData)
    {
        return CkSocket_ReceiveBytesN($this->_cPtr, $numBytes, $outData);
    }

    public function ReceiveBytesNAsync($numBytes)
    {
        $r = CkSocket_ReceiveBytesNAsync($this->_cPtr, $numBytes);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveBytesToFile($appendFilename)
    {
        return CkSocket_ReceiveBytesToFile($this->_cPtr, $appendFilename);
    }

    public function ReceiveBytesToFileAsync($appendFilename)
    {
        $r = CkSocket_ReceiveBytesToFileAsync($this->_cPtr, $appendFilename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveCount()
    {
        return CkSocket_ReceiveCount($this->_cPtr);
    }

    public function ReceiveCountAsync()
    {
        $r = CkSocket_ReceiveCountAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveInt16($bigEndian, $bUnsigned)
    {
        return CkSocket_ReceiveInt16($this->_cPtr, $bigEndian, $bUnsigned);
    }

    public function ReceiveInt16Async($bigEndian, $bUnsigned)
    {
        $r = CkSocket_ReceiveInt16Async($this->_cPtr, $bigEndian, $bUnsigned);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveInt32($bigEndian)
    {
        return CkSocket_ReceiveInt32($this->_cPtr, $bigEndian);
    }

    public function ReceiveInt32Async($bigEndian)
    {
        $r = CkSocket_ReceiveInt32Async($this->_cPtr, $bigEndian);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function receiveNBytesENC($numBytes, $encodingAlg)
    {
        return CkSocket_receiveNBytesENC($this->_cPtr, $numBytes, $encodingAlg);
    }

    public function ReceiveNBytesENCAsync($numBytes, $encodingAlg)
    {
        $r = CkSocket_ReceiveNBytesENCAsync($this->_cPtr, $numBytes, $encodingAlg);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveSb($sb)
    {
        return CkSocket_ReceiveSb($this->_cPtr, $sb);
    }

    public function ReceiveSbAsync($sb)
    {
        $r = CkSocket_ReceiveSbAsync($this->_cPtr, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function receiveString()
    {
        return CkSocket_receiveString($this->_cPtr);
    }

    public function ReceiveStringAsync()
    {
        $r = CkSocket_ReceiveStringAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function receiveStringMaxN($maxByteCount)
    {
        return CkSocket_receiveStringMaxN($this->_cPtr, $maxByteCount);
    }

    public function ReceiveStringMaxNAsync($maxByteCount)
    {
        $r = CkSocket_ReceiveStringMaxNAsync($this->_cPtr, $maxByteCount);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function receiveStringUntilByte($lookForByte)
    {
        return CkSocket_receiveStringUntilByte($this->_cPtr, $lookForByte);
    }

    public function ReceiveStringUntilByteAsync($lookForByte)
    {
        $r = CkSocket_ReceiveStringUntilByteAsync($this->_cPtr, $lookForByte);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function receiveToCRLF()
    {
        return CkSocket_receiveToCRLF($this->_cPtr);
    }

    public function ReceiveToCRLFAsync()
    {
        $r = CkSocket_ReceiveToCRLFAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveUntilByte($lookForByte, $outBytes)
    {
        return CkSocket_ReceiveUntilByte($this->_cPtr, $lookForByte, $outBytes);
    }

    public function ReceiveUntilByteAsync($lookForByte)
    {
        $r = CkSocket_ReceiveUntilByteAsync($this->_cPtr, $lookForByte);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReceiveUntilByteBd($lookForByte, $bd)
    {
        return CkSocket_ReceiveUntilByteBd($this->_cPtr, $lookForByte, $bd);
    }

    public function ReceiveUntilByteBdAsync($lookForByte, $bd)
    {
        $r = CkSocket_ReceiveUntilByteBdAsync($this->_cPtr, $lookForByte, $bd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function receiveUntilMatch($matchStr)
    {
        return CkSocket_receiveUntilMatch($this->_cPtr, $matchStr);
    }

    public function ReceiveUntilMatchAsync($matchStr)
    {
        $r = CkSocket_ReceiveUntilMatchAsync($this->_cPtr, $matchStr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ResetPerf($rcvPerf)
    {
        CkSocket_ResetPerf($this->_cPtr, $rcvPerf);
    }

    public function SaveLastError($path)
    {
        return CkSocket_SaveLastError($this->_cPtr, $path);
    }

    public function SelectForReading($timeoutMs)
    {
        return CkSocket_SelectForReading($this->_cPtr, $timeoutMs);
    }

    public function SelectForReadingAsync($timeoutMs)
    {
        $r = CkSocket_SelectForReadingAsync($this->_cPtr, $timeoutMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SelectForWriting($timeoutMs)
    {
        return CkSocket_SelectForWriting($this->_cPtr, $timeoutMs);
    }

    public function SelectForWritingAsync($timeoutMs)
    {
        $r = CkSocket_SelectForWritingAsync($this->_cPtr, $timeoutMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendBd($binData, $offset, $numBytes)
    {
        return CkSocket_SendBd($this->_cPtr, $binData, $offset, $numBytes);
    }

    public function SendBdAsync($binData, $offset, $numBytes)
    {
        $r = CkSocket_SendBdAsync($this->_cPtr, $binData, $offset, $numBytes);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendByte($value)
    {
        return CkSocket_SendByte($this->_cPtr, $value);
    }

    public function SendByteAsync($value)
    {
        $r = CkSocket_SendByteAsync($this->_cPtr, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendBytes($data)
    {
        return CkSocket_SendBytes($this->_cPtr, $data);
    }

    public function SendBytesAsync($data)
    {
        $r = CkSocket_SendBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendBytesENC($encodedBytes, $encodingAlg)
    {
        return CkSocket_SendBytesENC($this->_cPtr, $encodedBytes, $encodingAlg);
    }

    public function SendBytesENCAsync($encodedBytes, $encodingAlg)
    {
        $r = CkSocket_SendBytesENCAsync($this->_cPtr, $encodedBytes, $encodingAlg);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendCount($byteCount)
    {
        return CkSocket_SendCount($this->_cPtr, $byteCount);
    }

    public function SendCountAsync($byteCount)
    {
        $r = CkSocket_SendCountAsync($this->_cPtr, $byteCount);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendInt16($value, $bigEndian)
    {
        return CkSocket_SendInt16($this->_cPtr, $value, $bigEndian);
    }

    public function SendInt16Async($value, $bigEndian)
    {
        $r = CkSocket_SendInt16Async($this->_cPtr, $value, $bigEndian);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendInt32($value, $bigEndian)
    {
        return CkSocket_SendInt32($this->_cPtr, $value, $bigEndian);
    }

    public function SendInt32Async($value, $bigEndian)
    {
        $r = CkSocket_SendInt32Async($this->_cPtr, $value, $bigEndian);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendSb($sb)
    {
        return CkSocket_SendSb($this->_cPtr, $sb);
    }

    public function SendSbAsync($sb)
    {
        $r = CkSocket_SendSbAsync($this->_cPtr, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendString($stringToSend)
    {
        return CkSocket_SendString($this->_cPtr, $stringToSend);
    }

    public function SendStringAsync($stringToSend)
    {
        $r = CkSocket_SendStringAsync($this->_cPtr, $stringToSend);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendWakeOnLan($macAddress, $port, $ipBroadcastAddr)
    {
        return CkSocket_SendWakeOnLan($this->_cPtr, $macAddress, $port, $ipBroadcastAddr);
    }

    public function SendWakeOnLan2($macAddress, $port, $ipBroadcastAddr, $password)
    {
        return CkSocket_SendWakeOnLan2($this->_cPtr, $macAddress, $port, $ipBroadcastAddr, $password);
    }

    public function SetSslClientCert($cert)
    {
        return CkSocket_SetSslClientCert($this->_cPtr, $cert);
    }

    public function SetSslClientCertPem($pemDataOrFilename, $pemPassword)
    {
        return CkSocket_SetSslClientCertPem($this->_cPtr, $pemDataOrFilename, $pemPassword);
    }

    public function SetSslClientCertPfx($pfxFilename, $pfxPassword)
    {
        return CkSocket_SetSslClientCertPfx($this->_cPtr, $pfxFilename, $pfxPassword);
    }

    public function SleepMs($millisec)
    {
        CkSocket_SleepMs($this->_cPtr, $millisec);
    }

    public function SshAuthenticatePk($sshLogin, $privateKey)
    {
        return CkSocket_SshAuthenticatePk($this->_cPtr, $sshLogin, $privateKey);
    }

    public function SshAuthenticatePkAsync($sshLogin, $privateKey)
    {
        $r = CkSocket_SshAuthenticatePkAsync($this->_cPtr, $sshLogin, $privateKey);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SshAuthenticatePw($sshLogin, $sshPassword)
    {
        return CkSocket_SshAuthenticatePw($this->_cPtr, $sshLogin, $sshPassword);
    }

    public function SshAuthenticatePwAsync($sshLogin, $sshPassword)
    {
        $r = CkSocket_SshAuthenticatePwAsync($this->_cPtr, $sshLogin, $sshPassword);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SshCloseTunnel()
    {
        return CkSocket_SshCloseTunnel($this->_cPtr);
    }

    public function SshCloseTunnelAsync()
    {
        $r = CkSocket_SshCloseTunnelAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SshOpenChannel($hostname, $port, $ssl, $maxWaitMs)
    {
        $r = CkSocket_SshOpenChannel($this->_cPtr, $hostname, $port, $ssl, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkSocket($r);
        }

        return $r;
    }

    public function SshOpenChannelAsync($hostname, $port, $ssl, $maxWaitMs)
    {
        $r = CkSocket_SshOpenChannelAsync($this->_cPtr, $hostname, $port, $ssl, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SshOpenTunnel($sshHostname, $sshPort)
    {
        return CkSocket_SshOpenTunnel($this->_cPtr, $sshHostname, $sshPort);
    }

    public function SshOpenTunnelAsync($sshHostname, $sshPort)
    {
        $r = CkSocket_SshOpenTunnelAsync($this->_cPtr, $sshHostname, $sshPort);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function StartTiming()
    {
        CkSocket_StartTiming($this->_cPtr);
    }

    public function TakeConnection($sock)
    {
        return CkSocket_TakeConnection($this->_cPtr, $sock);
    }

    public function TakeSocket($sock)
    {
        return CkSocket_TakeSocket($this->_cPtr, $sock);
    }

    public function TlsRenegotiate()
    {
        return CkSocket_TlsRenegotiate($this->_cPtr);
    }

    public function TlsRenegotiateAsync()
    {
        $r = CkSocket_TlsRenegotiateAsync($this->_cPtr);
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
        return CkSocket_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function UseSsh($ssh)
    {
        return CkSocket_UseSsh($this->_cPtr, $ssh);
    }
}
