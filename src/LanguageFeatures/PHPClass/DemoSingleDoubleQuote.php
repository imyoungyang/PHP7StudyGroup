<?php

echo 'single quote\n';
echo "double quote\n";

define('VERSION-DESC', 'Version 1.0');
define('VERSION_DESC', 'Version 1.0');

echo "=== define use hyphens ===\n";
echo VERSION-DESC, "\n";
echo "=== define with under score ===\n";
echo VERSION_DESC, "\n";
