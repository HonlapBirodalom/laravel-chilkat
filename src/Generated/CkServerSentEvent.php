<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkServerSentEvent
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkServerSentEvent') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkServerSentEvent();
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
        return CkServerSentEvent_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkServerSentEvent_put_Utf8($this->_cPtr, $b);
    }

    public function get_Data($str)
    {
        CkServerSentEvent_get_Data($this->_cPtr, $str);
    }

    public function data()
    {
        return CkServerSentEvent_data($this->_cPtr);
    }

    public function get_EventName($str)
    {
        CkServerSentEvent_get_EventName($this->_cPtr, $str);
    }

    public function eventName()
    {
        return CkServerSentEvent_eventName($this->_cPtr);
    }

    public function get_LastEventId($str)
    {
        CkServerSentEvent_get_LastEventId($this->_cPtr, $str);
    }

    public function lastEventId()
    {
        return CkServerSentEvent_lastEventId($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkServerSentEvent_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkServerSentEvent_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Retry()
    {
        return CkServerSentEvent_get_Retry($this->_cPtr);
    }

    public function LoadEvent($eventText)
    {
        return CkServerSentEvent_LoadEvent($this->_cPtr, $eventText);
    }
}
