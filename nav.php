<nav class="navbar navbar-inverse navbar-fixed-top" id="add-sticky">
  <div class="container2">
    <!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		
          <a class="navbar-brand visible-xs" href="index.php">
			<img src="images/logo.png" alt="ninax" height="35px">
		  </a>
		  
    </div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="page1"><a  class="cl-effect-4" href="index.php">POČETNA</a></li>
            <li class="page2"><a class="cl-effect-4" href="ninax.php">O NAMA</a></li>
			
				<a class="navbar-brand hidden-xs" href="index.php">
					<img src="images/logo.png" alt="ninax">
				</a>
			
            <li class="page3"><a  class="cl-effect-4" href="grupe-artikala.php">GRUPE ARTIKALA</a></li>
			<li class="page4"><a class="cl-effect-4" href="kontakt.php">KONTAKT</a></li>
          </ul>
    </div>
	<!-- /.navbar-collapse -->
	
  </div>
  <!-- /.container -->
</nav>



 <!-- dodavanje sticky klase --> 
<script>
    
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('#add-sticky').addClass("sticky");
    }
    else{
        $('#add-sticky').removeClass("sticky");
    }
});
</script>