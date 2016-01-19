<?php
include_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="atnsolutions.com">
    <title>ATN Simple Cart Example</title>
    <link href="atn-simple-cart/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="atn-simple-cart/css/demo.css" rel="stylesheet"/>
	<link href="atn-simple-cart/css/main.css" rel="stylesheet"/>
   <script src="atn-simple-cart/js/jquery.js"></script>
   <!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//<?php echo $config['piwikdomain'] ?>/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//<?php echo $config['piwikdomain'] ?>/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

  </head>

  <body>

    <div id="wrap">

      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#tab1" data-toggle="tab">Home</a></li>
              <li><a href="#tab2" data-toggle="tab">Cart Demo</a></li>
              <li><a href="#tab3" data-toggle="tab">Information</a></li>
             
            </ul>
          </div>
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
	  <div  class="tab-content" >
		<div class="tab-pane active" id="tab1">
					
			<div class="page-header">
			  <h1>ATN Simple Cart</h1>
			</div>
			<p class="lead">
			
				Simple shopping cart script, no database & easy to integrate
			</p>
			<br/>
			
			<p>
				<a href="#tab2" class="underline-link add-right-margin" data-toggle="tab">Click here to check the cart demo</a> 
				
				<span class="add-right-margin">or</span>
				
				<a href="#tab3" class="underline-link" data-toggle="tab">Find out more about the usage</a> 
			
			</p>
			<br/>
			<br/>
			<br/>
			<br/>
			<p class="lead">
			
				Check also our advanced e-commerce systems
	
				<a class="underline-link" href="http://www.atnsolutions.com/atn-store">ATN Store</a>
				and 
				<a class="underline-link" href="http://www.atnsolutions.com/atn-mall">ATN Mall</a>
			</p>
		</div>
		
		
		<div class="tab-pane" id="tab2">
				
			<?php
			include("atn-simple-cart/cart.php");
			?>
				
		</div>
		
		
		<div class="tab-pane" id="tab3">
					
					
					<div class="row-fluid">
			<br/>
			
			<h3 class="center standart-h3title"> 
				<span class="large-text">
				<span class="main-color">ATN Simple Cart Frequently Asked Questions</span>
				</span>
			</h3>
		
		</div>
	
		<br/><br/>
		
		
			<div class="row-fluid">
		<h4>1) How to add it in a .php file?</h4>
		<br/>
		If you downloaded atn-simple-cart.zip and extracted the files
		in a sub folder /atn-simple-cart , it's enough to add such 
		line of php code:
	<br/><br/>
<pre>
&lt;?php
include("atn-simple-cart/cart.php");
?&gt;</pre>
		<br/>
		at the position in your php file where you would like the cart to 
		show up.
		
		</div>
		
		
		<br/><br/>
		<div class="row-fluid">
		<h4>2) How to add it in a .html file?</h4>
		<br/>
		To add the cart in a .html file, you need 
		to insert an iframe line of code in it (see below).
		Please note when using this option, you still need
		to have PHP running on your server, since it's used
		to process the cart, send email notifications to you and others.
		<br/><br/>
		The iframe code to be inserted in your html file (at the
		position you would like the cart to show up) is:
		
	<br/><br/>
<pre>
&lt;iframe src="atn-simple-cart/cart-iframe.php" width="100%" frameborder="0" height="100%"&gt;&lt;/iframe&gt;</pre>
		<br/><br/>
		Please note sometimes you may need to limit the 
		height taken by the cart - you could do that by 
		setting the height in pixels using the height parameter
		of the iframe tag. For example the line below will set it to 600px:
<pre>
&lt;iframe src="atn-simple-cart/cart-iframe.php" width="100%" frameborder="0" height="600"&gt;&lt;/iframe&gt;</pre>
		<br/>
		
		</div>
		
		
		<br/><br/>
		<div class="row-fluid">
		<h4>3) How to define my own products?</h4>
		<br/>
		You could do that by editing the products.xml file
		located in the /atn-simple-cart folder.
		<br/><br/>
		You may find below the content of the sample
		products.xml file we are using in our demos:
	<br/><br/>
<pre>
&lt;my_products&gt;
	&lt;product&gt;
		&lt;id&gt;1&lt;/id&gt;
		&lt;name&gt;Some test product&lt;/name&gt;
		&lt;price&gt;49.00&lt;/price&gt;
		&lt;description&gt;
			Here comes the description of the test product ...
		&lt;/description&gt;
		&lt;details_link&gt;www.google.com&lt;/details_link&gt;
	&lt;/product&gt;
	&lt;product&gt;
		&lt;id&gt;2&lt;/id&gt;
		&lt;name&gt;Another test product&lt;/name&gt;
		&lt;price&gt;69.00&lt;/price&gt;
		&lt;description&gt;
			This is the description of the second test product ...
		&lt;/description&gt;
		&lt;details_link&gt;www.yahoo.com&lt;/details_link&gt;
	&lt;/product&gt;
&lt;/my_products&gt;</pre>
		<br/>
		
		For every product you may use the following fields:
		<br/><br/>
		<b>id</b> - the unique id of the product.
		<br/>
		<b>name</b> - is the name of the product 
		<br/>
		<b>price</b> - price of the product, it should be entered without the currency symbol
		<br/>
		<b>description</b> - the product description
		<br/>
		<b>details_link</b> - you may fill a value in it, if you would like to have a Details button 
		linking to the product details page. If you leave it empty, then
		no Details link will show up for the product.
		
		</div>
		
		
		
		<br/><br/>
		<div class="row-fluid">
		<h4>4) Setting the currency symbol, PayPal currency code, 
		PayPal account and email address to be used for order notifications?</h4>
		<br/><br/>
		To change these values, you need to edit the configuration file - 
		config.xml located in the /atn-simple-cart folder.
		<br/><br/>
		You may check the content of the sample config.xml file below -
	<br/><br/>
<pre>
&lt;my_config&gt;
	&lt;configuration&gt;
		&lt;notification_email&gt;your_email@mail.com&lt;/notification_email&gt;
		&lt;currency_symbol&gt;$&lt;/currency_symbol&gt;
		&lt;currency_code&gt;USD&lt;/currency_code&gt;
		&lt;paypal_account&gt;test@paypal.com&lt;/paypal_account&gt;
	&lt;/configuration&gt;
&lt;/my_config&gt;</pre>
		<br/>
	
		</div>
		<br/>
		<div class="row-fluid">
		Have more questions? Ask them on <a href="http://www.atnsolutions.com/questions">www.atnsolutions.com/questions</a>
		
		</div>
   <br/><br/>
			
		</div>

		</div>
	</div>
	  
	  
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted credit">
		<a href="http://www.atnsolutions.com/atn-simple-cart">ATN Simple Cart</a> demo by <a href="http://www.atnsolutions.com">ATN Solutions</a>
		</p>
      </div>
    </div>


    <script src="atn-simple-cart/js/bootstrap.min.js"></script>
  </body>
</html>
