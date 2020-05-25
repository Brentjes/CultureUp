<?php

$json = file_get_contents('GeoJSON/cases.json');

$data = json_decode($json);

echo '<p><strong>Country:</strong> ', $data->properties->name, '</p>';


?>

