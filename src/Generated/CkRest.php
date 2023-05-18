<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkRest
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkRest') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkRest();
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
        return CkRest_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkRest_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkRest_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AllowHeaderFolding()
    {
        return CkRest_get_AllowHeaderFolding($this->_cPtr);
    }

    public function put_AllowHeaderFolding($newVal)
    {
        CkRest_put_AllowHeaderFolding($this->_cPtr, $newVal);
    }

    public function get_AllowHeaderQB()
    {
        return CkRest_get_AllowHeaderQB($this->_cPtr);
    }

    public function put_AllowHeaderQB($newVal)
    {
        CkRest_put_AllowHeaderQB($this->_cPtr, $newVal);
    }

    public function get_Authorization($str)
    {
        CkRest_get_Authorization($this->_cPtr, $str);
    }

    public function authorization()
    {
        return CkRest_authorization($this->_cPtr);
    }

    public function put_Authorization($newVal)
    {
        CkRest_put_Authorization($this->_cPtr, $newVal);
    }

    public function get_ConnectFailReason()
    {
        return CkRest_get_ConnectFailReason($this->_cPtr);
    }

    public function get_ConnectTimeoutMs()
    {
        return CkRest_get_ConnectTimeoutMs($this->_cPtr);
    }

    public function put_ConnectTimeoutMs($newVal)
    {
        CkRest_put_ConnectTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkRest_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkRest_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkRest_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DebugMode()
    {
        return CkRest_get_DebugMode($this->_cPtr);
    }

    public function put_DebugMode($newVal)
    {
        CkRest_put_DebugMode($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkRest_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkRest_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_Host($str)
    {
        CkRest_get_Host($this->_cPtr, $str);
    }

    public function host()
    {
        return CkRest_host($this->_cPtr);
    }

    public function put_Host($newVal)
    {
        CkRest_put_Host($this->_cPtr, $newVal);
    }

    public function get_IdleTimeoutMs()
    {
        return CkRest_get_IdleTimeoutMs($this->_cPtr);
    }

    public function put_IdleTimeoutMs($newVal)
    {
        CkRest_put_IdleTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkRest_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkRest_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkRest_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkRest_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkRest_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkRest_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkRest_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkRest_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LastRequestHeader($str)
    {
        CkRest_get_LastRequestHeader($this->_cPtr, $str);
    }

    public function lastRequestHeader()
    {
        return CkRest_lastRequestHeader($this->_cPtr);
    }

    public function get_LastRequestStartLine($str)
    {
        CkRest_get_LastRequestStartLine($this->_cPtr, $str);
    }

    public function lastRequestStartLine()
    {
        return CkRest_lastRequestStartLine($this->_cPtr);
    }

    public function get_NumResponseHeaders()
    {
        return CkRest_get_NumResponseHeaders($this->_cPtr);
    }

    public function get_PartSelector($str)
    {
        CkRest_get_PartSelector($this->_cPtr, $str);
    }

    public function partSelector()
    {
        return CkRest_partSelector($this->_cPtr);
    }

    public function put_PartSelector($newVal)
    {
        CkRest_put_PartSelector($this->_cPtr, $newVal);
    }

    public function get_PercentDoneOnSend()
    {
        return CkRest_get_PercentDoneOnSend($this->_cPtr);
    }

    public function put_PercentDoneOnSend($newVal)
    {
        CkRest_put_PercentDoneOnSend($this->_cPtr, $newVal);
    }

    public function get_ResponseHeader($str)
    {
        CkRest_get_ResponseHeader($this->_cPtr, $str);
    }

    public function responseHeader()
    {
        return CkRest_responseHeader($this->_cPtr);
    }

    public function get_ResponseStatusCode()
    {
        return CkRest_get_ResponseStatusCode($this->_cPtr);
    }

    public function get_ResponseStatusText($str)
    {
        CkRest_get_ResponseStatusText($this->_cPtr, $str);
    }

    public function responseStatusText()
    {
        return CkRest_responseStatusText($this->_cPtr);
    }

    public function get_StreamNonChunked()
    {
        return CkRest_get_StreamNonChunked($this->_cPtr);
    }

    public function put_StreamNonChunked($newVal)
    {
        CkRest_put_StreamNonChunked($this->_cPtr, $newVal);
    }

    public function get_UncommonOptions($str)
    {
        CkRest_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkRest_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkRest_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkRest_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkRest_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkRest_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkRest_version($this->_cPtr);
    }

    public function AddHeader($name, $value)
    {
        return CkRest_AddHeader($this->_cPtr, $name, $value);
    }

    public function AddMwsSignature($httpVerb, $uriPath, $domain, $mwsSecretKey)
    {
        return CkRest_AddMwsSignature($this->_cPtr, $httpVerb, $uriPath, $domain, $mwsSecretKey);
    }

    public function AddPathParam($name, $value)
    {
        return CkRest_AddPathParam($this->_cPtr, $name, $value);
    }

    public function AddQueryParam($name, $value)
    {
        return CkRest_AddQueryParam($this->_cPtr, $name, $value);
    }

    public function AddQueryParams($queryString)
    {
        return CkRest_AddQueryParams($this->_cPtr, $queryString);
    }

    public function AddQueryParamSb($name, $value)
    {
        return CkRest_AddQueryParamSb($this->_cPtr, $name, $value);
    }

    public function ClearAllHeaders()
    {
        return CkRest_ClearAllHeaders($this->_cPtr);
    }

    public function ClearAllParts()
    {
        return CkRest_ClearAllParts($this->_cPtr);
    }

    public function ClearAllPathParams()
    {
        return CkRest_ClearAllPathParams($this->_cPtr);
    }

    public function ClearAllQueryParams()
    {
        return CkRest_ClearAllQueryParams($this->_cPtr);
    }

    public function ClearAuth()
    {
        return CkRest_ClearAuth($this->_cPtr);
    }

    public function ClearResponseBodyStream()
    {
        CkRest_ClearResponseBodyStream($this->_cPtr);
    }

    public function Connect($hostname, $port, $tls, $autoReconnect)
    {
        return CkRest_Connect($this->_cPtr, $hostname, $port, $tls, $autoReconnect);
    }

    public function ConnectAsync($hostname, $port, $tls, $autoReconnect)
    {
        $r = CkRest_ConnectAsync($this->_cPtr, $hostname, $port, $tls, $autoReconnect);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Disconnect($maxWaitMs)
    {
        return CkRest_Disconnect($this->_cPtr, $maxWaitMs);
    }

    public function DisconnectAsync($maxWaitMs)
    {
        $r = CkRest_DisconnectAsync($this->_cPtr, $maxWaitMs);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FullRequestBd($httpVerb, $uriPath, $binData, $responseBody)
    {
        return CkRest_FullRequestBd($this->_cPtr, $httpVerb, $uriPath, $binData, $responseBody);
    }

    public function FullRequestBdAsync($httpVerb, $uriPath, $binData, $responseBody)
    {
        $r = CkRest_FullRequestBdAsync($this->_cPtr, $httpVerb, $uriPath, $binData, $responseBody);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fullRequestBinary($httpVerb, $uriPath, $bodyBytes)
    {
        return CkRest_fullRequestBinary($this->_cPtr, $httpVerb, $uriPath, $bodyBytes);
    }

    public function FullRequestBinaryAsync($httpVerb, $uriPath, $bodyBytes)
    {
        $r = CkRest_FullRequestBinaryAsync($this->_cPtr, $httpVerb, $uriPath, $bodyBytes);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fullRequestFormUrlEncoded($httpVerb, $uriPath)
    {
        return CkRest_fullRequestFormUrlEncoded($this->_cPtr, $httpVerb, $uriPath);
    }

    public function FullRequestFormUrlEncodedAsync($httpVerb, $uriPath)
    {
        $r = CkRest_FullRequestFormUrlEncodedAsync($this->_cPtr, $httpVerb, $uriPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fullRequestMultipart($httpVerb, $uriPath)
    {
        return CkRest_fullRequestMultipart($this->_cPtr, $httpVerb, $uriPath);
    }

    public function FullRequestMultipartAsync($httpVerb, $uriPath)
    {
        $r = CkRest_FullRequestMultipartAsync($this->_cPtr, $httpVerb, $uriPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fullRequestNoBody($httpVerb, $uriPath)
    {
        return CkRest_fullRequestNoBody($this->_cPtr, $httpVerb, $uriPath);
    }

    public function FullRequestNoBodyAsync($httpVerb, $uriPath)
    {
        $r = CkRest_FullRequestNoBodyAsync($this->_cPtr, $httpVerb, $uriPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FullRequestNoBodyBd($httpVerb, $uriPath, $binData)
    {
        return CkRest_FullRequestNoBodyBd($this->_cPtr, $httpVerb, $uriPath, $binData);
    }

    public function FullRequestNoBodyBdAsync($httpVerb, $uriPath, $binData)
    {
        $r = CkRest_FullRequestNoBodyBdAsync($this->_cPtr, $httpVerb, $uriPath, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FullRequestNoBodySb($httpVerb, $uriPath, $sb)
    {
        return CkRest_FullRequestNoBodySb($this->_cPtr, $httpVerb, $uriPath, $sb);
    }

    public function FullRequestNoBodySbAsync($httpVerb, $uriPath, $sb)
    {
        $r = CkRest_FullRequestNoBodySbAsync($this->_cPtr, $httpVerb, $uriPath, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function FullRequestSb($httpVerb, $uriPath, $requestBody, $responseBody)
    {
        return CkRest_FullRequestSb($this->_cPtr, $httpVerb, $uriPath, $requestBody, $responseBody);
    }

    public function FullRequestSbAsync($httpVerb, $uriPath, $requestBody, $responseBody)
    {
        $r = CkRest_FullRequestSbAsync($this->_cPtr, $httpVerb, $uriPath, $requestBody, $responseBody);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fullRequestStream($httpVerb, $uriPath, $stream)
    {
        return CkRest_fullRequestStream($this->_cPtr, $httpVerb, $uriPath, $stream);
    }

    public function FullRequestStreamAsync($httpVerb, $uriPath, $stream)
    {
        $r = CkRest_FullRequestStreamAsync($this->_cPtr, $httpVerb, $uriPath, $stream);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function fullRequestString($httpVerb, $uriPath, $bodyText)
    {
        return CkRest_fullRequestString($this->_cPtr, $httpVerb, $uriPath, $bodyText);
    }

    public function FullRequestStringAsync($httpVerb, $uriPath, $bodyText)
    {
        $r = CkRest_FullRequestStringAsync($this->_cPtr, $httpVerb, $uriPath, $bodyText);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetLastDebugRequest($bd)
    {
        return CkRest_GetLastDebugRequest($this->_cPtr, $bd);
    }

    public function LastJsonData()
    {
        $r = CkRest_LastJsonData($this->_cPtr);
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
        return CkRest_LoadTaskCaller($this->_cPtr, $task);
    }

    public function ReadRespBd($responseBody)
    {
        return CkRest_ReadRespBd($this->_cPtr, $responseBody);
    }

    public function ReadRespBdAsync($responseBody)
    {
        $r = CkRest_ReadRespBdAsync($this->_cPtr, $responseBody);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadRespBodyBinary($outBytes)
    {
        return CkRest_ReadRespBodyBinary($this->_cPtr, $outBytes);
    }

    public function ReadRespBodyBinaryAsync()
    {
        $r = CkRest_ReadRespBodyBinaryAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadRespBodyStream($stream, $autoSetStreamCharset)
    {
        return CkRest_ReadRespBodyStream($this->_cPtr, $stream, $autoSetStreamCharset);
    }

    public function ReadRespBodyStreamAsync($stream, $autoSetStreamCharset)
    {
        $r = CkRest_ReadRespBodyStreamAsync($this->_cPtr, $stream, $autoSetStreamCharset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function readRespBodyString()
    {
        return CkRest_readRespBodyString($this->_cPtr);
    }

    public function ReadRespBodyStringAsync()
    {
        $r = CkRest_ReadRespBodyStringAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadResponseHeader()
    {
        return CkRest_ReadResponseHeader($this->_cPtr);
    }

    public function ReadResponseHeaderAsync()
    {
        $r = CkRest_ReadResponseHeaderAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadRespSb($responseBody)
    {
        return CkRest_ReadRespSb($this->_cPtr, $responseBody);
    }

    public function ReadRespSbAsync($responseBody)
    {
        $r = CkRest_ReadRespSbAsync($this->_cPtr, $responseBody);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function RedirectUrl()
    {
        $r = CkRest_RedirectUrl($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkUrl($r);
        }

        return $r;
    }

    public function RemoveHeader($name)
    {
        return CkRest_RemoveHeader($this->_cPtr, $name);
    }

    public function RemoveQueryParam($name)
    {
        return CkRest_RemoveQueryParam($this->_cPtr, $name);
    }

    public function responseHdrByName($name)
    {
        return CkRest_responseHdrByName($this->_cPtr, $name);
    }

    public function responseHdrName($index)
    {
        return CkRest_responseHdrName($this->_cPtr, $index);
    }

    public function responseHdrValue($index)
    {
        return CkRest_responseHdrValue($this->_cPtr, $index);
    }

    public function SaveLastError($path)
    {
        return CkRest_SaveLastError($this->_cPtr, $path);
    }

    public function SendReqBd($httpVerb, $uriPath, $body)
    {
        return CkRest_SendReqBd($this->_cPtr, $httpVerb, $uriPath, $body);
    }

    public function SendReqBdAsync($httpVerb, $uriPath, $body)
    {
        $r = CkRest_SendReqBdAsync($this->_cPtr, $httpVerb, $uriPath, $body);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqBinaryBody($httpVerb, $uriPath, $body)
    {
        return CkRest_SendReqBinaryBody($this->_cPtr, $httpVerb, $uriPath, $body);
    }

    public function SendReqBinaryBodyAsync($httpVerb, $uriPath, $body)
    {
        $r = CkRest_SendReqBinaryBodyAsync($this->_cPtr, $httpVerb, $uriPath, $body);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqFormUrlEncoded($httpVerb, $uriPath)
    {
        return CkRest_SendReqFormUrlEncoded($this->_cPtr, $httpVerb, $uriPath);
    }

    public function SendReqFormUrlEncodedAsync($httpVerb, $uriPath)
    {
        $r = CkRest_SendReqFormUrlEncodedAsync($this->_cPtr, $httpVerb, $uriPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqMultipart($httpVerb, $uriPath)
    {
        return CkRest_SendReqMultipart($this->_cPtr, $httpVerb, $uriPath);
    }

    public function SendReqMultipartAsync($httpVerb, $uriPath)
    {
        $r = CkRest_SendReqMultipartAsync($this->_cPtr, $httpVerb, $uriPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqNoBody($httpVerb, $uriPath)
    {
        return CkRest_SendReqNoBody($this->_cPtr, $httpVerb, $uriPath);
    }

    public function SendReqNoBodyAsync($httpVerb, $uriPath)
    {
        $r = CkRest_SendReqNoBodyAsync($this->_cPtr, $httpVerb, $uriPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqSb($httpVerb, $uriPath, $bodySb)
    {
        return CkRest_SendReqSb($this->_cPtr, $httpVerb, $uriPath, $bodySb);
    }

    public function SendReqSbAsync($httpVerb, $uriPath, $bodySb)
    {
        $r = CkRest_SendReqSbAsync($this->_cPtr, $httpVerb, $uriPath, $bodySb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqStreamBody($httpVerb, $uriPath, $stream)
    {
        return CkRest_SendReqStreamBody($this->_cPtr, $httpVerb, $uriPath, $stream);
    }

    public function SendReqStreamBodyAsync($httpVerb, $uriPath, $stream)
    {
        $r = CkRest_SendReqStreamBodyAsync($this->_cPtr, $httpVerb, $uriPath, $stream);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendReqStringBody($httpVerb, $uriPath, $bodyText)
    {
        return CkRest_SendReqStringBody($this->_cPtr, $httpVerb, $uriPath, $bodyText);
    }

    public function SendReqStringBodyAsync($httpVerb, $uriPath, $bodyText)
    {
        $r = CkRest_SendReqStringBodyAsync($this->_cPtr, $httpVerb, $uriPath, $bodyText);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SetAuthAws($authProvider)
    {
        return CkRest_SetAuthAws($this->_cPtr, $authProvider);
    }

    public function SetAuthAzureAD($authProvider)
    {
        return CkRest_SetAuthAzureAD($this->_cPtr, $authProvider);
    }

    public function SetAuthAzureSas($authProvider)
    {
        return CkRest_SetAuthAzureSas($this->_cPtr, $authProvider);
    }

    public function SetAuthAzureStorage($authProvider)
    {
        return CkRest_SetAuthAzureStorage($this->_cPtr, $authProvider);
    }

    public function SetAuthBasic($username, $password)
    {
        return CkRest_SetAuthBasic($this->_cPtr, $username, $password);
    }

    public function SetAuthBasicSecure($username, $password)
    {
        return CkRest_SetAuthBasicSecure($this->_cPtr, $username, $password);
    }

    public function SetAuthGoogle($authProvider)
    {
        return CkRest_SetAuthGoogle($this->_cPtr, $authProvider);
    }

    public function SetAuthOAuth1($authProvider, $useQueryParams)
    {
        return CkRest_SetAuthOAuth1($this->_cPtr, $authProvider, $useQueryParams);
    }

    public function SetAuthOAuth2($authProvider)
    {
        return CkRest_SetAuthOAuth2($this->_cPtr, $authProvider);
    }

    public function SetMultipartBodyBd($bodyData)
    {
        return CkRest_SetMultipartBodyBd($this->_cPtr, $bodyData);
    }

    public function SetMultipartBodyBinary($bodyData)
    {
        return CkRest_SetMultipartBodyBinary($this->_cPtr, $bodyData);
    }

    public function SetMultipartBodySb($bodySb)
    {
        return CkRest_SetMultipartBodySb($this->_cPtr, $bodySb);
    }

    public function SetMultipartBodyStream($stream)
    {
        return CkRest_SetMultipartBodyStream($this->_cPtr, $stream);
    }

    public function SetMultipartBodyString($bodyText)
    {
        return CkRest_SetMultipartBodyString($this->_cPtr, $bodyText);
    }

    public function SetResponseBodyStream($expectedStatus, $autoSetStreamCharset, $responseStream)
    {
        return CkRest_SetResponseBodyStream($this->_cPtr, $expectedStatus, $autoSetStreamCharset, $responseStream);
    }

    public function UseConnection($connection, $autoReconnect)
    {
        return CkRest_UseConnection($this->_cPtr, $connection, $autoReconnect);
    }
}
