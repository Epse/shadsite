<?php
// Determine if we are upstream
if ($_SERVER['SERVER_ADDR'] != "178.21.22.50") {
    define ("DEBUG", true);
} else {
    define ("DEBUG", false);
}

// Set up database stuff
if (DEBUG) {
    define ("DB_HOST", "178.21.22.50");
} else {
    define ("DB_HOST", "localhost");
}
define ("DB_USER", "shad_php");
define ("DB_PSWD", "Rq1vbDY6BD");
define ("DB_DEF_DB", "shad_backend");
?>