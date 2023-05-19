<?php

namespace HonlapBirodalom\Chilkat\Generated;

class CkString
{
    public $_cPtr = null;

    protected $_pData = [];

    public function __construct($res = null)
    {
        if (is_resource($res) && get_resource_type($res) === '_p_CkString') {
            $this->_cPtr = $res;

            return;
        }
        $this->_cPtr = new_CkString();
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
        return CkString_get_Utf8($this->_cPtr);
    }

    public function put_Utf8($b)
    {
        CkString_put_Utf8($this->_cPtr, $b);
    }

    public function loadFile($fileName, $charset)
    {
        return CkString_loadFile($this->_cPtr, $fileName, $charset);
    }

    public function charAt($idx)
    {
        return CkString_charAt($this->_cPtr, $idx);
    }

    public function intValue()
    {
        return CkString_intValue($this->_cPtr);
    }

    public function doubleValue()
    {
        return CkString_doubleValue($this->_cPtr);
    }

    public function c_clone()
    {
        $r = CkString_c_clone($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkString($r);
        }

        return $r;
    }

    public function countCharOccurances($ch)
    {
        return CkString_countCharOccurances($this->_cPtr, $ch);
    }

    public function appendCurrentDateRfc822()
    {
        CkString_appendCurrentDateRfc822($this->_cPtr);
    }

    public function removeDelimited($beginDelim, $endDelim, $caseSensitive)
    {
        CkString_removeDelimited($this->_cPtr, $beginDelim, $endDelim, $caseSensitive);
    }

    public function setStr($s)
    {
        CkString_setStr($this->_cPtr, $s);
    }

    public function endsWith($s)
    {
        return CkString_endsWith($this->_cPtr, $s);
    }

    public function endsWithStr($s)
    {
        return CkString_endsWithStr($this->_cPtr, $s);
    }

    public function beginsWithStr($s)
    {
        return CkString_beginsWithStr($this->_cPtr, $s);
    }

    public function indexOf($s)
    {
        return CkString_indexOf($this->_cPtr, $s);
    }

    public function indexOfStr($s)
    {
        return CkString_indexOfStr($this->_cPtr, $s);
    }

    public function replaceAll($str, $replacement)
    {
        return CkString_replaceAll($this->_cPtr, $str, $replacement);
    }

    public function replaceFirst($str, $replacement)
    {
        return CkString_replaceFirst($this->_cPtr, $str, $replacement);
    }

    public function substring($startCharIdx, $numChars)
    {
        $r = CkString_substring($this->_cPtr, $startCharIdx, $numChars);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkString($r);
        }

