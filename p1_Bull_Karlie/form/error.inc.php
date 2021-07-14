<style type="text/css">
  * {
    padding: 0;
    margin: 0;
    border: 0;
    box-sizing: border-box;
  }

  @font-face {
    font-family: 'Fredericka the Great', cursive;
    src: url('../fonts/FrederickatheGreat-Regular.ttf') format('truetype');
    font-family: 'Permanent Marker', cursive;
    src: url('../fonts/PermanentMarker-Regular.ttf') format('truetype');
  }

  /*=====================================

  Header Styling

  *======================================*/

  header {
    background: rgb(0 0 0 / 50%);
    padding: 10px 0;
    position: fixed;
    width: 100%;
    z-index: 99999;
  }

  h1 {
    font-family: 'Permanent Marker', cursive;
    color: White;
    text-align: left;
    font-size: 17px;
    z-index: 100;
    top: .5%;
    padding-left: 20px;
    width: 25%;
    display: inline-block;
  }

  nav {
    width: 74%;
    display: inline-block;
  }

  header nav li {
    font-family: 'Fredericka the Great', cursive;
    list-style-type: none;
    display: inline-block;
    padding-right: 20px;
    text-shadow: 2px 2px 4px #000000;
  }

  header nav ul {
    text-align: right;
    font-size: 80%;
  }

  header a {
    color: White;
    text-decoration: none;
    text-shadow: 2px 2px 4px #000000;
    font-size: 18px;
  }

  header a:hover {
    color: blue;
    text-decoration: underline;
  }

</style>

<header>

  <h1>Unmasking the Art of Karli Bull</h1>

  <nav>
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="artiststatement.html">Artist Statement</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="resume.html">Resume</a></li>
      <li><a href="index.html">Say Hello!</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>So sorry, you have not completed all of the required fields.</p>
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
