<?php

require_once __DIR__ . '/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '4512.......1092',
  'app_secret' => 'ad345d5ff2......bf54aba4d6',
  'default_graph_version' => 'v2.10',
  ]);

for ($x = 1; $x <= 5; $x++) {
$data = [
  'message' => 'THIS IS A BOT TEST '.$x.' of 10000',
  'source' => $fb->fileToUpload("D:/...../frames/test frames/bot test/Frame (".$x.").jpg"),
];

sleep(120);

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->post('/me/photos', $data, 'EAAGabk6f39QBAGkab.................................2VQAoWYJdOofg602t....................ESz87PsmMm..............vwhtp4pasy9OFtA1TTizUFAaMO5xtZAi98w1cxrcPp8YMuCSD');
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
