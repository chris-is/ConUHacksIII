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
  $start = $request->getParam('start');

try{
  $query = "INSERT INTO `Elders` (`ID`,`name`,`product`,`dosage`,`dose`,`frequency`,`phone`,`start`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = $db->prepare($query);
  $stmt->execute([$id, $name, $product, $dosage, $dose, $frequency, $phone, $start]);
}
catch(Exception $e) {
  echo "Error";
}

?>