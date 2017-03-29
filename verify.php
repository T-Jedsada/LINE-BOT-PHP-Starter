<?php
$access_token = '9bZKkxvQL8Mp5AZdztBF1fUx5tFgZKHvpOVieLN7+MCDaK5ivTZmYqPUwOog8jXb5Qi2B71icAb0DSw5TBx3NqtCJfYMttVfYKL4atrbNsYjVLsAgOdm/yBUl4PkXTUjAHY5GzgVeNR/Y1kQhwnS8gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;