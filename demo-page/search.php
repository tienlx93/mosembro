<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.1//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile11.dtd">

<html>
<head>
    <title>Search Results</title>
    <meta http-equiv="Content-Language" content="en-us" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link href="assets/css/mobile.css" rel="stylesheet" type="text/css" >
</head>
    
<body class="home">
<div id="container">
<a href="/mosembrodemo/">&lt;&lt; back to the first page</a>
<br/>
<br/>

<form method="GET" action="http://lexandera.com/mosembrodemo/search.php" class="site-search">
    <br/>
    <span class="site-search-description">Search demo site</span>:<br/>
    <input type="text" class="site-search-query" name="query"/> <input type="submit" value="search" />
    <br/>
    <br/>
</form>

<b>Search results for "<?= $_GET['query']; ?>"</b>

<br/>
<br/>

<? 

$query = $_GET['query'] . ' site:code.google.com/android/';
$url = "http://www.google.com/search?btnG=Google+Search&ie=UTF-8&oe=UTF-8&q=";

$html = file_get_contents($url.urlencode($query));


$pattern = '|<div class=g>.*?'.
           '(<a href="http://code.google.com/android.*?".*?</a>).*?'.
           '<div class=std>(.*?)'.
           '<span class=a>.*?'.
           '</div>.*?'.
           '</table>.*?'.
           '</div>(.*)|s';

if (!preg_match($pattern, $html)) {
    echo "No results for \"{$_GET['query']}\"";   
}
else {
    $matches = array();
    while (preg_match($pattern, $html, $matches)) {
        $link = $matches[1];
        $text = $matches[2];
        $html = $matches[3]; // the rest
        
        echo "$link<br/>$text<br><br/>";
    }
}
           
           











//print_r($html);



?>



</div> <!-- end content body -->
</div> <!-- end container -->
</body>
</html>