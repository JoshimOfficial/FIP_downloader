<?php
header("Content-type:application/json");
$url = 'https://snapinsta.io/api/ajaxSearch/instagram';
$data = array(
    'q' => 'https://www.instagram.com/reel/CnuSW4_Juch/?utm_source=ig_web_copy_link',
    'vt' => 'facebook'
);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, ' Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36');

$response = curl_exec($ch);

curl_close($ch);

print_r(json_decode($response))

?>
