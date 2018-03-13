<?php
/*
 * PHP base62
 */
class base62
{
  	// Base62 Encode
	public function encode($d)
	{
		$l = strlen($d);
		for ($i = 0; $i < $l; $i += 8) 
		{
			$c = substr($d, $i, 8);
			$o[] = str_pad(gmp_strval(gmp_init(ltrim(bin2hex($c), '0'), 16), 62), ceil((strlen($c) * 8)/6), '0', STR_PAD_LEFT);
	 	}
	 	return implode($o);
  	}
  	// Base62 Decode
  	public function decode($d)
  	{
		$l = strlen($d);
		for ($i = 0; $i < $l; $i += 11) 
    		{
			$c = substr($d, $i, 11);
			$o[] = pack('H*', str_pad(gmp_strval(gmp_init(ltrim($c, '0'), 62), 16), floor((strlen($c) * 6)/8) * 2, '0', STR_PAD_LEFT));
		}
		return implode($o);
	}
}
