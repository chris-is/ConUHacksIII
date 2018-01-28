<?php 
  require 'database.php';
  $db = getDB();
  $id = $request->getParam('id');
  $name = $request->getParam('name');
  $product = $request->getParam('product');
  $dosage = $request->getParam('dosage');
  $dose = $request->getParam('dose');
  $frequency = $request->getParam('frequency');
  $phone = $request->getParam('phone');

try{
  $query = "INSERT INTO `Elders` (`ID`,`name`,`product`,`dosage`,`dose`,`frequency`,`phone`) VALUES (?, ?, ?, ?, ?, ?, ?)";
  $stmt = $db->prepare($query);
  $stmt->execute([$id, $name, $product, $dosage, $dose, $frequency, $phone]);
}
catch(Exception $e) {
  echo "Error";
}

?>