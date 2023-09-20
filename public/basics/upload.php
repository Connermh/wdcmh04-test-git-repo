<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];

$target_dir = "/basics-uploads/";
$target_basename = basename($_FILES['fileToUpload']['name']);
$target_file = $document_root . $target_dir . $target_basename;

move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);

$link = $target_dir . htmlspecialchars($target_basename);

echo "<p>Your file has been uploaded to: ";
echo "<a href=\"$link\"><tt>$link</tt></a></p>\n";