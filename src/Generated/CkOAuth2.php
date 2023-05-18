<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkOAuth2
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkOAuth2') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkOAuth2();
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
        return CkOAuth2_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkOAuth2_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkOAuth2_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AccessToken($str)
    {
        CkOAuth2_get_AccessToken($this->_cPtr, $str);
    }

    public function accessToken()
    {
        return CkOAuth2_accessToken($this->_cPtr);
    }

    public function put_AccessToken($newVal)
    {
        CkOAuth2_put_AccessToken($this->_cPtr, $newVal);
    }

    public function get_AccessTokenResponse($str)
    {
        CkOAuth2_get_AccessTokenResponse($this->_cPtr, $str);
    }

    public function accessTokenResponse()
    {
        return CkOAuth2_accessTokenResponse($this->_cPtr);
    }

    public function get_AppCallbackUrl($str)
    {
        CkOAuth2_get_AppCallbackUrl($this->_cPtr, $str);
    }

    public function appCallbackUrl()
    {
        return CkOAuth2_appCallbackUrl($this->_cPtr);
    }

    public function put_AppCallbackUrl($newVal)
    {
        CkOAuth2_put_AppCallbackUrl($this->_cPtr, $newVal);
    }

    public function get_AuthFlowState()
    {
        return CkOAuth2_get_AuthFlowState($this->_cPtr);
    }

    public function get_AuthorizationEndpoint($str)
    {
        CkOAuth2_get_AuthorizationEndpoint($this->_cPtr, $str);
    }

    public function authorizationEndpoint()
    {
        return CkOAuth2_authorizationEndpoint($this->_cPtr);
    }

    public function put_AuthorizationEndpoint($newVal)
    {
        CkOAuth2_put_AuthorizationEndpoint($this->_cPtr, $newVal);
    }

    public function get_ClientId($str)
    {
        CkOAuth2_get_ClientId($this->_cPtr, $str);
    }

    public function clientId()
    {
        return CkOAuth2_clientId($this->_cPtr);
    }

    public function put_ClientId($newVal)
    {
        CkOAuth2_put_ClientId($this->_cPtr, $newVal);
    }

    public function get_ClientSecret($str)
    {
        CkOAuth2_get_ClientSecret($this->_cPtr, $str);
    }

    public function clientSecret()
    {
        return CkOAuth2_clientSecret($this->_cPtr);
    }

    public function put_ClientSecret($newVal)
    {
        CkOAuth2_put_ClientSecret($this->_cPtr, $newVal);
    }

    public function get_CodeChallenge()
    {
        return CkOAuth2_get_CodeChallenge($this->_cPtr);
    }

    public function put_CodeChallenge($newVal)
    {
        CkOAuth2_put_CodeChallenge($this->_cPtr, $newVal);
    }

    public function get_CodeChallengeMethod($str)
    {
        CkOAuth2_get_CodeChallengeMethod($this->_cPtr, $str);
    }

    public function codeChallengeMethod()
    {
        return CkOAuth2_codeChallengeMethod($this->_cPtr);
    }

    public function put_CodeChallengeMethod($newVal)
    {
        CkOAuth2_put_CodeChallengeMethod($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkOAuth2_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkOAuth2_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkOAuth2_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_FailureInfo($str)
    {
        CkOAuth2_get_FailureInfo($this->_cPtr, $str);
    }

    public function failureInfo()
    {
        return CkOAuth2_failureInfo($this->_cPtr);
    }

    public function get_IncludeNonce()
    {
        return CkOAuth2_get_IncludeNonce($this->_cPtr);
    }

    public function put_IncludeNonce($newVal)
    {
        CkOAuth2_put_IncludeNonce($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkOAuth2_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkOAuth2_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkOAuth2_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkOAuth2_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkOAuth2_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkOAuth2_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkOAuth2_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkOAuth2_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_ListenPort()
    {
        return CkOAuth2_get_ListenPort($this->_cPtr);
    }

    public function put_ListenPort($newVal)
    {
        CkOAuth2_put_ListenPort($this->_cPtr, $newVal);
    }

    public function get_ListenPortRangeEnd()
    {
        return CkOAuth2_get_ListenPortRangeEnd($this->_cPtr);
    }

    public function put_ListenPortRangeEnd($newVal)
    {
        CkOAuth2_put_ListenPortRangeEnd($this->_cPtr, $newVal);
    }

    public function get_LocalHost($str)
    {
        CkOAuth2_get_LocalHost($this->_cPtr, $str);
    }

    public function localHost()
    {
        return CkOAuth2_localHost($this->_cPtr);
    }

    public function put_LocalHost($newVal)
    {
        CkOAuth2_put_LocalHost($this->_cPtr, $newVal);
    }

    public function get_NonceLength()
    {
        return CkOAuth2_get_NonceLength($this->_cPtr);
    }

    public function put_NonceLength($newVal)
    {
        CkOAuth2_put_NonceLength($this->_cPtr, $newVal);
    }

    public function get_RedirectAllowHtml($str)
    {
        CkOAuth2_get_RedirectAllowHtml($this->_cPtr, $str);
    }

    public function redirectAllowHtml()
    {
        return CkOAuth2_redirectAllowHtml($this->_cPtr);
    }

    public function put_RedirectAllowHtml($newVal)
    {
        CkOAuth2_put_RedirectAllowHtml($this->_cPtr, $newVal);
    }

    public function get_RedirectDenyHtml($str)
    {
        CkOAuth2_get_RedirectDenyHtml($this->_cPtr, $str);
    }

    public function redirectDenyHtml()
    {
        return CkOAuth2_redirectDenyHtml($this->_cPtr);
    }

    public function put_RedirectDenyHtml($newVal)
    {
        CkOAuth2_put_RedirectDenyHtml($this->_cPtr, $newVal);
    }

    public function get_RedirectReqReceived($str)
    {
        CkOAuth2_get_RedirectReqReceived($this->_cPtr, $str);
    }

    public function redirectReqReceived()
    {
        return CkOAuth2_redirectReqReceived($this->_cPtr);
    }

    public function get_RefreshToken($str)
    {
        CkOAuth2_get_RefreshToken($this->_cPtr, $str);
    }

    public function refreshToken()
    {
        return CkOAuth2_refreshToken($this->_cPtr);
    }

    public function put_RefreshToken($newVal)
    {
        CkOAuth2_put_RefreshToken($this->_cPtr, $newVal);
    }

    public function get_Resource($str)
    {
        CkOAuth2_get_Resource($this->_cPtr, $str);
    }

    public function resource()
    {
        return CkOAuth2_resource($this->_cPtr);
    }

    public function put_Resource($newVal)
    {
        CkOAuth2_put_Resource($this->_cPtr, $newVal);
    }

    public function get_ResponseMode($str)
    {
        CkOAuth2_get_ResponseMode($this->_cPtr, $str);
    }

    public function responseMode()
    {
        return CkOAuth2_responseMode($this->_cPtr);
    }

    public function put_ResponseMode($newVal)
    {
        CkOAuth2_put_ResponseMode($this->_cPtr, $newVal);
    }

    public function get_ResponseType($str)
    {
        CkOAuth2_get_ResponseType($this->_cPtr, $str);
    }

    public function responseType()
    {
        return CkOAuth2_responseType($this->_cPtr);
    }

    public function put_ResponseType($newVal)
    {
        CkOAuth2_put_ResponseType($this->_cPtr, $newVal);
    }

    public function get_Scope($str)
    {
        CkOAuth2_get_Scope($this->_cPtr, $str);
    }

    public function scope()
    {
        return CkOAuth2_scope($this->_cPtr);
    }

    public function put_Scope($newVal)
    {
        CkOAuth2_put_Scope($this->_cPtr, $newVal);
    }

    public function get_TokenEndpoint($str)
    {
        CkOAuth2_get_TokenEndpoint($this->_cPtr, $str);
    }

    public function tokenEndpoint()
    {
        return CkOAuth2_tokenEndpoint($this->_cPtr);
    }

    public function put_TokenEndpoint($newVal)
    {
        CkOAuth2_put_TokenEndpoint($this->_cPtr, $newVal);
    }

    public function get_TokenType($str)
    {
        CkOAuth2_get_TokenType($this->_cPtr, $str);
    }

    public function tokenType()
    {
        return CkOAuth2_tokenType($this->_cPtr);
    }

    public function put_TokenType($newVal)
    {
        CkOAuth2_put_TokenType($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkOAuth2_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkOAuth2_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkOAuth2_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_UseBasicAuth()
    {
        return CkOAuth2_get_UseBasicAuth($this->_cPtr);
    }

    public function put_UseBasicAuth($newVal)
    {
        CkOAuth2_put_UseBasicAuth($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkOAuth2_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkOAuth2_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkOAuth2_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkOAuth2_version($this->_cPtr);
    }

    public function AddAuthQueryParam($name, $value)
    {
        return CkOAuth2_AddAuthQueryParam($this->_cPtr, $name, $value);
    }

    public function AddTokenQueryParam($name, $value)
    {
        return CkOAuth2_AddTokenQueryParam($this->_cPtr, $name, $value);
    }

    public function Cancel()
    {
        return CkOAuth2_Cancel($this->_cPtr);
    }

    public function getRedirectRequestParam($paramName)
    {
        return CkOAuth2_getRedirectRequestParam($this->_cPtr, $paramName);
    }

    public function redirectRequestParam($paramName)
    {
        return CkOAuth2_redirectRequestParam($this->_cPtr, $paramName);
    }

    public function LoadTaskCaller($task)
    {
        return CkOAuth2_LoadTaskCaller($this->_cPtr, $task);
    }

    public function Monitor()
    {
        return CkOAuth2_Monitor($this->_cPtr);
    }

    public function MonitorAsync()
    {
        $r = CkOAuth2_MonitorAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function RefreshAccessToken()
    {
        return CkOAuth2_RefreshAccessToken($this->_cPtr);
    }

    public function RefreshAccessTokenAsync()
    {
        $r = CkOAuth2_RefreshAccessTokenAsync($this->_cPtr);
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
        return CkOAuth2_SaveLastError($this->_cPtr, $path);
    }

    public function SetRefreshHeader($name, $value)
    {
        return CkOAuth2_SetRefreshHeader($this->_cPtr, $name, $value);
    }

    public function SetRefreshHeaderAsync($name, $value)
    {
        $r = CkOAuth2_SetRefreshHeaderAsync($this->_cPtr, $name, $value);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SleepMs($millisec)
    {
        CkOAuth2_SleepMs($this->_cPtr, $millisec);
    }

    public function startAuth()
    {
        return CkOAuth2_startAuth($this->_cPtr);
    }

    public function UseConnection($sock)
    {
        return CkOAuth2_UseConnection($this->_cPtr, $sock);
    }
}