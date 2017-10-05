<?php
# @Author: Maxime Cohen <maxime>
# @Date:   2017-Oct-04 10:14
# @Email:  maxime.cohen-pro@outlook.fr
# @Project: Snake
# @Filename: list.php
# @Last modified by:   maxime
# @Last modified time: 2017-Oct-05 15:14
require "./models/model_list.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Liste des besoins</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/album.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="./css/dataTables.bootstrap4.min.css"/>
	<link rel="stylesheet" type="text/css" href="./css/responsive.bootstrap4.min.css"/>
  </head>

  <body>

    <div class="collapse bg-dark" id="navbarHeader">
      	<div class="container">
        	<div class="row">
          		<div class="col-sm-4 py-4">
            		<a href="#" class="text-white">Se déconnecter</a>
          		</div>
        	</div>
      	</div>
    </div>
    <div class="navbar navbar-dark bg-dark">
      	<div class="container d-flex justify-content-between">
        	<a href="#" class="navbar-brand">Liste des besoins</a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
			aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          		<span class="navbar-toggler-icon"></span>
        	</button>
      	</div>
    </div>

    <section class="jumbotron">
	  	<div class="container">
			<table id="table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				<thead>
			  		<tr>
			    		<th>Statut</th>
			    		<th>Titre</th>
				        <th>Date</th>
						<th>Client</th>
			  		</tr>
			   	</thead>
				<tbody>
					<?php
					foreach ($data as $line) {
						echo "<tr>\n";
						foreach ($line as $elem) {
							echo "<td>".$elem."</td>\n";
						}
						echo "</tr>\n";
					}
					?>
				</tbody>
			</table>
		</div>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.dataTables.min.js"></script>
	<script src="./js/dataTables.bootstrap4.min.js"></script>
	<script src="./js/dataTables.responsive.min.js"></script>
	<script src="./js/responsive.bootstrap4.min.js"></script>
	<script src="./js/date-eu.js"></script>
	<script>
	$(document).ready(function() {
		$.fn.dataTable.ext.type.order['statut-pre'] = function ( d ) {
    		switch ( d ) {
        		case 'open':    return 1;
        		case 'win': return 2;
        		case 'lost':   return 3;
    		}
    		return 0;
		};
	    $('#table').DataTable( {
			"lengthChange": false,
			"pageLength": 5,
	        "info":     false,
			"columnDefs": [
	   			{ "type": "statut", "targets": 0 },
				{ "type": "date-eu", "targets": 2 }
	 		],
			"order": [["0", "asc"], [2, "desc"]]
		} );
	} );
	</script>
  </body>
</html>
