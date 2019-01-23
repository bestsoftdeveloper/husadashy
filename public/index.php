<?php
error_reporting(0);

if (isset($_GET['view']))
    $view = $_GET['view'];
else
    $view = 'noutati';
$view = addslashes($view);
include_once('pages.php');
if (! isset($pages[$view]))
    $view = "noutati";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="default.css?v=1" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="http://www.hayashi-floresti.ro/favicon.png"/>
<link rel="SHORTCUT ICON" href="http://www.hayashi-floresti.ro/favicon.ico"/>
<?php print "<title>" . $pages[$view] . "</title>\n"; ?>
</head>
<body>
<div id="wrapper1222">
	ddd
	<div id="header">
		<div id="logo">
            <h2>Clubul Sportiv</h2>
			<h1>Hayashi Activ</h1>
		</div>
		<div id="menu">
			<ul>
			    <?php
                if ($view == "noutati")
                    print "<li class=\"active\"><a href=\"index.php?view=noutati\">Pagina principala</a></li>\n";
                else
                    print "<li><a href=\"index.php?view=noutati\">Pagina principala</a></li>\n";
				if ($view == "main")
				    print "<li class=\"active\"><a href=\"index.php?view=main\">Despre club</a></li>\n";
				else
				    print "<li><a href=\"index.php?view=main\">Despre club</a></li>\n";
				if ($view == "galerie")
				    print "<li class=\"active\"><a href=\"index.php?view=galerie\">Galerie foto</a></li>\n";
				else
				    print "<li><a href=\"index.php?view=galerie\">Galerie foto</a></li>\n";
                if ($view == "contact")
                    print "<li class=\"active\"><a href=\"index.php?view=contact\">Contact</a></li>\n";
                else
                    print "<li><a href=\"index.php?view=contact\">Contact</a></li>\n";
				?>
			</ul>
		</div>
	</div>
	<div id="page">
		<div id="page-bgtop">
			<div id="content">
			    <?php include($view . ".php"); ?>
			</div>
			<div id="sidebar">
                <img src="images/sigla.gif" alt=""/>
				<ul>
					<li>
                        <br/><br/>
						<ul>
							<li><a href="index.php?view=noutati">Pagina principala</a></li>
                            <li><a href="index.php?view=main">Despre club</a></li>
							<li><a href="index.php?view=galerie">Galerie photo</a></li>
							<li><a href="index.php?view=rezultate">Rezultate obtinute</a></li>
							<li><a href="index.php?view=sportivi">Sportivi</a></li>
							<li><a href="index.php?view=orar">Orarul antenamentelor</a></li>
							<li><a href="index.php?view=karate">Despre karate</a></li>
							<li><a href="index.php?view=contact">Contact</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div style="clear: both; height: 1px"></div>
		</div>
	</div>
	<div id="footer">
		<p id="legal">Copyright &copy; 2010-2011 Clubul Sportiv Hayashi Activ.</p>
	</div>
</div>

<?php include 'index.html';
?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9627298-2");
pageTracker._trackPageview();
} catch(err) {}
</script>

</body>
</html>
