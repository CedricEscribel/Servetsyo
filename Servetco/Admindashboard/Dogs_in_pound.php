<?php 

require_once '../phpconfig/Dogs.php';

$sql = "SELECT * FROM dogs";
$all_dogs = $con->query($sql);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dogs in pound</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="Admin.css" rel="stylesheet">


</head>

<body>

<?php include 'design/header.php'; ?>
    <div class="wrapper">
        <!-- Sidebar Holder -->

	<?php include 'design/sidebar.php'; ?>

   <section class="tables container">
      <div class="User-list">
        <h1>Dogs in pound</h1>
        <table class="table">
          <thead>
            <tr class="head" >
              <th>ID</th> 
              <th>Name</th>
              <th>Date in</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Rescued At</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

          <?php
						while ($row = $all_dogs->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo $row["Dog_id"] ?></td>
								<td><?php echo $row["Name"] ?></td>
								<td>date</td>                    
								<td><?php echo $row["Age"] ?></td>  
                                <td><?php echo $row["Age"] ?></td>                 
								<td>location</td>       
                                <td><label for="Status"></label>
								<select id="Status">
								<option value="Adopted">Adopted</option>
								<option value="Euthanized">Euthanized</option>
								<option value="Claimed">Claimed</option>
								</select>              
						</tr>				

						<?php
						}
						?>

          </tbody>
        </table>
      </div>
    </section>
</div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>
</html>