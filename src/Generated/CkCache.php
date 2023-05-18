<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCache
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCache') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkCache();
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
        return CkCache_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkCache_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkCache_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkCache_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkCache_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkCache_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkCache_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkCache_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkCache_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkCache_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkCache_lastErrorXml($this->_cPtr);
    }

    public function get_LastEtagFetched($str)
    {
        CkCache_get_LastEtagFetched($this->_cPtr, $str);
    }

    public function lastEtagFetched()
    {
        return CkCache_lastEtagFetched($this->_cPtr);
    }

    public function get_LastExpirationFetched($outSysTime)
    {
        CkCache_get_LastExpirationFetched($this->_cPtr, $outSysTime);
    }

    public function get_LastExpirationFetchedStr($str)
    {
        CkCache_get_LastExpirationFetchedStr($this->_cPtr, $str);
    }

    public function lastExpirationFetchedStr()
    {
        return CkCache_lastExpirationFetchedStr($this->_cPtr);
    }

    public function get_LastHitExpired()
    {
        return CkCache_get_LastHitExpired($this->_cPtr);
    }

    public function get_LastKeyFetched($str)
    {
        CkCache_get_LastKeyFetched($this->_cPtr, $str);
    }

    public function lastKeyFetched()
    {
        return CkCache_lastKeyFetched($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkCache_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkCache_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Level()
    {
        return CkCache_get_Level($this->_cPtr);
    }

    public function put_Level($newVal)
    {
        CkCache_put_Level($this->_cPtr, $newVal);
    }

    public function get_NumRoots()
    {
        return CkCache_get_NumRoots($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkCache_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkCache_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkCache_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkCache_version($this->_cPtr);
    }

    public function AddRoot($path)
    {
        CkCache_AddRoot($this->_cPtr, $path);
    }

    public function DeleteAll()
    {
        return CkCache_DeleteAll($this->_cPtr);
    }

    public function DeleteAllExpired()
    {
        return CkCache_DeleteAllExpired($this->_cPtr);
    }

    public function DeleteFromCache($key)
    {
        return CkCache_DeleteFromCache($this->_cPtr, $key);
    }

    public function DeleteOlder($dateTime)
    {
        return CkCache_DeleteOlder($this->_cPtr, $dateTime);
    }

    public function DeleteOlderDt($dateTime)
    {
        return CkCache_DeleteOlderDt($this->_cPtr, $dateTime);
    }

    public function DeleteOlderStr($dateTimeStr)
    {
        return CkCache_DeleteOlderStr($this->_cPtr, $dateTimeStr);
    }

    public function FetchBd($key, $bd)
    {
        return CkCache_FetchBd($this->_cPtr, $key, $bd);
    }

    public function FetchFromCache($key, $outBytes)
    {
        return CkCache_FetchFromCache($this->_cPtr, $key, $outBytes);
    }

    public function FetchSb($key, $sb)
    {
        return CkCache_FetchSb($this->_cPtr, $key, $sb);
    }

    public function fetchText($key)
    {
        return CkCache_fetchText($this->_cPtr, $key);
    }

    public function getEtag($key)
    {
        return CkCache_getEtag($this->_cPtr, $key);
    }

    public function etag($key)
    {
        return CkCache_etag($this->_cPtr, $key);
    }

    public function GetExpiration($key, $outSysTime)
    {
        return CkCache_GetExpiration($this->_cPtr, $key, $outSysTime);
    }

    public function GetExpirationDt($key)
    {
        $r = CkCache_GetExpirationDt($this->_cPtr, $key);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function getExpirationStr($url)
    {
        return CkCache_getExpirationStr($this->_cPtr, $url);
    }

    public function expirationStr($url)
    {
        return CkCache_expirationStr($this->_cPtr, $url);
    }

    public function getFilename($key)
    {
        return CkCache_getFilename($this->_cPtr, $key);
    }

    public function filename($key)
    {
        return CkCache_filename($this->_cPtr, $key);
    }

    public function getRoot($index)
    {
        return CkCache_getRoot($this->_cPtr, $index);
    }

    public function root($index)
    {
        return CkCache_root($this->_cPtr, $index);
    }

    public function IsCached($key)
    {
        return CkCache_IsCached($this->_cPtr, $key);
    }

    public function SaveLastError($path)
    {
        return CkCache_SaveLastError($this->_cPtr, $path);
    }

    public function SaveText($key, $expireDateTime, $eTag, $itemTextData)
    {
        return CkCache_SaveText($this->_cPtr, $key, $expireDateTime, $eTag, $itemTextData);
    }

    public function SaveTextDt($key, $expireDateTime, $eTag, $itemTextData)
    {
        return CkCache_SaveTextDt($this->_cPtr, $key, $expireDateTime, $eTag, $itemTextData);
    }

    public function SaveTextNoExpire($key, $eTag, $itemTextData)
    {
        return CkCache_SaveTextNoExpire($this->_cPtr, $key, $eTag, $itemTextData);
    }

    public function SaveTextStr($key, $expireDateTime, $eTag, $itemTextData)
    {
        return CkCache_SaveTextStr($this->_cPtr, $key, $expireDateTime, $eTag, $itemTextData);
    }

    public function SaveToCache($key, $expireDateTime, $eTag, $itemData)
    {
        return CkCache_SaveToCache($this->_cPtr, $key, $expireDateTime, $eTag, $itemData);
    }

    public function SaveToCacheDt($key, $expireDateTime, $eTag, $itemData)
    {
        return CkCache_SaveToCacheDt($this->_cPtr, $key, $expireDateTime, $eTag, $itemData);
    }

    public function SaveToCacheNoExpire($key, $eTag, $itemData)
    {
        return CkCache_SaveToCacheNoExpire($this->_cPtr, $key, $eTag, $itemData);
    }

    public function SaveToCacheStr($key, $expireDateTime, $eTag, $itemData)
    {
        return CkCache_SaveToCacheStr($this->_cPtr, $key, $expireDateTime, $eTag, $itemData);
    }

    public function UpdateExpiration($key, $expireDateTime)
    {
        return CkCache_UpdateExpiration($this->_cPtr, $key, $expireDateTime);
    }

    public function UpdateExpirationDt($key, $expireDateTime)
    {
        return CkCache_UpdateExpirationDt($this->_cPtr, $key, $expireDateTime);
    }

    public function UpdateExpirationStr($key, $expireDateTime)
    {
        return CkCache_UpdateExpirationStr($this->_cPtr, $key, $expireDateTime);
    }
}
