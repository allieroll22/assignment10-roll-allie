<style type="text/css">

body {
  background-image: url("../images/background.png");
  background-attachment: fixed;
  background-position: center;
  text-align: center;
	background-color: black;
}

h1 {
  font-size: 30px;
  color: white;
}

p {
  font-size: 25px;
  color: white;
}
</style>

<body>
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</body>
