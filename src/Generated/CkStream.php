<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkStream
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkStream') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkStream();
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
        return CkStream_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkStream_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkStream_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_AbortCurrent()
    {
        return CkStream_get_AbortCurrent($this->_cPtr);
    }

    public function put_AbortCurrent($newVal)
    {
        CkStream_put_AbortCurrent($this->_cPtr, $newVal);
    }

    public function get_CanRead()
    {
        return CkStream_get_CanRead($this->_cPtr);
    }

    public function get_CanWrite()
    {
        return CkStream_get_CanWrite($this->_cPtr);
    }

    public function get_DataAvailable()
    {
        return CkStream_get_DataAvailable($this->_cPtr);
    }

    public function get_DebugLogFilePath($str)
    {
        CkStream_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkStream_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkStream_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DefaultChunkSize()
    {
        return CkStream_get_DefaultChunkSize($this->_cPtr);
    }

    public function put_DefaultChunkSize($newVal)
    {
        CkStream_put_DefaultChunkSize($this->_cPtr, $newVal);
    }

    public function get_EndOfStream()
    {
        return CkStream_get_EndOfStream($this->_cPtr);
    }

    public function get_IsWriteClosed()
    {
        return CkStream_get_IsWriteClosed($this->_cPtr);
    }

    public function get_LastErrorHtml($str)
    {
        CkStream_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkStream_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkStream_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkStream_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkStream_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkStream_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkStream_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkStream_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_Length32()
    {
        return CkStream_get_Length32($this->_cPtr);
    }

    public function put_Length32($newVal)
    {
        CkStream_put_Length32($this->_cPtr, $newVal);
    }

    public function get_ReadFailReason()
    {
        return CkStream_get_ReadFailReason($this->_cPtr);
    }

    public function get_ReadTimeoutMs()
    {
        return CkStream_get_ReadTimeoutMs($this->_cPtr);
    }

    public function put_ReadTimeoutMs($newVal)
    {
        CkStream_put_ReadTimeoutMs($this->_cPtr, $newVal);
    }

    public function get_SinkFile($str)
    {
        CkStream_get_SinkFile($this->_cPtr, $str);
    }

    public function sinkFile()
    {
        return CkStream_sinkFile($this->_cPtr);
    }

    public function put_SinkFile($newVal)
    {
        CkStream_put_SinkFile($this->_cPtr, $newVal);
    }

    public function get_SinkFileAppend()
    {
        return CkStream_get_SinkFileAppend($this->_cPtr);
    }

    public function put_SinkFileAppend($newVal)
    {
        CkStream_put_SinkFileAppend($this->_cPtr, $newVal);
    }

    public function get_SourceFile($str)
    {
        CkStream_get_SourceFile($this->_cPtr, $str);
    }

    public function sourceFile()
    {
        return CkStream_sourceFile($this->_cPtr);
    }

    public function put_SourceFile($newVal)
    {
        CkStream_put_SourceFile($this->_cPtr, $newVal);
    }

    public function get_SourceFilePart()
    {
        return CkStream_get_SourceFilePart($this->_cPtr);
    }

    public function put_SourceFilePart($newVal)
    {
        CkStream_put_SourceFilePart($this->_cPtr, $newVal);
    }

    public function get_SourceFilePartSize()
    {
        return CkStream_get_SourceFilePartSize($this->_cPtr);
    }

    public function put_SourceFilePartSize($newVal)
    {
        CkStream_put_SourceFilePartSize($this->_cPtr, $newVal);
    }

    public function get_StringBom()
    {
        return CkStream_get_StringBom($this->_cPtr);
    }

    public function put_StringBom($newVal)
    {
        CkStream_put_StringBom($this->_cPtr, $newVal);
    }

    public function get_StringCharset($str)
    {
        CkStream_get_StringCharset($this->_cPtr, $str);
    }

    public function stringCharset()
    {
        return CkStream_stringCharset($this->_cPtr);
    }

    public function put_StringCharset($newVal)
    {
        CkStream_put_StringCharset($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkStream_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkStream_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkStream_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkStream_version($this->_cPtr);
    }

    public function get_WriteFailReason()
    {
        return CkStream_get_WriteFailReason($this->_cPtr);
    }

    public function get_WriteTimeoutMs()
    {
        return CkStream_get_WriteTimeoutMs($this->_cPtr);
    }

    public function put_WriteTimeoutMs($newVal)
    {
        CkStream_put_WriteTimeoutMs($this->_cPtr, $newVal);
    }

    public function LoadTaskCaller($task)
    {
        return CkStream_LoadTaskCaller($this->_cPtr, $task);
    }

    public function ReadBd($binData)
    {
        return CkStream_ReadBd($this->_cPtr, $binData);
    }

    public function ReadBdAsync($binData)
    {
        $r = CkStream_ReadBdAsync($this->_cPtr, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadBytes($outBytes)
    {
        return CkStream_ReadBytes($this->_cPtr, $outBytes);
    }

    public function ReadBytesAsync()
    {
        $r = CkStream_ReadBytesAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function readBytesENC($encoding)
    {
        return CkStream_readBytesENC($this->_cPtr, $encoding);
    }

    public function ReadBytesENCAsync($encoding)
    {
        $r = CkStream_ReadBytesENCAsync($this->_cPtr, $encoding);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadNBytes($numBytes, $outBytes)
    {
        return CkStream_ReadNBytes($this->_cPtr, $numBytes, $outBytes);
    }

    public function ReadNBytesAsync($numBytes)
    {
        $r = CkStream_ReadNBytesAsync($this->_cPtr, $numBytes);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function readNBytesENC($numBytes, $encoding)
    {
        return CkStream_readNBytesENC($this->_cPtr, $numBytes, $encoding);
    }

    public function ReadNBytesENCAsync($numBytes, $encoding)
    {
        $r = CkStream_ReadNBytesENCAsync($this->_cPtr, $numBytes, $encoding);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function ReadSb($sb)
    {
        return CkStream_ReadSb($this->_cPtr, $sb);
    }

    public function ReadSbAsync($sb)
    {
        $r = CkStream_ReadSbAsync($this->_cPtr, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function readString()
    {
        return CkStream_readString($this->_cPtr);
    }

    public function ReadStringAsync()
    {
        $r = CkStream_ReadStringAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function readToCRLF()
    {
        return CkStream_readToCRLF($this->_cPtr);
    }

    public function ReadToCRLFAsync()
    {
        $r = CkStream_ReadToCRLFAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function readUntilMatch($matchStr)
    {
        return CkStream_readUntilMatch($this->_cPtr, $matchStr);
    }

    public function ReadUntilMatchAsync($matchStr)
    {
        $r = CkStream_ReadUntilMatchAsync($this->_cPtr, $matchStr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function Reset()
    {
        CkStream_Reset($this->_cPtr);
    }

    public function RunStream()
    {
        return CkStream_RunStream($this->_cPtr);
    }

    public function RunStreamAsync()
    {
        $r = CkStream_RunStreamAsync($this->_cPtr);
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
        return CkStream_SaveLastError($this->_cPtr, $path);
    }

    public function SetSinkStream($strm)
    {
        return CkStream_SetSinkStream($this->_cPtr, $strm);
    }

    public function SetSourceBytes($sourceData)
    {
        return CkStream_SetSourceBytes($this->_cPtr, $sourceData);
    }

    public function SetSourceStream($strm)
    {
        return CkStream_SetSourceStream($this->_cPtr, $strm);
    }

    public function SetSourceString($srcStr, $charset)
    {
        return CkStream_SetSourceString($this->_cPtr, $srcStr, $charset);
    }

    public function WriteBd($binData)
    {
        return CkStream_WriteBd($this->_cPtr, $binData);
    }

    public function WriteBdAsync($binData)
    {
        $r = CkStream_WriteBdAsync($this->_cPtr, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteByte($byteVal)
    {
        return CkStream_WriteByte($this->_cPtr, $byteVal);
    }

    public function WriteByteAsync($byteVal)
    {
        $r = CkStream_WriteByteAsync($this->_cPtr, $byteVal);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteBytes($byteData)
    {
        return CkStream_WriteBytes($this->_cPtr, $byteData);
    }

    public function WriteBytesAsync($byteData)
    {
        $r = CkStream_WriteBytesAsync($this->_cPtr, $byteData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteBytesENC($byteData, $encoding)
    {
        return CkStream_WriteBytesENC($this->_cPtr, $byteData, $encoding);
    }

    public function WriteBytesENCAsync($byteData, $encoding)
    {
        $r = CkStream_WriteBytesENCAsync($this->_cPtr, $byteData, $encoding);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteClose()
    {
        return CkStream_WriteClose($this->_cPtr);
    }

    public function WriteSb($sb)
    {
        return CkStream_WriteSb($this->_cPtr, $sb);
    }

    public function WriteSbAsync($sb)
    {
        $r = CkStream_WriteSbAsync($this->_cPtr, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function WriteString($str)
    {
        return CkStream_WriteString($this->_cPtr, $str);
    }

    public function WriteStringAsync($str)
    {
        $r = CkStream_WriteStringAsync($this->_cPtr, $str);
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
