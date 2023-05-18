<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkCsv
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkCsv') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkCsv();
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
        return CkCsv_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkCsv_put_Utf8($this->_cPtr, $b);
    }

    public function get_AutoTrim()
    {
        return CkCsv_get_AutoTrim($this->_cPtr);
    }

    public function put_AutoTrim($newVal)
    {
        CkCsv_put_AutoTrim($this->_cPtr, $newVal);
    }

    public function get_Crlf()
    {
        return CkCsv_get_Crlf($this->_cPtr);
    }

    public function put_Crlf($newVal)
    {
        CkCsv_put_Crlf($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkCsv_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkCsv_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkCsv_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_Delimiter($str)
    {
        CkCsv_get_Delimiter($this->_cPtr, $str);
    }

    public function delimiter()
    {
        return CkCsv_delimiter($this->_cPtr);
    }

    public function put_Delimiter($newVal)
    {
        CkCsv_put_Delimiter($this->_cPtr, $newVal);
    }

    public function get_EnableQuotes()
    {
        return CkCsv_get_EnableQuotes($this->_cPtr);
    }

    public function put_EnableQuotes($newVal)
    {
        CkCsv_put_EnableQuotes($this->_cPtr, $newVal);
    }

    public function get_EscapeBackslash()
    {
        return CkCsv_get_EscapeBackslash($this->_cPtr);
    }

    public function put_EscapeBackslash($newVal)
    {
        CkCsv_put_EscapeBackslash($this->_cPtr, $newVal);
    }

    public function get_HasColumnNames()
    {
        return CkCsv_get_HasColumnNames($this->_cPtr);
    }

    public function put_HasColumnNames($newVal)
    {
        CkCsv_put_HasColumnNames($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkCsv_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkCsv_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkCsv_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkCsv_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkCsv_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkCsv_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkCsv_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkCsv_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumColumns()
    {
        return CkCsv_get_NumColumns($this->_cPtr);
    }

    public function get_NumRows()
    {
        return CkCsv_get_NumRows($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkCsv_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkCsv_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkCsv_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkCsv_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkCsv_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkCsv_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkCsv_version($this->_cPtr);
    }

    public function DeleteColumn($index)
    {
        return CkCsv_DeleteColumn($this->_cPtr, $index);
    }

    public function DeleteColumnByName($columnName)
    {
        return CkCsv_DeleteColumnByName($this->_cPtr, $columnName);
    }

    public function DeleteRow($index)
    {
        return CkCsv_DeleteRow($this->_cPtr, $index);
    }

    public function getCell($row, $col)
    {
        return CkCsv_getCell($this->_cPtr, $row, $col);
    }

    public function cell($row, $col)
    {
        return CkCsv_cell($this->_cPtr, $row, $col);
    }

    public function getCellByName($rowIndex, $columnName)
    {
        return CkCsv_getCellByName($this->_cPtr, $rowIndex, $columnName);
    }

    public function cellByName($rowIndex, $columnName)
    {
        return CkCsv_cellByName($this->_cPtr, $rowIndex, $columnName);
    }

    public function getColumnName($index)
    {
        return CkCsv_getColumnName($this->_cPtr, $index);
    }

    public function columnName($index)
    {
        return CkCsv_columnName($this->_cPtr, $index);
    }

    public function GetIndex($columnName)
    {
        return CkCsv_GetIndex($this->_cPtr, $columnName);
    }

    public function GetNumCols($row)
    {
        return CkCsv_GetNumCols($this->_cPtr, $row);
    }

    public function InsertColumn($index)
    {
        return CkCsv_InsertColumn($this->_cPtr, $index);
    }

    public function LoadFile($path)
    {
        return CkCsv_LoadFile($this->_cPtr, $path);
    }

    public function LoadFile2($filename, $charset)
    {
        return CkCsv_LoadFile2($this->_cPtr, $filename, $charset);
    }

    public function LoadFromString($csvData)
    {
        return CkCsv_LoadFromString($this->_cPtr, $csvData);
    }

    public function RowMatches($rowIndex, $matchPattern, $caseSensitive)
    {
        return CkCsv_RowMatches($this->_cPtr, $rowIndex, $matchPattern, $caseSensitive);
    }

    public function SaveFile($path)
    {
        return CkCsv_SaveFile($this->_cPtr, $path);
    }

    public function SaveFile2($filename, $charset)
    {
        return CkCsv_SaveFile2($this->_cPtr, $filename, $charset);
    }

    public function SaveLastError($path)
    {
        return CkCsv_SaveLastError($this->_cPtr, $path);
    }

    public function SaveToSb($sb)
    {
        return CkCsv_SaveToSb($this->_cPtr, $sb);
    }

    public function saveToString()
    {
        return CkCsv_saveToString($this->_cPtr);
    }

    public function SetCell($row, $col, $content)
    {
        return CkCsv_SetCell($this->_cPtr, $row, $col, $content);
    }

    public function SetCellByName($rowIndex, $columnName, $contentStr)
    {
        return CkCsv_SetCellByName($this->_cPtr, $rowIndex, $columnName, $contentStr);
    }

    public function SetColumnName($index, $columnName)
    {
        return CkCsv_SetColumnName($this->_cPtr, $index, $columnName);
    }

    public function SortByColumn($columnName, $ascending, $caseSensitive)
    {
        return CkCsv_SortByColumn($this->_cPtr, $columnName, $ascending, $caseSensitive);
    }

    public function SortByColumnIndex($index, $ascending, $caseSensitive)
    {
        return CkCsv_SortByColumnIndex($this->_cPtr, $index, $ascending, $caseSensitive);
    }
}
