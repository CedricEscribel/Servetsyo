<?php 

require_once '../phpconfig/ArtInsem.php';

$sql = "SELECT * FROM insemination";
$all_insemination = $con->query($sql);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Artificial Insemination</title>

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
        <h1>Artificial Insemination</h1>
        <table class="table">
          <thead>
            <tr class="head" >
              <th>Full Name</th> 
              <th>Contact Number</th>
              <th>Kind of Animal</th>
              <th>Location</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

          <?php
						while ($row = $all_insemination->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo $row["Name"] ?></td>
								<td><?php echo $row["ContNum"] ?></td>                    
								<td><?php echo $row["Animal"] ?></td>  
                                <td><?php echo $row["Coordinates"] ?></td>                           
                                <td><label for="Status"></label>
								<select id="Status">
								<option value="Pending">Pending</option>
								<option value="Approve">Approve</option>
                                <option value="Decline">Decline</option>
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
  </nav>
</div>


<?php include 'design/footer.php'; ?>
</body>
</html>