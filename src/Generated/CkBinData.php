<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkBinData
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkBinData') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkBinData();
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
        return CkBinData_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkBinData_put_Utf8($this->_cPtr, $b);
    }

    public function get_LastMethodSuccess()
    {
        return CkBinData_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkBinData_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumBytes()
    {
        return CkBinData_get_NumBytes($this->_cPtr);
    }

    public function AppendBd($binData)
    {
        return CkBinData_AppendBd($this->_cPtr, $binData);
    }

    public function AppendBinary($data)
    {
        return CkBinData_AppendBinary($this->_cPtr, $data);
    }

    public function AppendBom($charset)
    {
        return CkBinData_AppendBom($this->_cPtr, $charset);
    }

    public function AppendByte($byteValue)
    {
        return CkBinData_AppendByte($this->_cPtr, $byteValue);
    }

    public function AppendCountedString($numCountBytes, $bigEndian, $str, $charset)
    {
        return CkBinData_AppendCountedString($this->_cPtr, $numCountBytes, $bigEndian, $str, $charset);
    }

    public function AppendEncoded($encData, $encoding)
    {
        return CkBinData_AppendEncoded($this->_cPtr, $encData, $encoding);
    }

    public function AppendEncodedSb($sb, $encoding)
    {
        return CkBinData_AppendEncodedSb($this->_cPtr, $sb, $encoding);
    }

    public function AppendInt2($value, $littleEndian)
    {
        return CkBinData_AppendInt2($this->_cPtr, $value, $littleEndian);
    }

    public function AppendInt4($value, $littleEndian)
    {
        return CkBinData_AppendInt4($this->_cPtr, $value, $littleEndian);
    }

    public function AppendPadded($str, $charset, $padWithSpace, $fieldLen)
    {
        return CkBinData_AppendPadded($this->_cPtr, $str, $charset, $padWithSpace, $fieldLen);
    }

    public function AppendSb($sb, $charset)
    {
        return CkBinData_AppendSb($this->_cPtr, $sb, $charset);
    }

    public function AppendString($str, $charset)
    {
        return CkBinData_AppendString($this->_cPtr, $str, $charset);
    }

    public function Clear()
    {
        return CkBinData_Clear($this->_cPtr);
    }

    public function ContentsEqual($binData)
    {
        return CkBinData_ContentsEqual($this->_cPtr, $binData);
    }

    public function FindString($str, $startIdx, $charset)
    {
        return CkBinData_FindString($this->_cPtr, $str, $startIdx, $charset);
    }

    public function GetBinary($outBytes)
    {
        return CkBinData_GetBinary($this->_cPtr, $outBytes);
    }

    public function GetBinaryChunk($offset, $numBytes, $outBytes)
    {
        return CkBinData_GetBinaryChunk($this->_cPtr, $offset, $numBytes, $outBytes);
    }

    public function GetByte($index)
    {
        return CkBinData_GetByte($this->_cPtr, $index);
    }

    public function GetBytesPtr()
    {
        return CkBinData_GetBytesPtr($this->_cPtr);
    }

    public function getEncoded($encoding)
    {
        return CkBinData_getEncoded($this->_cPtr, $encoding);
    }

    public function encoded($encoding)
    {
        return CkBinData_encoded($this->_cPtr, $encoding);
    }

    public function getEncodedChunk($offset, $numBytes, $encoding)
    {
        return CkBinData_getEncodedChunk($this->_cPtr, $offset, $numBytes, $encoding);
    }

    public function encodedChunk($offset, $numBytes, $encoding)
    {
        return CkBinData_encodedChunk($this->_cPtr, $offset, $numBytes, $encoding);
    }

    public function GetEncodedSb($encoding, $sb)
    {
        return CkBinData_GetEncodedSb($this->_cPtr, $encoding, $sb);
    }

    public function getHash($algorithm, $encoding)
    {
        return CkBinData_getHash($this->_cPtr, $algorithm, $encoding);
    }

    public function hash($algorithm, $encoding)
    {
        return CkBinData_hash($this->_cPtr, $algorithm, $encoding);
    }

    public function GetInt2($index, $littleEndian)
    {
        return CkBinData_GetInt2($this->_cPtr, $index, $littleEndian);
    }

    public function GetInt4($index, $littleEndian)
    {
        return CkBinData_GetInt4($this->_cPtr, $index, $littleEndian);
    }

    public function getString($charset)
    {
        return CkBinData_getString($this->_cPtr, $charset);
    }

    public function string($charset)
    {
        return CkBinData_string($this->_cPtr, $charset);
    }

    public function getTextChunk($startIdx, $numBytes, $charset)
    {
        return CkBinData_getTextChunk($this->_cPtr, $startIdx, $numBytes, $charset);
    }

    public function textChunk($startIdx, $numBytes, $charset)
    {
        return CkBinData_textChunk($this->_cPtr, $startIdx, $numBytes, $charset);
    }

    public function GetUInt2($index, $littleEndian)
    {
        return CkBinData_GetUInt2($this->_cPtr, $index, $littleEndian);
    }

    public function GetUInt4($index, $littleEndian)
    {
        return CkBinData_GetUInt4($this->_cPtr, $index, $littleEndian);
    }

    public function LoadBinary($data)
    {
        return CkBinData_LoadBinary($this->_cPtr, $data);
    }

    public function LoadEncoded($encData, $encoding)
    {
        return CkBinData_LoadEncoded($this->_cPtr, $encData, $encoding);
    }

    public function LoadFile($path)
    {
        return CkBinData_LoadFile($this->_cPtr, $path);
    }

    public function RemoveByteVal($value)
    {
        CkBinData_RemoveByteVal($this->_cPtr, $value);
    }

    public function RemoveChunk($offset, $numBytes)
    {
        return CkBinData_RemoveChunk($this->_cPtr, $offset, $numBytes);
    }

    public function SecureClear()
    {
        return CkBinData_SecureClear($this->_cPtr);
    }

    public function WriteAppendFile($path)
    {
        return CkBinData_WriteAppendFile($this->_cPtr, $path);
    }

    public function WriteFile($path)
    {
        return CkBinData_WriteFile($this->_cPtr, $path);
    }
}
