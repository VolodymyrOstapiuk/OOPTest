
<?php
error_reporting(5);         //6 possible warnings
/*
 * <?xml version="1.0"?>    // not error
 * < xml version="1.0"?>    // many errors&warnings *
 */
require "XMLtoJSON.php" ;
$class_json=new XMLToJSON();
if (isset($_POST["xml"])){
$class_json->_construct($_POST["xml"]);}
$json=$class_json->toJSON();
?><meta charset="utf-8">
<form action="" method="post">
    <label for="xml">Введіть XML</label>
    <textarea name="xml" id="xml" rows="10" cols="40"><?php echo $_POST["xml"]?></textarea>
    <label for="json">JSON</label>
    <textarea name="json" id="json" rows="10" cols="40"><?php echo $json?></textarea><br>
    <input type="submit">
</form>