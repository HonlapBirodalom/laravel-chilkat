<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkTaskChain
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkTaskChain') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkTaskChain();
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
        return CkTaskChain_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkTaskChain_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkTaskChain_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkTaskChain_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkTaskChain_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Finished()
    {
        return CkTaskChain_get_Finished($this->_cPtr);
    }

    public function get_HeartbeatMs()
    {
        return CkTaskChain_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkTaskChain_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_Inert()
    {
        return CkTaskChain_get_Inert($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkTaskChain_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkTaskChain_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkTaskChain_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkTaskChain_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkTaskChain_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkTaskChain_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkTaskChain_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkTaskChain_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Live()
    {
        return CkTaskChain_get_Live($this->_cPtr);
    }

    public function get_NumTasks()
    {
        return CkTaskChain_get_NumTasks($this->_cPtr);
    }

    public function get_Status($str)
    {
        CkTaskChain_get_Status($this->_cPtr, $str);
    }

    public function status()
    {
        return CkTaskChain_status($this->_cPtr);
    }

    public function get_StatusInt()
    {
        return CkTaskChain_get_StatusInt($this->_cPtr);
    }

    public function get_StopOnFailedTask()
    {
        return CkTaskChain_get_StopOnFailedTask($this->_cPtr);
    }

    public function put_StopOnFailedTask($newVal)
    {
        CkTaskChain_put_StopOnFailedTask($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkTaskChain_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkTaskChain_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkTaskChain_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkTaskChain_version($this->_cPtr);
    }

    public function Append($task)
    {
        return CkTaskChain_Append($this->_cPtr, $task);
    }

    public function Cancel()
    {
        return CkTaskChain_Cancel($this->_cPtr);
    }

    public function GetTask($index)
    {
        $r = CkTaskChain_GetTask($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Run()
    {
        return CkTaskChain_Run($this->_cPtr);
    }

    public function RunSynchronously()
    {
        return CkTaskChain_RunSynchronously($this->_cPtr);
    }

    public function SaveLastError($path)
    {
        return CkTaskChain_SaveLastError($this->_cPtr, $path);
    }

    public function SleepMs($numMs)
    {
        CkTaskChain_SleepMs($this->_cPtr, $numMs);
    }

    public function Wait($maxWaitMs)
    {
        return CkTaskChain_Wait($this->_cPtr, $maxWaitMs);
    }
}