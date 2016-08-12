<?php

class SampleTest extends WP_UnitTestCase {

	function testSample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function testWpMethod() {
		$this->assertNotNull( wp_parse_url('http://www.trajano.net/') );
	}

}

