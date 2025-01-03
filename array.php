<?php
$students=["john","alice","bob","charlie","diana"];
echo"<h3>original array:</h3>";
echo"<pre>";
print_r($students);
echo"</pre>";
asort($students);
echo"<h3>array sorted in ascending order(asort):</h3>";
echo"<pre>";
print_r($students);
echo"</pre>";
arsort($students);
echo"<h3>array sorted in descending order(arsort):</h3>";
echo"<pre>";
print_r($students);
echo"</pre>";
?>
