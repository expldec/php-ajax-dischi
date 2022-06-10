<?php
include __DIR__ . "/database.php";
header("Content-Type: application/json");
$selected_genre = $_GET["genre"];
if (empty($selected_genre)) {
    $db_json = json_encode($database);
    echo $db_json;
}
// VERSIONE CON FOREACH
// else {
//     $filtered_db = [];
//     foreach ($database as $item) {
//         if ( strtolower($item["genre"]) == $selected_genre) {
//             $filtered_db[] = $item;
//         }
//     }
//     $db_json = json_encode($filtered_db);
//     echo $db_json;
// }

// VERSIONE CON ARRAY_FILTER
else {
    // qui ho imparato a usare use() per portare una variabile globale nello scope della funzione.
    $filtered_db = array_filter($database, function($item) use ($selected_genre) {
        return(strtolower($item["genre"]) == $selected_genre);
    } );
    $db_json = json_encode($filtered_db);
    echo $db_json;
}

?>