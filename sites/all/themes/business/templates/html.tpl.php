<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<?php
// Jajja 2011-03-05

$sJajjaURL = $_SERVER["REQUEST_URI"];
$sJajjaDescription = "";

if($sJajjaURL == "/"){ 
$head_title = "Konferens i vackra skärgården - Villa Sandudden";
$sJajjaDescription = "Vill ni åka på konferens i natursköna och vackra skärgården? På Villa Sandudden har ni ett fantastiskt läge och en konferensanläggning med allt ni behöver.";
} else
if($sJajjaURL == "/bastu-och-spa"){ 
$head_title = "SPA på er konferens - Boka hos Villa Sandudden";
$sJajjaDescription = "Vill ni kunna njuta av SPA under er konferens? Då ska ni boka in er på Villa Sandudden. Här erbjuder vi bastu och SPA i en avkopplande och fridfull miljö.";
}

function jajjaChangeDescription($buffer, $sJajjaDescription){
if ( $sJajjaDescription <>""){
	$sRegExpDescription = '/<meta name="description".*" \/>/sU';
	$buffer = preg_replace($sRegExpDescription,'<meta name="description" content="'.$sJajjaDescription.'" />',$buffer);
}
	return $buffer;

}

?>
<head>
<?php print jajjaChangeDescription($head,$sJajjaDescription); ?>
<title><?php print $head_title; ?></title>

<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'business') . '/js/html5.js'; ?>"></script><![endif]-->
<script type="text/javascript">
_jssX = {v:2};
(function(id){
 var e = encodeURIComponent, d = document, s = d.createElement("script"), x,
  p = d.getElementsByTagName("script")[0], c = d.cookie?d.cookie.split(";"):[],
  a = ["i="+id,"r="+e(d.referrer),"u="+e(d.location),"d="+new Date().getTime()];
 while (c.length) { x = c.pop().replace(/^ /,"").split("=");
  if (x[0].match(/^_jss_/)) a.push(x[0]+"="+x[1]); }
 s.type = "text/javascript"; s.async = true;
 s.src = location.protocol+"//jss.jajja.com/jss?"+(_jssX._qparam=a.join("&"));
 p.parentNode.insertBefore(s, p);
}("cpijgL138TjzLrtn"));
</script>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>