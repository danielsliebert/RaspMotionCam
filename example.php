<?php
	$connection = new MongoClient("mongodb://admin:admin@ds037175.mlab.com:37175/rpi_surveillance");
	$db = $connection->rpi_surveillance;
	$collection = $db->Collection;

	$newData = array('num' => 131, 'val' => 57, 'time' => '8pm');
	$collection->insert($newData);

	$cursor = $collection->find();
	echo "First loop: <br>";
	foreach ($cursor as $doc) {
		echo $doc['num'] . "<br>";
	}
	echo"<br>";

	$cursor = $collection->find(array('num' => 131));
	echo "Second loop: <br>";
	foreach ($cursor as $doc) {
		echo $doc['num'] . "<br>";
	}
?>
