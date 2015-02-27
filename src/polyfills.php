<?php

namespace alsvanzelf\gaps;

class polyfills {

if (version_compare(PHP_VERSION, '5.5.0') < 0) {

/**
 * allows empty() checks on expressions vs only on variables
 * by passing an expression to this method, it becomes a variable automatically
 * 
 * @param  mixed $var the return value of an expression
 * @return boolean    whether or not the expression is considered empty
 */
public static function empty_expression($var) {
	return empty($var);
}

}

}
