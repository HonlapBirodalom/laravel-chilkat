<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkImap
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkImap') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkImap();
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
        return CkImap_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkImap_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkImap_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkImap_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkImap_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_AppendSeen()
    {
        return CkImap_get_AppendSeen($this->_cPtr);
    }

    public function put_AppendSeen($newVal)
    {
        CkImap_put_AppendSeen($this->_cPtr, $newVal);
    }

    public function get_AppendUid()
    {
        return CkImap_get_AppendUid($this->_cPtr);
    }

    public function get_AuthMethod($str)
    {
        CkImap_get_AuthMethod($this->_cPtr, $str);
    }

    public function authMethod()
    {
        return CkImap_authMethod($this->_cPtr);
    }

    public function put_AuthMethod($newVal)
    {
        CkImap_put_AuthMethod($this->_cPtr, $newVal);
    }

    public function get_AuthzId($str)
    {
        CkImap_get_AuthzId($this->_cPtr, $str);
    }

    public function authzId()
    {
        return CkImap_authzId($this->_cPtr);
    }

    public function put_AuthzId($newVal)
    {
        CkImap_put_AuthzId($this->_cPtr, $newVal);
    }

    public function get_AutoDownloadAttachments()
    {
        return CkImap_get_AutoDownloadAttachments($this->_cPtr);
    }

    public function put_AutoDownloadAttachments($newVal)
    {
        CkImap_put_AutoDownloadAttachments($this->_cPtr, $newVal);
    }

    public function get_AutoFix()
    {
        return CkImap_get_AutoFix($this->_cPtr);
    }

    public function put_AutoFix($newVal)
    {
        CkImap_put_AutoFix($this->_cPtr, $newVal);
    }

    public function get_ClientIpAddress($str)
    {
        CkImap_get_ClientIpAddress($this->_cPtr, $str);
    }

    public function clientIpAddress()
    {
        return CkImap_clientIpAddress($this->_cPtr);
    }

    public function put_ClientIpAddress($newVal)
    {
        CkImap_put_ClientIpAddress($this->_cPtr, $newVal);
    }

    public function get_ConnectedToHost($str)
    {
        CkImap_get_ConnectedToHost($this->_cPtr, $str);
    }

    public function connectedToHost()
    {
        return CkImap_connectedToHost($this->_cPtr);
    }

    public function get_ConnectTimeout()
    {
        return CkImap_get_ConnectTimeout($this->_cPtr);
    }

    public function put_ConnectTimeout($newVal)
    {
        CkImap_put_ConnectTimeout($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkImap_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkImap_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkImap_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Domain($str)
    {
        CkImap_get_Domain($this->_cPtr, $str);
    }

    public function domain()
    {
        return CkImap_domain($this->_cPtr);
    }

    public function put_Domain($newVal)
    {
        CkImap_put_Domain($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkImap_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkImap_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_HighestModSeq($str)
    {
        CkImap_get_HighestModSeq($this->_cPtr, $str);
    }

    public function highestModSeq()
    {
        return CkImap_highestModSeq($this->_cPtr);
    }

    public function get_HttpProxyAuthMethod($str)
    {
        CkImap_get_HttpProxyAuthMethod($this->_cPtr, $str);
    }

    public function httpProxyAuthMethod()
    {
        return CkImap_httpProxyAuthMethod($this->_cPtr);
    }

    public function put_HttpProxyAuthMethod($newVal)
    {
        CkImap_put_HttpProxyAuthMethod($this->_cPtr, $newVal);
    }

    public function get_HttpProxyDomain($str)
    {
        CkImap_get_HttpProxyDomain($this->_cPtr, $str);
    }

    public function httpProxyDomain()
    {
        return CkImap_httpProxyDomain($this->_cPtr);
    }

    public function put_HttpProxyDomain($newVal)
    {
        CkImap_put_HttpProxyDomain($this->_cPtr, $newVal);
    }

    public function get_HttpProxyHostname($str)
    {
        CkImap_get_HttpProxyHostname($this->_cPtr, $str);
    }

    public function httpProxyHostname()
    {
        return CkImap_httpProxyHostname($this->_cPtr);
    }

    public function put_HttpProxyHostname($newVal)
    {
        CkImap_put_HttpProxyHostname($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPassword($str)
    {
        CkImap_get_HttpProxyPassword($this->_cPtr, $str);
    }

    public function httpProxyPassword()
    {
        return CkImap_httpProxyPassword($this->_cPtr);
    }

    public function put_HttpProxyPassword($newVal)
    {
        CkImap_put_HttpProxyPassword($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPort()
    {
        return CkImap_get_HttpProxyPort($this->_cPtr);
    }

    public function put_HttpProxyPort($newVal)
    {
        CkImap_put_HttpProxyPort($this->_cPtr, $newVal);
    }

    public function get_HttpProxyUsername($str)
    {
        CkImap_get_HttpProxyUsername($this->_cPtr, $str);
    }

    public function httpProxyUsername()
    {
        return CkImap_httpProxyUsername($this->_cPtr);
    }

    public function put_HttpProxyUsername($newVal)
    {
        CkImap_put_HttpProxyUsername($this->_cPtr, $newVal);
    }

    public function get_KeepSessionLog()
    {
        return CkImap_get_KeepSessionLog($this->_cPtr);
    }

    public function put_KeepSessionLog($newVal)
    {
        CkImap_put_KeepSessionLog($this->_cPtr, $newVal);
    }

    public function get_LastAppendedMime($str)
    {
        CkImap_get_LastAppendedMime($this->_cPtr, $str);
    }

    public function lastAppendedMime()
    {
        return CkImap_lastAppendedMime($this->_cPtr);
    }

    public function get_LastCommand($str)
    {
        CkImap_get_LastCommand($this->_cPtr, $str);
    }

    public function lastCommand()
    {
        return CkImap_lastCommand($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkImap_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkImap_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkImap_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkImap_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkImap_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkImap_lastErrorXml($this->_cPtr);
    }

    public function get_LastIntermediateResponse($str)
    {
        CkImap_get_LastIntermediateResponse($this->_cPtr, $str);
    }

    public function lastIntermediateResponse()
    {
        return CkImap_lastIntermediateResponse($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkImap_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkImap_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LastResponse($str)
    {
        CkImap_get_LastResponse($this->_cPtr, $str);
    }

    public function lastResponse()
    {
        return CkImap_lastResponse($this->_cPtr);
    }

    public function get_LastResponseCode($str)
    {
        CkImap_get_LastResponseCode($this->_cPtr, $str);
    }

    public function lastResponseCode()
    {
        return CkImap_lastResponseCode($this->_cPtr);
    }

    public function get_LoggedInUser($str)
    {
        CkImap_get_LoggedInUser($this->_cPtr, $str);
    }

    public function loggedInUser()
    {
        return CkImap_loggedInUser($this->_cPtr);
    }

    public function get_NumMessages()
    {
        return CkImap_get_NumMessages($this->_cPtr);
    }

    public function get_PeekMode()
    {
        return CkImap_get_PeekMode($this->_cPtr);
    }

    public function put_PeekMode($newVal)
    {
        CkImap_put_PeekMode($this->_cPtr, $newVal);
    }

    public function get_PercentDoneScale()
    {
        return CkImap_get_PercentDoneScale($this->_cPtr);
    }

    public function put_PercentDoneScale($newVal)
    {
        CkImap_put_PercentDoneScale($this->_cPtr, $newVal);
    }

    public function get_Port()
    {
        return CkImap_get_Port($this->_cPtr);
    }

    public function put_Port($newVal)
    {
        CkImap_put_Port($this->_cPtr, $newVal);
    }

    public function get_PreferIpv6()
    {
        return CkImap_get_PreferIpv6($this->_cPtr);
    }

    public function put_PreferIpv6($newVal)
    {
        CkImap_put_PreferIpv6($this->_cPtr, $newVal);
    }

    public function get_ReadTimeout()
    {
        return CkImap_get_ReadTimeout($this->_cPtr);
    }

    public function put_ReadTimeout($newVal)
    {
        CkImap_put_ReadTimeout($this->_cPtr, $newVal);
    }

    public function get_RequireSslCertVerify()
    {
        return CkImap_get_RequireSslCertVerify($this->_cPtr);
    }

    public function put_RequireSslCertVerify($newVal)
    {
        CkImap_put_RequireSslCertVerify($this->_cPtr, $newVal);
    }

    public function get_SearchCharset($str)
    {
        CkImap_get_SearchCharset($this->_cPtr, $str);
    }

    public function searchCharset()
    {
        return CkImap_searchCharset($this->_cPtr);
    }

    public function put_SearchCharset($newVal)
    {
        CkImap_put_SearchCharset($this->_cPtr, $newVal);
    }

    public function get_SelectedMailbox($str)
    {
        CkImap_get_SelectedMailbox($this->_cPtr, $str);
    }

    public function selectedMailbox()
    {
        return CkImap_selectedMailbox($this->_cPtr);
    }

    public function get_SendBufferSize()
    {
        return CkImap_get_SendBufferSize($this->_cPtr);
    }

    public function put_SendBufferSize($newVal)
    {
        CkImap_put_SendBufferSize($this->_cPtr, $newVal);
    }

    public function get_SeparatorChar($str)
    {
        CkImap_get_SeparatorChar($this->_cPtr, $str);
    }

    public function separatorChar()
    {
        return CkImap_separatorChar($this->_cPtr);
    }

    public function put_SeparatorChar($newVal)
    {
        CkImap_put_SeparatorChar($this->_cPtr, $newVal);
    }

    public function get_SessionLog($str)
    {
        CkImap_get_SessionLog($this->_cPtr, $str);
    }

    public function sessionLog()
    {
        return CkImap_sessionLog($this->_cPtr);
    }

    public function get_SocksHostname($str)
    {
        CkImap_get_SocksHostname($this->_cPtr, $str);
    }

    public function socksHostname()
    {
        return CkImap_socksHostname($this->_cPtr);
    }

    public function put_SocksHostname($newVal)
    {
        CkImap_put_SocksHostname($this->_cPtr, $newVal);
    }

    public function get_SocksPassword($str)
    {
        CkImap_get_SocksPassword($this->_cPtr, $str);
    }

    public function socksPassword()
    {
        return CkImap_socksPassword($this->_cPtr);
    }

    public function put_SocksPassword($newVal)
    {
        CkImap_put_SocksPassword($this->_cPtr, $newVal);
    }

    public function get_SocksPort()
    {
        return CkImap_get_SocksPort($this->_cPtr);
    }

    public function put_SocksPort($newVal)
    {
        CkImap_put_SocksPort($this->_cPtr, $newVal);
    }

    public function get_SocksUsername($str)
    {
        CkImap_get_SocksUsername($this->_cPtr, $str);
    }

    public function socksUsername()
    {
        return CkImap_socksUsername($this->_cPtr);
    }

    public function put_SocksUsername($newVal)
    {
        CkImap_put_SocksUsername($this->_cPtr, $newVal);
    }

    public function get_SocksVersion()
    {
        return CkImap_get_SocksVersion($this->_cPtr);
    }

    public function put_SocksVersion($newVal)
    {
        CkImap_put_SocksVersion($this->_cPtr, $newVal);
    }

    public function get_SoRcvBuf()
    {
        return CkImap_get_SoRcvBuf($this->_cPtr);
    }

    public function put_SoRcvBuf($newVal)
    {
        CkImap_put_SoRcvBuf($this->_cPtr, $newVal);
    }

    public function get_SoSndBuf()
    {
        return CkImap_get_SoSndBuf($this->_cPtr);
    }

    public function put_SoSndBuf($newVal)
    {
        CkImap_put_SoSndBuf($this->_cPtr, $newVal);
    }

    public function get_Ssl()
    {
        return CkImap_get_Ssl($this->_cPtr);
    }

    public function put_Ssl($newVal)
    {
        CkImap_put_Ssl($this->_cPtr, $newVal);
    }

    public function get_SslAllowedCiphers($str)
    {
        CkImap_get_SslAllowedCiphers($this->_cPtr, $str);
    }

    public function sslAllowedCiphers()
    {
        return CkImap_sslAllowedCiphers($this->_cPtr);
    }

    public function put_SslAllowedCiphers($newVal)
    {
        CkImap_put_SslAllowedCiphers($this->_cPtr, $newVal);
    }

    public function get_SslProtocol($str)
    {
        CkImap_get_SslProtocol($this->_cPtr, $str);
    }

    public function sslProtocol()
    {
        return CkImap_sslProtocol($this->_cPtr);
    }

    public function put_SslProtocol($newVal)
    {
        CkImap_put_SslProtocol($this->_cPtr, $newVal);
    }

    public function get_SslServerCertVerified()
    {
        return CkImap_get_SslServerCertVerified($this->_cPtr);
    }

    public function get_StartTls()
    {
        return CkImap_get_StartTls($this->_cPtr);
    }

    public function put_StartTls($newVal)
    {
        CkImap_put_StartTls($this->_cPtr, $newVal);
    }

    public function get_TlsCipherSuite($str)
    {
        CkImap_get_TlsCipherSuite($this->_cPtr, $str);
    }

    public function tlsCipherSuite()
    {
        return CkImap_tlsCipherSuite($this->_cPtr);
    }

    public function get_TlsPinSet($str)
    {
        CkImap_get_TlsPinSet($this->_cPtr, $str);
    }

    public function tlsPinSet()
    {
        return CkImap_tlsPinSet($this->_cPtr);
    }

    public function put_TlsPinSet($newVal)
    {
        CkImap_put_TlsPinSet($this->_cPtr, $newVal);
    }

    public function get_TlsVersion($str)
    {
        CkImap_get_TlsVersion($this->_cPtr, $str);
    }

    public function tlsVersion()
    {
        return CkImap_tlsVersion($this->_cPtr);
    }

    public function get_UidNext()
    {
        return CkImap_get_UidNext($this->_cPtr);
    }

    public function get_UidValidity()
    {
        return CkImap_get_UidValidity($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkImap_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkImap_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkImap_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkImap_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkImap_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkImap_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkImap_version($this->_cPtr);
    }

    public function AddPfxSourceData($pfxBytes, $pfxPassword)
    {
        return CkImap_AddPfxSourceData($this->_cPtr, $pfxBytes, $pfxPassword);
    }

    public function AddPfxSourceFile($pfxFilePath, $pfxPassword)
    {
        return CkImap_AddPfxSourceFile($this->_cPtr, $pfxFilePath, $pfxPassword);
    }

    public function AppendMail($mailbox, $email)
    {
        return CkImap_AppendMail($this->_cPtr, $mailbox, $email);
    }

    public function AppendMailAsync($mailbox, $email)
    {
        $r = CkImap_AppendMailAsync($this->_cPtr, $mailbox, $email);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendMime($mailbox, $mimeText)
    {
        return CkImap_AppendMime($this->_cPtr, $mailbox, $mimeText);
    }

    public function AppendMimeAsync($mailbox, $mimeText)
    {
        $r = CkImap_AppendMimeAsync($this->_cPtr, $mailbox, $mimeText);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendMimeWithDate($mailbox, $mimeText, $internalDate)
    {
        return CkImap_AppendMimeWithDate($this->_cPtr, $mailbox, $mimeText, $internalDate);
    }

    public function AppendMimeWithDateStr($mailbox, $mimeText, $internalDateStr)
    {
        return CkImap_AppendMimeWithDateStr($this->_cPtr, $mailbox, $mimeText, $internalDateStr);
    }

    public function AppendMimeWithDateStrAsync($mailbox, $mimeText, $internalDateStr)
    {
        $r = CkImap_AppendMimeWithDateStrAsync($this->_cPtr, $mailbox, $mimeText, $internalDateStr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendMimeWithFlags($mailbox, $mimeText, $seen, $flagged, $answered, $draft)
    {
        return CkImap_AppendMimeWithFlags($this->_cPtr, $mailbox, $mimeText, $seen, $flagged, $answered, $draft);
    }

    public function AppendMimeWithFlagsAsync($mailbox, $mimeText, $seen, $flagged, $answered, $draft)
    {
        $r = CkImap_AppendMimeWithFlagsAsync($this->_cPtr, $mailbox, $mimeText, $seen, $flagged, $answered, $draft);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendMimeWithFlagsSb($mailbox, $sbMime, $seen, $flagged, $answered, $draft)
    {
        return CkImap_AppendMimeWithFlagsSb($this->_cPtr, $mailbox, $sbMime, $seen, $flagged, $answered, $draft);
    }

    public function AppendMimeWithFlagsSbAsync($mailbox, $sbMime, $seen, $flagged, $answered, $draft)
    {
        $r = CkImap_AppendMimeWithFlagsSbAsync($this->_cPtr, $mailbox, $sbMime, $seen, $flagged, $answered, $draft);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function capability()
    {
        return CkImap_capability($this->_cPtr);
    }

    public function CapabilityAsync()
    {
        $r = CkImap_CapabilityAsync($this->_cPtr);
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
        return CkImap_CheckConnection($this->_cPtr);
    }

    public function CheckForNewEmail()
    {
        $r = CkImap_CheckForNewEmail($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkMessageSet($r);
        }

        return $r;
    }

    public function CheckForNewEmailAsync()
    {
        $r = CkImap_CheckForNewEmailAsync($this->_cPtr);
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
        CkImap_ClearSessionLog($this->_cPtr);
    }

    public function CloseMailbox($mailbox)
    {
        return CkImap_CloseMailbox($this->_cPtr, $mailbox);
    }

    public function CloseMailboxAsync($mailbox)
    {
        $r = CkImap_CloseMailboxAsync($this->_cPtr, $mailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Connect($domainName)
    {
        return CkImap_Connect($this->_cPtr, $domainName);
    }

    public function ConnectAsync($domainName)
    {
        $r = CkImap_ConnectAsync($this->_cPtr, $domainName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Copy($msgId, $bUid, $copyToMailbox)
    {
        return CkImap_Copy($this->_cPtr, $msgId, $bUid, $copyToMailbox);
    }

    public function CopyAsync($msgId, $bUid, $copyToMailbox)
    {
        $r = CkImap_CopyAsync($this->_cPtr, $msgId, $bUid, $copyToMailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CopyMultiple($messageSet, $copyToMailbox)
    {
        return CkImap_CopyMultiple($this->_cPtr, $messageSet, $copyToMailbox);
    }

    public function CopyMultipleAsync($messageSet, $copyToMailbox)
    {
        $r = CkImap_CopyMultipleAsync($this->_cPtr, $messageSet, $copyToMailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CopySequence($startSeqNum, $count, $copyToMailbox)
    {
        return CkImap_CopySequence($this->_cPtr, $startSeqNum, $count, $copyToMailbox);
    }

    public function CopySequenceAsync($startSeqNum, $count, $copyToMailbox)
    {
        $r = CkImap_CopySequenceAsync($this->_cPtr, $startSeqNum, $count, $copyToMailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CreateMailbox($mailbox)
    {
        return CkImap_CreateMailbox($this->_cPtr, $mailbox);
    }

    public function CreateMailboxAsync($mailbox)
    {
        $r = CkImap_CreateMailboxAsync($this->_cPtr, $mailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DeleteMailbox($mailbox)
    {
        return CkImap_DeleteMailbox($this->_cPtr, $mailbox);
    }

    public function DeleteMailboxAsync($mailbox)
    {
        $r = CkImap_DeleteMailboxAsync($this->_cPtr, $mailbox);
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
        return CkImap_Disconnect($this->_cPtr);
    }

    public function DisconnectAsync()
    {
        $r = CkImap_DisconnectAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ExamineMailbox($mailbox)
    {
        return CkImap_ExamineMailbox($this->_cPtr, $mailbox);
    }

    public function ExamineMailboxAsync($mailbox)
    {
        $r = CkImap_ExamineMailboxAsync($this->_cPtr, $mailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Expunge()
    {
        return CkImap_Expunge($this->_cPtr);
    }

    public function ExpungeAsync()
    {
        $r = CkImap_ExpungeAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ExpungeAndClose()
    {
        return CkImap_ExpungeAndClose($this->_cPtr);
    }

    public function ExpungeAndCloseAsync()
    {
        $r = CkImap_ExpungeAndCloseAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchAttachment($emailObject, $attachmentIndex, $saveToPath)
    {
        return CkImap_FetchAttachment($this->_cPtr, $emailObject, $attachmentIndex, $saveToPath);
    }

    public function FetchAttachmentAsync($emailObject, $attachmentIndex, $saveToPath)
    {
        $r = CkImap_FetchAttachmentAsync($this->_cPtr, $emailObject, $attachmentIndex, $saveToPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchAttachmentBd($email, $attachmentIndex, $binData)
    {
        return CkImap_FetchAttachmentBd($this->_cPtr, $email, $attachmentIndex, $binData);
    }

    public function FetchAttachmentBdAsync($email, $attachmentIndex, $binData)
    {
        $r = CkImap_FetchAttachmentBdAsync($this->_cPtr, $email, $attachmentIndex, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchAttachmentBytes($email, $attachIndex, $outBytes)
    {
        return CkImap_FetchAttachmentBytes($this->_cPtr, $email, $attachIndex, $outBytes);
    }

    public function FetchAttachmentBytesAsync($email, $attachIndex)
    {
        $r = CkImap_FetchAttachmentBytesAsync($this->_cPtr, $email, $attachIndex);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchAttachmentSb($email, $attachmentIndex, $charset, $sb)
    {
        return CkImap_FetchAttachmentSb($this->_cPtr, $email, $attachmentIndex, $charset, $sb);
    }

    public function FetchAttachmentSbAsync($email, $attachmentIndex, $charset, $sb)
    {
        $r = CkImap_FetchAttachmentSbAsync($this->_cPtr, $email, $attachmentIndex, $charset, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fetchAttachmentString($emailObject, $attachmentIndex, $charset)
    {
        return CkImap_fetchAttachmentString($this->_cPtr, $emailObject, $attachmentIndex, $charset);
    }

    public function FetchAttachmentStringAsync($emailObject, $attachmentIndex, $charset)
    {
        $r = CkImap_FetchAttachmentStringAsync($this->_cPtr, $emailObject, $attachmentIndex, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchBundle($messageSet)
    {
        $r = CkImap_FetchBundle($this->_cPtr, $messageSet);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function FetchBundleAsync($messageSet)
    {
        $r = CkImap_FetchBundleAsync($this->_cPtr, $messageSet);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchBundleAsMime($messageSet)
    {
        $r = CkImap_FetchBundleAsMime($this->_cPtr, $messageSet);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function FetchBundleAsMimeAsync($messageSet)
    {
        $r = CkImap_FetchBundleAsMimeAsync($this->_cPtr, $messageSet);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchChunk($startSeqNum, $count, $failedSet, $fetchedSet)
    {
        $r = CkImap_FetchChunk($this->_cPtr, $startSeqNum, $count, $failedSet, $fetchedSet);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function FetchChunkAsync($startSeqNum, $count, $failedSet, $fetchedSet)
    {
        $r = CkImap_FetchChunkAsync($this->_cPtr, $startSeqNum, $count, $failedSet, $fetchedSet);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fetchFlags($msgId, $bUid)
    {
        return CkImap_fetchFlags($this->_cPtr, $msgId, $bUid);
    }

    public function FetchFlagsAsync($msgId, $bUid)
    {
        $r = CkImap_FetchFlagsAsync($this->_cPtr, $msgId, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchHeaders($messageSet)
    {
        $r = CkImap_FetchHeaders($this->_cPtr, $messageSet);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function FetchHeadersAsync($messageSet)
    {
        $r = CkImap_FetchHeadersAsync($this->_cPtr, $messageSet);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSequence($startSeqNum, $numMessages)
    {
        $r = CkImap_FetchSequence($this->_cPtr, $startSeqNum, $numMessages);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function FetchSequenceAsync($startSeqNum, $numMessages)
    {
        $r = CkImap_FetchSequenceAsync($this->_cPtr, $startSeqNum, $numMessages);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSequenceAsMime($startSeqNum, $numMessages)
    {
        $r = CkImap_FetchSequenceAsMime($this->_cPtr, $startSeqNum, $numMessages);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function FetchSequenceAsMimeAsync($startSeqNum, $numMessages)
    {
        $r = CkImap_FetchSequenceAsMimeAsync($this->_cPtr, $startSeqNum, $numMessages);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSequenceHeaders($startSeqNum, $numMessages)
    {
        $r = CkImap_FetchSequenceHeaders($this->_cPtr, $startSeqNum, $numMessages);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function FetchSequenceHeadersAsync($startSeqNum, $numMessages)
    {
        $r = CkImap_FetchSequenceHeadersAsync($this->_cPtr, $startSeqNum, $numMessages);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSingle($msgId, $bUid)
    {
        $r = CkImap_FetchSingle($this->_cPtr, $msgId, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function FetchSingleAsync($msgId, $bUid)
    {
        $r = CkImap_FetchSingleAsync($this->_cPtr, $msgId, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fetchSingleAsMime($msgId, $bUid)
    {
        return CkImap_fetchSingleAsMime($this->_cPtr, $msgId, $bUid);
    }

    public function FetchSingleAsMimeAsync($msgId, $bUid)
    {
        $r = CkImap_FetchSingleAsMimeAsync($this->_cPtr, $msgId, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSingleAsMimeSb($msgId, $bUid, $sbMime)
    {
        return CkImap_FetchSingleAsMimeSb($this->_cPtr, $msgId, $bUid, $sbMime);
    }

    public function FetchSingleAsMimeSbAsync($msgId, $bUid, $sbMime)
    {
        $r = CkImap_FetchSingleAsMimeSbAsync($this->_cPtr, $msgId, $bUid, $sbMime);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSingleBd($msgId, $bUid, $mimeData)
    {
        return CkImap_FetchSingleBd($this->_cPtr, $msgId, $bUid, $mimeData);
    }

    public function FetchSingleBdAsync($msgId, $bUid, $mimeData)
    {
        $r = CkImap_FetchSingleBdAsync($this->_cPtr, $msgId, $bUid, $mimeData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSingleHeader($msgId, $bUid)
    {
        $r = CkImap_FetchSingleHeader($this->_cPtr, $msgId, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function FetchSingleHeaderAsync($msgId, $bUid)
    {
        $r = CkImap_FetchSingleHeaderAsync($this->_cPtr, $msgId, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fetchSingleHeaderAsMime($msgId, $bUID)
    {
        return CkImap_fetchSingleHeaderAsMime($this->_cPtr, $msgId, $bUID);
    }

    public function FetchSingleHeaderAsMimeAsync($msgId, $bUID)
    {
        $r = CkImap_FetchSingleHeaderAsMimeAsync($this->_cPtr, $msgId, $bUID);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetAllUids()
    {
        $r = CkImap_GetAllUids($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkMessageSet($r);
        }

        return $r;
    }

    public function GetAllUidsAsync()
    {
        $r = CkImap_GetAllUidsAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getMailAttachFilename($email, $attachIndex)
    {
        return CkImap_getMailAttachFilename($this->_cPtr, $email, $attachIndex);
    }

    public function mailAttachFilename($email, $attachIndex)
    {
        return CkImap_mailAttachFilename($this->_cPtr, $email, $attachIndex);
    }

    public function GetMailAttachSize($email, $attachIndex)
    {
        return CkImap_GetMailAttachSize($this->_cPtr, $email, $attachIndex);
    }

    public function getMailboxStatus($mailbox)
    {
        return CkImap_getMailboxStatus($this->_cPtr, $mailbox);
    }

    public function mailboxStatus($mailbox)
    {
        return CkImap_mailboxStatus($this->_cPtr, $mailbox);
    }

    public function GetMailboxStatusAsync($mailbox)
    {
        $r = CkImap_GetMailboxStatusAsync($this->_cPtr, $mailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetMailFlag($email, $flagName)
    {
        return CkImap_GetMailFlag($this->_cPtr, $email, $flagName);
    }

    public function GetMailNumAttach($email)
    {
        return CkImap_GetMailNumAttach($this->_cPtr, $email);
    }

    public function GetMailSize($email)
    {
        return CkImap_GetMailSize($this->_cPtr, $email);
    }

    public function getQuota($quotaRoot)
    {
        return CkImap_getQuota($this->_cPtr, $quotaRoot);
    }

    public function quota($quotaRoot)
    {
        return CkImap_quota($this->_cPtr, $quotaRoot);
    }

    public function GetQuotaAsync($quotaRoot)
    {
        $r = CkImap_GetQuotaAsync($this->_cPtr, $quotaRoot);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getQuotaRoot($mailboxName)
    {
        return CkImap_getQuotaRoot($this->_cPtr, $mailboxName);
    }

    public function quotaRoot($mailboxName)
    {
        return CkImap_quotaRoot($this->_cPtr, $mailboxName);
    }

    public function GetQuotaRootAsync($mailboxName)
    {
        $r = CkImap_GetQuotaRootAsync($this->_cPtr, $mailboxName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetSslServerCert()
    {
        $r = CkImap_GetSslServerCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function HasCapability($name, $capabilityResponse)
    {
        return CkImap_HasCapability($this->_cPtr, $name, $capabilityResponse);
    }

    public function idleCheck($timeoutMs)
    {
        return CkImap_idleCheck($this->_cPtr, $timeoutMs);
    }

    public function IdleCheckAsync($timeoutMs)
    {
        $r = CkImap_IdleCheckAsync($this->_cPtr, $timeoutMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function IdleDone()
    {
        return CkImap_IdleDone($this->_cPtr);
    }

    public function IdleDoneAsync()
    {
        $r = CkImap_IdleDoneAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function IdleStart()
    {
        return CkImap_IdleStart($this->_cPtr);
    }

    public function IdleStartAsync()
    {
        $r = CkImap_IdleStartAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function IsConnected()
    {
        return CkImap_IsConnected($this->_cPtr);
    }

    public function IsLoggedIn()
    {
        return CkImap_IsLoggedIn($this->_cPtr);
    }

    public function IsUnlocked()
    {
        return CkImap_IsUnlocked($this->_cPtr);
    }

    public function ListMailboxes($reference, $wildcardedMailbox)
    {
        $r = CkImap_ListMailboxes($this->_cPtr, $reference, $wildcardedMailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkMailboxes($r);
        }

        return $r;
    }

    public function ListMailboxesAsync($reference, $wildcardedMailbox)
    {
        $r = CkImap_ListMailboxesAsync($this->_cPtr, $reference, $wildcardedMailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ListSubscribed($reference, $wildcardedMailbox)
    {
        $r = CkImap_ListSubscribed($this->_cPtr, $reference, $wildcardedMailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkMailboxes($r);
        }

        return $r;
    }

    public function ListSubscribedAsync($reference, $wildcardedMailbox)
    {
        $r = CkImap_ListSubscribedAsync($this->_cPtr, $reference, $wildcardedMailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function LoadTaskCaller($task)
    {
        return CkImap_LoadTaskCaller($this->_cPtr, $task);
    }

    public function Login($loginName, $password)
    {
        return CkImap_Login($this->_cPtr, $loginName, $password);
    }

    public function LoginAsync($loginName, $password)
    {
        $r = CkImap_LoginAsync($this->_cPtr, $loginName, $password);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function LoginSecure($loginName, $password)
    {
        return CkImap_LoginSecure($this->_cPtr, $loginName, $password);
    }

    public function LoginSecureAsync($loginName, $password)
    {
        $r = CkImap_LoginSecureAsync($this->_cPtr, $loginName, $password);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Logout()
    {
        return CkImap_Logout($this->_cPtr);
    }

    public function LogoutAsync()
    {
        $r = CkImap_LogoutAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function MoveMessages($messageSet, $destFolder)
    {
        return CkImap_MoveMessages($this->_cPtr, $messageSet, $destFolder);
    }

    public function MoveMessagesAsync($messageSet, $destFolder)
    {
        $r = CkImap_MoveMessagesAsync($this->_cPtr, $messageSet, $destFolder);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Noop()
    {
        return CkImap_Noop($this->_cPtr);
    }

    public function NoopAsync()
    {
        $r = CkImap_NoopAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function RefetchMailFlags($email)
    {
        return CkImap_RefetchMailFlags($this->_cPtr, $email);
    }

    public function RefetchMailFlagsAsync($email)
    {
        $r = CkImap_RefetchMailFlagsAsync($this->_cPtr, $email);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function RenameMailbox($fromMailbox, $toMailbox)
    {
        return CkImap_RenameMailbox($this->_cPtr, $fromMailbox, $toMailbox);
    }

    public function RenameMailboxAsync($fromMailbox, $toMailbox)
    {
        $r = CkImap_RenameMailboxAsync($this->_cPtr, $fromMailbox, $toMailbox);
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
        return CkImap_SaveLastError($this->_cPtr, $path);
    }

    public function Search($criteria, $bUid)
    {
        $r = CkImap_Search($this->_cPtr, $criteria, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkMessageSet($r);
        }

        return $r;
    }

    public function SearchAsync($criteria, $bUid)
    {
        $r = CkImap_SearchAsync($this->_cPtr, $criteria, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SelectMailbox($mailbox)
    {
        return CkImap_SelectMailbox($this->_cPtr, $mailbox);
    }

    public function SelectMailboxAsync($mailbox)
    {
        $r = CkImap_SelectMailboxAsync($this->_cPtr, $mailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function sendRawCommand($cmd)
    {
        return CkImap_sendRawCommand($this->_cPtr, $cmd);
    }

    public function SendRawCommandAsync($cmd)
    {
        $r = CkImap_SendRawCommandAsync($this->_cPtr, $cmd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendRawCommandB($cmd, $outBytes)
    {
        return CkImap_SendRawCommandB($this->_cPtr, $cmd, $outBytes);
    }

    public function SendRawCommandBAsync($cmd)
    {
        $r = CkImap_SendRawCommandBAsync($this->_cPtr, $cmd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendRawCommandC($cmd, $outBytes)
    {
        return CkImap_SendRawCommandC($this->_cPtr, $cmd, $outBytes);
    }

    public function SendRawCommandCAsync($cmd)
    {
        $r = CkImap_SendRawCommandCAsync($this->_cPtr, $cmd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetDecryptCert($cert)
    {
        return CkImap_SetDecryptCert($this->_cPtr, $cert);
    }

    public function SetDecryptCert2($cert, $key)
    {
        return CkImap_SetDecryptCert2($this->_cPtr, $cert, $key);
    }

    public function SetFlag($msgId, $bUid, $flagName, $value)
    {
        return CkImap_SetFlag($this->_cPtr, $msgId, $bUid, $flagName, $value);
    }

    public function SetFlagAsync($msgId, $bUid, $flagName, $value)
    {
        $r = CkImap_SetFlagAsync($this->_cPtr, $msgId, $bUid, $flagName, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetFlags($messageSet, $flagName, $value)
    {
        return CkImap_SetFlags($this->_cPtr, $messageSet, $flagName, $value);
    }

    public function SetFlagsAsync($messageSet, $flagName, $value)
    {
        $r = CkImap_SetFlagsAsync($this->_cPtr, $messageSet, $flagName, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetMailFlag($email, $flagName, $value)
    {
        return CkImap_SetMailFlag($this->_cPtr, $email, $flagName, $value);
    }

    public function SetMailFlagAsync($email, $flagName, $value)
    {
        $r = CkImap_SetMailFlagAsync($this->_cPtr, $email, $flagName, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetQuota($quotaRoot, $resource, $quota)
    {
        return CkImap_SetQuota($this->_cPtr, $quotaRoot, $resource, $quota);
    }

    public function SetQuotaAsync($quotaRoot, $resource, $quota)
    {
        $r = CkImap_SetQuotaAsync($this->_cPtr, $quotaRoot, $resource, $quota);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetSslClientCert($cert)
    {
        return CkImap_SetSslClientCert($this->_cPtr, $cert);
    }

    public function SetSslClientCertPem($pemDataOrFilename, $pemPassword)
    {
        return CkImap_SetSslClientCertPem($this->_cPtr, $pemDataOrFilename, $pemPassword);
    }

    public function SetSslClientCertPfx($pfxFilename, $pfxPassword)
    {
        return CkImap_SetSslClientCertPfx($this->_cPtr, $pfxFilename, $pfxPassword);
    }

    public function Sort($sortCriteria, $charset, $searchCriteria, $bUid)
    {
        $r = CkImap_Sort($this->_cPtr, $sortCriteria, $charset, $searchCriteria, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkMessageSet($r);
        }

        return $r;
    }

    public function SortAsync($sortCriteria, $charset, $searchCriteria, $bUid)
    {
        $r = CkImap_SortAsync($this->_cPtr, $sortCriteria, $charset, $searchCriteria, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SshAuthenticatePk($sshLogin, $privateKey)
    {
        return CkImap_SshAuthenticatePk($this->_cPtr, $sshLogin, $privateKey);
    }

    public function SshAuthenticatePkAsync($sshLogin, $privateKey)
    {
        $r = CkImap_SshAuthenticatePkAsync($this->_cPtr, $sshLogin, $privateKey);
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
        return CkImap_SshAuthenticatePw($this->_cPtr, $sshLogin, $sshPassword);
    }

    public function SshAuthenticatePwAsync($sshLogin, $sshPassword)
    {
        $r = CkImap_SshAuthenticatePwAsync($this->_cPtr, $sshLogin, $sshPassword);
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
        return CkImap_SshCloseTunnel($this->_cPtr);
    }

    public function SshCloseTunnelAsync()
    {
        $r = CkImap_SshCloseTunnelAsync($this->_cPtr);
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
        return CkImap_SshOpenTunnel($this->_cPtr, $sshHostname, $sshPort);
    }

    public function SshOpenTunnelAsync($sshHostname, $sshPort)
    {
        $r = CkImap_SshOpenTunnelAsync($this->_cPtr, $sshHostname, $sshPort);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function StoreFlags($msgId, $bUid, $flagNames, $value)
    {
        return CkImap_StoreFlags($this->_cPtr, $msgId, $bUid, $flagNames, $value);
    }

    public function StoreFlagsAsync($msgId, $bUid, $flagNames, $value)
    {
        $r = CkImap_StoreFlagsAsync($this->_cPtr, $msgId, $bUid, $flagNames, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Subscribe($mailbox)
    {
        return CkImap_Subscribe($this->_cPtr, $mailbox);
    }

    public function SubscribeAsync($mailbox)
    {
        $r = CkImap_SubscribeAsync($this->_cPtr, $mailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ThreadCmd($threadAlg, $charset, $searchCriteria, $bUid)
    {
        $r = CkImap_ThreadCmd($this->_cPtr, $threadAlg, $charset, $searchCriteria, $bUid);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function ThreadCmdAsync($threadAlg, $charset, $searchCriteria, $bUid)
    {
        $r = CkImap_ThreadCmdAsync($this->_cPtr, $threadAlg, $charset, $searchCriteria, $bUid);
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
        return CkImap_UnlockComponent($this->_cPtr, $unlockCode);
    }

    public function Unsubscribe($mailbox)
    {
        return CkImap_Unsubscribe($this->_cPtr, $mailbox);
    }

    public function UnsubscribeAsync($mailbox)
    {
        $r = CkImap_UnsubscribeAsync($this->_cPtr, $mailbox);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UseCertVault($vault)
    {
        return CkImap_UseCertVault($this->_cPtr, $vault);
    }

    public function UseSsh($ssh)
    {
        return CkImap_UseSsh($this->_cPtr, $ssh);
    }

    public function UseSshTunnel($tunnel)
    {
        return CkImap_UseSshTunnel($this->_cPtr, $tunnel);
    }
}
