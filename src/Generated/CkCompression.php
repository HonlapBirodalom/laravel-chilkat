<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCompression
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCompression') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkCompression();
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
        return CkCompression_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkCompression_put_Utf8($this->_cPtr, $b);
    }

    public function put_EventCallbackObject($progress)
    {
        CkCompression_put_EventCallbackObject($this->_cPtr, $progress);
    }

    public function get_Algorithm($str)
    {
        CkCompression_get_Algorithm($this->_cPtr, $str);
    }

    public function algorithm()
    {
        return CkCompression_algorithm($this->_cPtr);
    }

    public function put_Algorithm($newVal)
    {
        CkCompression_put_Algorithm($this->_cPtr, $newVal);
    }

    public function get_Charset($str)
    {
        CkCompression_get_Charset($this->_cPtr, $str);
    }

    public function charset()
    {
        return CkCompression_charset($this->_cPtr);
    }

    public function put_Charset($newVal)
    {
        CkCompression_put_Charset($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkCompression_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkCompression_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkCompression_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DeflateLevel()
    {
        return CkCompression_get_DeflateLevel($this->_cPtr);
    }

    public function put_DeflateLevel($newVal)
    {
        CkCompression_put_DeflateLevel($this->_cPtr, $newVal);
    }

    public function get_EncodingMode($str)
    {
        CkCompression_get_EncodingMode($this->_cPtr, $str);
    }

    public function encodingMode()
    {
        return CkCompression_encodingMode($this->_cPtr);
    }

    public function put_EncodingMode($newVal)
    {
        CkCompression_put_EncodingMode($this->_cPtr, $newVal);
    }

    public function get_HeartbeatMs()
    {
        return CkCompression_get_HeartbeatMs($this->_cPtr);
    }

    public function put_HeartbeatMs($newVal)
    {
        CkCompression_put_HeartbeatMs($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkCompression_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkCompression_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkCompression_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkCompression_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkCompression_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkCompression_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkCompression_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkCompression_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkCompression_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkCompression_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkCompression_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkCompression_version($this->_cPtr);
    }

    public function BeginCompressBytes($data, $outData)
    {
        return CkCompression_BeginCompressBytes($this->_cPtr, $data, $outData);
    }

    public function BeginCompressBytesAsync($data)
    {
        $r = CkCompression_BeginCompressBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function beginCompressBytesENC($data)
    {
        return CkCompression_beginCompressBytesENC($this->_cPtr, $data);
    }

    public function BeginCompressBytesENCAsync($data)
    {
        $r = CkCompression_BeginCompressBytesENCAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function BeginCompressString($str, $outData)
    {
        return CkCompression_BeginCompressString($this->_cPtr, $str, $outData);
    }

    public function BeginCompressStringAsync($str)
    {
        $r = CkCompression_BeginCompressStringAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function beginCompressStringENC($str)
    {
        return CkCompression_beginCompressStringENC($this->_cPtr, $str);
    }

    public function BeginCompressStringENCAsync($str)
    {
        $r = CkCompression_BeginCompressStringENCAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function BeginDecompressBytes($data, $outData)
    {
        return CkCompression_BeginDecompressBytes($this->_cPtr, $data, $outData);
    }

    public function BeginDecompressBytesAsync($data)
    {
        $r = CkCompression_BeginDecompressBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function BeginDecompressBytesENC($str, $outData)
    {
        return CkCompression_BeginDecompressBytesENC($this->_cPtr, $str, $outData);
    }

    public function BeginDecompressBytesENCAsync($str)
    {
        $r = CkCompression_BeginDecompressBytesENCAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function beginDecompressString($data)
    {
        return CkCompression_beginDecompressString($this->_cPtr, $data);
    }

    public function BeginDecompressStringAsync($data)
    {
        $r = CkCompression_BeginDecompressStringAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function beginDecompressStringENC($str)
    {
        return CkCompression_beginDecompressStringENC($this->_cPtr, $str);
    }

    public function BeginDecompressStringENCAsync($str)
    {
        $r = CkCompression_BeginDecompressStringENCAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressBd($binData)
    {
        return CkCompression_CompressBd($this->_cPtr, $binData);
    }

    public function CompressBdAsync($binData)
    {
        $r = CkCompression_CompressBdAsync($this->_cPtr, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressBytes($data, $outData)
    {
        return CkCompression_CompressBytes($this->_cPtr, $data, $outData);
    }

    public function CompressBytesAsync($data)
    {
        $r = CkCompression_CompressBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function compressBytesENC($data)
    {
        return CkCompression_compressBytesENC($this->_cPtr, $data);
    }

    public function CompressBytesENCAsync($data)
    {
        $r = CkCompression_CompressBytesENCAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressFile($srcPath, $destPath)
    {
        return CkCompression_CompressFile($this->_cPtr, $srcPath, $destPath);
    }

    public function CompressFileAsync($srcPath, $destPath)
    {
        $r = CkCompression_CompressFileAsync($this->_cPtr, $srcPath, $destPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressSb($sb, $binData)
    {
        return CkCompression_CompressSb($this->_cPtr, $sb, $binData);
    }

    public function CompressSbAsync($sb, $binData)
    {
        $r = CkCompression_CompressSbAsync($this->_cPtr, $sb, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressStream($strm)
    {
        return CkCompression_CompressStream($this->_cPtr, $strm);
    }

    public function CompressStreamAsync($strm)
    {
        $r = CkCompression_CompressStreamAsync($this->_cPtr, $strm);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function CompressString($str, $outData)
    {
        return CkCompression_CompressString($this->_cPtr, $str, $outData);
    }

    public function CompressStringAsync($str)
    {
        $r = CkCompression_CompressStringAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function compressStringENC($str)
    {
        return CkCompression_compressStringENC($this->_cPtr, $str);
    }

    public function CompressStringENCAsync($str)
    {
        $r = CkCompression_CompressStringENCAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DecompressBd($binData)
    {
        return CkCompression_DecompressBd($this->_cPtr, $binData);
    }

    public function DecompressBdAsync($binData)
    {
        $r = CkCompression_DecompressBdAsync($this->_cPtr, $binData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DecompressBytes($data, $outData)
    {
        return CkCompression_DecompressBytes($this->_cPtr, $data, $outData);
    }

    public function DecompressBytesAsync($data)
    {
        $r = CkCompression_DecompressBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DecompressBytesENC($encodedCompressedData, $outData)
    {
        return CkCompression_DecompressBytesENC($this->_cPtr, $encodedCompressedData, $outData);
    }

    public function DecompressBytesENCAsync($encodedCompressedData)
    {
        $r = CkCompression_DecompressBytesENCAsync($this->_cPtr, $encodedCompressedData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DecompressFile($srcPath, $destPath)
    {
        return CkCompression_DecompressFile($this->_cPtr, $srcPath, $destPath);
    }

    public function DecompressFileAsync($srcPath, $destPath)
    {
        $r = CkCompression_DecompressFileAsync($this->_cPtr, $srcPath, $destPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DecompressSb($binData, $sb)
    {
        return CkCompression_DecompressSb($this->_cPtr, $binData, $sb);
    }

    public function DecompressSbAsync($binData, $sb)
    {
        $r = CkCompression_DecompressSbAsync($this->_cPtr, $binData, $sb);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function DecompressStream($strm)
    {
        return CkCompression_DecompressStream($this->_cPtr, $strm);
    }

    public function DecompressStreamAsync($strm)
    {
        $r = CkCompression_DecompressStreamAsync($this->_cPtr, $strm);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function decompressString($data)
    {
        return CkCompression_decompressString($this->_cPtr, $data);
    }

    public function DecompressStringAsync($data)
    {
        $r = CkCompression_DecompressStringAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function decompressStringENC($encodedCompressedData)
    {
        return CkCompression_decompressStringENC($this->_cPtr, $encodedCompressedData);
    }

    public function DecompressStringENCAsync($encodedCompressedData)
    {
        $r = CkCompression_DecompressStringENCAsync($this->_cPtr, $encodedCompressedData);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function EndCompressBytes($outData)
    {
        return CkCompression_EndCompressBytes($this->_cPtr, $outData);
    }

    public function EndCompressBytesAsync()
    {
        $r = CkCompression_EndCompressBytesAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function endCompressBytesENC()
    {
        return CkCompression_endCompressBytesENC($this->_cPtr);
    }

    public function EndCompressBytesENCAsync()
    {
        $r = CkCompression_EndCompressBytesENCAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function EndCompressString($outData)
    {
        return CkCompression_EndCompressString($this->_cPtr, $outData);
    }

    public function EndCompressStringAsync()
    {
        $r = CkCompression_EndCompressStringAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function endCompressStringENC()
    {
        return CkCompression_endCompressStringENC($this->_cPtr);
    }

    public function EndCompressStringENCAsync()
    {
        $r = CkCompression_EndCompressStringENCAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function EndDecompressBytes($outData)
    {
        return CkCompression_EndDecompressBytes($this->_cPtr, $outData);
    }

    public function EndDecompressBytesAsync()
    {
        $r = CkCompression_EndDecompressBytesAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function EndDecompressBytesENC($outData)
    {
        return CkCompression_EndDecompressBytesENC($this->_cPtr, $outData);
    }

    public function EndDecompressBytesENCAsync()
    {
        $r = CkCompression_EndDecompressBytesENCAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function endDecompressString()
    {
        return CkCompression_endDecompressString($this->_cPtr);
    }

    public function EndDecompressStringAsync()
    {
        $r = CkCompression_EndDecompressStringAsync($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function endDecompressStringENC()
    {
        return CkCompression_endDecompressStringENC($this->_cPtr);
    }

    public function EndDecompressStringENCAsync()
    {
        $r = CkCompression_EndDecompressStringENCAsync($this->_cPtr);
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
        return CkCompression_LoadTaskCaller($this->_cPtr, $task);
    }

    public function MoreCompressBytes($data, $outData)
    {
        return CkCompression_MoreCompressBytes($this->_cPtr, $data, $outData);
    }

    public function MoreCompressBytesAsync($data)
    {
        $r = CkCompression_MoreCompressBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function moreCompressBytesENC($data)
    {
        return CkCompression_moreCompressBytesENC($this->_cPtr, $data);
    }

    public function MoreCompressBytesENCAsync($data)
    {
        $r = CkCompression_MoreCompressBytesENCAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function MoreCompressString($str, $outData)
    {
        return CkCompression_MoreCompressString($this->_cPtr, $str, $outData);
    }

    public function MoreCompressStringAsync($str)
    {
        $r = CkCompression_MoreCompressStringAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function moreCompressStringENC($str)
    {
        return CkCompression_moreCompressStringENC($this->_cPtr, $str);
    }

    public function MoreCompressStringENCAsync($str)
    {
        $r = CkCompression_MoreCompressStringENCAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function MoreDecompressBytes($data, $outData)
    {
        return CkCompression_MoreDecompressBytes($this->_cPtr, $data, $outData);
    }

    public function MoreDecompressBytesAsync($data)
    {
        $r = CkCompression_MoreDecompressBytesAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function MoreDecompressBytesENC($str, $outData)
    {
        return CkCompression_MoreDecompressBytesENC($this->_cPtr, $str, $outData);
    }

    public function MoreDecompressBytesENCAsync($str)
    {
        $r = CkCompression_MoreDecompressBytesENCAsync($this->_cPtr, $str);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function moreDecompressString($data)
    {
        return CkCompression_moreDecompressString($this->_cPtr, $data);
    }

    public function MoreDecompressStringAsync($data)
    {
        $r = CkCompression_MoreDecompressStringAsync($this->_cPtr, $data);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkTask($r);
        }

        return $r;
    }

    public function moreDecompressStringENC($str)
    {
        return CkCompression_moreDecompressStringENC($this->_cPtr, $str);
    }

    public function MoreDecompressStringENCAsync($str)
    {
        $r = CkCompression_MoreDecompressStringENCAsync($this->_cPtr, $str);
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
        return CkCompression_SaveLastError($this->_cPtr, $path);
    }

    public function UnlockComponent($unlockCode)
    {
        return CkCompression_UnlockComponent($this->_cPtr, $unlockCode);
    }
}
