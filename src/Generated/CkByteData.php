<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkByteData
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkByteData') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkByteData();
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
        return CkByteData_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkByteData_put_Utf8($this->_cPtr, $b);
    }

    public function to_s()
    {
        return CkByteData_to_s($this->_cPtr);
    }

    public function appendRandom($numBytes)
    {
        CkByteData_appendRandom($this->_cPtr, $numBytes);
    }

    public function appendInt($v, $littleEndian)
    {
        CkByteData_appendInt($this->_cPtr, $v, $littleEndian);
    }

    public function appendShort($v, $littleEndian)
    {
        CkByteData_appendShort($this->_cPtr, $v, $littleEndian);
    }

    public function getEncodedRange($encoding, $index, $numBytes)
    {
        return CkByteData_getEncodedRange($this->_cPtr, $encoding, $index, $numBytes);
    }

    public function appendRange($byteData, $index, $numBytes)
    {
        CkByteData_appendRange($this->_cPtr, $byteData, $index, $numBytes);
    }

    public function ensureBuffer($numBytes)
    {
        CkByteData_ensureBuffer($this->_cPtr, $numBytes);
    }

    public function findBytes2($byteData, $byteDataLen)
    {
        return CkByteData_findBytes2($this->_cPtr, $byteData, $byteDataLen);
    }

    public function findBytes($byteData)
    {
        return CkByteData_findBytes($this->_cPtr, $byteData);
    }

    public function beginsWith2($byteData, $byteDataLen)
    {
        return CkByteData_beginsWith2($this->_cPtr, $byteData, $byteDataLen);
    }

    public function beginsWith($byteData)
    {
        return CkByteData_beginsWith($this->_cPtr, $byteData);
    }

    public function removeChunk($index, $numBytes)
    {
        CkByteData_removeChunk($this->_cPtr, $index, $numBytes);
    }

    public function byteSwap4321()
    {
        CkByteData_byteSwap4321($this->_cPtr);
    }

    public function pad($blockSize, $paddingScheme)
    {
        CkByteData_pad($this->_cPtr, $blockSize, $paddingScheme);
    }

    public function unpad($blockSize, $paddingScheme)
    {
        CkByteData_unpad($this->_cPtr, $blockSize, $paddingScheme);
    }

    public function is7bit()
    {
        return CkByteData_is7bit($this->_cPtr);
    }

    public function clear()
    {
        CkByteData_clear($this->_cPtr);
    }

    public function getSize()
    {
        return CkByteData_getSize($this->_cPtr);
    }

    public function appendEncoded($str, $encoding)
    {
        CkByteData_appendEncoded($this->_cPtr, $str, $encoding);
    }

    public function encode($encoding, $str)
    {
        CkByteData_encode($this->_cPtr, $encoding, $str);
    }

    public function getData()
    {
        return CkByteData_getData($this->_cPtr);
    }

    public function getBytes()
    {
        return CkByteData_getBytes($this->_cPtr);
    }

    public function getEncoded($encoding)
    {
        return CkByteData_getEncoded($this->_cPtr, $encoding);
    }

    public function getRange($index, $numBytes)
    {
        return CkByteData_getRange($this->_cPtr, $index, $numBytes);
    }

    public function getRangeStr($index, $numAnsiChars)
    {
        return CkByteData_getRangeStr($this->_cPtr, $index, $numAnsiChars);
    }

    public function append2($data, $numBytes)
    {
        CkByteData_append2($this->_cPtr, $data, $numBytes);
    }

    public function equals2($data, $numBytes)
    {
        return CkByteData_equals2($this->_cPtr, $data, $numBytes);
    }

    public function equals($db)
    {
        return CkByteData_equals($this->_cPtr, $db);
    }

    public function appendStr($str)
    {
        CkByteData_appendStr($this->_cPtr, $str);
    }

    public function appendChar($ch)
    {
        CkByteData_appendChar($this->_cPtr, $ch);
    }

    public function getByte($byteIndex)
    {
        return CkByteData_getByte($this->_cPtr, $byteIndex);
    }

    public function getChar($byteIndex)
    {
        return CkByteData_getChar($this->_cPtr, $byteIndex);
    }

    public function getUInt($byteIndex)
    {
        return CkByteData_getUInt($this->_cPtr, $byteIndex);
    }

    public function getInt($byteIndex)
    {
        return CkByteData_getInt($this->_cPtr, $byteIndex);
    }

    public function getUShort($byteIndex)
    {
        return CkByteData_getUShort($this->_cPtr, $byteIndex);
    }

    public function getShort($byteIndex)
    {
        return CkByteData_getShort($this->_cPtr, $byteIndex);
    }

    public function loadFile($filename)
    {
        return CkByteData_loadFile($this->_cPtr, $filename);
    }

    public function saveFile($filename)
    {
        return CkByteData_saveFile($this->_cPtr, $filename);
    }

    public function appendFile($filename)
    {
        return CkByteData_appendFile($this->_cPtr, $filename);
    }

    public function shorten($numBytes)
    {
        CkByteData_shorten($this->_cPtr, $numBytes);
    }
}
