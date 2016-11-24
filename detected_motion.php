<!DOCTYPE HTML>
<html>
    <style type = "text/css">
	h2{text-align:center;}
	#content{text-align:center;
			 display: block;
			 margin-left: auto;
			 margin-right: auto;
		     }
	</style>
	<head>
		<title>
			Detected Motion
		</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
    	<body>
			<script src="jquery-2.1.4.js"></script>
			<script>
			
			</script>
			<div>
				<h2>Detected Motion</h2>
			</div>
			<div class = "container">
				<div class = "row">
					<div class="col-sm-12">

					<?php
						$connection = new MongoClient("mongodb://admin:admin@ds037175.mlab.com:37175/rpi_surveillance");
						$db = $connection->rpi_surveillance;
						$motions = $db->motions;

						$cursor = $motions->find();
						foreach ($cursor as $doc) {
							echo $doc['time'] . "<br>";
						}
						echo"<br>";
					?>					
						
					</textarea>
				</div>
			</div>
		</body>
</html>