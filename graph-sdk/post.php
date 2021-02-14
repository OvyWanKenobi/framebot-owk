<?php

require_once __DIR__ . '/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '451273532891092',
  'app_secret' => 'ad345d5ff2a5e1191e5c2fbf54aba4d6',
  'default_graph_version' => 'v2.10',
  ]);

for ($x = 1; $x <= 5; $x++) {
$data = [
  'message' => 'THIS IS A BOT TEST '.$x.' of 40414',
  'source' => $fb->fileToUpload("D:/Kabhi Khushi Kabhie Gham... (2001) [1080p] [BluRay] [5.1] [YTS.MX]/frames/test frames/bot test/Frame (".$x.").jpg"),
];

sleep(120);

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->post('/me/photos', $data, 'EAAGabk6f39QBAGkabbLyPyUBjezyo9qAoQoUNtxZB0fMrsj5UvrZC0Q7pb7XN9PD3Bo2UXoqozSMiFcWb5kbarQpmlOJr2VQAoWYJdOofg602t3f9lfkAcwIVk3kTh2Yfshkm57HOESz87PsmMmtn7GU7GdEyjEu5Hvwhtp4pasy9OFtA1TTizUFAaMO5xtZAi98w1cxrcPp8YMuCSD');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();

echo 'Photo ID: ' . $graphNode['id'];

}

 ?>
