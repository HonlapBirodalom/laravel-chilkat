<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkZipEntry
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkZipEntry') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkZipEntry();
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
        return CkZipEntry_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkZipEntry_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkZipEntry_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_Comment($str)
    {
        CkZipEntry_get_Comment($this->_cPtr, $str);
    }

    public function comment()
    {
        return CkZipEntry_comment($this->_cPtr);
    }

    public function put_Comment($newVal)
    {
        CkZipEntry_put_Comment($this->_cPtr, $newVal);
    }

    public function get_CompressedLength()
    {
        return CkZipEntry_get_CompressedLength($this->_cPtr);
    }

    public function get_CompressedLengthStr($str)
    {
        CkZipEntry_get_CompressedLengthStr($this->_cPtr, $str);
    }

    public function compressedLengthStr()
    {
        return CkZipEntry_compressedLengthStr($this->_cPtr);
    }

    public function get_CompressionLevel()
    {
        return CkZipEntry_get_CompressionLevel($this->_cPtr);
    }

    public function put_CompressionLevel($newVal)
    {
        CkZipEntry_put_CompressionLevel($this->_cPtr, $newVal);
    }

    public function get_CompressionMethod()
    {
        return CkZipEntry_get_CompressionMethod($this->_cPtr);
    }

    public function put_CompressionMethod($newVal)
    {
        CkZipEntry_put_CompressionMethod($this->_cPtr, $newVal);
    }

    public function get_Crc()
    {
        return CkZipEntry_get_Crc($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkZipEntry_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkZipEntry_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkZipEntry_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_EncryptionKeyLen()
    {
        return CkZipEntry_get_EncryptionKeyLen($this->_cPtr);
    }

    public function get_EntryID()
    {
        return CkZipEntry_get_EntryID($this->_cPtr);
    }

    public function get_EntryType()
    {
        return CkZipEntry_get_EntryType($this->_cPtr);
    }

    public function get_FileDateTime($outSysTime)
    {
        CkZipEntry_get_FileDateTime($this->_cPtr, $outSysTime);
    }

    public function put_FileDateTime($sysTime)
    {
        CkZipEntry_put_FileDateTime($this->_cPtr, $sysTime);
    }

    public function get_FileDateTimeStr($str)
    {
        CkZipEntry_get_FileDateTimeStr($this->_cPtr, $str);
    }

    public function fileDateTimeStr()
    {
        return CkZipEntry_fileDateTimeStr($this->_cPtr);
    }

    public function put_FileDateTimeStr($newVal)
    {
        CkZipEntry_put_FileDateTimeStr($this->_cPtr, $newVal);
    }

    public function get_FileName($str)
    {
        CkZipEntry_get_FileName($this->_cPtr, $str);
    }

    public function fileName()
    {
        return CkZipEntry_fileName($this->_cPtr);
    }

    public function put_FileName($newVal)
    {
        CkZipEntry_put_FileName($this->_cPtr, $newVal);
    }

    public function get_FileNameHex($str)
    {
        CkZipEntry_get_FileNameHex($this->_cPtr, $str);
    }

    public function fileNameHex()
    {
        return CkZipEntry_fileNameHex($this->_cPtr);
    }

    public function get_HeartbeatMs()
    {
        return CkZipEntry_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkZipEntry_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_IsAesEncrypted()
    {
        return CkZipEntry_get_IsAesEncrypted($this->_cPtr);
    }

    public function get_IsDirectory()
    {
        return CkZipEntry_get_IsDirectory($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkZipEntry_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkZipEntry_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkZipEntry_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkZipEntry_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkZipEntry_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkZipEntry_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkZipEntry_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkZipEntry_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_TextFlag()
    {
        return CkZipEntry_get_TextFlag($this->_cPtr);
    }

    public function put_TextFlag($newVal)
    {
        CkZipEntry_put_TextFlag($this->_cPtr, $newVal);
    }

    public function get_UncompressedLength()
    {
        return CkZipEntry_get_UncompressedLength($this->_cPtr);
    }

    public function get_UncompressedLengthStr($str)
    {
        CkZipEntry_get_UncompressedLengthStr($this->_cPtr, $str);
    }

    public function uncompressedLengthStr()
    {
        return CkZipEntry_uncompressedLengthStr($this->_cPtr);
    }

    public function get_VerboseLogging()
    {
        return CkZipEntry_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkZipEntry_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkZipEntry_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkZipEntry_version($this->_cPtr);
    }

    public function AppendData($inData)
    {
        return CkZipEntry_AppendData($this->_cPtr, $inData);
    }

    public function AppendDataAsync($inData)
    {
        $r = CkZipEntry_AppendDataAsync($this->_cPtr, $inData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function AppendString($strContent, $charset)
    {
        return CkZipEntry_AppendString($this->_cPtr, $strContent, $charset);
    }

    public function AppendStringAsync($strContent, $charset)
    {
        $r = CkZipEntry_AppendStringAsync($this->_cPtr, $strContent, $charset);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Copy($outData)
    {
        return CkZipEntry_Copy($this->_cPtr, $outData);
    }

    public function copyToBase64()
    {
        return CkZipEntry_copyToBase64($this->_cPtr);
    }

    public function copyToHex()
    {
        return CkZipEntry_copyToHex($this->_cPtr);
    }

    public function Extract($dirPath)
    {
        return CkZipEntry_Extract($this->_cPtr, $dirPath);
    }

    public function ExtractAsync($dirPath)
    {
        $r = CkZipEntry_ExtractAsync($this->_cPtr, $dirPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ExtractInto($dirPath)
    {
        return CkZipEntry_ExtractInto($this->_cPtr, $dirPath);
    }

    public function ExtractIntoAsync($dirPath)
    {
        $r = CkZipEntry_ExtractIntoAsync($this->_cPtr, $dirPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function GetDt()
    {
        $r = CkZipEntry_GetDt($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkDateTime($r);
        }

        return $r;
    }

    public function Inflate($outData)
    {
        return CkZipEntry_Inflate($this->_cPtr, $outData);
    }

    public function InflateAsync()
    {
        $r = CkZipEntry_InflateAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function LoadTaskCaller($task)
    {
        return CkZipEntry_LoadTaskCaller($this->_cPtr, $task);
    }

    public function NextEntry()
    {
        $r = CkZipEntry_NextEntry($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function NextMatchingEntry($matchStr)
    {
        $r = CkZipEntry_NextMatchingEntry($this->_cPtr, $matchStr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkZipEntry($r);
        }

        return $r;
    }

    public function ReplaceData($inData)
    {
        return CkZipEntry_ReplaceData($this->_cPtr, $inData);
    }

    public function ReplaceString($strContent, $charset)
    {
        return CkZipEntry_ReplaceString($this->_cPtr, $strContent, $charset);
    }

    public function SaveLastError($path)
    {
        return CkZipEntry_SaveLastError($this->_cPtr, $path);
    }

    public function SetDt($dt)
    {
        CkZipEntry_SetDt($this->_cPtr, $dt);
    }

    public function UnzipToBd($binData)
    {
        return CkZipEntry_UnzipToBd($this->_cPtr, $binData);
    }

    public function UnzipToBdAsync($binData)
    {
        $r = CkZipEntry_UnzipToBdAsync($this->_cPtr, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UnzipToSb($lineEndingBehavior, $srcCharset, $sb)
    {
        return CkZipEntry_UnzipToSb($this->_cPtr, $lineEndingBehavior, $srcCharset, $sb);
    }

    public function UnzipToSbAsync($lineEndingBehavior, $srcCharset, $sb)
    {
        $r = CkZipEntry_UnzipToSbAsync($this->_cPtr, $lineEndingBehavior, $srcCharset, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function UnzipToStream($toStream)
    {
        return CkZipEntry_UnzipToStream($this->_cPtr, $toStream);
    }

    public function UnzipToStreamAsync($toStream)
    {
        $r = CkZipEntry_UnzipToStreamAsync($this->_cPtr, $toStream);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function unzipToString($lineEndingBehavior, $srcCharset)
    {
        return CkZipEntry_unzipToString($this->_cPtr, $lineEndingBehavior, $srcCharset);
    }

    public function UnzipToStringAsync($lineEndingBehavior, $srcCharset)
    {
        $r = CkZipEntry_UnzipToStringAsync($this->_cPtr, $lineEndingBehavior, $srcCharset);
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
