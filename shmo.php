<?php
class SHMO {
	var $words = array(
		's' => array(
			'spaghetti',
			'social',
			'severe',
			'search',
			'skeptical',
			'social',
			'semi-',
			'solid',
			'sober',
			'sovereign',
			'siberia',
			'summit of',
			'semi-annual',
			'strategic',
			'strategy for',
			'scuba',
			'subtractive',
			'struggle for',
			'so called',
			'sub human',
			'sequacious',
			'sequential',
			'stern',
			'seismic',
			'Sauron\'s',
			'serendipitous',
			'seinfeldian',
			'scorched',
			'seaborne',
			'salivary',
		),
		'h' => array(
			'human',
			'hybrid',
			'horrendous',
			'haircut',
			'handmade',
			'hemoglobin',
			'herbal',
			'hippometry',
			'hiring',
			'herbal',
			'hereditary',
			'holistic',
			'harmful',
			'hyperbolic',
			'Heidegger',
			'harakiri',
		),
		'm' => array(
			'moronic',
			'major',
			'mischievous',
			'macro',
			'micro',
			'magnetic',
			'melting',
			'marketing',
			'media',
			'mellow',
			'melodramatic',
			'membership-required',
			'mandibular',
			'maritime',
			'monotheistic',
			'monotonous',
			'miniscule',
			'marabou',
			'menarcheal',
			'mondial',
		),
		'o' => array(
			'optimization',
			'organization',
			'obstruction',
			'obligation',
			'ottoman',
			'obituary',
			'objectivity',
			'obliquity',
			'oxymoron',
			'oceanography',
			'ortolan',
			'ontogenesis',
			'oracle',
			'obedience',
		),
	);
	
	function generate($shuffle=false) {
		$abbr = array();
		foreach( $this->words as $letter ) {
			if ($shuffle) shuffle($letter);
			$abbr[] = $letter[0];
		}
		$abbr_str = implode(' ', $abbr);
		$abbr_str = str_replace('- ', '-', $abbr_str);
		$abbr_str = ucwords($abbr_str);
		return $abbr_str;
	}
}

if (class_exists('PHPUnit_Framework_TestCase')):
class SHMOTest extends PHPUnit_Framework_TestCase {

	function setUp() {
		$this->shmo = new SHMO;
	}
	
	function test_empty() {
		$this->shmo->words = array();
		$this->assertEquals('', $this->shmo->generate());
	}
	
	function test_one_letter_only() {
		$this->shmo->words = array('x' => array('baba'));
		$this->assertEquals('Baba', $this->shmo->generate());
	}
	
	function test_many_letters() {
		$this->shmo->words = array('a' => array('arrogant'),  'b' => array('baba'));
		$this->assertEquals('Arrogant Baba', $this->shmo->generate());
	}
	
	function test_dash() {
		$this->shmo->words = array('s' => array('semi-'),  'b' => array('baba'));
		$this->assertEquals('Semi-baba', $this->shmo->generate());
	}
}
endif;