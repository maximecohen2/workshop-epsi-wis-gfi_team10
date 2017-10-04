<?php
# @Author: Maxime Cohen <maxime>
# @Date:   2017-Oct-04 10:14
# @Email:  maxime.cohen-pro@outlook.fr
# @Project: Snake
# @Filename: list.php
# @Last modified by:   maxime
# @Last modified time: 2017-Oct-04 12:54
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

	<link href="./css/bootstrap-table.min.css" rel="stylesheet">
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
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          		<span class="navbar-toggler-icon"></span>
        	</button>
      	</div>
    </div>

    <section class="jumbotron">
      	<div class="container">
			<div class="input-group">
	 	  		<input type="text" class="form-control" placeholder="Search for...">
	 			<span class="input-group-btn">
	   				<button class="btn btn-secondary" type="button">Search</button>
	 			</span>
   			</div>
		</div>
	  	<div class="container">
		  	<div class="table-responsive py-3">
			  	<table data-toggle="table" data-side-pagination="server" data-url="./tools/getData.php" class="table table-striped">
			    	<thead>
			      		<tr>
			        		<th data-field="statut">Statut</th>
			        		<th data-field="titre">Titre</th>
					        <th data-field="date">Date</th>
							<th data-field="client">Client</th>
			      		</tr>
			    	</thead>
				</table>
		  	</div>
		</div>
    </section>

	<!--
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>
	-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="./js/bootstrap-table.min.js"></script>
  </body>
</html>
