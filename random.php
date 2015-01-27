<!DOCTYPE html>
<html>
  <head>
    <title>Eddy Random</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/signin.css" rel="stylesheet">
	<link href="css/bootstrap-glyphicons.css" rel="stylesheet">
	<style>
	.the-icons {
  padding: 40px 10px;
  font-size: 20px;
  line-height: 2;
  color: #333;
  text-align: center;
}
.the-icons .glyphicon {
  padding-left: 15px;
  padding-right: 15px;
}
.visible-lg{
    color: rgb(70, 136, 71);
    background-color: rgb(223, 240, 216);
    border: 1px solid rgb(214, 233, 198);
}

.footer {
	position:absolute; 
	bottom:5px;
	right:10px;
}
	</style>
  </head>

  
<?php
if (!$_POST["names"]) {
	echo "<p>Keine Namen angegeben!</p>";
	exit;
}
?>


  <body>

    <div class="container">

    <?php
	$names = explode(", ", $_POST["names"]);
	$rand = array_fill(0, count($names), 0);
	echo "<h2>Debug:</h2>";
	print_r($names);
	echo "<br>Countarray: " . count($names) . "<br><br>";
	$counts = mt_rand(1000, 9999);
	for ($i = 0; $i < $counts; $i++) {
		$rand[mt_rand(0, count($names) - 1)]++;
	}
	print_r($rand);
	echo " - $counts passes";
	$max = array_keys($rand, max($rand));
	echo "<br>Max: " . $max[0] . " - " . max($rand);
	echo "<br><br><hr /><br><br>";
	echo "<h1>Der Gewinner ist:</h1>";
	echo "<h3>" . $names[$max[0]] . "</h3>";
	?>

    </div> <!--  data-toggle="modal" data-target="#myModal"  -->

	<script>
	$("a[href^='#']").live('click',function(event){
          $('#myModal').modal('show')
    });
		$(function (){ 
			$('#popover').popover('show');
		});
	</script>
	
	  <!-- Modal -->
  <div class="modal fade" id="Info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Website Info</center></h4>
        </div>
        <div class="modal-body">
		<span class="glyphicon glyphicon-chevron-right"></span> This Website is created by<br><br>
		<address>
		<p><strong>Eduard Nikoleisen</strong></p>
		<p>Nürnbergerstraße 14</p>
		<p>93155 Hemau</p>
		<p><img src="http://www.php-kurs.com/email-in-grafik-umwandeln.php?email=webmaster@dereddy.de" alt="webmaster[AT]dereddy[DOT]de" /></p>
		</address><br><br><br>
		Made with:<br><ul>
		<li>Bootstrap 3.0 RC1</li>
		<li>jQuery >=2.0.3</li>
		<li>Glyphicons (Bootstrap) 1.0</li>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->	
	
    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
    <script src="js/respond.js"></script>
  </body>
</html>
