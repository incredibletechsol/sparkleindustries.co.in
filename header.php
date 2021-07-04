  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
	<a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
         <?php 
	$pageName = basename($_SERVER['PHP_SELF']);

	if($pageName == "index.php")
		{
		echo "<li class='active'><a href='index.php'>Home</a></li>";
		echo  "<li><a href='aboutus.php'>About Us</a></li>";
		echo "<li class='drop-down'><a href='products.php'>Products</a>";
		echo "<ul>";
			echo "<li><a href='surface.php'>Surface/Floor Cleaners</a></li>";
			echo "<li><a href='handwash.php'>Handwash</a></li>";
           	echo "<li><a href='toilet.php'>Toilet Cleaner</a></li>";
        	echo "<li><a href='dishwasher.php'>Dish Washer</a></li>";
			echo "<li><a href='milky.php'>Milky Floor Cleaner</a></li>";
           	echo "<li><a href='gentle.php'>Gentle Liquid Cleaner</a></li>";
        echo "</ul>";
        echo "</li>";
		echo  "<li><a href='services.php'>Services</a></li>";
		echo  "<li><a href='gallery.php'>Gallery</a></li>";
		echo  "<li><a href='enquiry.php'>Enquiry</a></li>";
		echo  "<li><a href='contact.php'>Contact</a></li>";
		}	
	if($pageName == "aboutus.php")
		{
		echo "<li><a href='index.php'>Home</a></li>";
		echo  "<li class='active'><a href='aboutus.php'>About Us</a></li>";
    	echo "<li class='drop-down'><a href='products.php'>Products</a>";
		echo "<ul>";
			echo "<li><a href='surface.php'>Surface/Floor Cleaners</a></li>";
			echo "<li><a href='handwash.php'>Handwash</a></li>";
           	echo "<li><a href='toilet.php'>Toilet Cleaner</a></li>";
        	echo "<li><a href='dishwasher.php'>Dish Washer</a></li>";
			echo "<li><a href='milky.php'>Milky Floor Cleaner</a></li>";
           	echo "<li><a href='gentle.php'>Gentle Liquid Cleaner</a></li>";
        echo "</ul>";
        echo "</li>";
		echo  "<li><a href='services.php'>Services</a></li>";
		echo  "<li><a href='gallery.php'>Gallery</a></li>";
		echo  "<li><a href='enquiry.php'>Enquiry</a></li>";
		echo  "<li><a href='contact.php'>Contact</a></li>";
		}	
   if($pageName == "milky.php" || $pageName == "toilet.php" || $pageName == "dishwasher.php" || $pageName == "surface.php" 
		|| $pageName == "gentle.php" || $pageName == "multipurposecleaner.php" || $pageName == "handwash.php")
		{
		echo  "<li><a href='index.php'>Home</a></li>";
		echo  "<li><a href='aboutus.php'>About Us</a></li>";
		echo "<li class='drop-down active'><a href='products.php'>Products</a>";
		echo "<ul>";
			echo "<li><a href='surface.php'>Surface/Floor Cleaners</a></li>";
			echo "<li><a href='handwash.php'>Handwash</a></li>";
           	echo "<li><a href='toilet.php'>Toilet Cleaner</a></li>";
        	echo "<li><a href='dishwasher.php'>Dish Washer</a></li>";
			echo "<li><a href='milky.php'>Milky Floor Cleaner</a></li>";
           	echo "<li><a href='gentle.php'>Gentle Liquid Cleaner</a></li>";
        echo "</ul>";
        echo "</li>";
		echo  "<li><a href='services.php'>Services</a></li>";
		echo  "<li><a href='gallery.php'>Gallery</a></li>";
		echo  "<li><a href='enquiry.php'>Enquiry</a></li>";
		echo  "<li><a href='contact.php'>Contact</a></li>";
		}
	if($pageName == "services.php")
		{
		echo  "<li><a href='index.php'>Home</a></li>";
		echo  "<li><a href='aboutus.php'>About Us</a></li>";
		echo "<li class='drop-down'><a href='products.php'>Products</a>";
		echo "<ul>";
			echo "<li><a href='surface.php'>Surface/Floor Cleaners</a></li>";
			echo "<li><a href='handwash.php'>Handwash</a></li>";
           	echo "<li><a href='toilet.php'>Toilet Cleaner</a></li>";
        	echo "<li><a href='dishwasher.php'>Dish Washer</a></li>";
			echo "<li><a href='milky.php'>Milky Floor Cleaner</a></li>";
           	echo "<li><a href='gentle.php'>Gentle Liquid Cleaner</a></li>";
        echo "</ul>";
        echo "</li>";
		echo  "<li class='active'><a href='services.php'>Services</a></li>";
		echo  "<li><a href='gallery.php'>Gallery</a></li>";
		echo  "<li><a href='enquiry.php'>Enquiry</a></li>";
		echo  "<li><a href='contact.php'>Contact</a></li>";
		}
	if($pageName == "gallery.php")
		{
		echo  "<li><a href='index.php'>Home</a></li>";
		echo  "<li><a href='aboutus.php'>About Us</a></li>";
		echo "<li class='drop-down'><a href='products.php'>Products</a>";
		echo "<ul>";
			echo "<li><a href='surface.php'>Surface/Floor Cleaners</a></li>";
			echo "<li><a href='handwash.php'>Handwash</a></li>";
           	echo "<li><a href='toilet.php'>Toilet Cleaner</a></li>";
        	echo "<li><a href='dishwasher.php'>Dish Washer</a></li>";
			echo "<li><a href='milky.php'>Milky Floor Cleaner</a></li>";
           	echo "<li><a href='gentle.php'>Gentle Liquid Cleaner</a></li>";
        echo "</ul>";
        echo "</li>";
		echo  "<li><a href='services.php'>Services</a></li>";
		echo  "<li class='active'><a href='gallery.php'>Gallery</a></li>";
		echo  "<li><a href='enquiry.php'>Enquiry</a></li>";
		echo  "<li><a href='contact.php'>Contact</a></li>";
		}		
	
	if($pageName == "contact.php")
		{
		echo "<li><a href='index.php'>Home</a></li>";
		echo  "<li><a href='aboutus.php'>About Us</a></li>";
		echo "<li class='drop-down'><a href='products.php'>Products</a>";
		echo "<ul>";
			echo "<li><a href='surface.php'>Surface/Floor Cleaners</a></li>";
			echo "<li><a href='handwash.php'>Handwash</a></li>";
           	echo "<li><a href='toilet.php'>Toilet Cleaner</a></li>";
        	echo "<li><a href='dishwasher.php'>Dish Washer</a></li>";
			echo "<li><a href='milky.php'>Milky Floor Cleaner</a></li>";
           	echo "<li><a href='gentle.php'>Gentle Liquid Cleaner</a></li>";
        echo "</ul>";
        echo "</li>";
		echo  "<li><a href='services.php'>Services</a></li>";
		echo  "<li><a href='gallery.php'>Gallery</a></li>";
		echo  "<li><a href='enquiry.php'>Enquiry</a></li>";
		echo  "<li class='active'><a href='contact.php'>Contact</a></li>";
		}	
	if($pageName == "enquiry.php")
		{
		echo "<li><a href='index.php'>Home</a></li>";
		echo  "<li><a href='aboutus.php'>About Us</a></li>";
		echo "<li class='drop-down'><a href='products.php'>Products</a>";
		echo "<ul>";
			echo "<li><a href='surface.php'>Surface/Floor Cleaners</a></li>";
			echo "<li><a href='handwash.php'>Handwash</a></li>";
           	echo "<li><a href='toilet.php'>Toilet Cleaner</a></li>";
        	echo "<li><a href='dishwasher.php'>Dish Washer</a></li>";
			echo "<li><a href='milky.php'>Milky Floor Cleaner</a></li>";
           	echo "<li><a href='gentle.php'>Gentle Liquid Cleaner</a></li>";
        echo "</ul>";
        echo "</li>";
		echo  "<li><a href='services.php'>Services</a></li>";
		echo  "<li><a href='gallery.php'>Gallery</a></li>";
		echo  "<li class='active'><a href='enquiry.php'>Enquiry</a></li>";
		echo  "<li><a href='contact.php'>Contact</a></li>";
		}		
					
	?>

        </ul>
      </nav>
    </div>
  </header>