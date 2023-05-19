<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkMailMan
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkMailMan') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkMailMan();
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
        return CkMailMan_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkMailMan_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkMailMan_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkMailMan_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkMailMan_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_AllOrNone()
    {
        return CkMailMan_get_AllOrNone($this->_cPtr);
    }

    public function put_AllOrNone($newVal)
    {
        CkMailMan_put_AllOrNone($this->_cPtr, $newVal);
    }

    public function get_AutoFix()
    {
        return CkMailMan_get_AutoFix($this->_cPtr);
    }

    public function put_AutoFix($newVal)
    {
        CkMailMan_put_AutoFix($this->_cPtr, $newVal);
    }

    public function get_AutoGenMessageId()
    {
        return CkMailMan_get_AutoGenMessageId($this->_cPtr);
    }

    public function put_AutoGenMessageId($newVal)
    {
        CkMailMan_put_AutoGenMessageId($this->_cPtr, $newVal);
    }

    public function get_AutoSmtpRset()
    {
        return CkMailMan_get_AutoSmtpRset($this->_cPtr);
    }

    public function put_AutoSmtpRset($newVal)
    {
        CkMailMan_put_AutoSmtpRset($this->_cPtr, $newVal);
    }

    public function get_AutoUnwrapSecurity()
    {
        return CkMailMan_get_AutoUnwrapSecurity($this->_cPtr);
    }

    public function put_AutoUnwrapSecurity($newVal)
    {
        CkMailMan_put_AutoUnwrapSecurity($this->_cPtr, $newVal);
    }

    public function get_ClientIpAddress($str)
    {
        CkMailMan_get_ClientIpAddress($this->_cPtr, $str);
    }

    public function clientIpAddress()
    {
        return CkMailMan_clientIpAddress($this->_cPtr);
    }

    public function put_ClientIpAddress($newVal)
    {
        CkMailMan_put_ClientIpAddress($this->_cPtr, $newVal);
    }

    public function get_ConnectFailReason()
    {
        return CkMailMan_get_ConnectFailReason($this->_cPtr);
    }

    public function get_ConnectTimeout()
    {
        return CkMailMan_get_ConnectTimeout($this->_cPtr);
    }

    public function put_ConnectTimeout($newVal)
    {
        CkMailMan_put_ConnectTimeout($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkMailMan_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkMailMan_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkMailMan_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DsnEnvid($str)
    {
        CkMailMan_get_DsnEnvid($this->_cPtr, $str);
    }

    public function dsnEnvid()
    {
        return CkMailMan_dsnEnvid($this->_cPtr);
    }

    public function put_DsnEnvid($newVal)
    {
        CkMailMan_put_DsnEnvid($this->_cPtr, $newVal);
    }

    public function get_DsnNotify($str)
    {
        CkMailMan_get_DsnNotify($this->_cPtr, $str);
    }

    public function dsnNotify()
    {
        return CkMailMan_dsnNotify($this->_cPtr);
    }

    public function put_DsnNotify($newVal)
    {
        CkMailMan_put_DsnNotify($this->_cPtr, $newVal);
    }

    public function get_DsnRet($str)
    {
        CkMailMan_get_DsnRet($this->_cPtr, $str);
    }

    public function dsnRet()
    {
        return CkMailMan_dsnRet($this->_cPtr);
    }

    public function put_DsnRet($newVal)
    {
        CkMailMan_put_DsnRet($this->_cPtr, $newVal);
    }

    public function get_EmbedCertChain()
    {
        return CkMailMan_get_EmbedCertChain($this->_cPtr);
    }

    public function put_EmbedCertChain($newVal)
    {
        CkMailMan_put_EmbedCertChain($this->_cPtr, $newVal);
    }

    public function get_Filter($str)
    {
        CkMailMan_get_Filter($this->_cPtr, $str);
    }

    public function filter()
    {
        return CkMailMan_filter($this->_cPtr);
    }

    public function put_Filter($newVal)
    {
        CkMailMan_put_Filter($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkMailMan_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkMailMan_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_HeloHostname($str)
    {
        CkMailMan_get_HeloHostname($this->_cPtr, $str);
    }

    public function heloHostname()
    {
        return CkMailMan_heloHostname($this->_cPtr);
    }

    public function put_HeloHostname($newVal)
    {
        CkMailMan_put_HeloHostname($this->_cPtr, $newVal);
    }

    public function get_HttpProxyAuthMethod($str)
    {
        CkMailMan_get_HttpProxyAuthMethod($this->_cPtr, $str);
    }

    public function httpProxyAuthMethod()
    {
        return CkMailMan_httpProxyAuthMethod($this->_cPtr);
    }

    public function put_HttpProxyAuthMethod($newVal)
    {
        CkMailMan_put_HttpProxyAuthMethod($this->_cPtr, $newVal);
    }

    public function get_HttpProxyDomain($str)
    {
        CkMailMan_get_HttpProxyDomain($this->_cPtr, $str);
    }

    public function httpProxyDomain()
    {
        return CkMailMan_httpProxyDomain($this->_cPtr);
    }

    public function put_HttpProxyDomain($newVal)
    {
        CkMailMan_put_HttpProxyDomain($this->_cPtr, $newVal);
    }

    public function get_HttpProxyHostname($str)
    {
        CkMailMan_get_HttpProxyHostname($this->_cPtr, $str);
    }

    public function httpProxyHostname()
    {
        return CkMailMan_httpProxyHostname($this->_cPtr);
    }

    public function put_HttpProxyHostname($newVal)
    {
        CkMailMan_put_HttpProxyHostname($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPassword($str)
    {
        CkMailMan_get_HttpProxyPassword($this->_cPtr, $str);
    }

    public function httpProxyPassword()
    {
        return CkMailMan_httpProxyPassword($this->_cPtr);
    }

    public function put_HttpProxyPassword($newVal)
    {
        CkMailMan_put_HttpProxyPassword($this->_cPtr, $newVal);
    }

    public function get_HttpProxyPort()
    {
        return CkMailMan_get_HttpProxyPort($this->_cPtr);
    }

    public function put_HttpProxyPort($newVal)
    {
        CkMailMan_put_HttpProxyPort($this->_cPtr, $newVal);
    }

    public function get_HttpProxyUsername($str)
    {
        CkMailMan_get_HttpProxyUsername($this->_cPtr, $str);
    }

    public function httpProxyUsername()
    {
        return CkMailMan_httpProxyUsername($this->_cPtr);
    }

    public function put_HttpProxyUsername($newVal)
    {
        CkMailMan_put_HttpProxyUsername($this->_cPtr, $newVal);
    }

    public function get_ImmediateDelete()
    {
        return CkMailMan_get_ImmediateDelete($this->_cPtr);
    }

    public function put_ImmediateDelete($newVal)
    {
        CkMailMan_put_ImmediateDelete($this->_cPtr, $newVal);
    }

    public function get_IncludeRootCert()
    {
        return CkMailMan_get_IncludeRootCert($this->_cPtr);
    }

    public function put_IncludeRootCert($newVal)
    {
        CkMailMan_put_IncludeRootCert($this->_cPtr, $newVal);
    }

    public function get_IsPop3Connected()
    {
        return CkMailMan_get_IsPop3Connected($this->_cPtr);
    }

    public function get_IsSmtpConnected()
    {
        return CkMailMan_get_IsSmtpConnected($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkMailMan_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkMailMan_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkMailMan_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkMailMan_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkMailMan_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkMailMan_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkMailMan_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkMailMan_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LastSmtpStatus()
    {
        return CkMailMan_get_LastSmtpStatus($this->_cPtr);
    }

    public function get_LastSmtpStatusMsg($str)
    {
        CkMailMan_get_LastSmtpStatusMsg($this->_cPtr, $str);
    }

    public function lastSmtpStatusMsg()
    {
        return CkMailMan_lastSmtpStatusMsg($this->_cPtr);
    }

    public function get_LogMailReceivedFilename($str)
    {
        CkMailMan_get_LogMailReceivedFilename($this->_cPtr, $str);
    }

    public function logMailReceivedFilename()
    {
        return CkMailMan_logMailReceivedFilename($this->_cPtr);
    }

    public function put_LogMailReceivedFilename($newVal)
    {
        CkMailMan_put_LogMailReceivedFilename($this->_cPtr, $newVal);
    }

    public function get_LogMailSentFilename($str)
    {
        CkMailMan_get_LogMailSentFilename($this->_cPtr, $str);
    }

    public function logMailSentFilename()
    {
        return CkMailMan_logMailSentFilename($this->_cPtr);
    }

    public function put_LogMailSentFilename($newVal)
    {
        CkMailMan_put_LogMailSentFilename($this->_cPtr, $newVal);
    }

    public function get_MailHost($str)
    {
        CkMailMan_get_MailHost($this->_cPtr, $str);
    }

    public function mailHost()
    {
        return CkMailMan_mailHost($this->_cPtr);
    }

    public function put_MailHost($newVal)
    {
        CkMailMan_put_MailHost($this->_cPtr, $newVal);
    }

    public function get_MailPort()
    {
        return CkMailMan_get_MailPort($this->_cPtr);
    }

    public function put_MailPort($newVal)
    {
        CkMailMan_put_MailPort($this->_cPtr, $newVal);
    }

    public function get_MaxCount()
    {
        return CkMailMan_get_MaxCount($this->_cPtr);
    }

    public function put_MaxCount($newVal)
    {
        CkMailMan_put_MaxCount($this->_cPtr, $newVal);
    }

    public function get_OAuth2AccessToken($str)
    {
        CkMailMan_get_OAuth2AccessToken($this->_cPtr, $str);
    }

    public function oAuth2AccessToken()
    {
        return CkMailMan_oAuth2AccessToken($this->_cPtr);
    }

    public function put_OAuth2AccessToken($newVal)
    {
        CkMailMan_put_OAuth2AccessToken($this->_cPtr, $newVal);
    }

    public function get_OpaqueSigning()
    {
        return CkMailMan_get_OpaqueSigning($this->_cPtr);
    }

    public function put_OpaqueSigning($newVal)
    {
        CkMailMan_put_OpaqueSigning($this->_cPtr, $newVal);
    }

    public function get_P7mEncryptAttachFilename($str)
    {
        CkMailMan_get_P7mEncryptAttachFilename($this->_cPtr, $str);
    }

    public function p7mEncryptAttachFilename()
    {
        return CkMailMan_p7mEncryptAttachFilename($this->_cPtr);
    }

    public function put_P7mEncryptAttachFilename($newVal)
    {
        CkMailMan_put_P7mEncryptAttachFilename($this->_cPtr, $newVal);
    }

    public function get_P7mSigAttachFilename($str)
    {
        CkMailMan_get_P7mSigAttachFilename($this->_cPtr, $str);
    }

    public function p7mSigAttachFilename()
    {
        return CkMailMan_p7mSigAttachFilename($this->_cPtr);
    }

    public function put_P7mSigAttachFilename($newVal)
    {
        CkMailMan_put_P7mSigAttachFilename($this->_cPtr, $newVal);
    }

    public function get_P7sSigAttachFilename($str)
    {
        CkMailMan_get_P7sSigAttachFilename($this->_cPtr, $str);
    }

    public function p7sSigAttachFilename()
    {
        return CkMailMan_p7sSigAttachFilename($this->_cPtr);
    }

    public function put_P7sSigAttachFilename($newVal)
    {
        CkMailMan_put_P7sSigAttachFilename($this->_cPtr, $newVal);
    }

    public function get_PercentDoneScale()
    {
        return CkMailMan_get_PercentDoneScale($this->_cPtr);
    }

    public function put_PercentDoneScale($newVal)
    {
        CkMailMan_put_PercentDoneScale($this->_cPtr, $newVal);
    }

    public function get_Pop3SessionId()
    {
        return CkMailMan_get_Pop3SessionId($this->_cPtr);
    }

    public function get_Pop3SessionLog($str)
    {
        CkMailMan_get_Pop3SessionLog($this->_cPtr, $str);
    }

    public function pop3SessionLog()
    {
        return CkMailMan_pop3SessionLog($this->_cPtr);
    }

    public function get_Pop3SPA()
    {
        return CkMailMan_get_Pop3SPA($this->_cPtr);
    }

    public function put_Pop3SPA($newVal)
    {
        CkMailMan_put_Pop3SPA($this->_cPtr, $newVal);
    }

    public function get_Pop3SslServerCertVerified()
    {
        return CkMailMan_get_Pop3SslServerCertVerified($this->_cPtr);
    }

    public function get_Pop3Stls()
    {
        return CkMailMan_get_Pop3Stls($this->_cPtr);
    }

    public function put_Pop3Stls($newVal)
    {
        CkMailMan_put_Pop3Stls($this->_cPtr, $newVal);
    }

    public function get_Pop3StlsIfPossible()
    {
        return CkMailMan_get_Pop3StlsIfPossible($this->_cPtr);
    }

    public function put_Pop3StlsIfPossible($newVal)
    {
        CkMailMan_put_Pop3StlsIfPossible($this->_cPtr, $newVal);
    }

    public function get_PopPassword($str)
    {
        CkMailMan_get_PopPassword($this->_cPtr, $str);
    }

    public function popPassword()
    {
        return CkMailMan_popPassword($this->_cPtr);
    }

    public function put_PopPassword($newVal)
    {
        CkMailMan_put_PopPassword($this->_cPtr, $newVal);
    }

    public function get_PopPasswordBase64($str)
    {
        CkMailMan_get_PopPasswordBase64($this->_cPtr, $str);
    }

    public function popPasswordBase64()
    {
        return CkMailMan_popPasswordBase64($this->_cPtr);
    }

    public function put_PopPasswordBase64($newVal)
    {
        CkMailMan_put_PopPasswordBase64($this->_cPtr, $newVal);
    }

    public function get_PopSsl()
    {
        return CkMailMan_get_PopSsl($this->_cPtr);
    }

    public function put_PopSsl($newVal)
    {
        CkMailMan_put_PopSsl($this->_cPtr, $newVal);
    }

    public function get_PopUsername($str)
    {
        CkMailMan_get_PopUsername($this->_cPtr, $str);
    }

    public function popUsername()
    {
        return CkMailMan_popUsername($this->_cPtr);
    }

    public function put_PopUsername($newVal)
    {
        CkMailMan_put_PopUsername($this->_cPtr, $newVal);
    }

    public function get_PreferIpv6()
    {
        return CkMailMan_get_PreferIpv6($this->_cPtr);
    }

    public function put_PreferIpv6($newVal)
    {
        CkMailMan_put_PreferIpv6($this->_cPtr, $newVal);
    }

    public function get_ReadTimeout()
    {
        return CkMailMan_get_ReadTimeout($this->_cPtr);
    }

    public function put_ReadTimeout($newVal)
    {
        CkMailMan_put_ReadTimeout($this->_cPtr, $newVal);
    }

    public function get_RequireSslCertVerify()
    {
        return CkMailMan_get_RequireSslCertVerify($this->_cPtr);
    }

    public function put_RequireSslCertVerify($newVal)
    {
        CkMailMan_put_RequireSslCertVerify($this->_cPtr, $newVal);
    }

    public function get_ResetDateOnLoad()
    {
        return CkMailMan_get_ResetDateOnLoad($this->_cPtr);
    }

    public function put_ResetDateOnLoad($newVal)
    {
        CkMailMan_put_ResetDateOnLoad($this->_cPtr, $newVal);
    }

    public function get_SendBufferSize()
    {
        return CkMailMan_get_SendBufferSize($this->_cPtr);
    }

    public function put_SendBufferSize($newVal)
    {
        CkMailMan_put_SendBufferSize($this->_cPtr, $newVal);
    }

    public function get_SendIndividual()
    {
        return CkMailMan_get_SendIndividual($this->_cPtr);
    }

    public function put_SendIndividual($newVal)
    {
        CkMailMan_put_SendIndividual($this->_cPtr, $newVal);
    }

    public function get_SizeLimit()
    {
        return CkMailMan_get_SizeLimit($this->_cPtr);
    }

    public function put_SizeLimit($newVal)
    {
        CkMailMan_put_SizeLimit($this->_cPtr, $newVal);
    }

    public function get_SmtpAuthMethod($str)
    {
        CkMailMan_get_SmtpAuthMethod($this->_cPtr, $str);
    }

    public function smtpAuthMethod()
    {
        return CkMailMan_smtpAuthMethod($this->_cPtr);
    }

    public function put_SmtpAuthMethod($newVal)
    {
        CkMailMan_put_SmtpAuthMethod($this->_cPtr, $newVal);
    }

    public function get_SmtpFailReason($str)
    {
        CkMailMan_get_SmtpFailReason($this->_cPtr, $str);
    }

    public function smtpFailReason()
    {
        return CkMailMan_smtpFailReason($this->_cPtr);
    }

    public function get_SmtpHost($str)
    {
        CkMailMan_get_SmtpHost($this->_cPtr, $str);
    }

    public function smtpHost()
    {
        return CkMailMan_smtpHost($this->_cPtr);
    }

    public function put_SmtpHost($newVal)
    {
        CkMailMan_put_SmtpHost($this->_cPtr, $newVal);
    }

    public function get_SmtpLoginDomain($str)
    {
        CkMailMan_get_SmtpLoginDomain($this->_cPtr, $str);
    }

    public function smtpLoginDomain()
    {
        return CkMailMan_smtpLoginDomain($this->_cPtr);
    }

    public function put_SmtpLoginDomain($newVal)
    {
        CkMailMan_put_SmtpLoginDomain($this->_cPtr, $newVal);
    }

    public function get_SmtpPassword($str)
    {
        CkMailMan_get_SmtpPassword($this->_cPtr, $str);
    }

    public function smtpPassword()
    {
        return CkMailMan_smtpPassword($this->_cPtr);
    }

    public function put_SmtpPassword($newVal)
    {
        CkMailMan_put_SmtpPassword($this->_cPtr, $newVal);
    }

    public function get_SmtpPipelining()
    {
        return CkMailMan_get_SmtpPipelining($this->_cPtr);
    }

    public function put_SmtpPipelining($newVal)
    {
        CkMailMan_put_SmtpPipelining($this->_cPtr, $newVal);
    }

    public function get_SmtpPort()
    {
        return CkMailMan_get_SmtpPort($this->_cPtr);
    }

    public function put_SmtpPort($newVal)
    {
        CkMailMan_put_SmtpPort($this->_cPtr, $newVal);
    }

    public function get_SmtpSessionLog($str)
    {
        CkMailMan_get_SmtpSessionLog($this->_cPtr, $str);
    }

    public function smtpSessionLog()
    {
        return CkMailMan_smtpSessionLog($this->_cPtr);
    }

    public function get_SmtpSsl()
    {
        return CkMailMan_get_SmtpSsl($this->_cPtr);
    }

    public function put_SmtpSsl($newVal)
    {
        CkMailMan_put_SmtpSsl($this->_cPtr, $newVal);
    }

    public function get_SmtpSslServerCertVerified()
    {
        return CkMailMan_get_SmtpSslServerCertVerified($this->_cPtr);
    }

    public function get_SmtpUsername($str)
    {
        CkMailMan_get_SmtpUsername($this->_cPtr, $str);
    }

    public function smtpUsername()
    {
        return CkMailMan_smtpUsername($this->_cPtr);
    }

    public function put_SmtpUsername($newVal)
    {
        CkMailMan_put_SmtpUsername($this->_cPtr, $newVal);
    }

    public function get_SocksHostname($str)
    {
        CkMailMan_get_SocksHostname($this->_cPtr, $str);
    }

    public function socksHostname()
    {
        return CkMailMan_socksHostname($this->_cPtr);
    }

    public function put_SocksHostname($newVal)
    {
        CkMailMan_put_SocksHostname($this->_cPtr, $newVal);
    }

    public function get_SocksPassword($str)
    {
        CkMailMan_get_SocksPassword($this->_cPtr, $str);
    }

    public function socksPassword()
    {
        return CkMailMan_socksPassword($this->_cPtr);
    }

    public function put_SocksPassword($newVal)
    {
        CkMailMan_put_SocksPassword($this->_cPtr, $newVal);
    }

    public function get_SocksPort()
    {
        return CkMailMan_get_SocksPort($this->_cPtr);
    }

    public function put_SocksPort($newVal)
    {
        CkMailMan_put_SocksPort($this->_cPtr, $newVal);
    }

    public function get_SocksUsername($str)
    {
        CkMailMan_get_SocksUsername($this->_cPtr, $str);
    }

    public function socksUsername()
    {
        return CkMailMan_socksUsername($this->_cPtr);
    }

    public function put_SocksUsername($newVal)
    {
        CkMailMan_put_SocksUsername($this->_cPtr, $newVal);
    }

    public function get_SocksVersion()
    {
        return CkMailMan_get_SocksVersion($this->_cPtr);
    }

    public function put_SocksVersion($newVal)
    {
        CkMailMan_put_SocksVersion($this->_cPtr, $newVal);
    }

    public function get_SoRcvBuf()
    {
        return CkMailMan_get_SoRcvBuf($this->_cPtr);
    }

    public function put_SoRcvBuf($newVal)
    {
        CkMailMan_put_SoRcvBuf($this->_cPtr, $newVal);
    }

    public function get_SoSndBuf()
    {
        return CkMailMan_get_SoSndBuf($this->_cPtr);
    }

    public function put_SoSndBuf($newVal)
    {
        CkMailMan_put_SoSndBuf($this->_cPtr, $newVal);
    }

    public function get_SslAllowedCiphers($str)
    {
        CkMailMan_get_SslAllowedCiphers($this->_cPtr, $str);
    }

    public function sslAllowedCiphers()
    {
        return CkMailMan_sslAllowedCiphers($this->_cPtr);
    }

    public function put_SslAllowedCiphers($newVal)
    {
        CkMailMan_put_SslAllowedCiphers($this->_cPtr, $newVal);
    }

    public function get_SslProtocol($str)
    {
        CkMailMan_get_SslProtocol($this->_cPtr, $str);
    }

    public function sslProtocol()
    {
        return CkMailMan_sslProtocol($this->_cPtr);
    }

    public function put_SslProtocol($newVal)
    {
        CkMailMan_put_SslProtocol($this->_cPtr, $newVal);
    }

    public function get_StartTLS()
    {
        return CkMailMan_get_StartTLS($this->_cPtr);
    }

    public function put_StartTLS($newVal)
    {
        CkMailMan_put_StartTLS($this->_cPtr, $newVal);
    }

    public function get_StartTLSifPossible()
    {
        return CkMailMan_get_StartTLSifPossible($this->_cPtr);
    }

    public function put_StartTLSifPossible($newVal)
    {
        CkMailMan_put_StartTLSifPossible($this->_cPtr, $newVal);
    }

    public function get_TlsCipherSuite($str)
    {
        CkMailMan_get_TlsCipherSuite($this->_cPtr, $str);
    }

    public function tlsCipherSuite()
    {
        return CkMailMan_tlsCipherSuite($this->_cPtr);
    }

    public function get_TlsPinSet($str)
    {
        CkMailMan_get_TlsPinSet($this->_cPtr, $str);
    }

    public function tlsPinSet()
    {
        return CkMailMan_tlsPinSet($this->_cPtr);
    }

    public function put_TlsPinSet($newVal)
    {
        CkMailMan_put_TlsPinSet($this->_cPtr, $newVal);
    }

    public function get_TlsVersion($str)
    {
        CkMailMan_get_TlsVersion($this->_cPtr, $str);
    }

    public function tlsVersion()
    {
        return CkMailMan_tlsVersion($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkMailMan_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkMailMan_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkMailMan_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UseApop()
    {
        return CkMailMan_get_UseApop($this->_cPtr);
    }

    public function put_UseApop($newVal)
    {
        CkMailMan_put_UseApop($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkMailMan_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkMailMan_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkMailMan_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkMailMan_version($this->_cPtr);
    }

    public function AddPfxSourceData($pfxData, $password)
    {
        return CkMailMan_AddPfxSourceData($this->_cPtr, $pfxData, $password);
    }

    public function AddPfxSourceFile($pfxFilePath, $password)
    {
        return CkMailMan_AddPfxSourceFile($this->_cPtr, $pfxFilePath, $password);
    }

    public function CheckMail()
    {
        return CkMailMan_CheckMail($this->_cPtr);
    }

    public function CheckMailAsync()
    {
        $r = CkMailMan_CheckMailAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ClearBadEmailAddresses()
    {
        CkMailMan_ClearBadEmailAddresses($this->_cPtr);
    }

    public function ClearPop3SessionLog()
    {
        CkMailMan_ClearPop3SessionLog($this->_cPtr);
    }

    public function ClearSmtpSessionLog()
    {
        CkMailMan_ClearSmtpSessionLog($this->_cPtr);
    }

    public function CloseSmtpConnection()
    {
        return CkMailMan_CloseSmtpConnection($this->_cPtr);
    }

    public function CloseSmtpConnectionAsync()
    {
        $r = CkMailMan_CloseSmtpConnectionAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CopyMail()
    {
        $r = CkMailMan_CopyMail($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function CopyMailAsync()
    {
        $r = CkMailMan_CopyMailAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DeleteBundle($emailBundle)
    {
        return CkMailMan_DeleteBundle($this->_cPtr, $emailBundle);
    }

    public function DeleteBundleAsync($emailBundle)
    {
        $r = CkMailMan_DeleteBundleAsync($this->_cPtr, $emailBundle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DeleteByMsgnum($msgnum)
    {
        return CkMailMan_DeleteByMsgnum($this->_cPtr, $msgnum);
    }

    public function DeleteByMsgnumAsync($msgnum)
    {
        $r = CkMailMan_DeleteByMsgnumAsync($this->_cPtr, $msgnum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DeleteByUidl($uidl)
    {
        return CkMailMan_DeleteByUidl($this->_cPtr, $uidl);
    }

    public function DeleteByUidlAsync($uidl)
    {
        $r = CkMailMan_DeleteByUidlAsync($this->_cPtr, $uidl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DeleteEmail($email)
    {
        return CkMailMan_DeleteEmail($this->_cPtr, $email);
    }

    public function DeleteEmailAsync($email)
    {
        $r = CkMailMan_DeleteEmailAsync($this->_cPtr, $email);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DeleteMultiple($uidlArray)
    {
        return CkMailMan_DeleteMultiple($this->_cPtr, $uidlArray);
    }

    public function DeleteMultipleAsync($uidlArray)
    {
        $r = CkMailMan_DeleteMultipleAsync($this->_cPtr, $uidlArray);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchByMsgnum($msgnum)
    {
        $r = CkMailMan_FetchByMsgnum($this->_cPtr, $msgnum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function FetchByMsgnumAsync($msgnum)
    {
        $r = CkMailMan_FetchByMsgnumAsync($this->_cPtr, $msgnum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchEmail($uidl)
    {
        $r = CkMailMan_FetchEmail($this->_cPtr, $uidl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function FetchEmailAsync($uidl)
    {
        $r = CkMailMan_FetchEmailAsync($this->_cPtr, $uidl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchMime($uidl, $outData)
    {
        return CkMailMan_FetchMime($this->_cPtr, $uidl, $outData);
    }

    public function FetchMimeAsync($uidl)
    {
        $r = CkMailMan_FetchMimeAsync($this->_cPtr, $uidl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchMimeBd($uidl, $mimeData)
    {
        return CkMailMan_FetchMimeBd($this->_cPtr, $uidl, $mimeData);
    }

    public function FetchMimeBdAsync($uidl, $mimeData)
    {
        $r = CkMailMan_FetchMimeBdAsync($this->_cPtr, $uidl, $mimeData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchMimeByMsgnum($msgnum, $outBytes)
    {
        return CkMailMan_FetchMimeByMsgnum($this->_cPtr, $msgnum, $outBytes);
    }

    public function FetchMimeByMsgnumAsync($msgnum)
    {
        $r = CkMailMan_FetchMimeByMsgnumAsync($this->_cPtr, $msgnum);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchMultiple($uidlArray)
    {
        $r = CkMailMan_FetchMultiple($this->_cPtr, $uidlArray);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function FetchMultipleAsync($uidlArray)
    {
        $r = CkMailMan_FetchMultipleAsync($this->_cPtr, $uidlArray);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchMultipleHeaders($uidlArray, $numBodyLines)
    {
        $r = CkMailMan_FetchMultipleHeaders($this->_cPtr, $uidlArray, $numBodyLines);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function FetchMultipleHeadersAsync($uidlArray, $numBodyLines)
    {
        $r = CkMailMan_FetchMultipleHeadersAsync($this->_cPtr, $uidlArray, $numBodyLines);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchMultipleMime($uidlArray)
    {
        $r = CkMailMan_FetchMultipleMime($this->_cPtr, $uidlArray);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function FetchMultipleMimeAsync($uidlArray)
    {
        $r = CkMailMan_FetchMultipleMimeAsync($this->_cPtr, $uidlArray);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSingleHeader($numBodyLines, $messageNumber)
    {
        $r = CkMailMan_FetchSingleHeader($this->_cPtr, $numBodyLines, $messageNumber);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function FetchSingleHeaderAsync($numBodyLines, $messageNumber)
    {
        $r = CkMailMan_FetchSingleHeaderAsync($this->_cPtr, $numBodyLines, $messageNumber);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FetchSingleHeaderByUidl($numBodyLines, $uidl)
    {
        $r = CkMailMan_FetchSingleHeaderByUidl($this->_cPtr, $numBodyLines, $uidl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function FetchSingleHeaderByUidlAsync($numBodyLines, $uidl)
    {
        $r = CkMailMan_FetchSingleHeaderByUidlAsync($this->_cPtr, $numBodyLines, $uidl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetAllHeaders($numBodyLines)
    {
        $r = CkMailMan_GetAllHeaders($this->_cPtr, $numBodyLines);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function GetAllHeadersAsync($numBodyLines)
    {
        $r = CkMailMan_GetAllHeadersAsync($this->_cPtr, $numBodyLines);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetBadEmailAddrs()
    {
        $r = CkMailMan_GetBadEmailAddrs($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function GetFullEmail($email)
    {
        $r = CkMailMan_GetFullEmail($this->_cPtr, $email);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function GetFullEmailAsync($email)
    {
        $r = CkMailMan_GetFullEmailAsync($this->_cPtr, $email);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetHeaders($numBodyLines, $fromIndex, $toIndex)
    {
        $r = CkMailMan_GetHeaders($this->_cPtr, $numBodyLines, $fromIndex, $toIndex);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function GetHeadersAsync($numBodyLines, $fromIndex, $toIndex)
    {
        $r = CkMailMan_GetHeadersAsync($this->_cPtr, $numBodyLines, $fromIndex, $toIndex);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetMailboxCount()
    {
        return CkMailMan_GetMailboxCount($this->_cPtr);
    }

    public function GetMailboxCountAsync()
    {
        $r = CkMailMan_GetMailboxCountAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function getMailboxInfoXml()
    {
        return CkMailMan_getMailboxInfoXml($this->_cPtr);
    }

    public function mailboxInfoXml()
    {
        return CkMailMan_mailboxInfoXml($this->_cPtr);
    }

    public function GetMailboxInfoXmlAsync()
    {
        $r = CkMailMan_GetMailboxInfoXmlAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetMailboxSize()
    {
        return CkMailMan_GetMailboxSize($this->_cPtr);
    }

    public function GetMailboxSizeAsync()
    {
        $r = CkMailMan_GetMailboxSizeAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetPop3SslServerCert()
    {
        $r = CkMailMan_GetPop3SslServerCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetSentToEmailAddrs()
    {
        $r = CkMailMan_GetSentToEmailAddrs($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function GetSizeByUidl($uidl)
    {
        return CkMailMan_GetSizeByUidl($this->_cPtr, $uidl);
    }

    public function GetSizeByUidlAsync($uidl)
    {
        $r = CkMailMan_GetSizeByUidlAsync($this->_cPtr, $uidl);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetSmtpSslServerCert()
    {
        $r = CkMailMan_GetSmtpSslServerCert($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkCert($r);
        }

        return $r;
    }

    public function GetUidls()
    {
        $r = CkMailMan_GetUidls($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function GetUidlsAsync()
    {
        $r = CkMailMan_GetUidlsAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function IsSmtpDsnCapable()
    {
        return CkMailMan_IsSmtpDsnCapable($this->_cPtr);
    }

    public function IsSmtpDsnCapableAsync()
    {
        $r = CkMailMan_IsSmtpDsnCapableAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function IsUnlocked()
    {
        return CkMailMan_IsUnlocked($this->_cPtr);
    }

    public function LastJsonData()
    {
        $r = CkMailMan_LastJsonData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function LoadEml($emlFilename)
    {
        $r = CkMailMan_LoadEml($this->_cPtr, $emlFilename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function LoadMbx($mbxFileName)
    {
        $r = CkMailMan_LoadMbx($this->_cPtr, $mbxFileName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function LoadMime($mimeText)
    {
        $r = CkMailMan_LoadMime($this->_cPtr, $mimeText);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function LoadTaskCaller($task)
    {
        return CkMailMan_LoadTaskCaller($this->_cPtr, $task);
    }

    public function LoadXmlEmail($filename)
    {
        $r = CkMailMan_LoadXmlEmail($this->_cPtr, $filename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function LoadXmlEmailString($xmlString)
    {
        $r = CkMailMan_LoadXmlEmailString($this->_cPtr, $xmlString);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmail($r);
        }

        return $r;
    }

    public function LoadXmlFile($filename)
    {
        $r = CkMailMan_LoadXmlFile($this->_cPtr, $filename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function LoadXmlString($xmlString)
    {
        $r = CkMailMan_LoadXmlString($this->_cPtr, $xmlString);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function mxLookup($emailAddress)
    {
        return CkMailMan_mxLookup($this->_cPtr, $emailAddress);
    }

    public function MxLookupAll($emailAddress)
    {
        $r = CkMailMan_MxLookupAll($this->_cPtr, $emailAddress);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function OpenSmtpConnection()
    {
        return CkMailMan_OpenSmtpConnection($this->_cPtr);
    }

    public function OpenSmtpConnectionAsync()
    {
        $r = CkMailMan_OpenSmtpConnectionAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Pop3Authenticate()
    {
        return CkMailMan_Pop3Authenticate($this->_cPtr);
    }

    public function Pop3AuthenticateAsync()
    {
        $r = CkMailMan_Pop3AuthenticateAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Pop3BeginSession()
    {
        return CkMailMan_Pop3BeginSession($this->_cPtr);
    }

    public function Pop3BeginSessionAsync()
    {
        $r = CkMailMan_Pop3BeginSessionAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Pop3Connect()
    {
        return CkMailMan_Pop3Connect($this->_cPtr);
    }

    public function Pop3ConnectAsync()
    {
        $r = CkMailMan_Pop3ConnectAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Pop3EndSession()
    {
        return CkMailMan_Pop3EndSession($this->_cPtr);
    }

    public function Pop3EndSessionAsync()
    {
        $r = CkMailMan_Pop3EndSessionAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Pop3EndSessionNoQuit()
    {
        return CkMailMan_Pop3EndSessionNoQuit($this->_cPtr);
    }

    public function Pop3EndSessionNoQuitAsync()
    {
        $r = CkMailMan_Pop3EndSessionNoQuitAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Pop3Noop()
    {
        return CkMailMan_Pop3Noop($this->_cPtr);
    }

    public function Pop3NoopAsync()
    {
        $r = CkMailMan_Pop3NoopAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Pop3Reset()
    {
        return CkMailMan_Pop3Reset($this->_cPtr);
    }

    public function Pop3ResetAsync()
    {
        $r = CkMailMan_Pop3ResetAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function pop3SendRawCommand($command, $charset)
    {
        return CkMailMan_pop3SendRawCommand($this->_cPtr, $command, $charset);
    }

    public function Pop3SendRawCommandAsync($command, $charset)
    {
        $r = CkMailMan_Pop3SendRawCommandAsync($this->_cPtr, $command, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function QuickSend($fromAddr, $toAddr, $subject, $body, $smtpServer)
    {
        return CkMailMan_QuickSend($this->_cPtr, $fromAddr, $toAddr, $subject, $body, $smtpServer);
    }

    public function QuickSendAsync($fromAddr, $toAddr, $subject, $body, $smtpServer)
    {
        $r = CkMailMan_QuickSendAsync($this->_cPtr, $fromAddr, $toAddr, $subject, $body, $smtpServer);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function renderToMime($email)
    {
        return CkMailMan_renderToMime($this->_cPtr, $email);
    }

    public function RenderToMimeBd($email, $renderedMime)
    {
        return CkMailMan_RenderToMimeBd($this->_cPtr, $email, $renderedMime);
    }

    public function RenderToMimeBytes($email, $outBytes)
    {
        return CkMailMan_RenderToMimeBytes($this->_cPtr, $email, $outBytes);
    }

    public function RenderToMimeSb($email, $renderedMime)
    {
        return CkMailMan_RenderToMimeSb($this->_cPtr, $email, $renderedMime);
    }

    public function SaveLastError($path)
    {
        return CkMailMan_SaveLastError($this->_cPtr, $path);
    }

    public function SendBundle($bundle)
    {
        return CkMailMan_SendBundle($this->_cPtr, $bundle);
    }

    public function SendBundleAsync($bundle)
    {
        $r = CkMailMan_SendBundleAsync($this->_cPtr, $bundle);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendEmail($email)
    {
        return CkMailMan_SendEmail($this->_cPtr, $email);
    }

    public function SendEmailAsync($email)
    {
        $r = CkMailMan_SendEmailAsync($this->_cPtr, $email);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendMime($fromAddr, $recipients, $mimeSource)
    {
        return CkMailMan_SendMime($this->_cPtr, $fromAddr, $recipients, $mimeSource);
    }

    public function SendMimeAsync($fromAddr, $recipients, $mimeSource)
    {
        $r = CkMailMan_SendMimeAsync($this->_cPtr, $fromAddr, $recipients, $mimeSource);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendMimeBd($fromAddr, $recipients, $mimeData)
    {
        return CkMailMan_SendMimeBd($this->_cPtr, $fromAddr, $recipients, $mimeData);
    }

    public function SendMimeBdAsync($fromAddr, $recipients, $mimeData)
    {
        $r = CkMailMan_SendMimeBdAsync($this->_cPtr, $fromAddr, $recipients, $mimeData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendMimeBytes($fromAddr, $recipients, $mimeSource)
    {
        return CkMailMan_SendMimeBytes($this->_cPtr, $fromAddr, $recipients, $mimeSource);
    }

    public function SendMimeBytesAsync($fromAddr, $recipients, $mimeSource)
    {
        $r = CkMailMan_SendMimeBytesAsync($this->_cPtr, $fromAddr, $recipients, $mimeSource);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendMimeToList($fromAddr, $distListFilename, $mimeSource)
    {
        return CkMailMan_SendMimeToList($this->_cPtr, $fromAddr, $distListFilename, $mimeSource);
    }

    public function SendMimeToListAsync($fromAddr, $distListFilename, $mimeSource)
    {
        $r = CkMailMan_SendMimeToListAsync($this->_cPtr, $fromAddr, $distListFilename, $mimeSource);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendToDistributionList($emailObj, $recipientList)
    {
        return CkMailMan_SendToDistributionList($this->_cPtr, $emailObj, $recipientList);
    }

    public function SendToDistributionListAsync($emailObj, $recipientList)
    {
        $r = CkMailMan_SendToDistributionListAsync($this->_cPtr, $emailObj, $recipientList);
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
        return CkMailMan_SetDecryptCert($this->_cPtr, $cert);
    }

    public function SetDecryptCert2($cert, $privateKey)
    {
        return CkMailMan_SetDecryptCert2($this->_cPtr, $cert, $privateKey);
    }

    public function SetPassword($protocol, $password)
    {
        return CkMailMan_SetPassword($this->_cPtr, $protocol, $password);
    }

    public function SetSslClientCert($cert)
    {
        return CkMailMan_SetSslClientCert($this->_cPtr, $cert);
    }

    public function SetSslClientCertPem($pemDataOrFilename, $pemPassword)
    {
        return CkMailMan_SetSslClientCertPem($this->_cPtr, $pemDataOrFilename, $pemPassword);
    }

    public function SetSslClientCertPfx($pfxFilename, $pfxPassword)
    {
        return CkMailMan_SetSslClientCertPfx($this->_cPtr, $pfxFilename, $pfxPassword);
    }

    public function SmtpAuthenticate()
    {
        return CkMailMan_SmtpAuthenticate($this->_cPtr);
    }

    public function SmtpAuthenticateAsync()
    {
        $r = CkMailMan_SmtpAuthenticateAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SmtpConnect()
    {
        return CkMailMan_SmtpConnect($this->_cPtr);
    }

    public function SmtpConnectAsync()
    {
        $r = CkMailMan_SmtpConnectAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SmtpNoop()
    {
        return CkMailMan_SmtpNoop($this->_cPtr);
    }

    public function SmtpNoopAsync()
    {
        $r = CkMailMan_SmtpNoopAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SmtpReset()
    {
        return CkMailMan_SmtpReset($this->_cPtr);
    }

    public function SmtpResetAsync()
    {
        $r = CkMailMan_SmtpResetAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function smtpSendRawCommand($command, $charset, $bEncodeBase64)
    {
        return CkMailMan_smtpSendRawCommand($this->_cPtr, $command, $charset, $bEncodeBase64);
    }

    public function SmtpSendRawCommandAsync($command, $charset, $bEncodeBase64)
    {
        $r = CkMailMan_SmtpSendRawCommandAsync($this->_cPtr, $command, $charset, $bEncodeBase64);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SshAuthenticatePk($sshLogin, $sshUsername)
    {
        return CkMailMan_SshAuthenticatePk($this->_cPtr, $sshLogin, $sshUsername);
    }

    public function SshAuthenticatePkAsync($sshLogin, $sshUsername)
    {
        $r = CkMailMan_SshAuthenticatePkAsync($this->_cPtr, $sshLogin, $sshUsername);
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
        return CkMailMan_SshAuthenticatePw($this->_cPtr, $sshLogin, $sshPassword);
    }

    public function SshAuthenticatePwAsync($sshLogin, $sshPassword)
    {
        $r = CkMailMan_SshAuthenticatePwAsync($this->_cPtr, $sshLogin, $sshPassword);
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
        return CkMailMan_SshCloseTunnel($this->_cPtr);
    }

    public function SshCloseTunnelAsync()
    {
        $r = CkMailMan_SshCloseTunnelAsync($this->_cPtr);
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
        return CkMailMan_SshOpenTunnel($this->_cPtr, $sshHostname, $sshPort);
    }

    public function SshOpenTunnelAsync($sshHostname, $sshPort)
    {
        $r = CkMailMan_SshOpenTunnelAsync($this->_cPtr, $sshHostname, $sshPort);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function TransferMail()
    {
        $r = CkMailMan_TransferMail($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkEmailBundle($r);
        }

        return $r;
    }

    public function TransferMailAsync()
    {
        $r = CkMailMan_TransferMailAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function TransferMultipleMime($uidlArray)
    {
        $r = CkMailMan_TransferMultipleMime($this->_cPtr, $uidlArray);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function TransferMultipleMimeAsync($uidlArray)
    {
        $r = CkMailMan_TransferMultipleMimeAsync($this->_cPtr, $uidlArray);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UnlockComponent($code)
    {
        return CkMailMan_UnlockComponent($this->_cPtr, $code);
    }

    public function UseCertVault($vault)
    {
        return CkMailMan_UseCertVault($this->_cPtr, $vault);
    }

    public function UseSsh($ssh)
    {
        return CkMailMan_UseSsh($this->_cPtr, $ssh);
    }

    public function UseSshTunnel($tunnel)
    {
        return CkMailMan_UseSshTunnel($this->_cPtr, $tunnel);
    }

    public function VerifyPopConnection()
    {
        return CkMailMan_VerifyPopConnection($this->_cPtr);
    }

    public function VerifyPopConnectionAsync()
    {
        $r = CkMailMan_VerifyPopConnectionAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function VerifyPopLogin()
    {
        return CkMailMan_VerifyPopLogin($this->_cPtr);
    }

    public function VerifyPopLoginAsync()
    {
        $r = CkMailMan_VerifyPopLoginAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function VerifyRecips($email, $badAddrs)
    {
        return CkMailMan_VerifyRecips($this->_cPtr, $email, $badAddrs);
    }

    public function VerifyRecipsAsync($email, $badAddrs)
    {
        $r = CkMailMan_VerifyRecipsAsync($this->_cPtr, $email, $badAddrs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function VerifySmtpConnection()
    {
        return CkMailMan_VerifySmtpConnection($this->_cPtr);
    }

    public function VerifySmtpConnectionAsync()
    {
        $r = CkMailMan_VerifySmtpConnectionAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function VerifySmtpLogin()
    {
        return CkMailMan_VerifySmtpLogin($this->_cPtr);
    }

    public function VerifySmtpLoginAsync()
    {
        $r = CkMailMan_VerifySmtpLoginAsync($this->_cPtr);
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
