<?php
	use FredBradley\Snowmode\Snowmode;
	
	class SnowmodeTest extends PHPUnit_Framework_TestCase {
		public function testNachHasCheese() {
			$nacho = new Snowmode;
			$this->assertTrue($nacho->hasCheese());
		}
	}