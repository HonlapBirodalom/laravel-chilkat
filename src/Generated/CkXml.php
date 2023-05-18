<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkXml
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkXml') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkXml();
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
        return CkXml_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkXml_put_Utf8($this->_cPtr, $b);
    }

    public function get_Cdata()
    {
        return CkXml_get_Cdata($this->_cPtr);
    }

    public function put_Cdata($newVal)
    {
        CkXml_put_Cdata($this->_cPtr, $newVal);
    }

    public function get_Content($str)
    {
        CkXml_get_Content($this->_cPtr, $str);
    }

    public function content()
    {
        return CkXml_content($this->_cPtr);
    }

    public function put_Content($newVal)
    {
        CkXml_put_Content($this->_cPtr, $newVal);
    }

    public function get_ContentInt()
    {
        return CkXml_get_ContentInt($this->_cPtr);
    }

    public function put_ContentInt($newVal)
    {
        CkXml_put_ContentInt($this->_cPtr, $newVal);
    }

    public function get_DebugLogFilePath($str)
    {
        CkXml_get_DebugLogFilePath($this->_cPtr, $str);
    }

    public function debugLogFilePath()
    {
        return CkXml_debugLogFilePath($this->_cPtr);
    }

    public function put_DebugLogFilePath($newVal)
    {
        CkXml_put_DebugLogFilePath($this->_cPtr, $newVal);
    }

    public function get_DocType($str)
    {
        CkXml_get_DocType($this->_cPtr, $str);
    }

    public function docType()
    {
        return CkXml_docType($this->_cPtr);
    }

    public function put_DocType($newVal)
    {
        CkXml_put_DocType($this->_cPtr, $newVal);
    }

    public function get_EmitBom()
    {
        return CkXml_get_EmitBom($this->_cPtr);
    }

    public function put_EmitBom($newVal)
    {
        CkXml_put_EmitBom($this->_cPtr, $newVal);
    }

    public function get_EmitCompact()
    {
        return CkXml_get_EmitCompact($this->_cPtr);
    }

    public function put_EmitCompact($newVal)
    {
        CkXml_put_EmitCompact($this->_cPtr, $newVal);
    }

    public function get_EmitXmlDecl()
    {
        return CkXml_get_EmitXmlDecl($this->_cPtr);
    }

    public function put_EmitXmlDecl($newVal)
    {
        CkXml_put_EmitXmlDecl($this->_cPtr, $newVal);
    }

    public function get_Encoding($str)
    {
        CkXml_get_Encoding($this->_cPtr, $str);
    }

    public function encoding()
    {
        return CkXml_encoding($this->_cPtr);
    }

    public function put_Encoding($newVal)
    {
        CkXml_put_Encoding($this->_cPtr, $newVal);
    }

    public function get_I()
    {
        return CkXml_get_I($this->_cPtr);
    }

    public function put_I($newVal)
    {
        CkXml_put_I($this->_cPtr, $newVal);
    }

    public function get_IsBase64()
    {
        return CkXml_get_IsBase64($this->_cPtr);
    }

    public function get_J()
    {
        return CkXml_get_J($this->_cPtr);
    }

    public function put_J($newVal)
    {
        CkXml_put_J($this->_cPtr, $newVal);
    }

    public function get_K()
    {
        return CkXml_get_K($this->_cPtr);
    }

    public function put_K($newVal)
    {
        CkXml_put_K($this->_cPtr, $newVal);
    }

    public function get_LastErrorHtml($str)
    {
        CkXml_get_LastErrorHtml($this->_cPtr, $str);
    }

    public function lastErrorHtml()
    {
        return CkXml_lastErrorHtml($this->_cPtr);
    }

    public function get_LastErrorText($str)
    {
        CkXml_get_LastErrorText($this->_cPtr, $str);
    }

    public function lastErrorText()
    {
        return CkXml_lastErrorText($this->_cPtr);
    }

    public function get_LastErrorXml($str)
    {
        CkXml_get_LastErrorXml($this->_cPtr, $str);
    }

    public function lastErrorXml()
    {
        return CkXml_lastErrorXml($this->_cPtr);
    }

    public function get_LastMethodSuccess()
    {
        return CkXml_get_LastMethodSuccess($this->_cPtr);
    }

    public function put_LastMethodSuccess($newVal)
    {
        CkXml_put_LastMethodSuccess($this->_cPtr, $newVal);
    }

    public function get_NumAttributes()
    {
        return CkXml_get_NumAttributes($this->_cPtr);
    }

    public function get_NumChildren()
    {
        return CkXml_get_NumChildren($this->_cPtr);
    }

    public function get_SortCaseInsensitive()
    {
        return CkXml_get_SortCaseInsensitive($this->_cPtr);
    }

    public function put_SortCaseInsensitive($newVal)
    {
        CkXml_put_SortCaseInsensitive($this->_cPtr, $newVal);
    }

    public function get_Standalone()
    {
        return CkXml_get_Standalone($this->_cPtr);
    }

    public function put_Standalone($newVal)
    {
        CkXml_put_Standalone($this->_cPtr, $newVal);
    }

    public function get_Tag($str)
    {
        CkXml_get_Tag($this->_cPtr, $str);
    }

    public function tag()
    {
        return CkXml_tag($this->_cPtr);
    }

    public function put_Tag($newVal)
    {
        CkXml_put_Tag($this->_cPtr, $newVal);
    }

    public function get_TagNsPrefix($str)
    {
        CkXml_get_TagNsPrefix($this->_cPtr, $str);
    }

    public function tagNsPrefix()
    {
        return CkXml_tagNsPrefix($this->_cPtr);
    }

    public function put_TagNsPrefix($newVal)
    {
        CkXml_put_TagNsPrefix($this->_cPtr, $newVal);
    }

    public function get_TagPath($str)
    {
        CkXml_get_TagPath($this->_cPtr, $str);
    }

    public function tagPath()
    {
        return CkXml_tagPath($this->_cPtr);
    }

    public function get_TagUnprefixed($str)
    {
        CkXml_get_TagUnprefixed($this->_cPtr, $str);
    }

    public function tagUnprefixed()
    {
        return CkXml_tagUnprefixed($this->_cPtr);
    }

    public function put_TagUnprefixed($newVal)
    {
        CkXml_put_TagUnprefixed($this->_cPtr, $newVal);
    }

    public function get_TreeId()
    {
        return CkXml_get_TreeId($this->_cPtr);
    }

    public function get_UncommonOptions($str)
    {
        CkXml_get_UncommonOptions($this->_cPtr, $str);
    }

    public function uncommonOptions()
    {
        return CkXml_uncommonOptions($this->_cPtr);
    }

    public function put_UncommonOptions($newVal)
    {
        CkXml_put_UncommonOptions($this->_cPtr, $newVal);
    }

    public function get_VerboseLogging()
    {
        return CkXml_get_VerboseLogging($this->_cPtr);
    }

    public function put_VerboseLogging($newVal)
    {
        CkXml_put_VerboseLogging($this->_cPtr, $newVal);
    }

    public function get_Version($str)
    {
        CkXml_get_Version($this->_cPtr, $str);
    }

    public function version()
    {
        return CkXml_version($this->_cPtr);
    }

    public function accumulateTagContent($tag, $skipTags)
    {
        return CkXml_accumulateTagContent($this->_cPtr, $tag, $skipTags);
    }

    public function AddAttribute($name, $value)
    {
        return CkXml_AddAttribute($this->_cPtr, $name, $value);
    }

    public function AddAttributeInt($name, $value)
    {
        return CkXml_AddAttributeInt($this->_cPtr, $name, $value);
    }

    public function AddChildTree($tree)
    {
        return CkXml_AddChildTree($this->_cPtr, $tree);
    }

    public function AddOrUpdateAttribute($name, $value)
    {
        CkXml_AddOrUpdateAttribute($this->_cPtr, $name, $value);
    }

    public function AddOrUpdateAttributeI($name, $value)
    {
        CkXml_AddOrUpdateAttributeI($this->_cPtr, $name, $value);
    }

    public function AddStyleSheet($styleSheet)
    {
        CkXml_AddStyleSheet($this->_cPtr, $styleSheet);
    }

    public function AddToAttribute($name, $amount)
    {
        CkXml_AddToAttribute($this->_cPtr, $name, $amount);
    }

    public function AddToChildContent($tag, $amount)
    {
        CkXml_AddToChildContent($this->_cPtr, $tag, $amount);
    }

    public function AddToContent($amount)
    {
        CkXml_AddToContent($this->_cPtr, $amount);
    }

    public function AppendToContent($str)
    {
        return CkXml_AppendToContent($this->_cPtr, $str);
    }

    public function BEncodeContent($charset, $inData)
    {
        return CkXml_BEncodeContent($this->_cPtr, $charset, $inData);
    }

    public function ChildContentMatches($tagPath, $pattern, $caseSensitive)
    {
        return CkXml_ChildContentMatches($this->_cPtr, $tagPath, $pattern, $caseSensitive);
    }

    public function chilkatPath($pathCmd)
    {
        return CkXml_chilkatPath($this->_cPtr, $pathCmd);
    }

    public function Clear()
    {
        CkXml_Clear($this->_cPtr);
    }

    public function ContentMatches($pattern, $caseSensitive)
    {
        return CkXml_ContentMatches($this->_cPtr, $pattern, $caseSensitive);
    }

    public function Copy($node)
    {
        CkXml_Copy($this->_cPtr, $node);
    }

    public function CopyRef($copyFromNode)
    {
        CkXml_CopyRef($this->_cPtr, $copyFromNode);
    }

    public function DecodeContent($outData)
    {
        return CkXml_DecodeContent($this->_cPtr, $outData);
    }

    public function decodeEntities($str)
    {
        return CkXml_decodeEntities($this->_cPtr, $str);
    }

    public function DecryptContent($password)
    {
        return CkXml_DecryptContent($this->_cPtr, $password);
    }

    public function EncryptContent($password)
    {
        return CkXml_EncryptContent($this->_cPtr, $password);
    }

    public function ExtractChildByIndex($index)
    {
        $r = CkXml_ExtractChildByIndex($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function ExtractChildByName($tagPath, $attrName, $attrValue)
    {
        $r = CkXml_ExtractChildByName($this->_cPtr, $tagPath, $attrName, $attrValue);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function FindChild($tagPath)
    {
        $r = CkXml_FindChild($this->_cPtr, $tagPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function FindChild2($tagPath)
    {
        return CkXml_FindChild2($this->_cPtr, $tagPath);
    }

    public function FindNextRecord($tagPath, $contentPattern)
    {
        $r = CkXml_FindNextRecord($this->_cPtr, $tagPath, $contentPattern);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function FindOrAddNewChild($tagPath)
    {
        $r = CkXml_FindOrAddNewChild($this->_cPtr, $tagPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function FirstChild()
    {
        $r = CkXml_FirstChild($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function FirstChild2()
    {
        return CkXml_FirstChild2($this->_cPtr);
    }

    public function getAttributeName($index)
    {
        return CkXml_getAttributeName($this->_cPtr, $index);
    }

    public function attributeName($index)
    {
        return CkXml_attributeName($this->_cPtr, $index);
    }

    public function getAttributeValue($index)
    {
        return CkXml_getAttributeValue($this->_cPtr, $index);
    }

    public function attributeValue($index)
    {
        return CkXml_attributeValue($this->_cPtr, $index);
    }

    public function GetAttributeValueInt($index)
    {
        return CkXml_GetAttributeValueInt($this->_cPtr, $index);
    }

    public function getAttrValue($name)
    {
        return CkXml_getAttrValue($this->_cPtr, $name);
    }

    public function attrValue($name)
    {
        return CkXml_attrValue($this->_cPtr, $name);
    }

    public function GetAttrValueInt($name)
    {
        return CkXml_GetAttrValueInt($this->_cPtr, $name);
    }

    public function GetBinaryContent($unzipFlag, $decryptFlag, $password, $outData)
    {
        return CkXml_GetBinaryContent($this->_cPtr, $unzipFlag, $decryptFlag, $password, $outData);
    }

    public function GetChild($index)
    {
        $r = CkXml_GetChild($this->_cPtr, $index);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetChild2($index)
    {
        return CkXml_GetChild2($this->_cPtr, $index);
    }

    public function getChildAttrValue($tagPath, $attrName)
    {
        return CkXml_getChildAttrValue($this->_cPtr, $tagPath, $attrName);
    }

    public function childAttrValue($tagPath, $attrName)
    {
        return CkXml_childAttrValue($this->_cPtr, $tagPath, $attrName);
    }

    public function GetChildBoolValue($tagPath)
    {
        return CkXml_GetChildBoolValue($this->_cPtr, $tagPath);
    }

    public function getChildContent($tagPath)
    {
        return CkXml_getChildContent($this->_cPtr, $tagPath);
    }

    public function childContent($tagPath)
    {
        return CkXml_childContent($this->_cPtr, $tagPath);
    }

    public function getChildContentByIndex($index)
    {
        return CkXml_getChildContentByIndex($this->_cPtr, $index);
    }

    public function childContentByIndex($index)
    {
        return CkXml_childContentByIndex($this->_cPtr, $index);
    }

    public function GetChildContentSb($tagPath, $sb)
    {
        return CkXml_GetChildContentSb($this->_cPtr, $tagPath, $sb);
    }

    public function GetChildExact($tag, $content)
    {
        $r = CkXml_GetChildExact($this->_cPtr, $tag, $content);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetChildIntValue($tagPath)
    {
        return CkXml_GetChildIntValue($this->_cPtr, $tagPath);
    }

    public function getChildTag($index)
    {
        return CkXml_getChildTag($this->_cPtr, $index);
    }

    public function childTag($index)
    {
        return CkXml_childTag($this->_cPtr, $index);
    }

    public function getChildTagByIndex($index)
    {
        return CkXml_getChildTagByIndex($this->_cPtr, $index);
    }

    public function childTagByIndex($index)
    {
        return CkXml_childTagByIndex($this->_cPtr, $index);
    }

    public function GetChildWithAttr($tagPath, $attrName, $attrValue)
    {
        $r = CkXml_GetChildWithAttr($this->_cPtr, $tagPath, $attrName, $attrValue);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetChildWithContent($content)
    {
        $r = CkXml_GetChildWithContent($this->_cPtr, $content);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetChildWithTag($tagPath)
    {
        $r = CkXml_GetChildWithTag($this->_cPtr, $tagPath);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetNthChildWithTag($tag, $n)
    {
        $r = CkXml_GetNthChildWithTag($this->_cPtr, $tag, $n);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetNthChildWithTag2($tag, $n)
    {
        return CkXml_GetNthChildWithTag2($this->_cPtr, $tag, $n);
    }

    public function GetParent()
    {
        $r = CkXml_GetParent($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetParent2()
    {
        return CkXml_GetParent2($this->_cPtr);
    }

    public function GetRoot()
    {
        $r = CkXml_GetRoot($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function GetRoot2()
    {
        CkXml_GetRoot2($this->_cPtr);
    }

    public function GetSelf()
    {
        $r = CkXml_GetSelf($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function getXml()
    {
        return CkXml_getXml($this->_cPtr);
    }

    public function xml()
    {
        return CkXml_xml($this->_cPtr);
    }

    public function GetXmlBd($bd)
    {
        return CkXml_GetXmlBd($this->_cPtr, $bd);
    }

    public function GetXmlSb($sb)
    {
        return CkXml_GetXmlSb($this->_cPtr, $sb);
    }

    public function HasAttribute($name)
    {
        return CkXml_HasAttribute($this->_cPtr, $name);
    }

    public function HasAttrWithValue($name, $value)
    {
        return CkXml_HasAttrWithValue($this->_cPtr, $name, $value);
    }

    public function HasChildWithContent($content)
    {
        return CkXml_HasChildWithContent($this->_cPtr, $content);
    }

    public function HasChildWithTag($tagPath)
    {
        return CkXml_HasChildWithTag($this->_cPtr, $tagPath);
    }

    public function HasChildWithTagAndContent($tagPath, $content)
    {
        return CkXml_HasChildWithTagAndContent($this->_cPtr, $tagPath, $content);
    }

    public function InsertChildTreeAfter($index, $tree)
    {
        CkXml_InsertChildTreeAfter($this->_cPtr, $index, $tree);
    }

    public function InsertChildTreeBefore($index, $tree)
    {
        CkXml_InsertChildTreeBefore($this->_cPtr, $index, $tree);
    }

    public function LastChild()
    {
        $r = CkXml_LastChild($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function LastChild2()
    {
        return CkXml_LastChild2($this->_cPtr);
    }

    public function LoadBd($bd, $autoTrim)
    {
        return CkXml_LoadBd($this->_cPtr, $bd, $autoTrim);
    }

    public function LoadSb($sb, $autoTrim)
    {
        return CkXml_LoadSb($this->_cPtr, $sb, $autoTrim);
    }

    public function LoadXml($xmlData)
    {
        return CkXml_LoadXml($this->_cPtr, $xmlData);
    }

    public function LoadXml2($xmlData, $autoTrim)
    {
        return CkXml_LoadXml2($this->_cPtr, $xmlData, $autoTrim);
    }

    public function LoadXmlFile($fileName)
    {
        return CkXml_LoadXmlFile($this->_cPtr, $fileName);
    }

    public function LoadXmlFile2($fileName, $autoTrim)
    {
        return CkXml_LoadXmlFile2($this->_cPtr, $fileName, $autoTrim);
    }

    public function NewChild($tagPath, $content)
    {
        $r = CkXml_NewChild($this->_cPtr, $tagPath, $content);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function NewChild2($tagPath, $content)
    {
        CkXml_NewChild2($this->_cPtr, $tagPath, $content);
    }

    public function NewChildAfter($index, $tag, $content)
    {
        $r = CkXml_NewChildAfter($this->_cPtr, $index, $tag, $content);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function NewChildBefore($index, $tag, $content)
    {
        $r = CkXml_NewChildBefore($this->_cPtr, $index, $tag, $content);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function NewChildInt2($tagPath, $value)
    {
        CkXml_NewChildInt2($this->_cPtr, $tagPath, $value);
    }

    public function NextInTraversal2($sbState)
    {
        return CkXml_NextInTraversal2($this->_cPtr, $sbState);
    }

    public function NextSibling()
    {
        $r = CkXml_NextSibling($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function NextSibling2()
    {
        return CkXml_NextSibling2($this->_cPtr);
    }

    public function NumChildrenAt($tagPath)
    {
        return CkXml_NumChildrenAt($this->_cPtr, $tagPath);
    }

    public function NumChildrenHavingTag($tag)
    {
        return CkXml_NumChildrenHavingTag($this->_cPtr, $tag);
    }

    public function PreviousSibling()
    {
        $r = CkXml_PreviousSibling($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function PreviousSibling2()
    {
        return CkXml_PreviousSibling2($this->_cPtr);
    }

    public function PruneAttribute($attrName)
    {
        return CkXml_PruneAttribute($this->_cPtr, $attrName);
    }

    public function PruneTag($tag)
    {
        return CkXml_PruneTag($this->_cPtr, $tag);
    }

    public function QEncodeContent($charset, $inData)
    {
        return CkXml_QEncodeContent($this->_cPtr, $charset, $inData);
    }

    public function RemoveAllAttributes()
    {
        return CkXml_RemoveAllAttributes($this->_cPtr);
    }

    public function RemoveAllChildren()
    {
        CkXml_RemoveAllChildren($this->_cPtr);
    }

    public function RemoveAttribute($name)
    {
        return CkXml_RemoveAttribute($this->_cPtr, $name);
    }

    public function RemoveChild($tagPath)
    {
        CkXml_RemoveChild($this->_cPtr, $tagPath);
    }

    public function RemoveChildByIndex($index)
    {
        CkXml_RemoveChildByIndex($this->_cPtr, $index);
    }

    public function RemoveChildWithContent($content)
    {
        CkXml_RemoveChildWithContent($this->_cPtr, $content);
    }

    public function RemoveFromTree()
    {
        CkXml_RemoveFromTree($this->_cPtr);
    }

    public function RemoveStyleSheet($attrName, $attrValue)
    {
        return CkXml_RemoveStyleSheet($this->_cPtr, $attrName, $attrValue);
    }

    public function SaveBinaryContent($filename, $unzipFlag, $decryptFlag, $password)
    {
        return CkXml_SaveBinaryContent($this->_cPtr, $filename, $unzipFlag, $decryptFlag, $password);
    }

    public function SaveLastError($path)
    {
        return CkXml_SaveLastError($this->_cPtr, $path);
    }

    public function SaveXml($fileName)
    {
        return CkXml_SaveXml($this->_cPtr, $fileName);
    }

    public function Scrub($directives)
    {
        CkXml_Scrub($this->_cPtr, $directives);
    }

    public function SearchAllForContent($afterPtr, $contentPattern)
    {
        $r = CkXml_SearchAllForContent($this->_cPtr, $afterPtr, $contentPattern);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function SearchAllForContent2($afterPtr, $contentPattern)
    {
        return CkXml_SearchAllForContent2($this->_cPtr, $afterPtr, $contentPattern);
    }

    public function SearchForAttribute($afterPtr, $tag, $attr, $valuePattern)
    {
        $r = CkXml_SearchForAttribute($this->_cPtr, $afterPtr, $tag, $attr, $valuePattern);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function SearchForAttribute2($afterPtr, $tag, $attr, $valuePattern)
    {
        return CkXml_SearchForAttribute2($this->_cPtr, $afterPtr, $tag, $attr, $valuePattern);
    }

    public function SearchForContent($afterPtr, $tag, $contentPattern)
    {
        $r = CkXml_SearchForContent($this->_cPtr, $afterPtr, $tag, $contentPattern);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function SearchForContent2($afterPtr, $tag, $contentPattern)
    {
        return CkXml_SearchForContent2($this->_cPtr, $afterPtr, $tag, $contentPattern);
    }

    public function SearchForTag($afterPtr, $tag)
    {
        $r = CkXml_SearchForTag($this->_cPtr, $afterPtr, $tag);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkXml($r);
        }

        return $r;
    }

    public function SearchForTag2($afterPtr, $tag)
    {
        return CkXml_SearchForTag2($this->_cPtr, $afterPtr, $tag);
    }

    public function SetBinaryContent($inData, $zipFlag, $encryptFlag, $password)
    {
        return CkXml_SetBinaryContent($this->_cPtr, $inData, $zipFlag, $encryptFlag, $password);
    }

    public function SetBinaryContentFromFile($filename, $zipFlag, $encryptFlag, $password)
    {
        return CkXml_SetBinaryContentFromFile($this->_cPtr, $filename, $zipFlag, $encryptFlag, $password);
    }

    public function SortByAttribute($attrName, $ascending)
    {
        CkXml_SortByAttribute($this->_cPtr, $attrName, $ascending);
    }

    public function SortByAttributeInt($attrName, $ascending)
    {
        CkXml_SortByAttributeInt($this->_cPtr, $attrName, $ascending);
    }

    public function SortByContent($ascending)
    {
        CkXml_SortByContent($this->_cPtr, $ascending);
    }

    public function SortByTag($ascending)
    {
        CkXml_SortByTag($this->_cPtr, $ascending);
    }

    public function SortRecordsByAttribute($sortTag, $attrName, $ascending)
    {
        CkXml_SortRecordsByAttribute($this->_cPtr, $sortTag, $attrName, $ascending);
    }

    public function SortRecordsByContent($sortTag, $ascending)
    {
        CkXml_SortRecordsByContent($this->_cPtr, $sortTag, $ascending);
    }

    public function SortRecordsByContentInt($sortTag, $ascending)
    {
        CkXml_SortRecordsByContentInt($this->_cPtr, $sortTag, $ascending);
    }

    public function SwapNode($node)
    {
        return CkXml_SwapNode($this->_cPtr, $node);
    }

    public function SwapTree($tree)
    {
        return CkXml_SwapTree($this->_cPtr, $tree);
    }

    public function tagContent($tagName)
    {
        return CkXml_tagContent($this->_cPtr, $tagName);
    }

    public function TagEquals($tag)
    {
        return CkXml_TagEquals($this->_cPtr, $tag);
    }

    public function TagIndex($tagPath)
    {
        return CkXml_TagIndex($this->_cPtr, $tagPath);
    }

    public function TagNsEquals($ns)
    {
        return CkXml_TagNsEquals($this->_cPtr, $ns);
    }

    public function TagUnpEquals($unprefixedTag)
    {
        return CkXml_TagUnpEquals($this->_cPtr, $unprefixedTag);
    }

    public function UnzipContent()
    {
        return CkXml_UnzipContent($this->_cPtr);
    }

    public function UnzipTree()
    {
        return CkXml_UnzipTree($this->_cPtr);
    }

    public function UpdateAt($tagPath, $autoCreate, $value)
    {
        return CkXml_UpdateAt($this->_cPtr, $tagPath, $autoCreate, $value);
    }

    public function UpdateAttrAt($tagPath, $autoCreate, $attrName, $attrValue)
    {
        return CkXml_UpdateAttrAt($this->_cPtr, $tagPath, $autoCreate, $attrName, $attrValue);
    }

    public function UpdateAttribute($attrName, $attrValue)
    {
        return CkXml_UpdateAttribute($this->_cPtr, $attrName, $attrValue);
    }

    public function UpdateAttributeInt($attrName, $value)
    {
        return CkXml_UpdateAttributeInt($this->_cPtr, $attrName, $value);
    }

    public function UpdateChildContent($tagPath, $value)
    {
        CkXml_UpdateChildContent($this->_cPtr, $tagPath, $value);
    }

    public function UpdateChildContentInt($tagPath, $value)
    {
        CkXml_UpdateChildContentInt($this->_cPtr, $tagPath, $value);
    }

    public function ZipContent()
    {
        return CkXml_ZipContent($this->_cPtr);
    }

    public function ZipTree()
    {
        return CkXml_ZipTree($this->_cPtr);
    }
}
