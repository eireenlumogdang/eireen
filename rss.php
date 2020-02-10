<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://eireenjune.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $groupname = $data->getElementsByTagName("Groupname")->item(0)->nodeValue;
    $no_ofmembers = $data->getElementsByTagName("Noofmembers")->item(0)->nodeValue;
    $gender = $data->getElementsByTagName("Gender")->item(0)->nodeValue;
    $song = $data->getElementsByTagName("Song")->item(0)->nodeValue;

    echo "
    <ul>
    <li>Groupname: <strong>$groupname</strong></li>
    <li>Noofmembers: <strong>$no_ofmembers</strong></li>
    <li>Gender: <strong>$gender</strong></li>
    <li>Song: <strong>$song</strong></li>
    </ul>";
}