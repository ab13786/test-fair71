<!DOCTYPE html>
<html>
	<head>
		<title>Kiwanis Fair - News</title>
		<meta charset="UTF-8">
		<link href= "/stylesheets/news.css" type="text/css" rel = "stylesheet">
	</head>

    <body>
		<header>
            <nav>
                <ul>
                    <li><a href="/views/main.html" >Home</a></li>
                    <li><a href="/views/Vendors.html">Vendors</a></li>
                    <li><a href="/views/News.html">News</a></li>
                    <li><a href="/views/Applications.php">Applications</a></li>
                    <li><a href="/views/Shows.html">Shows</a></li>
                    <li><a href="/views/Map.html">Map</a></li>
                    <li><a href="/views/Sponsors.html">Sponsors</a></li>
                </ul>
            </nav>
        </header>

		<section>
			<form>
				<fieldset>
					<legend> News Update</legend>

					<label for = "Subject"> Subject: </label>
					<input type="text" id="Subject" placeholder="Enter Subject">

					<textarea  id="text" placeholder="Enter message here"></textarea>

					<section id="submitButtons">
						<input  id="submit" value ="Send" type="submit" class="submission">
					</section>
				</fieldset>
			</form>
			<br>
		</section>
    </body>
</html>