<?php
require_once 'scssphp/scss.inc.php';

use ScssPhp\ScssPhp\Compiler;

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);



//$arquivo = file_get_contents("scss/style.scss");
//$style = $scss->compile($arquivo);

		$scss = new Compiler();
		$scss->setImportPaths('scss/');
		$style = $scss->compile('@import "1568.scss";');
		file_put_contents("css/1568.css", $style);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Module-1568</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo $url_path ?>/css/1568.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php include '../1568/1568-content.php'; ?>
</body>
</html>