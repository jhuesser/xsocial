<?php
$urls = array(
    "https://twitter.com/ParkerMolloy/status/1683229371526438912",
    "https://www.businessinsider.com/spacex-paid-250000-to-a-flight-attendant-who-accused-elon-musk-of-sexual-misconduct-2022-5?amp",
    "https://fortune.com/2022/05/19/elon-musk-sexual-harassment-spacex-accusation/amp/",
    "https://youtu.be/LAU1l7iEpoU",
    "https://www.cbsnews.com/miami/news/elon-musks-trans-child-wants-nothing-to-do-with-dad-billionaire-leans-toward-support-of-desantis/",
    "https://www.businessinsider.com/elon-musk-earned-spot-at-museum-of-failure-reasons-2023-5?r=US&IR=T"
);
$randomUrl = $urls[array_rand($urls)];
header("Location: $randomUrl");
exit();