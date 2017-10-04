<?php
# @Author: Maxime Cohen <maxime>
# @Date:   2017-Oct-04 12:17
# @Email:  maxime.cohen-pro@outlook.fr
# @Project: Snake
# @Filename: getData.php
# @Last modified by:   maxime
# @Last modified time: 2017-Oct-04 12:46


$data = array(
	array('statut'=>"open", 'titre'=>"lol", 'date'=>"04/10/2017", 'client'=>"Patrick")
	);
header('Content-type:application/json;charset=utf-8');
$return = array(
	'total' => count($data),
	'rows' => $data,
	);
echo json_encode($return);
