<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US" type="text/javascript"></script>
    <?php echo $sf_content ?>
    <script type="text/javascript">
      FB.init("<?php echo sfConfig::get("app_facebook_apiKey"); ?>", "xd_receiver.htm");
    </script>    
	<script src="/js/cufon-yui.js" type="text/javascript"></script>
	<script src="/js/Caecilia_700.font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1.cufon');
	</script>
  </body>
</html>
