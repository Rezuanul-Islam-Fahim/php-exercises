<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

$hint = "";
$query = $_REQUEST["q"];

if (!empty($query)) {
    $query = strtolower($query);
    $len = strlen($query);

    foreach ($a as $name) {
        if (stristr($query, substr($name, 0, $len))) {
            if (empty($hint)) {
                $hint = $name;
            } else {
                $hint .= ", " . $name;
            }
        }
    }
}

echo !empty($hint) ? "<b>" . $hint . "</b>" : "<i>No suggestions found</i>";
?>