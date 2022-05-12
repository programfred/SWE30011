<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="Mir Aun Ali Naqvi"  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="includes/images/favicon.ico">
  <link href="includes/css/css.css" rel="stylesheet">
  <link href="includes/css/salesform.css" rel="stylesheet">
<title>Add Sales Form</title>
</head>
<body>
<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><img id="logo" src="includes/images/logo.png" alt='logo'>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            </div>
        </div>
		<div>
            <a id="h1">Add Sales Form</a>
			<a class="active" href="index.php" id="link">HOME</a> 	
			<a href="search.php" id="back">BACK</a>
			<a id="logout" href="/controllers/logout.php">LOG OUT</a>
        </div>
    </nav>
</header>
	<div class="background">
			<div class="shape"></div>
			<div class="shape"></div>
	</div>
	<script>
		var data;

		fetch("controllers/AJAX/getProducts.php")
		.then(function(response) {
		return response.json();
		})
		.then(function(json) {
			data = json;
			for (let i of json) { 
				var inp = document.createElement("input");
				var label = document.createElement("label");
				var br = document.createElement("br");

				label.setAttribute('for',"id_" + i.productName);
				label.innerHTML = i.productName;
				inp.setAttribute('type',"number");
				inp.setAttribute('id', i.productCode);
				inp.setAttribute('name', i.productCode);

				document.getElementById('productInputs').appendChild(label);
				document.getElementById('productInputs').appendChild(inp);
				document.getElementById('productInputs').appendChild(br);
			}

			var count = document.createElement("input");
			count.setAttribute('id',"count");
			count.setAttribute('name', "count");
			count.setAttribute('value', "");
			count.setAttribute('hidden', 'hidden');
			document.getElementById('productInputs').appendChild(count);
		});

		// function onSubmitForm() {
		// 	var elements = document.querySelectorAll("#salesForm input[type=number]")
        //
		// 	var values = document.createElement("input");
		// 	values.setAttribute('id',"values");
		// 	values.setAttribute('name', "values[]");
		// 	count.setAttribute('hidden', 'hidden');
		// 	document.getElementById('productInputs').appendChild(values);
        //
		// 	var array = [];
		// 	elements.forEach(el => {
		// 		if (el.value != ''){
		// 			array.push(el.id)
		// 			array.push(el.value)
		// 		}
		// 	})
        //
		// 	values.setAttribute('value', array);
		// }
	</script>
	<form method="post" id="salesForm" action="/controllers/InsertSales.php" class="formfull" onsubmit="onSubmitForm()">
				<h3>Sales Form</h3>
			
				<label for="member_id">Member ID:</label>
				<input type="text" id="member_id" name="member_id" required="required" /><br><br>
				
				<p>Please enter the quantity purchased for the following items:</p>

				<div id="productInputs">
				</div>
				<hr>
				<button type="submit" class="btn btn-primary">Submit</button>
				<img id="ned" src="includes/images/ned.png" alt='ned'>
	</form>
	<div id="copyright">
	<p id="footertop">© Copyright 2022</p>
	<p id="footerbottom">All Rights Reserved. Powered by the best team in SWE30011.</p>
</div>
</body>
</html>
