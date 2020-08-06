
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
<div class="col-lg-12"><br><br>
<h1 class="text-warning text-center">Display Database Table Data</h1>
<br>
<table class="table table-striped table-hover table-bordered">
<tr class="bg-dark text-white text-center">
<th>Id</th>
<th>Email</th>
<th>Password</th>
<th>Delete</th>
<th>UpDate</th>
</tr>
<?php
include("connection.php");
   $q= "select * from info";
    $result=mysqli_query($con,$q);
    while($query=mysqli_fetch_array($result)){
?>
<tr class="text-center">
<td><?php echo $query['id']; ?></td>
<td><?php echo $query['email']; ?></td>
<td><?php echo $query['pass']; ?></td>
<td> <button class="btn btn-danger"> <a href="delete.php?id=<?php echo $query['id'] ?>" class="text-white">Delete</a>  </button></td>
<td> <button class="btn btn-primary"> <a href="update.php?id=<?php echo $query['id'] ?>" class="text-white">UpDate</a>  </button></td>
</tr>
<?php
    }
    ?>
</table>
</div>
</div>
</div>
</body>
</html>