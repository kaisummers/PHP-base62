# PHP-base62
The PHP-base62 class encodes and decodes strings into base62.

# Example Usage
// Include class file containing PHP-base62

include("classes.php");


// Create new base62 class object

$base62 = new base62(); 


// Base62 Encode

$str = "Hello world.";

$enc = $base62->encode($str);


// Base62 Decode

$dec = $base62->decode($enc);


// Example Output

echo $enc." decoded is ".$dec;

# Example Output
6DMW88LpTwt25utGY decoded is Hello world.

# Prerequisites
GMP Math
