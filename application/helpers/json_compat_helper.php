<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('json_encode')) {
	function json_encode($value, $options = 0, $depth = 512)
	{
		return codex_json_encode_value($value, 0, (int) $depth);
	}
}

if (!function_exists('codex_json_encode_value')) {
	function codex_json_encode_value($value, $level = 0, $depth = 512)
	{
		if ($level > $depth) {
			return 'null';
		}

		if (is_null($value)) {
			return 'null';
		}

		if (is_bool($value)) {
			return $value ? 'true' : 'false';
		}

		if (is_int($value) || is_float($value)) {
			return (string) $value;
		}

		if (is_string($value)) {
			return '"' . codex_json_escape_string($value) . '"';
		}

		if (is_array($value)) {
			$isAssoc = codex_json_is_assoc($value);
			$pieces = [];

			foreach ($value as $k => $v) {
				if ($isAssoc) {
					$pieces[] = '"' . codex_json_escape_string((string) $k) . '":' . codex_json_encode_value($v, $level + 1, $depth);
				} else {
					$pieces[] = codex_json_encode_value($v, $level + 1, $depth);
				}
			}

			return $isAssoc ? '{' . implode(',', $pieces) . '}' : '[' . implode(',', $pieces) . ']';
		}

		if (is_object($value)) {
			return codex_json_encode_value(get_object_vars($value), $level + 1, $depth);
		}

		return 'null';
	}
}

if (!function_exists('codex_json_escape_string')) {
	function codex_json_escape_string($string)
	{
		$replacements = [
			'\\' => '\\\\',
			'"' => '\"',
			"\n" => '\n',
			"\r" => '\r',
			"\t" => '\t',
			"\f" => '\f',
			"\b" => '\b',
		];

		return strtr($string, $replacements);
	}
}

if (!function_exists('codex_json_is_assoc')) {
	function codex_json_is_assoc(array $array)
	{
		if ([] === $array) {
			return false;
		}

		return array_keys($array) !== range(0, count($array) - 1);
	}
}

/* End of file json_compat_helper.php */
