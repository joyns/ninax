<!DOCTYPE html>

<html class='no-js' lang="sr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Ninax | Kontakt</title>
  <meta name="keywords" content="šarke, klizači fioka, žičane korpe, sudopere, ručice za nameštaj, nogice, točkiće, sisteme za klizna vrata, brave i kvake za sobna i ulazna vrata, dihtung gume, razne vrste lepkova, šrafovska roba">
  <meta name="description" content="Firma Ninax je osnovana 2014. godine i specijalizovana je za prodaju okova za nameštaj i građevinsku stolariju i repromaterijala za drvnu industriju. Posetite našu prodavnicu u Temerinu, ulica Novosadska 325. Kod nas možete pronaći sve od okova, sve vrste šarki, klizača fioka, žičane korpe, sudopere, ručice za nameštaj, nogice, točkiće, sisteme za klizna vrata, brave i kvake za sobna i ulazna vrata, dihtung gume, razne vrste lepkova, šrafovska robe...">
  <meta name="application-name" content="Website" />
  <meta name="author" content="Webellion" />
  
  <!-- for Facebook -->
  <meta property="og:title" content= "Ninax | Kontakt"/>
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/logofb.jpg" />
  <meta property="og:url" content="http://www.ninax.rs/kontakt.php" />
  <meta property="og:description" content="Firma Ninax je osnovana 2014. godine i specijalizovana je za prodaju okova za nameštaj i građevinsku stolariju i repromaterijala za drvnu industriju. Posetite našu prodavnicu u Temerinu, ulica Novosadska 325. Kod nas možete pronaći sve od okova, sve vrste šarki, klizača fioka, žičane korpe, sudopere, ručice za nameštaj, nogice, točkiće, sisteme za klizna vrata, brave i kvake za sobna i ulazna vrata, dihtung gume, razne vrste lepkova, šrafovska robe..." />

  <!-- for Twitter -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Ninax | Kontakt" />
  <meta name="twitter:description" content="Firma Ninax je osnovana 2014. godine i specijalizovana je za prodaju okova za nameštaj i građevinsku stolariju i repromaterijala za drvnu industriju. Posetite našu prodavnicu u Temerinu, ulica Novosadska 325. Kod nas možete pronaći sve od okova, sve vrste šarki, klizača fioka, žičane korpe, sudopere, ručice za nameštaj, nogice, točkiće, sisteme za klizna vrata, brave i kvake za sobna i ulazna vrata, dihtung gume, razne vrste lepkova, šrafovska robe..." />
  <meta name="twitter:url" content="http://www.ninax.rskontakt.php">
  <meta name="twitter:image" content="images/logofb.jpg" />

  
 

  <?php
    include "head.php";
  ?>

   <script type="text/javascript" src="javascripts/map-api.js"></script>
				  <script type="text/javascript" src="javascripts/gmaps.js"></script>
				  <script type="text/javascript">
				  $(document).ready(function(){
					var map= new GMaps({
						div: '#map',
						lat: 45.41896748113987,
						lng: 19.892887473106384,
						zoom: 15
					});
					map.addMarker({
						lat: 45.41896748113987,
						lng: 19.892887473106384,
						title: 'NINAX',
						icon: 'images/pin.png',
						infoWindow: {
							content:'<p style="color:#464646;"><strong>Ninax</strong>, Novosadska 325, Temerin</p>'
						}
					});
				 
				  });
				  </script>

</head>

<body id="page4">
	<div id="preloader"></div>
	<header>
		<?php
			include "nav.php";
		  ?>
	</header> 
	<main>
		
		<div class="container">
			<section>
				<h1 class="text-center heading-primary">Kontakt</h1>
				<div class="row">
					<div class="col-sm-12">
						<p class="text-center  font18">
						<strong>Kontaktirajte nas putem forme</strong>
						</p>
						<p class="text-center font16">
						i prenesite nam Vaša pitanja i utiske
						</p>
					</div>	
				</div>
				<div class="row">
					<div class="col-sm-6 margin5 text-center">
						<form class="contact-form" action="contact.php" method="post">
							<div class="row form-group">
							  <div class="col-md-12">
							  <input type="text" name="InputName" class="form-control" placeholder="Vaše ime" id="InputName">
							  </div>
							</div> 
							<div class="row form-group">
							  <div class="col-md-12">
							  <input type="email" name="InputEmail" class="form-control" placeholder="Vaš email" id="InputEmail" required="">
							  </div>
							</div>
							<div class="row form-group">
							  <div class="col-md-12">
							  <textarea name="InputMessage" class="form-control" rows="5" placeholder="Vaša poruka" id="InputMessage" required=""></textarea>
							  </div>
							</div>
							<input type="submit" name="submit" id="submit" class="button-primary" value="Pošaljite poruku">
							
						
					    </form>
					</div>	
					<div class="col-sm-6 margin5">
						<img src="images/kontakt.jpg" class="img-responsive middle" alt="ninax">
					</div>	
				</div>
				<div class="row">
					<div class="col-sm-12 margin5-bottom">
						<div id="map"></div>
						<p class="text-center map-desc">Temerin, Novosadska 325</p>
					</div>	
					
				</div>
				
			</section>
		
		</div>
	
	</main>

	<?php
		include "footer.php";
	?>

</body>
</html>
