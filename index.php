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
  <body>

    <div class="container">

      <form class="form-signin" id="random" action="random.php" method="post">
        <h2 class="form-signin-heading">Müll Randomer</h2>
		<p>Namen eintragen, getrennt mit Kommata ", "</p>
        <input type="text" class="form-control" name="names" placeholder="Eduard, Alex, Manuel" autofocus>
        <button class="btn btn-large btn-warning btn-block" type="submit"><span class="glyphicon glyphicon-chevron-right"></span> Für mich auswählen!</button>
      </form>

    </div> <!--  data-toggle="modal" data-target="#myModal"  -->

	<div class="footer"><button class="btn btn-danger" data-toggle="modal" data-target="#Info" id="popover" data-content="Click on me!" data-placement="left" data-toggle="popover" data-container="body" type="button" data-original-title="" title=""><span class="glyphicon glyphicon-info-sign"</span></button></div>


	<script>
	$("a[href^='#']").live('click',function(event){
          $('#myModal').modal('show')
    });
		$(function (){ 
			$('#popover').popover('show');
		});
	</script>
	
	  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Fax Status</center></h4>
        </div>
        <div class="modal-body">
		<span class="visible-lg"><span class="glyphicon glyphicon-ok"></span> Your fax has been successfully sent to the destination!</span>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	
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
		<li>Bootstrap 3.0</li>
		<li>jQuery >=2.0.3</li>
		<li>Glyphicons (Bootstrap) 1.0</li></ul>
		<center><h3><a href="https://github.com/Der-Eddy/Muell-Randomer/archive/master.zip">Download</a></h3>
		<h4><a href="https://github.com/Der-Eddy/Muell-Randomer">Source Code</a></h4></h2></center>
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
