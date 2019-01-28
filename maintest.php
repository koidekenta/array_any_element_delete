<?php
require 'vendor/autoload.php';
include 'main.php';
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase{
	public function test_one(){
		$arr = [0,1,2,3,"str","key" => "value","key2" => [0,1]];

		$result = array_any_element_delete(0,$arr);
		$this->assertIsArray($result);
	}
}
?>
