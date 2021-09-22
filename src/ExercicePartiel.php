<?php declare(strict_types=1);

/**
 * 
 */
class RomanNumber
{
	public static function decimalToRoman($num)
	{
		$romanValue = '';
		$romanListNumber = array('I' => 1, 'II' => 2 );
		if ($num > 0 && <= 3000) {
			foreach ($romanListNumber as $key => $value) {
				// code...
			}
		}
		return $romanValue;
	}
}
