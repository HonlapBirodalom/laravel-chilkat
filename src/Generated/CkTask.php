<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkTask
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkTask') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkTask();
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
        return CkTask_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkTask_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkTask_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkTask_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkTask_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Finished()
    {
        return CkTask_get_Finished($this->_cPtr);
    }

    public function get_HeartbeatMs()
    {
        return CkTask_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkTask_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_Inert()
    {
        return CkTask_get_Inert($this->_cPtr);
    }

    public function get_KeepProgressLog()
    {
        return CkTask_get_KeepProgressLog($this->_cPtr);
    }

    public function put_KeepProgressLog($newVal)
    {
        CkTask_put_KeepProgressLog($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkTask_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkTask_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkTask_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkTask_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkTask_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkTask_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkTask_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkTask_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Live()
    {
        return CkTask_get_Live($this->_cPtr);
    }

    public function get_PercentDone()
    {
        return CkTask_get_PercentDone($this->_cPtr);
    }

    public function get_ProgressLogSize()
    {
        return CkTask_get_ProgressLogSize($this->_cPtr);
    }

    public function get_ResultErrorText($str)
    {
        CkTask_get_ResultErrorText($this->_cPtr, $str);
    }

    public function resultErrorText()
    {
        return CkTask_resultErrorText($this->_cPtr);
    }

    public function get_ResultType($str)
    {
        CkTask_get_ResultType($this->_cPtr, $str);
    }

    public function resultType()
    {
        return CkTask_resultType($this->_cPtr);
    }

    public function get_Status($str)
    {
        CkTask_get_Status($this->_cPtr, $str);
    }

    public function status()
    {
        return CkTask_status($this->_cPtr);
    }

    public function get_StatusInt()
    {
        return CkTask_get_StatusInt($this->_cPtr);
    }

    public function get_TaskId()
    {
        return CkTask_get_TaskId($this->_cPtr);
    }

    public function get_TaskSuccess()
    {
        return CkTask_get_TaskSuccess($this->_cPtr);
    }

    public function get_UserData($str)
    {
        CkTask_get_UserData($this->_cPtr, $str);
    }

    public function userData()
    {
        return CkTask_userData($this->_cPtr);
    }

    public function put_UserData($newVal)
    {
        CkTask_put_UserData($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkTask_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkTask_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkTask_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkTask_version($this->_cPtr);
    }

    public function Cancel()
    {
        return CkTask_Cancel($this->_cPtr);
    }

    public function ClearProgressLog()
    {
        CkTask_ClearProgressLog($this->_cPtr);
    }

    public function CopyResultBytes($outBytes)
    {
        return CkTask_CopyResultBytes($this->_cPtr, $outBytes);
    }

    public function GetResultBool()
    {
        return CkTask_GetResultBool($this->_cPtr);
    }

    public function GetResultBytes($outBytes)
    {
        return CkTask_GetResultBytes($this->_cPtr, $outBytes);
    }

    public function GetResultInt()
    {
        return CkTask_GetResultInt($this->_cPtr);
    }

    public function getResultString()
    {
        return CkTask_getResultString($this->_cPtr);
    }

    public function resultString()
    {
        return CkTask_resultString($this->_cPtr);
    }

    public function progressInfoName($index)
    {
        return CkTask_progressInfoName($this->_cPtr, $index);
    }

    public function progressInfoValue($index)
    {
        return CkTask_progressInfoValue($this->_cPtr, $index);
    }

    public function RemoveProgressInfo($index)
    {
        CkTask_RemoveProgressInfo($this->_cPtr, $index);
    }

    public function Run()
    {
        return CkTask_Run($this->_cPtr);
    }

    public function RunSynchronously()
    {
        return CkTask_RunSynchronously($this->_cPtr);
    }

    public function SaveLastError($path)
    {
        return CkTask_SaveLastError($this->_cPtr, $path);
    }

    public function SleepMs($numMs)
    {
        CkTask_SleepMs($this->_cPtr, $numMs);
    }

    public function Wait($maxWaitMs)
    {
        return CkTask_Wait($this->_cPtr, $maxWaitMs);
    }
}
