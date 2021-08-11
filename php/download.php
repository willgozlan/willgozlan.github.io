<?php
// <!-- PHP Script To View/ Download A File -->
//Script adopted from WIKI https://classes.engineering.wustl.edu/cse330/index.php?title=PHP#Reading_a_File_Line-by-Line

$full_path = "../WilliamGozlan_Resume.pdf";

// Now we need to get the MIME type (e.g., image/jpeg).  PHP provides a neat little interface to do this called finfo.
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($full_path);

header("Location: index.html");

?>