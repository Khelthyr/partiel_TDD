<?php declare(strict_types=1);

/**
 * 
 */
class RomanNumber
{
	public static function decimalToRoman(int $num)
	{
		$romanValue = '';
		$romanListNumber = array(
		'M' => 1000,
		'CM' => 900,
		'D' => 500,
		'CD' => 400,
		'C' => 100,
		'XC' => 90,
		'L' => 50,
		'XL' => 40,
		'X' => 10,
		'IX' => 9,
		'V' => 5,
		'IV' => 4,
		'I' => 1);

		while ($num > 0) {
			foreach ($romanListNumber as $key => $value) {
				if ($num >= $value) {
					$num = $num - $value;
					$romanValue = $romanValue . $key;
					break;
				}	
			}
		}
		return $romanValue;
	}

	public static function romanToDecimal(string $romanNumber)
	{
		$numberValue = '';
		$romanListNumber = array(
		'M' => 1000,
		'CM' => 900,
		'D' => 500,
		'CD' => 400,
		'C' => 100,
		'XC' => 90,
		'L' => 50,
		'XL' => 40,
		'X' => 10,
		'IX' => 9,
		'V' => 5,
		'IV' => 4,
		'I' => 1);

		foreach ($romanListNumber as $key => $value) {

		}
		return $numberValue;
	}
}
