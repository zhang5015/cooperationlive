<?php
// test/unit/CooperationTest.php
//require_once dirname(__FILE__).'/../bootstrap/unit.php';
// 
//$t = new lime_test(6, new lime_output_color());
// 
//$t->is(Cooperation::slugify('Sensio'), 'sensio');
//$t->is(Cooperation::slugify('sensio labs'), 'sensio-labs');
//$t->is(Cooperation::slugify('sensio   labs'), 'sensio-labs');
//$t->is(Cooperation::slugify('paris,france'), 'paris-france');
//$t->is(Cooperation::slugify('  sensio'), 'sensio');
//$t->is(Cooperation::slugify('sensio  '), 'sensio');
//
//

require_once dirname(__FILE__).'/../bootstrap/unit.php';
 
$t = new lime_test(8, new lime_output_color());
$t->comment('::slugify()');
 if (function_exists('iconv'))
{
  $t->is(Cooperation::slugify('Développeur Web'), 'developpeur-web', '::slugify() removes accents');
}
else
{
  $t->skip('::slugify() removes accents - iconv not installed');
}
$t->is(Cooperation::slugify(' - '), 'n-a', '::slugify() converts a string that only contains non-ASCII characters to n-a');
$t->is(Cooperation::slugify(''), 'n-a', '::slugify() converts the empty string to n-a');
$t->is(Cooperation::slugify('Sensio'), 'sensio', '::slugify() converts all characters to lower case');
$t->is(Cooperation::slugify('sensio labs'), 'sensio-labs', '::slugify() replaces a white space by a -');
$t->is(Cooperation::slugify('sensio   labs'), 'sensio-labs', '::slugify() replaces several white spaces by a single -');
$t->is(Cooperation::slugify('  sensio'), 'sensio', '::slugify() removes - at the beginning of a string');
$t->is(Cooperation::slugify('sensio  '), 'sensio', '::slugify() removes - at the end of a string');
$t->is(Cooperation::slugify('paris,france'), 'paris-france', '::slugify() replaces non-ASCII characters by a -');