<?php
use PHPUnit\Framework\TestCase;
Class NumberPrintTest extends TestCase {
	public function numberPrint($number) {
		switch ($number) {
		    case $number % 3 === 0 && $number % 5 === 0:
		        return "Linianos";
		    case $number % 3 === 0:
		        return "Linio";
		    case $number % 5 === 0:
		        return "IT";
		    default:
		        return $number;
		}
	}
	/**
     * @dataProvider numTotalPrint
     */
	public function testNumbers($i, $result) {
		$this->assertSame($result, $this->numberPrint($i));
	}
	public function numTotalPrint()
	{
		return [[7, 7],[15, "Linianos"], [5, "IT"], [3, "Linio"], [3, "Linios"]];
	}
}
?>