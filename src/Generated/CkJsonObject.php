<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkJsonObject
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkJsonObject') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkJsonObject();
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
        return CkJsonObject_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkJsonObject_put_Utf8($this->_cPtr, $b);
    }

    public function get_DebugLogFilePath($str)
    {
        CkJsonObject_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkJsonObject_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkJsonObject_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DelimiterChar($str)
    {
        CkJsonObject_get_DelimiterChar($this->_cPtr, $str);
    }

    public function delimiterChar()
    {
        return CkJsonObject_delimiterChar($this->_cPtr);
    }

    public function put_DelimiterChar($newVal)
    {
        CkJsonObject_put_DelimiterChar($this->_cPtr, $newVal);
    }

    public function get_EmitCompact()
    {
        return CkJsonObject_get_EmitCompact($this->_cPtr);
    }

    public function put_EmitCompact($newVal)
    {
        CkJsonObject_put_EmitCompact($this->_cPtr, $newVal);
    }

    public function get_EmitCrLf()
    {
        return CkJsonObject_get_EmitCrLf($this->_cPtr);
    }

    public function put_EmitCrLf($newVal)
    {
        CkJsonObject_put_EmitCrLf($this->_cPtr, $newVal);
    }

    public function get_I()
    {
        return CkJsonObject_get_I($this->_cPtr);
    }

    public function put_I($newVal)
    {
        CkJsonObject_put_I($this->_cPtr, $newVal);
    }

    public function get_J()
    {
        return CkJsonObject_get_J($this->_cPtr);
    }

    public function put_J($newVal)
    {
        CkJsonObject_put_J($this->_cPtr, $newVal);
    }

    public function get_K()
    {
        return CkJsonObject_get_K($this->_cPtr);
    }

    public function put_K($newVal)
    {
        CkJsonObject_put_K($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkJsonObject_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkJsonObject_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkJsonObject_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkJsonObject_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkJsonObject_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkJsonObject_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkJsonObject_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkJsonObject_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_LowerCaseNames()
    {
        return CkJsonObject_get_LowerCaseNames($this->_cPtr);
    }

    public function put_LowerCaseNames($newVal)
    {
        CkJsonObject_put_LowerCaseNames($this->_cPtr, $newVal);
    }

    public function get_PathPrefix($str)
    {
        CkJsonObject_get_PathPrefix($this->_cPtr, $str);
    }

    public function pathPrefix()
    {
        return CkJsonObject_pathPrefix($this->_cPtr);
    }

    public function put_PathPrefix($newVal)
    {
        CkJsonObject_put_PathPrefix($this->_cPtr, $newVal);
    }

    public function get_Size()
    {
        return CkJsonObject_get_Size($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkJsonObject_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkJsonObject_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkJsonObject_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkJsonObject_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkJsonObject_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkJsonObject_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkJsonObject_version($this->_cPtr);
    }

    public function AddArrayAt($index, $name)
    {
        return CkJsonObject_AddArrayAt($this->_cPtr, $index, $name);
    }

    public function AddArrayCopyAt($index, $name, $jarr)
    {
        return CkJsonObject_AddArrayCopyAt($this->_cPtr, $index, $name, $jarr);
    }

    public function AddBoolAt($index, $name, $value)
    {
        return CkJsonObject_AddBoolAt($this->_cPtr, $index, $name, $value);
    }

    public function AddIntAt($index, $name, $value)
    {
        return CkJsonObject_AddIntAt($this->_cPtr, $index, $name, $value);
    }

    public function AddNullAt($index, $name)
    {
        return CkJsonObject_AddNullAt($this->_cPtr, $index, $name);
    }

    public function AddNumberAt($index, $name, $numericStr)
    {
        return CkJsonObject_AddNumberAt($this->_cPtr, $index, $name, $numericStr);
    }

    public function AddObjectAt($index, $name)
    {
        return CkJsonObject_AddObjectAt($this->_cPtr, $index, $name);
    }

    public function AddObjectCopyAt($index, $name, $jsonObj)
    {
        return CkJsonObject_AddObjectCopyAt($this->_cPtr, $index, $name, $jsonObj);
    }

    public function AddStringAt($index, $name, $value)
    {
        return CkJsonObject_AddStringAt($this->_cPtr, $index, $name, $value);
    }

    public function AppendArray($name)
    {
        $r = CkJsonObject_AppendArray($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonArray($r);
        }

        return $r;
    }

    public function AppendArrayCopy($name, $jarr)
    {
        return CkJsonObject_AppendArrayCopy($this->_cPtr, $name, $jarr);
    }

    public function AppendBool($name, $value)
    {
        return CkJsonObject_AppendBool($this->_cPtr, $name, $value);
    }

    public function AppendInt($name, $value)
    {
        return CkJsonObject_AppendInt($this->_cPtr, $name, $value);
    }

    public function AppendObject($name)
    {
        $r = CkJsonObject_AppendObject($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function AppendObjectCopy($name, $jsonObj)
    {
        return CkJsonObject_AppendObjectCopy($this->_cPtr, $name, $jsonObj);
    }

    public function AppendString($name, $value)
    {
        return CkJsonObject_AppendString($this->_cPtr, $name, $value);
    }

    public function AppendStringArray($name, $values)
    {
        return CkJsonObject_AppendStringArray($this->_cPtr, $name, $values);
    }

    public function ArrayAt($index)
    {
        $r = CkJsonObject_ArrayAt($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonArray($r);
        }

        return $r;
    }

    public function ArrayOf($jsonPath)
    {
        $r = CkJsonObject_ArrayOf($this->_cPtr, $jsonPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonArray($r);
        }

        return $r;
    }

    public function BoolAt($index)
    {
        return CkJsonObject_BoolAt($this->_cPtr, $index);
    }

    public function BoolOf($jsonPath)
    {
        return CkJsonObject_BoolOf($this->_cPtr, $jsonPath);
    }

    public function BytesOf($jsonPath, $encoding, $bd)
    {
        return CkJsonObject_BytesOf($this->_cPtr, $jsonPath, $encoding, $bd);
    }

    public function Clear()
    {
        CkJsonObject_Clear($this->_cPtr);
    }

    public function c_Clone()
    {
        $r = CkJsonObject_c_Clone($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function DateOf($jsonPath, $dateTime)
    {
        return CkJsonObject_DateOf($this->_cPtr, $jsonPath, $dateTime);
    }

    public function Delete($name)
    {
        return CkJsonObject_Delete($this->_cPtr, $name);
    }

    public function DeleteAt($index)
    {
        return CkJsonObject_DeleteAt($this->_cPtr, $index);
    }

    public function DeleteRecords($arrayPath, $relpath, $value, $caseSensitive)
    {
        return CkJsonObject_DeleteRecords($this->_cPtr, $arrayPath, $relpath, $value, $caseSensitive);
    }

    public function DtOf($jsonPath, $bLocal, $dt)
    {
        return CkJsonObject_DtOf($this->_cPtr, $jsonPath, $bLocal, $dt);
    }

    public function emit()
    {
        return CkJsonObject_emit($this->_cPtr);
    }

    public function EmitBd($bd)
    {
        return CkJsonObject_EmitBd($this->_cPtr, $bd);
    }

    public function EmitSb($sb)
    {
        return CkJsonObject_EmitSb($this->_cPtr, $sb);
    }

    public function emitWithSubs($subs, $omitEmpty)
    {
        return CkJsonObject_emitWithSubs($this->_cPtr, $subs, $omitEmpty);
    }

    public function FindObjectWithMember($name)
    {
        $r = CkJsonObject_FindObjectWithMember($this->_cPtr, $name);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function FindRecord($arrayPath, $relPath, $value, $caseSensitive)
    {
        $r = CkJsonObject_FindRecord($this->_cPtr, $arrayPath, $relPath, $value, $caseSensitive);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function findRecordString($arrayPath, $relPath, $value, $caseSensitive, $retRelPath)
    {
        return CkJsonObject_findRecordString($this->_cPtr, $arrayPath, $relPath, $value, $caseSensitive, $retRelPath);
    }

    public function FirebaseApplyEvent($name, $data)
    {
        return CkJsonObject_FirebaseApplyEvent($this->_cPtr, $name, $data);
    }

    public function FirebasePatch($jsonPath, $jsonData)
    {
        return CkJsonObject_FirebasePatch($this->_cPtr, $jsonPath, $jsonData);
    }

    public function FirebasePut($jsonPath, $value)
    {
        return CkJsonObject_FirebasePut($this->_cPtr, $jsonPath, $value);
    }

    public function GetDocRoot()
    {
        $r = CkJsonObject_GetDocRoot($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function HasMember($jsonPath)
    {
        return CkJsonObject_HasMember($this->_cPtr, $jsonPath);
    }

    public function IndexOf($name)
    {
        return CkJsonObject_IndexOf($this->_cPtr, $name);
    }

    public function IntAt($index)
    {
        return CkJsonObject_IntAt($this->_cPtr, $index);
    }

    public function IntOf($jsonPath)
    {
        return CkJsonObject_IntOf($this->_cPtr, $jsonPath);
    }

    public function IsNullAt($index)
    {
        return CkJsonObject_IsNullAt($this->_cPtr, $index);
    }

    public function IsNullOf($jsonPath)
    {
        return CkJsonObject_IsNullOf($this->_cPtr, $jsonPath);
    }

    public function JsonTypeOf($jsonPath)
    {
        return CkJsonObject_JsonTypeOf($this->_cPtr, $jsonPath);
    }

    public function Load($json)
    {
        return CkJsonObject_Load($this->_cPtr, $json);
    }

    public function LoadBd($bd)
    {
        return CkJsonObject_LoadBd($this->_cPtr, $bd);
    }

    public function LoadFile($path)
    {
        return CkJsonObject_LoadFile($this->_cPtr, $path);
    }

    public function LoadPredefined($name)
    {
        return CkJsonObject_LoadPredefined($this->_cPtr, $name);
    }

    public function LoadSb($sb)
    {
        return CkJsonObject_LoadSb($this->_cPtr, $sb);
    }

    public function MoveMember($fromIndex, $toIndex)
    {
        return CkJsonObject_MoveMember($this->_cPtr, $fromIndex, $toIndex);
    }

    public function nameAt($index)
    {
        return CkJsonObject_nameAt($this->_cPtr, $index);
    }

    public function ObjectAt($index)
    {
        $r = CkJsonObject_ObjectAt($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function ObjectOf($jsonPath)
    {
        $r = CkJsonObject_ObjectOf($this->_cPtr, $jsonPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkJsonObject($r);
        }

        return $r;
    }

    public function Predefine($name)
    {
        return CkJsonObject_Predefine($this->_cPtr, $name);
    }

    public function Rename($oldName, $newName)
    {
        return CkJsonObject_Rename($this->_cPtr, $oldName, $newName);
    }

    public function RenameAt($index, $name)
    {
        return CkJsonObject_RenameAt($this->_cPtr, $index, $name);
    }

    public function SaveLastError($path)
    {
        return CkJsonObject_SaveLastError($this->_cPtr, $path);
    }

    public function SetBoolAt($index, $value)
    {
        return CkJsonObject_SetBoolAt($this->_cPtr, $index, $value);
    }

    public function SetBoolOf($jsonPath, $value)
    {
        return CkJsonObject_SetBoolOf($this->_cPtr, $jsonPath, $value);
    }

    public function SetIntAt($index, $value)
    {
        return CkJsonObject_SetIntAt($this->_cPtr, $index, $value);
    }

    public function SetIntOf($jsonPath, $value)
    {
        return CkJsonObject_SetIntOf($this->_cPtr, $jsonPath, $value);
    }

    public function SetNullAt($index)
    {
        return CkJsonObject_SetNullAt($this->_cPtr, $index);
    }

    public function SetNullOf($jsonPath)
    {
        return CkJsonObject_SetNullOf($this->_cPtr, $jsonPath);
    }

    public function SetNumberAt($index, $value)
    {
        return CkJsonObject_SetNumberAt($this->_cPtr, $index, $value);
    }

    public function SetNumberOf($jsonPath, $value)
    {
        return CkJsonObject_SetNumberOf($this->_cPtr, $jsonPath, $value);
    }

    public function SetStringAt($index, $value)
    {
        return CkJsonObject_SetStringAt($this->_cPtr, $index, $value);
    }

    public function SetStringOf($jsonPath, $value)
    {
        return CkJsonObject_SetStringOf($this->_cPtr, $jsonPath, $value);
    }

    public function SizeOfArray($jsonPath)
    {
        return CkJsonObject_SizeOfArray($this->_cPtr, $jsonPath);
    }

    public function stringAt($index)
    {
        return CkJsonObject_stringAt($this->_cPtr, $index);
    }

    public function stringOf($jsonPath)
    {
        return CkJsonObject_stringOf($this->_cPtr, $jsonPath);
    }

    public function StringOfSb($jsonPath, $sb)
    {
        return CkJsonObject_StringOfSb($this->_cPtr, $jsonPath, $sb);
    }

    public function Swap($index1, $index2)
    {
        return CkJsonObject_Swap($this->_cPtr, $index1, $index2);
    }

    public function TypeAt($index)
    {
        return CkJsonObject_TypeAt($this->_cPtr, $index);
    }

    public function UpdateBd($jsonPath, $encoding, $bd)
    {
        return CkJsonObject_UpdateBd($this->_cPtr, $jsonPath, $encoding, $bd);
    }

    public function UpdateBool($jsonPath, $value)
    {
        return CkJsonObject_UpdateBool($this->_cPtr, $jsonPath, $value);
    }

    public function UpdateInt($jsonPath, $value)
    {
        return CkJsonObject_UpdateInt($this->_cPtr, $jsonPath, $value);
    }

    public function UpdateNewArray($jsonPath)
    {
        return CkJsonObject_UpdateNewArray($this->_cPtr, $jsonPath);
    }

    public function UpdateNewObject($jsonPath)
    {
        return CkJsonObject_UpdateNewObject($this->_cPtr, $jsonPath);
    }

    public function UpdateNull($jsonPath)
    {
        return CkJsonObject_UpdateNull($this->_cPtr, $jsonPath);
    }

    public function UpdateNumber($jsonPath, $numericStr)
    {
        return CkJsonObject_UpdateNumber($this->_cPtr, $jsonPath, $numericStr);
    }

    public function UpdateSb($jsonPath, $sb)
    {
        return CkJsonObject_UpdateSb($this->_cPtr, $jsonPath, $sb);
    }

    public function UpdateString($jsonPath, $value)
    {
        return CkJsonObject_UpdateString($this->_cPtr, $jsonPath, $value);
    }

    public function WriteFile($path)
    {
        return CkJsonObject_WriteFile($this->_cPtr, $path);
    }
}
