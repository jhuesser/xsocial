<?php
require_once 'whois.main.php';

$urls = array(
    "https://twitter.com/ParkerMolloy/status/1683229371526438912",
    "https://www.businessinsider.com/spacex-paid-250000-to-a-flight-attendant-who-accused-elon-musk-of-sexual-misconduct-2022-5?amp",
    "https://fortune.com/2022/05/19/elon-musk-sexual-harassment-spacex-accusation/amp/",
    "https://youtu.be/LAU1l7iEpoU",
    "https://www.cbsnews.com/miami/news/elon-musks-trans-child-wants-nothing-to-do-with-dad-billionaire-leans-toward-support-of-desantis/",
    "https://www.businessinsider.com/elon-musk-earned-spot-at-museum-of-failure-reasons-2023-5?r=US&IR=T",
    "https://en.wikipedia.org/wiki/ElonJet",
    "https://edition.cnn.com/2023/03/29/media/elon-musk-twitter-promises-reliable-sources/index.html",
    "https://techcrunch.com/2023/06/14/twitter-is-being-evicted-from-its-boulder-office-over-unpaid-rent/#:~:text=Twitter%20owes%20three%20months%27%20rent,numerous%20reports%20of%20unpaid%20bills.",
    "https://www.theguardian.com/world/2023/jun/03/twitter-conservative-media-elon-musk-ron-desantis",
    "https://futurism.com/elon-musk-dad-emerald-mine"
);

$randomUrl = $urls[array_rand($urls)];

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $ipAddress = trim($ipAddresses[0]);
} else {
    $ipAddress = $_SERVER['REMOTE_ADDR'];
}
$whois = new Whois();
$result = $whois->Lookup($ipAddress);
$owner = $result['regrinfo']['owner']['organization'] ?? 'Unknown';


$rdnsName = gethostbyaddr($ipAddress);


$logEntry = "Selected URL: $randomUrl - IP Address: $ipAddress - Owner: $owner - rDNS Name: $rdnsName";

error_log($logEntry);
header("Location: $randomUrl");
exit();