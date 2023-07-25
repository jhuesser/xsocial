<?php
$urls = array(
    "https://twitter.com/ParkerMolloy/status/1683229371526438912",
    "https://www.businessinsider.com/spacex-paid-250000-to-a-flight-attendant-who-accused-elon-musk-of-sexual-misconduct-2022-5?amp",
    "https://fortune.com/2022/05/19/elon-musk-sexual-harassment-spacex-accusation/amp/"
);
$randomUrl = $urls[array_rand($urls)];
header("Location: $randomUrl");
exit();