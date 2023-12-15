<?

class Solution {

/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {

    $str = $strs[0];
    $strArr = str_split($str);

    $result = "";
    if(count($strs) == 1) $result = $str;
    foreach($strArr as $index => $char) {

        for($i = 1; $i < count($strs); $i++) {
            if($char != str_split($strs[$i])[$index]) {
                break 2;
            }
            if($i == count($strs)-1) $result .= $char;
        }

    }

    return $result;

}
}
