<?php
session_start(); //don't know if this is needed
class rateDataManager{

	public function getRateInfo($rating, $recipeId){ 
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect("localhost", "root", "", "cs2043team4aDB");
		$rating = stripslashes($rating);
		$recipeId = stripslashes($recipeId);
		$rating = $connection->real_escape_string($rating);
		$recipeId = $connection->real_escape_string($recipeId);
		$query = $connection->query("select userId from UserRecordTable where userName='$_SESSION['login_user']'"); //Obtains userId from username SESSSION variable.
		$rate_userId = query->fetch_row();
		$rows = $query->num_rows;
		if($rows == 0){
			mysql_close($connection); // Closing Connection
			return false;
		}
		query2 = $connection->query("insert into RatingInfoTable(userId, recipeId, rating) values ('$rate_userId', '$rate_recipeId', '$rate_rating'", $connection);
		mysql_close($connection); // Closing Connection
		return true;
		}
}
?>
