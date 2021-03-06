<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Torimashita Contact Form'; 
		$to = 'luigikirbylego@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>鳥ました</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html"><strong>Brendan Souksamlane</strong></a></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon solid fa-info-circle">About</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
						<article class="thumb">
							<a href="images/fulls/IMG_3065.JPG" class="image"><img src="images/thumbs/IMG_3065.jpg" alt="" /></a>
							<h2>Crested Duck</h2>
							<p>Due to a heterozygous gene causing a deformity of the skull, crested ducks develop their pom-pom shaped heads. The homozygous phenotype is unfortunately fatal.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_4045.JPG" class="image"><img src="images/thumbs/IMG_4045.jpg" alt="" /></a>
							<h2>White Egret</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0433.png" class="image"><img src="images/thumbs/IMG_0433.jpg" alt="" /></a>
							<h2>Young Panda</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0445.png" class="image"><img src="images/thumbs/IMG_0445.jpg" alt="" /></a>
							<h2>Young Panda</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0481.png" class="image"><img src="images/thumbs/IMG_0481.jpg" alt="" /></a>
							<h2>Humbolt Penguin</h2>
							<p>A not-so-humble humbolt cries for its keeper to feed it.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0599.png" class="image"><img src="images/thumbs/IMG_0599.jpg" alt="" /></a>
							<h2>Rocky Mountain Goat</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0600.png" class="image"><img src="images/thumbs/IMG_0600.jpg" alt="" /></a>
							<h2>Rocky Mountain Goat</h2>
							<p>Rocky Mountain goats are not adjusted to the hot Calgary summers, with fur built for surviving the frigid temperatures of their 4,000m high natural habitats.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0731.png" class="image"><img src="images/thumbs/IMG_0731.jpg" alt="" /></a>
							<h2>Gray Crowned Crane</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0737.png" class="image"><img src="images/thumbs/IMG_0737.jpg" alt="" /></a>
							<h2>Western Lowland Gorilla</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0740.png" class="image"><img src="images/thumbs/IMG_0740.jpg" alt="" /></a>
							<h2>Black-and-White Colobus</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0803.png" class="image"><img src="images/thumbs/IMG_0803.jpg" alt="" /></a>
							<h2>Eurasian Wild Boar</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0943.png" class="image"><img src="images/thumbs/IMG_0943.jpg" alt="" /></a>
							<h2>Lake Louise</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_0951.png" class="image"><img src="images/thumbs/IMG_0951.jpg" alt="" /></a>
							<h2>Rocky Mountains and Lake Louise</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1404.png" class="image"><img src="images/thumbs/IMG_1404.jpg" alt="" /></a>
							<h2>レインボーブリッジ</h2>
							<p>The Rainbow Bridge connects Tokyo's Shibaura Pier to the artificial Odaiba waterfront island. The lamps illuminating the bridge are powered by solar energy.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1439.png" class="image"><img src="images/thumbs/IMG_1439.jpg" alt="" /></a>
							<h2>餅つき</h2>
							<p>It is said that the spirit of rice in mochi can bring strength and fortune to those who eat it. Traditional methods require tremendous trust and coordination to hammer and flip the mochi.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1450.png" class="image"><img src="images/thumbs/IMG_1450.jpg" alt="" /></a>
							<h2>餅</h2>
							<p>During New years, the scent of burning wood and steamed rice cuts through the cold of winter as communities make mochi together.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1480.png" class="image"><img src="images/thumbs/IMG_1480.jpg" alt="" /></a>
							<h2>Shrine Pigeon</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1497.png" class="image"><img src="images/thumbs/IMG_1497.jpg" alt="" /></a>
							<h2>稲荷山の最初鳥居</h2>
							<p>At the base of Mt. Inari, the first gate opens into the deep of the forest, where messenger kitsune reside.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1499.png" class="image"><img src="images/thumbs/IMG_1499.jpg" alt="" /></a>
							<h2>伏見稲荷大社</h2>
							<p>At the peak of Mt. Inari, a cold stillness envelops the last torii gate.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1500.png" class="image"><img src="images/thumbs/IMG_1500.jpg" alt="" /></a>
							<h2>たこ焼き</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1516.png" class="image"><img src="images/thumbs/IMG_1516.jpg" alt="" /></a>
							<h2>Nara Deer</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1528.png" class="image"><img src="images/thumbs/IMG_1528.jpg" alt="" /></a>
							<h2>Nara Deer</h2>
							<p>Due to their exalted status, the deer of Nara have acclimated to tourist influence, bowing their heads before accepting treats.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1543.png" class="image"><img src="images/thumbs/IMG_1543.jpg" alt="" /></a>
							<h2>Red Bean Pancake</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1550.png" class="image"><img src="images/thumbs/IMG_1550.jpg" alt="" /></a>
							<h2>Full Moon</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1663.png" class="image"><img src="images/thumbs/IMG_1663.jpg" alt="" /></a>
							<h2>Eclipsed Moon</h2>
							<p></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/IMG_1714.png" class="image"><img src="images/thumbs/IMG_1714.jpg" alt="" /></a>
							<h2>Blood Moon</h2>
							<p></p>
						</article>
					</div>

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<h2></h2>
									<p></p>
								</section>
								<section>
									<h2>Follow me on ...</h2>
									<ul class="icons">
										<li><a href="https://torimashita.github.io" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="https://www.instagram.com/torimashita/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									&copy; Brendan Souksamlane 2019. None of the contents may be reproduced in any form without prior written permission. Design: <a href="http://html5up.net">HTML5 UP</a>.
								</p>
							</div>
							<div>
								<section>
									<h2>Get in touch</h2>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<input type="text" name="name" id="name" placeholder="Name" />
												<?php echo "<p class='text-danger'>$errName</p>";?>
											</div>
											<div class="field half">
												<input type="text" name="email" id="email" placeholder="Email" />
												<?php echo "<p class='text-danger'>$errEmail</p>";?>
											</div>
											<div class="field">
												<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
												<?php echo "<p class='text-danger'>$errMessage</p>";?>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
											<?php echo $result; ?>	
										</ul>
									</form>
								</section>
							</div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>