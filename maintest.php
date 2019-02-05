<?php
require 'vendor/autoload.php';
include 'main.php';
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase{
	public function test_one(){
		$arr = ["apple", "orange", "grape", "banana"];

		$result = array_any_element_delete("orange",$arr);
		$this->assertIsArray($result);
		$this->assertContains("apple",$result);
		$this->assertContains("orange",$result);
		$this->assertNotContains("orange",$result);
	}
}
?>