        return $r;
    }

    public function matchesStr($str)
    {
        return CkString_matchesStr($this->_cPtr, $str);
    }

    public function matches($s)
    {
        return CkString_matches($this->_cPtr, $s);
    }

    public function getChar($idx)
    {
        $r = CkString_getChar($this->_cPtr, $idx);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkString($r);
        }

        return $r;
    }

    public function removeAll($str)
    {
        return CkString_removeAll($this->_cPtr, $str);
    }

    public function removeFirst($str)
    {
        return CkString_removeFirst($this->_cPtr, $str);
    }

    public function chopAtStr($str)
    {
        CkString_chopAtStr($this->_cPtr, $str);
    }

    public function urlDecode($charset)
    {
        CkString_urlDecode($this->_cPtr, $charset);
    }

    public function urlEncode($charset)
    {
        CkString_urlEncode($this->_cPtr, $charset);
    }

    public function base64Decode($charset)
    {
        CkString_base64Decode($this->_cPtr, $charset);
    }

    public function base64Encode($charset)
    {
        CkString_base64Encode($this->_cPtr, $charset);
    }

    public function qpDecode($charset)
    {
        CkString_qpDecode($this->_cPtr, $charset);
    }

    public function qpEncode($charset)
    {
        CkString_qpEncode($this->_cPtr, $charset);
    }

    public function hexDecode($charset)
    {
        CkString_hexDecode($this->_cPtr, $charset);
    }

    public function hexEncode($charset)
    {
        CkString_hexEncode($this->_cPtr, $charset);
    }

    public function entityDecode()
    {
        CkString_entityDecode($this->_cPtr);
    }

    public function entityEncode()
    {
        CkString_entityEncode($this->_cPtr);
    }

    public function appendUtf8($s)
    {
        CkString_appendUtf8($this->_cPtr, $s);
    }

    public function appendAnsi($s)
    {
        CkString_appendAnsi($this->_cPtr, $s);
    }

    public function clear()
    {
        CkString_clear($this->_cPtr);
    }

    public function prepend($s)
    {
        CkString_prepend($this->_cPtr, $s);
    }

    public function appendInt($n)
    {
        CkString_appendInt($this->_cPtr, $n);
    }

    public function append($s)
    {
        CkString_append($this->_cPtr, $s);
    }

    public function appendChar($c_)
    {
        CkString_appendChar($this->_cPtr, $c_);
    }

    public function appendN($s, $numBytes)
    {
        CkString_appendN($this->_cPtr, $s, $numBytes);
    }

    public function appendStr($str)
    {
        CkString_appendStr($this->_cPtr, $str);
    }

    public function appendEnc($s, $encoding)
    {
        CkString_appendEnc($this->_cPtr, $s, $encoding);
    }

    public function getEnc($encoding)
    {
        return CkString_getEnc($this->_cPtr, $encoding);
    }

    public function setString($s)
    {
        CkString_setString($this->_cPtr, $s);
    }

    public function setStringAnsi($s)
    {
        CkString_setStringAnsi($this->_cPtr, $s);
    }

    public function setStringUtf8($s)
    {
        CkString_setStringUtf8($this->_cPtr, $s);
    }

    public function getAnsi()
    {
        return CkString_getAnsi($this->_cPtr);
    }

    public function getUtf8()
    {
        return CkString_getUtf8($this->_cPtr);
    }

    public function compareStr($str)
    {
        return CkString_compareStr($this->_cPtr, $str);
    }

    public function getString()
    {
        return CkString_getString($this->_cPtr);
    }

    public function getSizeUtf8()
    {
        return CkString_getSizeUtf8($this->_cPtr);
    }

    public function getSizeAnsi()
    {
        return CkString_getSizeAnsi($this->_cPtr);
    }

    public function getNumChars()
    {
        return CkString_getNumChars($this->_cPtr);
    }

    public function trim()
    {
        CkString_trim($this->_cPtr);
    }

    public function trim2()
    {
        CkString_trim2($this->_cPtr);
    }

    public function trimInsideSpaces()
    {
        CkString_trimInsideSpaces($this->_cPtr);
    }

    public function replaceAllOccurances($pattern, $replacement)
    {
        return CkString_replaceAllOccurances($this->_cPtr, $pattern, $replacement);
    }

    public function replaceFirstOccurance($pattern, $replacement)
    {
        return CkString_replaceFirstOccurance($this->_cPtr, $pattern, $replacement);
    }

    public function toCRLF()
    {
        CkString_toCRLF($this->_cPtr);
    }

    public function toLF()
    {
        CkString_toLF($this->_cPtr);
    }

    public function eliminateChar($ansiChar, $startIndex)
    {
        CkString_eliminateChar($this->_cPtr, $ansiChar, $startIndex);
    }

    public function lastChar()
    {
        return CkString_lastChar($this->_cPtr);
    }

    public function shorten($n)
    {
        CkString_shorten($this->_cPtr, $n);
    }

    public function toLowerCase()
    {
        CkString_toLowerCase($this->_cPtr);
    }

    public function toUpperCase()
    {
        CkString_toUpperCase($this->_cPtr);
    }

    public function encodeXMLSpecial()
    {
        CkString_encodeXMLSpecial($this->_cPtr);
    }

    public function decodeXMLSpecial()
    {
        CkString_decodeXMLSpecial($this->_cPtr);
    }

    public function containsSubstring($pattern)
    {
        return CkString_containsSubstring($this->_cPtr, $pattern);
    }

    public function containsSubstringNoCase($pattern)
    {
        return CkString_containsSubstringNoCase($this->_cPtr, $pattern);
    }

    public function equals($s)
    {
        return CkString_equals($this->_cPtr, $s);
    }

    public function equalsStr($s)
    {
        return CkString_equalsStr($this->_cPtr, $s);
    }

    public function equalsIgnoreCase($s)
    {
        return CkString_equalsIgnoreCase($this->_cPtr, $s);
    }

    public function equalsIgnoreCaseStr($s)
    {
        return CkString_equalsIgnoreCaseStr($this->_cPtr, $s);
    }

    public function removeChunk($charStartPos, $numChars)
    {
        CkString_removeChunk($this->_cPtr, $charStartPos, $numChars);
    }

    public function removeCharOccurances($c_)
    {
        CkString_removeCharOccurances($this->_cPtr, $c_);
    }

    public function replaceChar($c1, $c2)
    {
        CkString_replaceChar($this->_cPtr, $c1, $c2);
    }

    public function chopAtFirstChar($c1)
    {
        CkString_chopAtFirstChar($this->_cPtr, $c1);
    }

    public function saveToFile($filename, $charset)
    {
        return CkString_saveToFile($this->_cPtr, $filename, $charset);
    }

    public function split($splitChar, $exceptDoubleQuoted, $exceptEscaped, $keepEmpty)
    {
        $r = CkString_split($this->_cPtr, $splitChar, $exceptDoubleQuoted, $exceptEscaped, $keepEmpty);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function split2($splitCharSet, $exceptDoubleQuoted, $exceptEscaped, $keepEmpty)
    {
        $r = CkString_split2($this->_cPtr, $splitCharSet, $exceptDoubleQuoted, $exceptEscaped, $keepEmpty);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function tokenize($punctuation)
    {
        $r = CkString_tokenize($this->_cPtr, $punctuation);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function splitAtWS()
    {
        $r = CkString_splitAtWS($this->_cPtr);
        if (is_resource($r)) {
            $c = substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
            if (class_exists($c)) {
                return new $c($r);
            }

            return new CkStringArray($r);
        }

        return $r;
    }

    public function beginsWith($sSubstr)
    {
        return CkString_beginsWith($this->_cPtr, $sSubstr);
    }
}
