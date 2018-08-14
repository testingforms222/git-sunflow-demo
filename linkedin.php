<?php
$linkedIn=new Happyr\LinkedIn\LinkedIn('81kqvbbgjolkat', 'JDHobfVvYDpXRQUa');
if (!$linkedIn->isAuthenticated()) {
    $url = $linkedIn->getLoginUrl();
    echo "<a href='$url'>Login with LinkedIn</a>";
    exit();
}
?>