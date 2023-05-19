<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkWebSocket
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkWebSocket') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkWebSocket();
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
        return CkWebSocket_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkWebSocket_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkWebSocket_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_CloseAutoRespond()
    {
        return CkWebSocket_get_CloseAutoRespond($this->_cPtr);
    }

    public function put_CloseAutoRespond($newVal)
    {
        CkWebSocket_put_CloseAutoRespond($this->_cPtr, $newVal);
    }

    public function get_CloseReason($str)
    {
        CkWebSocket_get_CloseReason($this->_cPtr, $str);
    }

    public function closeReason()
    {
        return CkWebSocket_closeReason($this->_cPtr);
    }

    public function get_CloseReceived()
    {
        return CkWebSocket_get_CloseReceived($this->_cPtr);
    }

    public function get_CloseStatusCode()
    {
        return CkWebSocket_get_CloseStatusCode($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkWebSocket_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkWebSocket_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkWebSocket_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_FinalFrame()
    {
        return CkWebSocket_get_FinalFrame($this->_cPtr);
    }

    public function get_FrameDataLen()
    {
        return CkWebSocket_get_FrameDataLen($this->_cPtr);
    }

    public function get_FrameOpcode($str)
    {
        CkWebSocket_get_FrameOpcode($this->_cPtr, $str);
    }

    public function frameOpcode()
    {
        return CkWebSocket_frameOpcode($this->_cPtr);
    }

    public function get_FrameOpcodeInt()
    {
        return CkWebSocket_get_FrameOpcodeInt($this->_cPtr);
    }

    public function get_IdleTimeoutMs()
    {
        return CkWebSocket_get_IdleTimeoutMs($this->_cPtr);
    }

    public function put_IdleTimeoutMs($newVal)
    {
        CkWebSocket_put_IdleTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_IsConnected()
    {
        return CkWebSocket_get_IsConnected($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkWebSocket_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkWebSocket_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkWebSocket_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkWebSocket_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkWebSocket_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkWebSocket_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkWebSocket_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkWebSocket_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NeedSendPong()
    {
        return CkWebSocket_get_NeedSendPong($this->_cPtr);
    }

    public function get_PingAutoRespond()
    {
        return CkWebSocket_get_PingAutoRespond($this->_cPtr);
    }

    public function put_PingAutoRespond($newVal)
    {
        CkWebSocket_put_PingAutoRespond($this->_cPtr, $newVal);
    }

    public function get_PongAutoConsume()
    {
        return CkWebSocket_get_PongAutoConsume($this->_cPtr);
    }

    public function put_PongAutoConsume($newVal)
    {
        CkWebSocket_put_PongAutoConsume($this->_cPtr, $newVal);
    }

    public function get_PongConsumed()
    {
        return CkWebSocket_get_PongConsumed($this->_cPtr);
    }

    public function get_ReadFrameFailReason()
    {
        return CkWebSocket_get_ReadFrameFailReason($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkWebSocket_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkWebSocket_uncommonOptions($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkWebSocket_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkWebSocket_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkWebSocket_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkWebSocket_version($this->_cPtr);
    }

    public function AddClientHeaders()
    {
        return CkWebSocket_AddClientHeaders($this->_cPtr);
    }

    public function CloseConnection()
    {
        return CkWebSocket_CloseConnection($this->_cPtr);
    }

    public function getFrameData()
    {
        return CkWebSocket_getFrameData($this->_cPtr);
    }

    public function frameData()
    {
        return CkWebSocket_frameData($this->_cPtr);
    }

    public function GetFrameDataBd($binData)
    {
        return CkWebSocket_GetFrameDataBd($this->_cPtr, $binData);
    }

    public function GetFrameDataSb($sb)
    {
        return CkWebSocket_GetFrameDataSb($this->_cPtr, $sb);
    }

    public function LoadTaskCaller($task)
    {
        return CkWebSocket_LoadTaskCaller($this->_cPtr, $task);
    }

    public function PollDataAvailable()
    {
        return CkWebSocket_PollDataAvailable($this->_cPtr);
    }

    public function ReadFrame()
    {
        return CkWebSocket_ReadFrame($this->_cPtr);
    }

    public function ReadFrameAsync()
    {
        $r = CkWebSocket_ReadFrameAsync($this->_cPtr);
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
        return CkWebSocket_SaveLastError($this->_cPtr, $path);
    }

    public function SendClose($includeStatus, $statusCode, $reason)
    {
        return CkWebSocket_SendClose($this->_cPtr, $includeStatus, $statusCode, $reason);
    }

    public function SendCloseAsync($includeStatus, $statusCode, $reason)
    {
        $r = CkWebSocket_SendCloseAsync($this->_cPtr, $includeStatus, $statusCode, $reason);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendFrame($stringToSend, $finalFrame)
    {
        return CkWebSocket_SendFrame($this->_cPtr, $stringToSend, $finalFrame);
    }

    public function SendFrameAsync($stringToSend, $finalFrame)
    {
        $r = CkWebSocket_SendFrameAsync($this->_cPtr, $stringToSend, $finalFrame);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendFrameBd($bdToSend, $finalFrame)
    {
        return CkWebSocket_SendFrameBd($this->_cPtr, $bdToSend, $finalFrame);
    }

    public function SendFrameBdAsync($bdToSend, $finalFrame)
    {
        $r = CkWebSocket_SendFrameBdAsync($this->_cPtr, $bdToSend, $finalFrame);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendFrameSb($sbToSend, $finalFrame)
    {
        return CkWebSocket_SendFrameSb($this->_cPtr, $sbToSend, $finalFrame);
    }

    public function SendFrameSbAsync($sbToSend, $finalFrame)
    {
        $r = CkWebSocket_SendFrameSbAsync($this->_cPtr, $sbToSend, $finalFrame);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendPing($pingData)
    {
        return CkWebSocket_SendPing($this->_cPtr, $pingData);
    }

    public function SendPingAsync($pingData)
    {
        $r = CkWebSocket_SendPingAsync($this->_cPtr, $pingData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function SendPong()
    {
        return CkWebSocket_SendPong($this->_cPtr);
    }

    public function SendPongAsync()
    {
        $r = CkWebSocket_SendPongAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UseConnection($connection)
    {
        return CkWebSocket_UseConnection($this->_cPtr, $connection);
    }

    public function ValidateServerHandshake()
    {
        return CkWebSocket_ValidateServerHandshake($this->_cPtr);
    }
}
