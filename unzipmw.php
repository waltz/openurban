<?php
$zip = new ZipArchive;
if ($zip->open("mediawiki-1.19.2.zip") === TRUE) {
$zip->extractTo("mediawiki_dev/");
$zip->close();
echo 'OK';
} else {
echo 'failed';
}
?>