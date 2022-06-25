<?php
$pathSqlite = __DIR__.'/sample-3.db';
$conn = new PDO("sqlite:".$pathSqlite);

echo "Connect";