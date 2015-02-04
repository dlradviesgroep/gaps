<?php

namespace alsvanzelf\gaps;

class gaps {

/**
 * an `array_splice` which does preverse the keys of the replacement array
 * 
 * the argument list is identical to `array_splice`
 * 
 * @param  array &$input
 * @param  int    $offset
 * @param  int    $length
 * @param  array  $replacement
 * @return array
 */
public static function array_splice_preserve_keys(&$input, $offset, $length=null, $replacement=array()) {
	if (empty($replacement)) {
		return array_splice($input, $offset, $length);
	}
	
	$part_before  = array_slice($input, 0, $offset, $preserve_keys=true);
	$part_removed = array_slice($input, $offset, $length, $preserve_keys=true);
	$part_after   = array_slice($input, $offset+$length, null, $preserve_keys=true);
	
	$input = $part_before + $replacement + $part_after;
	
	return $part_removed;
}

}
