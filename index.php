<?php
echo "<h1>Hallo Admin. Ich w�nsche Dir einen sch�nen Donnerstag<h1>";
echo "Greetings: ";
echo getenv("GREETINGS");
echo "<br>";

echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
