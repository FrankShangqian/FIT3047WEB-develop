<?php
//Add script to read MySQL data and export to excel
include("read_and_export.php");

?>

<!DOCTYPE html>
<html>
<head>
<title>Export MySQL Data to Excel using PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<center><br/><br/><h2
 style='color:green'>Items Table Information</h2></center>
<div class="col-sm-12">
<div>
<form action="#" method="post">
<button type="submit" id="export" name="export"
 value="Export to excel" class="btn btn-success">Export To Excel</button>
</form>
</div>
</div>
<br/>
<table id="" class="table table-striped table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Type</th>
<th>Brand</th>
<th>Price</th>
</tr>
<tbody>
<?php foreach($items as $item) { ?>
<tr>
<td><?php echo $item ['id']; ?></td>
<td><?php echo $item ['name']; ?></td>
<td><?php echo $item ['type']; ?></td>
<td><?php echo $item ['brand']; ?></td>
<td>$<?php echo $item ['price']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>

</body>
</html>
