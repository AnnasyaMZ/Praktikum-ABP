<?php
$arrJurusan = [
    "Annasya Maulafidatu Zahra" => "Informatika",
    "Lisa" => "Informatika",
    "Nisrina" => "Desain Komunikasi Visual",
];
echo $arrJurusan["Annasya Maulafidatu Zahra"] . "<br>";  
echo $arrJurusan['Nisrina'] . "<br>"; 

$arrEmail = [];
$arrEmail["Annasya Maulafidatu Zahra"] = "nasya@example.com";
$arrEmail["Lisa"] = "lisa@example.com";
$arrEmail["Nisrina"] = "Nisrina@example.com";

echo $arrEmail["Annasya Maulafidatu Zahra"] . "<br>"; 
echo $arrEmail['Nisrina'] . "<br>"; 
?>