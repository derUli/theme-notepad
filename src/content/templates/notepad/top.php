<?php
html5_doctype ();
og_html_prefix ();
?>
<head>
  <?php
		base_metas ();
		og_tags ();
		?>
<title><?php title()?> - <?php homepage_title()?></title>
</head>

<body>
	<div id="page">

		<div id="titlebar">

			<h1><?php title()?> - <?php homepage_title()?></h1>
		</div>
		<div id="bar">
            <?php menu("top");?>
      </div>
		<div id="main">