<?php
$navigation = array(
    'arbeiten' => 'Arbeiten',
    'kontakt' => 'Kontakt'
);
$default = 'home';
$page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : $default;
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=700">
	<meta name="description" content="Atelier für Architektur und Städtebau von Marco Bamberger und Elias Rüedi.">
	<title>Atelier Bamberger Rüedi<?php if ($page !== $default): ?> &middot; <?= $navigation[$page] ?><?php endif; ?></title>
    <link rel="stylesheet" href="/css/ideal-image-slider.css" type="text/css">
    <link rel="stylesheet" href="/css/iis-theme.css" type="text/css">
	<link rel="stylesheet" href="/css/site.css" type="text/css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/ideal-image-slider.min.js"></script>
    <script src="/js/iis-captions.js"></script>
</head>
<body>
	<div class="main <?= $page ?>">
        <div class="header">
            <div class="logo">Atelier Bamberger Rüedi</div>
			<ul class="navigation">
				<?php foreach($navigation as $id => $title): ?>
					<li class="<?= $id ?><?php if ($id === $page): ?> selected<?php endif; ?>">
						<a href="/<?= $id ?>"><?= $title ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
        </div>
        <?php include('pages/' . $page . '.php'); ?>
	</div>
	<script>
        // Google Analytics
    </script>
</body>
</html>
