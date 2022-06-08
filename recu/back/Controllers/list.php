<?php
include_once "../Models/listModel.php";

$model = new listModel();
$properties = $model->getProperties();

$return = array(
    "properties" => $model->getProperties(),
    "selectedPropertyId" => "",
    "selectedProperty" => "",
    );

if (isset($_GET["propertyId"])) {
    $selectedProperty = $model->getProperty($_GET["propertyId"]);
    $return = array(
        "properties" => $model->getProperties(),
        "selectedPropertyId" => $_GET["propertyId"],
        "selectedProperty" => $selectedProperty,
       );
}

echo json_encode($return)

?>

