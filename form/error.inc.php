<style type="text/css">
* {
	margin:0;
	padding: 0;
	border: 0;
}

header {
	background: #333;
	padding: 10px 0;
	position: fixed;
	left: 0;
	right: 0;
}

header nav ul li {
	display: inline;
}

header nav a {
	color: white;
	text-decoration: none;
	font-weight: bold;
	font-size: 20px;
	margin: 0 20px;
}

header nav a:hover {
	color: grey;
}

.bottom-section {
	color: grey;
	padding:10px 0;
}

footer {
	background: #333;
	text-align: right;
	padding: 10px 30px;
}

footer img {
	width: 40px;
}

</style>

<div class="container">
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
</div>

<footer>
      <div class="socialmedia">
        <a href="https://twitter.com/taylorswift13?lang=en"><img src="images/tw.png" alt="twitter" title="twitter" /></a>
        <a href="https://www.facebook.com/TaylorSwift/"><img src="images/fb.png" alt="facebook" title="facebook" /></a>
        <a href="https://www.instagram.com/taylorswift/"><img src="images/in.png" alt="instagram" title="instagram" /></a>
      </div>
</footer>
