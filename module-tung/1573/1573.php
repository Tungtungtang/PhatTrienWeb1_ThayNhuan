<?php
require_once 'scssphp/scss.inc.php';

use ScssPhp\ScssPhp\Compiler;

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

		$scss = new Compiler();
		$scss->setImportPaths('scss/');
		$style = $scss->compile('@import "1573.scss";');
		file_put_contents("css/1573.css", $style);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Module-1573</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/swiper.min.css">
	<link href="<?php echo $url_path ?>/css/1573.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script language="JavaScript" type="text/javascript" src="<?php echo $url_path ?>/js/1573.js"></script>
</head>
<body>
	<?php include '../1573/1573-content.php'; ?>
</body>
</html>