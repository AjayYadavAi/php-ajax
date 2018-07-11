<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/3.0.3/bootstrap3-typeahead.min.js"></script>
<style type="text/css">
</style></style></script></script></script>
</head>
<body>
<div class="container">
<div class="row" style="background-color: #d6600e ;padding:30px;margin-top:20px;">
<div class="col-md-4" style="margin-top:30px; background-color:#e8e7e5  ;padding:20px;border-radius:5px;">
<form method="POST" action="insert.php">
<div class="form-group">
	<input type="text" class="form-control" name="name" placeholder='Add Country Name'><br>
	<button class="btn btn-primary" type="submit">Add</button>
</div>
</form>
</div>
<div class="col-md-8"style="padding:20px;">
	<h2 class="text-center" style="color:white;">Autocomplete input Box <br>Search and see the result</h2>
	<label class="control-label col-sm-2">Search</label>
	<div class="col-sm-8">
		<input type="text" id="country" name="country" placeholder="Search Country Name " class="form-control" autocomplete="off">
	</div>
	<div class="col-sm-2"></div>
</div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#country").typeahead({
			source:function(query, result){
				$.ajax({
					url:"fetch.php",
					data:"query="+query,
					dataType:"json",
					type:"POST",
					success:function(data){
						result($.map(data, function(item){
							return item;
						}));
					}
				});
			}
		});
	});
</script>
</body>
</html>
