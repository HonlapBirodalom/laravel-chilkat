<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkDateTime
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkDateTime') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkDateTime();
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
        return CkDateTime_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkDateTime_put_Utf8($this->_cPtr, $b);
    }

    public function get_IsDst()
    {
        return CkDateTime_get_IsDst($this->_cPtr);
    }

    public function get_UtcOffset()
    {
        return CkDateTime_get_UtcOffset($this->_cPtr);
    }

    public function SetFromCurrentSystemTime()
    {
        CkDateTime_SetFromCurrentSystemTime($this->_cPtr);
    }

    public function SetFromRfc822($rfc822Str)
    {
        return CkDateTime_SetFromRfc822($this->_cPtr, $rfc822Str);
    }

    public function GetAsUnixTimeInt($bLocal)
    {
        return CkDateTime_GetAsUnixTimeInt($this->_cPtr, $bLocal);
    }

    public function GetAsUnixTime64($bLocal)
    {
        return CkDateTime_GetAsUnixTime64($this->_cPtr, $bLocal);
    }

    public function GetAsOleDate($bLocal)
    {
        return CkDateTime_GetAsOleDate($this->_cPtr, $bLocal);
    }

    public function GetAsDosDate($bLocal)
    {
        return CkDateTime_GetAsDosDate($this->_cPtr, $bLocal);
    }

    public function GetAsDateTimeTicks($bLocal)
    {
        return CkDateTime_GetAsDateTimeTicks($this->_cPtr, $bLocal);
    }

    public function SetFromUnixTime64($bLocal, $t)
    {
        CkDateTime_SetFromUnixTime64($this->_cPtr, $bLocal, $t);
    }

    public function SetFromOleDate($bLocal, $dt)
    {
        CkDateTime_SetFromOleDate($this->_cPtr, $bLocal, $dt);
    }

    public function SetFromDosDate($bLocal, $t)
    {
        CkDateTime_SetFromDosDate($this->_cPtr, $bLocal, $t);
    }

    public function SetFromDateTimeTicks($bLocal, $n)
    {
        CkDateTime_SetFromDateTimeTicks($this->_cPtr, $bLocal, $n);
    }

    public function serialize()
    {
        return CkDateTime_serialize($this->_cPtr);
    }

    public function DeSerialize($serializedDateTime)
    {
        CkDateTime_DeSerialize($this->_cPtr, $serializedDateTime);
    }

    public function AddDays($numDays)
    {
        return CkDateTime_AddDays($this->_cPtr, $numDays);
    }

    public function getAsRfc822($bLocal)
    {
        return CkDateTime_getAsRfc822($this->_cPtr, $bLocal);
    }

    public function get_LastMethodSuccess()
    {
        return CkDateTime_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkDateTime_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function AddSeconds($numSeconds)
    {
        return CkDateTime_AddSeconds($this->_cPtr, $numSeconds);
    }

    public function DiffSeconds($dt)
    {
        return CkDateTime_DiffSeconds($this->_cPtr, $dt);
    }

    public function getAsUnixTimeStr($bLocal)
    {
        return CkDateTime_getAsUnixTimeStr($this->_cPtr, $bLocal);
    }

    public function getAsIso8601($formatStr, $bLocal)
    {
        return CkDateTime_getAsIso8601($this->_cPtr, $formatStr, $bLocal);
    }

    public function getAsTimestamp($bLocal)
    {
        return CkDateTime_getAsTimestamp($this->_cPtr, $bLocal);
    }

    public function ExpiresWithin($n, $units)
    {
        return CkDateTime_ExpiresWithin($this->_cPtr, $n, $units);
    }

    public function OlderThan($n, $units)
    {
        return CkDateTime_OlderThan($this->_cPtr, $n, $units);
    }

    public function GetDtObj($bLocal)
    {
        $r = CkDateTime_GetDtObj($this->_cPtr, $bLocal);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDtObj($r);
        }

        return $r;
    }

    public function SetFromDtObj($dtObj)
    {
        return CkDateTime_SetFromDtObj($this->_cPtr, $dtObj);
    }

    public function LoadTaskResult($task)
    {
        return CkDateTime_LoadTaskResult($this->_cPtr, $task);
    }

    public function SetFromNtpTime($t)
    {
        return CkDateTime_SetFromNtpTime($this->_cPtr, $t);
    }

    public function SetFromTimestamp($rfc3339Str)
    {
        return CkDateTime_SetFromTimestamp($this->_cPtr, $rfc3339Str);
    }
}
