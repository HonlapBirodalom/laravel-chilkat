<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkHttp
{
    public $_cPtr = null;
    protected $_pData = array();

    function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkHttp') {
            $this->_cPtr = $res;
            return;
        }
        $this->_cPtr = new_CkHttp();
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
        return CkHttp_get_Utf8($this->_cPtr);
    }

    function put_Utf8($b)
    {
        CkHttp_put_Utf8($this->_cPtr, $b);
    }

    function put_EventCallbackObject($progress)
    {
        CkHttp_put_EventCallbackObject($this->_cPtr, $progress);
    }

    function get_AbortCurrent()
    {
        return CkHttp_get_AbortCurrent($this->_cPtr);
    }

    function put_AbortCurrent($newVal)
    {
        CkHttp_put_AbortCurrent($this->_cPtr, $newVal);
    }

    function get_Accept($str)
    {
        CkHttp_get_Accept($this->_cPtr, $str);
    }

    function ck_accept()
    {
        return CkHttp_ck_accept($this->_cPtr);
    }

    function put_Accept($newVal)
    {
        CkHttp_put_Accept($this->_cPtr, $newVal);
    }

    function get_AcceptCharset($str)
    {
        CkHttp_get_AcceptCharset($this->_cPtr, $str);
    }

    function acceptCharset()
    {
        return CkHttp_acceptCharset($this->_cPtr);
    }

    function put_AcceptCharset($newVal)
    {
        CkHttp_put_AcceptCharset($this->_cPtr, $newVal);
    }

    function get_AcceptLanguage($str)
    {
        CkHttp_get_AcceptLanguage($this->_cPtr, $str);
    }

    function acceptLanguage()
    {
        return CkHttp_acceptLanguage($this->_cPtr);
    }

    function put_AcceptLanguage($newVal)
    {
        CkHttp_put_AcceptLanguage($this->_cPtr, $newVal);
    }

    function get_AllowGzip()
    {
        return CkHttp_get_AllowGzip($this->_cPtr);
    }

    function put_AllowGzip($newVal)
    {
        CkHttp_put_AllowGzip($this->_cPtr, $newVal);
    }

    function get_AllowHeaderFolding()
    {
        return CkHttp_get_AllowHeaderFolding($this->_cPtr);
    }

    function put_AllowHeaderFolding($newVal)
    {
        CkHttp_put_AllowHeaderFolding($this->_cPtr, $newVal);
    }

    function get_AuthSignature($str)
    {
        CkHttp_get_AuthSignature($this->_cPtr, $str);
    }

    function authSignature()
    {
        return CkHttp_authSignature($this->_cPtr);
    }

    function put_AuthSignature($newVal)
    {
        CkHttp_put_AuthSignature($this->_cPtr, $newVal);
    }

    function get_AuthToken($str)
    {
        CkHttp_get_AuthToken($this->_cPtr, $str);
    }

    function authToken()
    {
        return CkHttp_authToken($this->_cPtr);
    }

    function put_AuthToken($newVal)
    {
        CkHttp_put_AuthToken($this->_cPtr, $newVal);
    }

    function get_AutoAddHostHeader()
    {
        return CkHttp_get_AutoAddHostHeader($this->_cPtr);
    }

    function put_AutoAddHostHeader($newVal)
    {
        CkHttp_put_AutoAddHostHeader($this->_cPtr, $newVal);
    }

    function get_AwsAccessKey($str)
    {
        CkHttp_get_AwsAccessKey($this->_cPtr, $str);
    }

    function awsAccessKey()
    {
        return CkHttp_awsAccessKey($this->_cPtr);
    }

    function put_AwsAccessKey($newVal)
    {
        CkHttp_put_AwsAccessKey($this->_cPtr, $newVal);
    }

    function get_AwsEndpoint($str)
    {
        CkHttp_get_AwsEndpoint($this->_cPtr, $str);
    }

    function awsEndpoint()
    {
        return CkHttp_awsEndpoint($this->_cPtr);
    }

    function put_AwsEndpoint($newVal)
    {
        CkHttp_put_AwsEndpoint($this->_cPtr, $newVal);
    }

    function get_AwsRegion($str)
    {
        CkHttp_get_AwsRegion($this->_cPtr, $str);
    }

    function awsRegion()
    {
        return CkHttp_awsRegion($this->_cPtr);
    }

    function put_AwsRegion($newVal)
    {
        CkHttp_put_AwsRegion($this->_cPtr, $newVal);
    }

    function get_AwsSecretKey($str)
    {
        CkHttp_get_AwsSecretKey($this->_cPtr, $str);
    }

    function awsSecretKey()
    {
        return CkHttp_awsSecretKey($this->_cPtr);
    }

    function put_AwsSecretKey($newVal)
    {
        CkHttp_put_AwsSecretKey($this->_cPtr, $newVal);
    }

    function get_AwsSessionToken($str)
    {
        CkHttp_get_AwsSessionToken($this->_cPtr, $str);
    }

    function awsSessionToken()
    {
        return CkHttp_awsSessionToken($this->_cPtr);
    }

    function put_AwsSessionToken($newVal)
    {
        CkHttp_put_AwsSessionToken($this->_cPtr, $newVal);
    }

    function get_AwsSignatureVersion()
    {
        return CkHttp_get_AwsSignatureVersion($this->_cPtr);
    }

    function put_AwsSignatureVersion($newVal)
    {
        CkHttp_put_AwsSignatureVersion($this->_cPtr, $newVal);
    }

    function get_AwsSubResources($str)
    {
        CkHttp_get_AwsSubResources($this->_cPtr, $str);
    }

    function awsSubResources()
    {
        return CkHttp_awsSubResources($this->_cPtr);
    }

    function put_AwsSubResources($newVal)
    {
        CkHttp_put_AwsSubResources($this->_cPtr, $newVal);
    }

    function get_BandwidthThrottleDown()
    {
        return CkHttp_get_BandwidthThrottleDown($this->_cPtr);
    }

    function put_BandwidthThrottleDown($newVal)
    {
        CkHttp_put_BandwidthThrottleDown($this->_cPtr, $newVal);
    }

    function get_BandwidthThrottleUp()
    {
        return CkHttp_get_BandwidthThrottleUp($this->_cPtr);
    }

    function put_BandwidthThrottleUp($newVal)
    {
        CkHttp_put_BandwidthThrottleUp($this->_cPtr, $newVal);
    }

    function get_BasicAuth()
    {
        return CkHttp_get_BasicAuth($this->_cPtr);
    }

    function put_BasicAuth($newVal)
    {
        CkHttp_put_BasicAuth($this->_cPtr, $newVal);
    }

    function get_ClientIpAddress($str)
    {
        CkHttp_get_ClientIpAddress($this->_cPtr, $str);
    }

    function clientIpAddress()
    {
        return CkHttp_clientIpAddress($this->_cPtr);
    }

    function put_ClientIpAddress($newVal)
    {
        CkHttp_put_ClientIpAddress($this->_cPtr, $newVal);
    }

    function get_ConnectFailReason()
    {
        return CkHttp_get_ConnectFailReason($this->_cPtr);
    }

    function get_Connection($str)
    {
        CkHttp_get_Connection($this->_cPtr, $str);
    }

    function connection()
    {
        return CkHttp_connection($this->_cPtr);
    }

    function put_Connection($newVal)
    {
        CkHttp_put_Connection($this->_cPtr, $newVal);
    }

    function get_ConnectTimeout()
    {
        return CkHttp_get_ConnectTimeout($this->_cPtr);
    }

    function put_ConnectTimeout($newVal)
    {
        CkHttp_put_ConnectTimeout($this->_cPtr, $newVal);
    }

    function get_CookieDir($str)
    {
        CkHttp_get_CookieDir($this->_cPtr, $str);
    }

    function cookieDir()
    {
        return CkHttp_cookieDir($this->_cPtr);
    }

    function put_CookieDir($newVal)
    {
        CkHttp_put_CookieDir($this->_cPtr, $newVal);
    }

    function get_DebugLogFilePath($str)
    {
        CkHttp_get_DebugLogFilePath($this->_cPtr, $str);
    }

    function debugLogFilePath()
    {
        return CkHttp_debugLogFilePath($this->_cPtr);
    }

    function put_DebugLogFilePath($newVal)
    {
        CkHttp_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    function get_DefaultFreshPeriod()
    {
        return CkHttp_get_DefaultFreshPeriod($this->_cPtr);
    }

    function put_DefaultFreshPeriod($newVal)
    {
        CkHttp_put_DefaultFreshPeriod($this->_cPtr, $newVal);
    }

    function get_DigestAuth()
    {
        return CkHttp_get_DigestAuth($this->_cPtr);
    }

    function put_DigestAuth($newVal)
    {
        CkHttp_put_DigestAuth($this->_cPtr, $newVal);
    }

    function get_FetchFromCache()
    {
        return CkHttp_get_FetchFromCache($this->_cPtr);
    }

    function put_FetchFromCache($newVal)
    {
        CkHttp_put_FetchFromCache($this->_cPtr, $newVal);
    }

    function get_FinalRedirectUrl($str)
    {
        CkHttp_get_FinalRedirectUrl($this->_cPtr, $str);
    }

    function finalRedirectUrl()
    {
        return CkHttp_finalRedirectUrl($this->_cPtr);
    }

    function get_FollowRedirects()
    {
        return CkHttp_get_FollowRedirects($this->_cPtr);
    }

    function put_FollowRedirects($newVal)
    {
        CkHttp_put_FollowRedirects($this->_cPtr, $newVal);
    }

    function get_FreshnessAlgorithm()
    {
        return CkHttp_get_FreshnessAlgorithm($this->_cPtr);
    }

    function put_FreshnessAlgorithm($newVal)
    {
        CkHttp_put_FreshnessAlgorithm($this->_cPtr, $newVal);
    }

    function get_HeartbeatMs()
    {
        return CkHttp_get_HeartbeatMs($this->_cPtr);
    }

    function put_HeartbeatMs($newVal)
    {
        CkHttp_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    function get_IgnoreMustRevalidate()
    {
        return CkHttp_get_IgnoreMustRevalidate($this->_cPtr);
    }

    function put_IgnoreMustRevalidate($newVal)
    {
        CkHttp_put_IgnoreMustRevalidate($this->_cPtr, $newVal);
    }

    function get_IgnoreNoCache()
    {
        return CkHttp_get_IgnoreNoCache($this->_cPtr);
    }

    function put_IgnoreNoCache($newVal)
    {
        CkHttp_put_IgnoreNoCache($this->_cPtr, $newVal);
    }

    function get_KeepResponseBody()
    {
        return CkHttp_get_KeepResponseBody($this->_cPtr);
    }

    function put_KeepResponseBody($newVal)
    {
        CkHttp_put_KeepResponseBody($this->_cPtr, $newVal);
    }

    function get_LastContentType($str)
    {
        CkHttp_get_LastContentType($this->_cPtr, $str);
    }

    function lastContentType()
    {
        return CkHttp_lastContentType($this->_cPtr);
    }

    function get_LastErrorHtml($str)
    {
        CkHttp_get_LastErrorHtml($this->_cPtr, $str);
    }

    function lastErrorHtml()
    {
        return CkHttp_lastErrorHtml($this->_cPtr);
    }

    function get_LastErrorText($str)
    {
        CkHttp_get_LastErrorText($this->_cPtr, $str);
    }

    function lastErrorText()
    {
        return CkHttp_lastErrorText($this->_cPtr);
    }

    function get_LastErrorXml($str)
    {
        CkHttp_get_LastErrorXml($this->_cPtr, $str);
    }

    function lastErrorXml()
    {
        return CkHttp_lastErrorXml($this->_cPtr);
    }

    function get_LastFromCache()
    {
        return CkHttp_get_LastFromCache($this->_cPtr);
    }

    function get_LastHeader($str)
    {
        CkHttp_get_LastHeader($this->_cPtr, $str);
    }

    function lastHeader()
    {
        return CkHttp_lastHeader($this->_cPtr);
    }

    function get_LastMethodSuccess()
    {
        return CkHttp_get_LastMethodSuccess($this->_cPtr);
    }

    function put_LastMethodSuccess($newVal)
    {
        CkHttp_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    function get_LastModDate($str)
    {
        CkHttp_get_LastModDate($this->_cPtr, $str);
    }

    function lastModDate()
    {
        return CkHttp_lastModDate($this->_cPtr);
    }

    function get_LastResponseBody($str)
    {
        CkHttp_get_LastResponseBody($this->_cPtr, $str);
    }

    function lastResponseBody()
    {
        return CkHttp_lastResponseBody($this->_cPtr);
    }

    function get_LastResponseHeader($str)
    {
        CkHttp_get_LastResponseHeader($this->_cPtr, $str);
    }

    function lastResponseHeader()
    {
        return CkHttp_lastResponseHeader($this->_cPtr);
    }

    function get_LastStatus()
    {
        return CkHttp_get_LastStatus($this->_cPtr);
    }

    function get_LastStatusText($str)
    {
        CkHttp_get_LastStatusText($this->_cPtr, $str);
    }

    function lastStatusText()
    {
        return CkHttp_lastStatusText($this->_cPtr);
    }

    function get_LMFactor()
    {
        return CkHttp_get_LMFactor($this->_cPtr);
    }

    function put_LMFactor($newVal)
    {
        CkHttp_put_LMFactor($this->_cPtr, $newVal);
    }

    function get_Login($str)
    {
        CkHttp_get_Login($this->_cPtr, $str);
    }

    function login()
    {
        return CkHttp_login($this->_cPtr);
    }

    function put_Login($newVal)
    {
        CkHttp_put_Login($this->_cPtr, $newVal);
    }

    function get_LoginDomain($str)
    {
        CkHttp_get_LoginDomain($this->_cPtr, $str);
    }

    function loginDomain()
    {
        return CkHttp_loginDomain($this->_cPtr);
    }

    function put_LoginDomain($newVal)
    {
        CkHttp_put_LoginDomain($this->_cPtr, $newVal);
    }

    function get_MaxConnections()
    {
        return CkHttp_get_MaxConnections($this->_cPtr);
    }

    function put_MaxConnections($newVal)
    {
        CkHttp_put_MaxConnections($this->_cPtr, $newVal);
    }

    function get_MaxFreshPeriod()
    {
        return CkHttp_get_MaxFreshPeriod($this->_cPtr);
    }

    function put_MaxFreshPeriod($newVal)
    {
        CkHttp_put_MaxFreshPeriod($this->_cPtr, $newVal);
    }

    function get_MaxResponseSize()
    {
        return CkHttp_get_MaxResponseSize($this->_cPtr);
    }

    function put_MaxResponseSize($newVal)
    {
        CkHttp_put_MaxResponseSize($this->_cPtr, $newVal);
    }

    function get_MaxUrlLen()
    {
        return CkHttp_get_MaxUrlLen($this->_cPtr);
    }

    function put_MaxUrlLen($newVal)
    {
        CkHttp_put_MaxUrlLen($this->_cPtr, $newVal);
    }

    function get_MimicFireFox()
    {
        return CkHttp_get_MimicFireFox($this->_cPtr);
    }

    function put_MimicFireFox($newVal)
    {
        CkHttp_put_MimicFireFox($this->_cPtr, $newVal);
    }

    function get_MimicIE()
    {
        return CkHttp_get_MimicIE($this->_cPtr);
    }

    function put_MimicIE($newVal)
    {
        CkHttp_put_MimicIE($this->_cPtr, $newVal);
    }

    function get_MinFreshPeriod()
    {
        return CkHttp_get_MinFreshPeriod($this->_cPtr);
    }

    function put_MinFreshPeriod($newVal)
    {
        CkHttp_put_MinFreshPeriod($this->_cPtr, $newVal);
    }

    function get_NegotiateAuth()
    {
        return CkHttp_get_NegotiateAuth($this->_cPtr);
    }

    function put_NegotiateAuth($newVal)
    {
        CkHttp_put_NegotiateAuth($this->_cPtr, $newVal);
    }

    function get_NtlmAuth()
    {
        return CkHttp_get_NtlmAuth($this->_cPtr);
    }

    function put_NtlmAuth($newVal)
    {
        CkHttp_put_NtlmAuth($this->_cPtr, $newVal);
    }

    function get_NumCacheLevels()
    {
        return CkHttp_get_NumCacheLevels($this->_cPtr);
    }

    function put_NumCacheLevels($newVal)
    {
        CkHttp_put_NumCacheLevels($this->_cPtr, $newVal);
    }

    function get_NumCacheRoots()
    {
        return CkHttp_get_NumCacheRoots($this->_cPtr);
    }

    function get_OAuth1()
    {
        return CkHttp_get_OAuth1($this->_cPtr);
    }

    function put_OAuth1($newVal)
    {
        CkHttp_put_OAuth1($this->_cPtr, $newVal);
    }

    function get_OAuthBodyHash()
    {
        return CkHttp_get_OAuthBodyHash($this->_cPtr);
    }

    function put_OAuthBodyHash($newVal)
    {
        CkHttp_put_OAuthBodyHash($this->_cPtr, $newVal);
    }

    function get_OAuthCallback($str)
    {
        CkHttp_get_OAuthCallback($this->_cPtr, $str);
    }

    function oAuthCallback()
    {
        return CkHttp_oAuthCallback($this->_cPtr);
    }

    function put_OAuthCallback($newVal)
    {
        CkHttp_put_OAuthCallback($this->_cPtr, $newVal);
    }

    function get_OAuthConsumerKey($str)
    {
        CkHttp_get_OAuthConsumerKey($this->_cPtr, $str);
    }

    function oAuthConsumerKey()
    {
        return CkHttp_oAuthConsumerKey($this->_cPtr);
    }

    function put_OAuthConsumerKey($newVal)
    {
        CkHttp_put_OAuthConsumerKey($this->_cPtr, $newVal);
    }

    function get_OAuthConsumerSecret($str)
    {
        CkHttp_get_OAuthConsumerSecret($this->_cPtr, $str);
    }

    function oAuthConsumerSecret()
    {
        return CkHttp_oAuthConsumerSecret($this->_cPtr);
    }

    function put_OAuthConsumerSecret($newVal)
    {
        CkHttp_put_OAuthConsumerSecret($this->_cPtr, $newVal);
    }

    function get_OAuthRealm($str)
    {
        CkHttp_get_OAuthRealm($this->_cPtr, $str);
    }

    function oAuthRealm()
    {
        return CkHttp_oAuthRealm($this->_cPtr);
    }

    function put_OAuthRealm($newVal)
    {
        CkHttp_put_OAuthRealm($this->_cPtr, $newVal);
    }

    function get_OAuthSigMethod($str)
    {
        CkHttp_get_OAuthSigMethod($this->_cPtr, $str);
    }

    function oAuthSigMethod()
    {
        return CkHttp_oAuthSigMethod($this->_cPtr);
    }

    function put_OAuthSigMethod($newVal)
    {
        CkHttp_put_OAuthSigMethod($this->_cPtr, $newVal);
    }

    function get_OAuthToken($str)
    {
        CkHttp_get_OAuthToken($this->_cPtr, $str);
    }

    function oAuthToken()
    {
        return CkHttp_oAuthToken($this->_cPtr);
    }

    function put_OAuthToken($newVal)
    {
        CkHttp_put_OAuthToken($this->_cPtr, $newVal);
    }

    function get_OAuthTokenSecret($str)
    {
        CkHttp_get_OAuthTokenSecret($this->_cPtr, $str);
    }

    function oAuthTokenSecret()
    {
        return CkHttp_oAuthTokenSecret($this->_cPtr);
    }

    function put_OAuthTokenSecret($newVal)
    {
        CkHttp_put_OAuthTokenSecret($this->_cPtr, $newVal);
    }

    function get_OAuthVerifier($str)
    {
        CkHttp_get_OAuthVerifier($this->_cPtr, $str);
    }

    function oAuthVerifier()
    {
        return CkHttp_oAuthVerifier($this->_cPtr);
    }

    function put_OAuthVerifier($newVal)
    {
        CkHttp_put_OAuthVerifier($this->_cPtr, $newVal);
    }

    function get_Password($str)
    {
        CkHttp_get_Password($this->_cPtr, $str);
    }

    function password()
    {
        return CkHttp_password($this->_cPtr);
    }

    function put_Password($newVal)
    {
        CkHttp_put_Password($this->_cPtr, $newVal);
    }

    function get_PercentDoneScale()
    {
        return CkHttp_get_PercentDoneScale($this->_cPtr);
    }

    function put_PercentDoneScale($newVal)
    {
        CkHttp_put_PercentDoneScale($this->_cPtr, $newVal);
    }

    function get_PreferIpv6()
    {
        return CkHttp_get_PreferIpv6($this->_cPtr);
    }

    function put_PreferIpv6($newVal)
    {
        CkHttp_put_PreferIpv6($this->_cPtr, $newVal);
    }

    function get_ProxyAuthMethod($str)
    {
        CkHttp_get_ProxyAuthMethod($this->_cPtr, $str);
    }

    function proxyAuthMethod()
    {
        return CkHttp_proxyAuthMethod($this->_cPtr);
    }

    function put_ProxyAuthMethod($newVal)
    {
        CkHttp_put_ProxyAuthMethod($this->_cPtr, $newVal);
    }

    function get_ProxyDirectTls()
    {
        return CkHttp_get_ProxyDirectTls($this->_cPtr);
    }

    function put_ProxyDirectTls($newVal)
    {
        CkHttp_put_ProxyDirectTls($this->_cPtr, $newVal);
    }

    function get_ProxyDomain($str)
    {
        CkHttp_get_ProxyDomain($this->_cPtr, $str);
    }

    function proxyDomain()
    {
        return CkHttp_proxyDomain($this->_cPtr);
    }

    function put_ProxyDomain($newVal)
    {
        CkHttp_put_ProxyDomain($this->_cPtr, $newVal);
    }

    function get_ProxyLogin($str)
    {
        CkHttp_get_ProxyLogin($this->_cPtr, $str);
    }

    function proxyLogin()
    {
        return CkHttp_proxyLogin($this->_cPtr);
    }

    function put_ProxyLogin($newVal)
    {
        CkHttp_put_ProxyLogin($this->_cPtr, $newVal);
    }

    function get_ProxyLoginDomain($str)
    {
        CkHttp_get_ProxyLoginDomain($this->_cPtr, $str);
    }

    function proxyLoginDomain()
    {
        return CkHttp_proxyLoginDomain($this->_cPtr);
    }

    function put_ProxyLoginDomain($newVal)
    {
        CkHttp_put_ProxyLoginDomain($this->_cPtr, $newVal);
    }

    function get_ProxyPassword($str)
    {
        CkHttp_get_ProxyPassword($this->_cPtr, $str);
    }

    function proxyPassword()
    {
        return CkHttp_proxyPassword($this->_cPtr);
    }

    function put_ProxyPassword($newVal)
    {
        CkHttp_put_ProxyPassword($this->_cPtr, $newVal);
    }

    function get_ProxyPort()
    {
        return CkHttp_get_ProxyPort($this->_cPtr);
    }

    function put_ProxyPort($newVal)
    {
        CkHttp_put_ProxyPort($this->_cPtr, $newVal);
    }

    function get_ReadTimeout()
    {
        return CkHttp_get_ReadTimeout($this->_cPtr);
    }

    function put_ReadTimeout($newVal)
    {
        CkHttp_put_ReadTimeout($this->_cPtr, $newVal);
    }

    function get_ReceivedCertReq()
    {
        return CkHttp_get_ReceivedCertReq($this->_cPtr);
    }

    function get_RedirectVerb($str)
    {
        CkHttp_get_RedirectVerb($this->_cPtr, $str);
    }

    function redirectVerb()
    {
        return CkHttp_redirectVerb($this->_cPtr);
    }

    function put_RedirectVerb($newVal)
    {
        CkHttp_put_RedirectVerb($this->_cPtr, $newVal);
    }

    function get_Referer($str)
    {
        CkHttp_get_Referer($this->_cPtr, $str);
    }

    function referer()
    {
        return CkHttp_referer($this->_cPtr);
    }

    function put_Referer($newVal)
    {
        CkHttp_put_Referer($this->_cPtr, $newVal);
    }

    function get_RequiredContentType($str)
    {
        CkHttp_get_RequiredContentType($this->_cPtr, $str);
    }

    function requiredContentType()
    {
        return CkHttp_requiredContentType($this->_cPtr);
    }

    function put_RequiredContentType($newVal)
    {
        CkHttp_put_RequiredContentType($this->_cPtr, $newVal);
    }

    function get_RequireSslCertVerify()
    {
        return CkHttp_get_RequireSslCertVerify($this->_cPtr);
    }

    function put_RequireSslCertVerify($newVal)
    {
        CkHttp_put_RequireSslCertVerify($this->_cPtr, $newVal);
    }

    function get_S3Ssl()
    {
        return CkHttp_get_S3Ssl($this->_cPtr);
    }

    function put_S3Ssl($newVal)
    {
        CkHttp_put_S3Ssl($this->_cPtr, $newVal);
    }

    function get_SaveCookies()
    {
        return CkHttp_get_SaveCookies($this->_cPtr);
    }

    function put_SaveCookies($newVal)
    {
        CkHttp_put_SaveCookies($this->_cPtr, $newVal);
    }

    function get_SendBufferSize()
    {
        return CkHttp_get_SendBufferSize($this->_cPtr);
    }

    function put_SendBufferSize($newVal)
    {
        CkHttp_put_SendBufferSize($this->_cPtr, $newVal);
    }

    function get_SendCookies()
    {
        return CkHttp_get_SendCookies($this->_cPtr);
    }

    function put_SendCookies($newVal)
    {
        CkHttp_put_SendCookies($this->_cPtr, $newVal);
    }

    function get_SessionLogFilename($str)
    {
        CkHttp_get_SessionLogFilename($this->_cPtr, $str);
    }

    function sessionLogFilename()
    {
        return CkHttp_sessionLogFilename($this->_cPtr);
    }

    function put_SessionLogFilename($newVal)
    {
        CkHttp_put_SessionLogFilename($this->_cPtr, $newVal);
    }

    function get_SniHostname($str)
    {
        CkHttp_get_SniHostname($this->_cPtr, $str);
    }

    function sniHostname()
    {
        return CkHttp_sniHostname($this->_cPtr);
    }

    function put_SniHostname($newVal)
    {
        CkHttp_put_SniHostname($this->_cPtr, $newVal);
    }

    function get_SocksHostname($str)
    {
        CkHttp_get_SocksHostname($this->_cPtr, $str);
    }

    function socksHostname()
    {
        return CkHttp_socksHostname($this->_cPtr);
    }

    function put_SocksHostname($newVal)
    {
        CkHttp_put_SocksHostname($this->_cPtr, $newVal);
    }

    function get_SocksPassword($str)
    {
        CkHttp_get_SocksPassword($this->_cPtr, $str);
    }

    function socksPassword()
    {
        return CkHttp_socksPassword($this->_cPtr);
    }

    function put_SocksPassword($newVal)
    {
        CkHttp_put_SocksPassword($this->_cPtr, $newVal);
    }

    function get_SocksPort()
    {
        return CkHttp_get_SocksPort($this->_cPtr);
    }

    function put_SocksPort($newVal)
    {
        CkHttp_put_SocksPort($this->_cPtr, $newVal);
    }

    function get_SocksUsername($str)
    {
        CkHttp_get_SocksUsername($this->_cPtr, $str);
    }

    function socksUsername()
    {
        return CkHttp_socksUsername($this->_cPtr);
    }

    function put_SocksUsername($newVal)
    {
        CkHttp_put_SocksUsername($this->_cPtr, $newVal);
    }

    function get_SocksVersion()
    {
        return CkHttp_get_SocksVersion($this->_cPtr);
    }

    function put_SocksVersion($newVal)
    {
        CkHttp_put_SocksVersion($this->_cPtr, $newVal);
    }

    function get_SoRcvBuf()
    {
        return CkHttp_get_SoRcvBuf($this->_cPtr);
    }

    function put_SoRcvBuf($newVal)
    {
        CkHttp_put_SoRcvBuf($this->_cPtr, $newVal);
    }

    function get_SoSndBuf()
    {
        return CkHttp_get_SoSndBuf($this->_cPtr);
    }

    function put_SoSndBuf($newVal)
    {
        CkHttp_put_SoSndBuf($this->_cPtr, $newVal);
    }

    function get_SslAllowedCiphers($str)
    {
        CkHttp_get_SslAllowedCiphers($this->_cPtr, $str);
    }

    function sslAllowedCiphers()
    {
        return CkHttp_sslAllowedCiphers($this->_cPtr);
    }

    function put_SslAllowedCiphers($newVal)
    {
        CkHttp_put_SslAllowedCiphers($this->_cPtr, $newVal);
    }

    function get_SslProtocol($str)
    {
        CkHttp_get_SslProtocol($this->_cPtr, $str);
    }

    function sslProtocol()
    {
        return CkHttp_sslProtocol($this->_cPtr);
    }

    function put_SslProtocol($newVal)
    {
        CkHttp_put_SslProtocol($this->_cPtr, $newVal);
    }

    function get_StreamResponseBodyPath($str)
    {
        CkHttp_get_StreamResponseBodyPath($this->_cPtr, $str);
    }

    function streamResponseBodyPath()
    {
        return CkHttp_streamResponseBodyPath($this->_cPtr);
    }

    function put_StreamResponseBodyPath($newVal)
    {
        CkHttp_put_StreamResponseBodyPath($this->_cPtr, $newVal);
    }

    function get_TlsCipherSuite($str)
    {
        CkHttp_get_TlsCipherSuite($this->_cPtr, $str);
    }

    function tlsCipherSuite()
    {
        return CkHttp_tlsCipherSuite($this->_cPtr);
    }

    function get_TlsPinSet($str)
    {
        CkHttp_get_TlsPinSet($this->_cPtr, $str);
    }

    function tlsPinSet()
    {
        return CkHttp_tlsPinSet($this->_cPtr);
    }

    function put_TlsPinSet($newVal)
    {
        CkHttp_put_TlsPinSet($this->_cPtr, $newVal);
    }

    function get_TlsVersion($str)
    {
        CkHttp_get_TlsVersion($this->_cPtr, $str);
    }

    function tlsVersion()
    {
        return CkHttp_tlsVersion($this->_cPtr);
    }

    function get_UncommonOptions($str)
    {
        CkHttp_get_UncommonOptions($this->_cPtr, $str);
    }

    function uncommonOptions()
    {
        return CkHttp_uncommonOptions($this->_cPtr);
    }

    function put_UncommonOptions($newVal)
    {
        CkHttp_put_UncommonOptions($this->_cPtr, $newVal);
    }

    function get_UpdateCache()
    {
        return CkHttp_get_UpdateCache($this->_cPtr);
    }

    function put_UpdateCache($newVal)
    {
        CkHttp_put_UpdateCache($this->_cPtr, $newVal);
    }

    function get_UseIEProxy()
    {
        return CkHttp_get_UseIEProxy($this->_cPtr);
    }

    function put_UseIEProxy($newVal)
    {
        CkHttp_put_UseIEProxy($this->_cPtr, $newVal);
    }

    function get_UserAgent($str)
    {
        CkHttp_get_UserAgent($this->_cPtr, $str);
    }

    function userAgent()
    {
        return CkHttp_userAgent($this->_cPtr);
    }

    function put_UserAgent($newVal)
    {
        CkHttp_put_UserAgent($this->_cPtr, $newVal);
    }

    function get_VerboseLogging()
    {
        return CkHttp_get_VerboseLogging($this->_cPtr);
    }

    function put_VerboseLogging($newVal)
    {
        CkHttp_put_VerboseLogging($this->_cPtr, $newVal);
    }

    function get_Version($str)
    {
        CkHttp_get_Version($this->_cPtr, $str);
    }

    function version()
    {
        return CkHttp_version($this->_cPtr);
    }

    function get_WasRedirected()
    {
        return CkHttp_get_WasRedirected($this->_cPtr);
    }

    function AddCacheRoot($dir)
    {
        CkHttp_AddCacheRoot($this->_cPtr, $dir);
    }

    function ClearHeaders()
    {
        CkHttp_ClearHeaders($this->_cPtr);
    }

    function ClearInMemoryCookies()
    {
        CkHttp_ClearInMemoryCookies($this->_cPtr);
    }

    function ClearUrlVars()
    {
        CkHttp_ClearUrlVars($this->_cPtr);
    }

    function CloseAllConnections()
    {
        return CkHttp_CloseAllConnections($this->_cPtr);
    }

    function CloseAllConnectionsAsync()
    {
        $r = CkHttp_CloseAllConnectionsAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function CreateOcspRequest($requestDetails, $ocspRequest)
    {
        return CkHttp_CreateOcspRequest($this->_cPtr, $requestDetails, $ocspRequest);
    }

    function CreateTimestampRequest($hashAlg, $hashVal, $reqPolicyOid, $addNonce, $reqTsaCert, $timestampToken)
    {
        return CkHttp_CreateTimestampRequest($this->_cPtr, $hashAlg, $hashVal, $reqPolicyOid, $addNonce, $reqTsaCert, $timestampToken);
    }

    function DnsCacheClear()
    {
        CkHttp_DnsCacheClear($this->_cPtr);
    }

    function Download($url, $localFilePath)
    {
        return CkHttp_Download($this->_cPtr, $url, $localFilePath);
    }

    function DownloadAsync($url, $localFilePath)
    {
        $r = CkHttp_DownloadAsync($this->_cPtr, $url, $localFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function DownloadAppend($url, $filename)
    {
        return CkHttp_DownloadAppend($this->_cPtr, $url, $filename);
    }

    function DownloadAppendAsync($url, $filename)
    {
        $r = CkHttp_DownloadAppendAsync($this->_cPtr, $url, $filename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function DownloadBd($url, $binData)
    {
        return CkHttp_DownloadBd($this->_cPtr, $url, $binData);
    }

    function DownloadBdAsync($url, $binData)
    {
        $r = CkHttp_DownloadBdAsync($this->_cPtr, $url, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function downloadHash($url, $hashAlgorithm, $encoding)
    {
        return CkHttp_downloadHash($this->_cPtr, $url, $hashAlgorithm, $encoding);
    }

    function DownloadHashAsync($url, $hashAlgorithm, $encoding)
    {
        $r = CkHttp_DownloadHashAsync($this->_cPtr, $url, $hashAlgorithm, $encoding);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function DownloadSb($url, $charset, $sb)
    {
        return CkHttp_DownloadSb($this->_cPtr, $url, $charset, $sb);
    }

    function DownloadSbAsync($url, $charset, $sb)
    {
        $r = CkHttp_DownloadSbAsync($this->_cPtr, $url, $charset, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function extractMetaRefreshUrl($htmlContent)
    {
        return CkHttp_extractMetaRefreshUrl($this->_cPtr, $htmlContent);
    }

    function g_SvcOauthAccessToken($iss, $scope, $subEmail, $numSec, $cert)
    {
        return CkHttp_g_SvcOauthAccessToken($this->_cPtr, $iss, $scope, $subEmail, $numSec, $cert);
    }

    function G_SvcOauthAccessTokenAsync($iss, $scope, $subEmail, $numSec, $cert)
    {
        $r = CkHttp_G_SvcOauthAccessTokenAsync($this->_cPtr, $iss, $scope, $subEmail, $numSec, $cert);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function g_SvcOauthAccessToken2($claimParams, $numSec, $cert)
    {
        return CkHttp_g_SvcOauthAccessToken2($this->_cPtr, $claimParams, $numSec, $cert);
    }

    function G_SvcOauthAccessToken2Async($claimParams, $numSec, $cert)
    {
        $r = CkHttp_G_SvcOauthAccessToken2Async($this->_cPtr, $claimParams, $numSec, $cert);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function genTimeStamp()
    {
        return CkHttp_genTimeStamp($this->_cPtr);
    }

    function getCacheRoot($index)
    {
        return CkHttp_getCacheRoot($this->_cPtr, $index);
    }

    function cacheRoot($index)
    {
        return CkHttp_cacheRoot($this->_cPtr, $index);
    }

    function getCookieXml($domain)
    {
        return CkHttp_getCookieXml($this->_cPtr, $domain);
    }

    function cookieXml($domain)
    {
        return CkHttp_cookieXml($this->_cPtr, $domain);
    }

    function getDomain($url)
    {
        return CkHttp_getDomain($this->_cPtr, $url);
    }

    function domain($url)
    {
        return CkHttp_domain($this->_cPtr, $url);
    }

    function GetHead($url)
    {
        $r = CkHttp_GetHead($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function GetHeadAsync($url)
    {
        $r = CkHttp_GetHeadAsync($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function getRequestHeader($name)
    {
        return CkHttp_getRequestHeader($this->_cPtr, $name);
    }

    function requestHeader($name)
    {
        return CkHttp_requestHeader($this->_cPtr, $name);
    }

    function GetServerSslCert($domain, $port)
    {
        $r = CkHttp_GetServerSslCert($this->_cPtr, $domain, $port);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkCert($r);
        }
        return $r;
    }

    function GetServerSslCertAsync($domain, $port)
    {
        $r = CkHttp_GetServerSslCertAsync($this->_cPtr, $domain, $port);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function getUrlPath($url)
    {
        return CkHttp_getUrlPath($this->_cPtr, $url);
    }

    function urlPath($url)
    {
        return CkHttp_urlPath($this->_cPtr, $url);
    }

    function HasRequestHeader($name)
    {
        return CkHttp_HasRequestHeader($this->_cPtr, $name);
    }

    function IsUnlocked()
    {
        return CkHttp_IsUnlocked($this->_cPtr);
    }

    function LastJsonData()
    {
        $r = CkHttp_LastJsonData($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkJsonObject($r);
        }
        return $r;
    }

    function LoadTaskCaller($task)
    {
        return CkHttp_LoadTaskCaller($this->_cPtr, $task);
    }

    function OcspCheck($domain, $port)
    {
        return CkHttp_OcspCheck($this->_cPtr, $domain, $port);
    }

    function OcspCheckAsync($domain, $port)
    {
        $r = CkHttp_OcspCheckAsync($this->_cPtr, $domain, $port);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function ParseOcspReply($ocspReply, $replyData)
    {
        return CkHttp_ParseOcspReply($this->_cPtr, $ocspReply, $replyData);
    }

    function PBinary($verb, $url, $byteData, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PBinary($this->_cPtr, $verb, $url, $byteData, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PBinaryAsync($verb, $url, $byteData, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PBinaryAsync($this->_cPtr, $verb, $url, $byteData, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PBinaryBd($verb, $url, $data, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PBinaryBd($this->_cPtr, $verb, $url, $data, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PBinaryBdAsync($verb, $url, $data, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PBinaryBdAsync($this->_cPtr, $verb, $url, $data, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PFile($verb, $url, $localFilePath, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PFile($this->_cPtr, $verb, $url, $localFilePath, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PFileAsync($verb, $url, $localFilePath, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PFileAsync($this->_cPtr, $verb, $url, $localFilePath, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function postBinary($url, $byteData, $contentType, $md5, $gzip)
    {
        return CkHttp_postBinary($this->_cPtr, $url, $byteData, $contentType, $md5, $gzip);
    }

    function PostBinaryAsync($url, $byteData, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PostBinaryAsync($this->_cPtr, $url, $byteData, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PostJson($url, $jsonText)
    {
        $r = CkHttp_PostJson($this->_cPtr, $url, $jsonText);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PostJsonAsync($url, $jsonText)
    {
        $r = CkHttp_PostJsonAsync($this->_cPtr, $url, $jsonText);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PostJson2($url, $contentType, $jsonText)
    {
        $r = CkHttp_PostJson2($this->_cPtr, $url, $contentType, $jsonText);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PostJson2Async($url, $contentType, $jsonText)
    {
        $r = CkHttp_PostJson2Async($this->_cPtr, $url, $contentType, $jsonText);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PostJson3($url, $contentType, $json)
    {
        $r = CkHttp_PostJson3($this->_cPtr, $url, $contentType, $json);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PostJson3Async($url, $contentType, $json)
    {
        $r = CkHttp_PostJson3Async($this->_cPtr, $url, $contentType, $json);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PostUrlEncoded($url, $req)
    {
        $r = CkHttp_PostUrlEncoded($this->_cPtr, $url, $req);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PostUrlEncodedAsync($url, $req)
    {
        $r = CkHttp_PostUrlEncodedAsync($this->_cPtr, $url, $req);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PostXml($endpointUrl, $xmlContent, $xmlCharset)
    {
        $r = CkHttp_PostXml($this->_cPtr, $endpointUrl, $xmlContent, $xmlCharset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PostXmlAsync($endpointUrl, $xmlContent, $xmlCharset)
    {
        $r = CkHttp_PostXmlAsync($this->_cPtr, $endpointUrl, $xmlContent, $xmlCharset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PText($verb, $url, $textData, $charset, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PText($this->_cPtr, $verb, $url, $textData, $charset, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PTextAsync($verb, $url, $textData, $charset, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PTextAsync($this->_cPtr, $verb, $url, $textData, $charset, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function PTextSb($verb, $url, $textData, $charset, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PTextSb($this->_cPtr, $verb, $url, $textData, $charset, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function PTextSbAsync($verb, $url, $textData, $charset, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PTextSbAsync($this->_cPtr, $verb, $url, $textData, $charset, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function putBinary($url, $byteData, $contentType, $md5, $gzip)
    {
        return CkHttp_putBinary($this->_cPtr, $url, $byteData, $contentType, $md5, $gzip);
    }

    function PutBinaryAsync($url, $byteData, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PutBinaryAsync($this->_cPtr, $url, $byteData, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function putText($url, $textData, $charset, $contentType, $md5, $gzip)
    {
        return CkHttp_putText($this->_cPtr, $url, $textData, $charset, $contentType, $md5, $gzip);
    }

    function PutTextAsync($url, $textData, $charset, $contentType, $md5, $gzip)
    {
        $r = CkHttp_PutTextAsync($this->_cPtr, $url, $textData, $charset, $contentType, $md5, $gzip);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function quickDeleteStr($url)
    {
        return CkHttp_quickDeleteStr($this->_cPtr, $url);
    }

    function QuickDeleteStrAsync($url)
    {
        $r = CkHttp_QuickDeleteStrAsync($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function QuickGet($url, $outData)
    {
        return CkHttp_QuickGet($this->_cPtr, $url, $outData);
    }

    function QuickGetAsync($url)
    {
        $r = CkHttp_QuickGetAsync($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function QuickGetBd($url, $binData)
    {
        return CkHttp_QuickGetBd($this->_cPtr, $url, $binData);
    }

    function QuickGetBdAsync($url, $binData)
    {
        $r = CkHttp_QuickGetBdAsync($this->_cPtr, $url, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function QuickGetObj($url)
    {
        $r = CkHttp_QuickGetObj($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function QuickGetObjAsync($url)
    {
        $r = CkHttp_QuickGetObjAsync($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function QuickGetSb($url, $sbContent)
    {
        return CkHttp_QuickGetSb($this->_cPtr, $url, $sbContent);
    }

    function QuickGetSbAsync($url, $sbContent)
    {
        $r = CkHttp_QuickGetSbAsync($this->_cPtr, $url, $sbContent);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function quickGetStr($url)
    {
        return CkHttp_quickGetStr($this->_cPtr, $url);
    }

    function QuickGetStrAsync($url)
    {
        $r = CkHttp_QuickGetStrAsync($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function quickPutStr($url)
    {
        return CkHttp_quickPutStr($this->_cPtr, $url);
    }

    function QuickPutStrAsync($url)
    {
        $r = CkHttp_QuickPutStrAsync($this->_cPtr, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function QuickRequest($verb, $url)
    {
        $r = CkHttp_QuickRequest($this->_cPtr, $verb, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function QuickRequestAsync($verb, $url)
    {
        $r = CkHttp_QuickRequestAsync($this->_cPtr, $verb, $url);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function QuickRequestParams($verb, $url, $json)
    {
        $r = CkHttp_QuickRequestParams($this->_cPtr, $verb, $url, $json);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function QuickRequestParamsAsync($verb, $url, $json)
    {
        $r = CkHttp_QuickRequestParamsAsync($this->_cPtr, $verb, $url, $json);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function RemoveRequestHeader($name)
    {
        CkHttp_RemoveRequestHeader($this->_cPtr, $name);
    }

    function renderGet($url)
    {
        return CkHttp_renderGet($this->_cPtr, $url);
    }

    function ResumeDownload($url, $targetFilename)
    {
        return CkHttp_ResumeDownload($this->_cPtr, $url, $targetFilename);
    }

    function ResumeDownloadAsync($url, $targetFilename)
    {
        $r = CkHttp_ResumeDownloadAsync($this->_cPtr, $url, $targetFilename);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function ResumeDownloadBd($url, $binData)
    {
        return CkHttp_ResumeDownloadBd($this->_cPtr, $url, $binData);
    }

    function ResumeDownloadBdAsync($url, $binData)
    {
        $r = CkHttp_ResumeDownloadBdAsync($this->_cPtr, $url, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_CreateBucket($bucketPath)
    {
        return CkHttp_S3_CreateBucket($this->_cPtr, $bucketPath);
    }

    function S3_CreateBucketAsync($bucketPath)
    {
        $r = CkHttp_S3_CreateBucketAsync($this->_cPtr, $bucketPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_DeleteBucket($bucketPath)
    {
        return CkHttp_S3_DeleteBucket($this->_cPtr, $bucketPath);
    }

    function S3_DeleteBucketAsync($bucketPath)
    {
        $r = CkHttp_S3_DeleteBucketAsync($this->_cPtr, $bucketPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_DeleteMultipleObjects($bucketName, $objectNames)
    {
        $r = CkHttp_S3_DeleteMultipleObjects($this->_cPtr, $bucketName, $objectNames);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function S3_DeleteMultipleObjectsAsync($bucketName, $objectNames)
    {
        $r = CkHttp_S3_DeleteMultipleObjectsAsync($this->_cPtr, $bucketName, $objectNames);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_DeleteObject($bucketPath, $objectName)
    {
        return CkHttp_S3_DeleteObject($this->_cPtr, $bucketPath, $objectName);
    }

    function S3_DeleteObjectAsync($bucketPath, $objectName)
    {
        $r = CkHttp_S3_DeleteObjectAsync($this->_cPtr, $bucketPath, $objectName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_DownloadBd($bucketPath, $objectName, $bd)
    {
        return CkHttp_S3_DownloadBd($this->_cPtr, $bucketPath, $objectName, $bd);
    }

    function S3_DownloadBdAsync($bucketPath, $objectName, $bd)
    {
        $r = CkHttp_S3_DownloadBdAsync($this->_cPtr, $bucketPath, $objectName, $bd);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_DownloadBytes($bucketPath, $objectName, $outBytes)
    {
        return CkHttp_S3_DownloadBytes($this->_cPtr, $bucketPath, $objectName, $outBytes);
    }

    function S3_DownloadBytesAsync($bucketPath, $objectName)
    {
        $r = CkHttp_S3_DownloadBytesAsync($this->_cPtr, $bucketPath, $objectName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_DownloadFile($bucketPath, $objectName, $localFilePath)
    {
        return CkHttp_S3_DownloadFile($this->_cPtr, $bucketPath, $objectName, $localFilePath);
    }

    function S3_DownloadFileAsync($bucketPath, $objectName, $localFilePath)
    {
        $r = CkHttp_S3_DownloadFileAsync($this->_cPtr, $bucketPath, $objectName, $localFilePath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function s3_DownloadString($bucketPath, $objectName, $charset)
    {
        return CkHttp_s3_DownloadString($this->_cPtr, $bucketPath, $objectName, $charset);
    }

    function S3_DownloadStringAsync($bucketPath, $objectName, $charset)
    {
        $r = CkHttp_S3_DownloadStringAsync($this->_cPtr, $bucketPath, $objectName, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_FileExists($bucketPath, $objectName)
    {
        return CkHttp_S3_FileExists($this->_cPtr, $bucketPath, $objectName);
    }

    function S3_FileExistsAsync($bucketPath, $objectName)
    {
        $r = CkHttp_S3_FileExistsAsync($this->_cPtr, $bucketPath, $objectName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function s3_GenerateUrl($bucket, $path, $expire)
    {
        return CkHttp_s3_GenerateUrl($this->_cPtr, $bucket, $path, $expire);
    }

    function s3_GenerateUrlV4($useHttps, $bucketName, $path, $numSecondsValid, $awsService)
    {
        return CkHttp_s3_GenerateUrlV4($this->_cPtr, $useHttps, $bucketName, $path, $numSecondsValid, $awsService);
    }

    function s3_GenPresignedUrl($httpVerb, $useHttps, $bucketName, $path, $numSecondsValid, $awsService)
    {
        return CkHttp_s3_GenPresignedUrl($this->_cPtr, $httpVerb, $useHttps, $bucketName, $path, $numSecondsValid, $awsService);
    }

    function s3_ListBucketObjects($bucketPath)
    {
        return CkHttp_s3_ListBucketObjects($this->_cPtr, $bucketPath);
    }

    function S3_ListBucketObjectsAsync($bucketPath)
    {
        $r = CkHttp_S3_ListBucketObjectsAsync($this->_cPtr, $bucketPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function s3_ListBuckets()
    {
        return CkHttp_s3_ListBuckets($this->_cPtr);
    }

    function S3_ListBucketsAsync()
    {
        $r = CkHttp_S3_ListBucketsAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_UploadBd($bd, $contentType, $bucketPath, $objectName)
    {
        return CkHttp_S3_UploadBd($this->_cPtr, $bd, $contentType, $bucketPath, $objectName);
    }

    function S3_UploadBdAsync($bd, $contentType, $bucketPath, $objectName)
    {
        $r = CkHttp_S3_UploadBdAsync($this->_cPtr, $bd, $contentType, $bucketPath, $objectName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_UploadBytes($contentBytes, $contentType, $bucketPath, $objectName)
    {
        return CkHttp_S3_UploadBytes($this->_cPtr, $contentBytes, $contentType, $bucketPath, $objectName);
    }

    function S3_UploadBytesAsync($contentBytes, $contentType, $bucketPath, $objectName)
    {
        $r = CkHttp_S3_UploadBytesAsync($this->_cPtr, $contentBytes, $contentType, $bucketPath, $objectName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_UploadFile($localFilePath, $contentType, $bucketPath, $objectName)
    {
        return CkHttp_S3_UploadFile($this->_cPtr, $localFilePath, $contentType, $bucketPath, $objectName);
    }

    function S3_UploadFileAsync($localFilePath, $contentType, $bucketPath, $objectName)
    {
        $r = CkHttp_S3_UploadFileAsync($this->_cPtr, $localFilePath, $contentType, $bucketPath, $objectName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function S3_UploadString($objectContent, $charset, $contentType, $bucketPath, $objectName)
    {
        return CkHttp_S3_UploadString($this->_cPtr, $objectContent, $charset, $contentType, $bucketPath, $objectName);
    }

    function S3_UploadStringAsync($objectContent, $charset, $contentType, $bucketPath, $objectName)
    {
        $r = CkHttp_S3_UploadStringAsync($this->_cPtr, $objectContent, $charset, $contentType, $bucketPath, $objectName);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function SaveLastError($path)
    {
        return CkHttp_SaveLastError($this->_cPtr, $path);
    }

    function SetAuthPrivateKey($publicKeyId, $privKey)
    {
        return CkHttp_SetAuthPrivateKey($this->_cPtr, $publicKeyId, $privKey);
    }

    function SetAuthTokenSb($sb)
    {
        return CkHttp_SetAuthTokenSb($this->_cPtr, $sb);
    }

    function SetCookieXml($domain, $cookieXml)
    {
        return CkHttp_SetCookieXml($this->_cPtr, $domain, $cookieXml);
    }

    function SetOAuthRsaKey($privKey)
    {
        return CkHttp_SetOAuthRsaKey($this->_cPtr, $privKey);
    }

    function SetPassword($password)
    {
        return CkHttp_SetPassword($this->_cPtr, $password);
    }

    function SetRequestHeader($headerFieldName, $headerFieldValue)
    {
        CkHttp_SetRequestHeader($this->_cPtr, $headerFieldName, $headerFieldValue);
    }

    function SetSecurePassword($password)
    {
        return CkHttp_SetSecurePassword($this->_cPtr, $password);
    }

    function SetSslCertRequirement($reqName, $reqValue)
    {
        CkHttp_SetSslCertRequirement($this->_cPtr, $reqName, $reqValue);
    }

    function SetSslClientCert($cert)
    {
        return CkHttp_SetSslClientCert($this->_cPtr, $cert);
    }

    function SetSslClientCertPem($pemDataOrPath, $pemPassword)
    {
        return CkHttp_SetSslClientCertPem($this->_cPtr, $pemDataOrPath, $pemPassword);
    }

    function SetSslClientCertPfx($pfxPath, $pfxPassword)
    {
        return CkHttp_SetSslClientCertPfx($this->_cPtr, $pfxPath, $pfxPassword);
    }

    function SetUrlVar($name, $value)
    {
        return CkHttp_SetUrlVar($this->_cPtr, $name, $value);
    }

    function SharePointOnlineAuth($siteUrl, $username, $password, $extraInfo)
    {
        return CkHttp_SharePointOnlineAuth($this->_cPtr, $siteUrl, $username, $password, $extraInfo);
    }

    function SharePointOnlineAuthAsync($siteUrl, $username, $password, $extraInfo)
    {
        $r = CkHttp_SharePointOnlineAuthAsync($this->_cPtr, $siteUrl, $username, $password, $extraInfo);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function SleepMs($millisec)
    {
        CkHttp_SleepMs($this->_cPtr, $millisec);
    }

    function SynchronousRequest($domain, $port, $ssl, $req)
    {
        $r = CkHttp_SynchronousRequest($this->_cPtr, $domain, $port, $ssl, $req);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkHttpResponse($r);
        }
        return $r;
    }

    function SynchronousRequestAsync($domain, $port, $ssl, $req)
    {
        $r = CkHttp_SynchronousRequestAsync($this->_cPtr, $domain, $port, $ssl, $req);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function UnlockComponent($unlockCode)
    {
        return CkHttp_UnlockComponent($this->_cPtr, $unlockCode);
    }

    function urlDecode($str)
    {
        return CkHttp_urlDecode($this->_cPtr, $str);
    }

    function urlEncode($str)
    {
        return CkHttp_urlEncode($this->_cPtr, $str);
    }

    function VerifyTimestampReply($timestampReply, $tsaCert)
    {
        return CkHttp_VerifyTimestampReply($this->_cPtr, $timestampReply, $tsaCert);
    }

    function xmlRpc($urlEndpoint, $xmlIn)
    {
        return CkHttp_xmlRpc($this->_cPtr, $urlEndpoint, $xmlIn);
    }

    function XmlRpcAsync($urlEndpoint, $xmlIn)
    {
        $r = CkHttp_XmlRpcAsync($this->_cPtr, $urlEndpoint, $xmlIn);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }

    function xmlRpcPut($urlEndpoint, $xmlIn)
    {
        return CkHttp_xmlRpcPut($this->_cPtr, $urlEndpoint, $xmlIn);
    }

    function XmlRpcPutAsync($urlEndpoint, $xmlIn)
    {
        $r = CkHttp_XmlRpcPutAsync($this->_cPtr, $urlEndpoint, $xmlIn);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) return new $c($r);
            return new CkTask($r);
        }
        return $r;
    }
}
