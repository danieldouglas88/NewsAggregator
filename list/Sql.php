<?php
$url = 'https://news.google.com/news/rss/headlines/section/topic/TECHNOLOGY';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link"] = $xml->channel[0]->item->link;
$_SESSION["description"] = str_replace("'","", $xml->channel[0]->item->description);

$url = 'https://news.google.com/news/rss/headlines/section/topic/WORLD';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title2"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link2"] = $xml->channel[0]->item->link;
$_SESSION["description2"] = str_replace("'","", $xml->channel[0]->item->description);

$url = 'https://news.google.com/news/rss/headlines/section/topic/NATION';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title3"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link3"] = $xml->channel[0]->item->link;
$_SESSION["description3"] = str_replace("'","", $xml->channel[0]->item->description);

$url = 'https://news.google.com/news/rss/headlines/section/topic/HEALTH';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title4"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link4"] = $xml->channel[0]->item->link;
$_SESSION["description4"] = str_replace("'","", $xml->channel[0]->item->description);

$url = 'https://news.google.com/news/rss/headlines/section/topic/SCIENCE';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title5"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link5"] = $xml->channel[0]->item->link;
$_SESSION["description5"] = str_replace("'","", $xml->channel[0]->item->description);

$url = 'https://news.google.com/news/rss/headlines/section/topic/SPORTS';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title6"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link6"] = $xml->channel[0]->item->link;
$_SESSION["description6"] = str_replace("'","", $xml->channel[0]->item->description);

$url = 'https://news.google.com/news/rss/headlines/section/topic/ENTERTAINMENT';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title7"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link7"] = $xml->channel[0]->item->link;
$_SESSION["description7"] = str_replace("'","", $xml->channel[0]->item->description);

$url = 'https://news.google.com/news/rss/headlines/section/topic/BUSINESS';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title8"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link8"] = $xml->channel[0]->item->link;
$_SESSION["description8"] = str_replace("'","", $xml->channel[0]->item->description);

$url = 'https://news.google.com/news/rss/local';
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title9"] = str_replace("'","", $xml->channel[0]->item->title);
$_SESSION["link9"] = $xml->channel[0]->item->link;
$_SESSION["description9"] = str_replace("'","", $xml->channel[0]->item->description);


$servername = "mysql.daniel-on-the-web.com";
$username = "ddouglas";
$password = "Qazxsw!123";
$dbname = "danieldbxx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO feed_info
VALUES (NULL,'" . $_SESSION["link"] . "', '" . $_SESSION["description"] . "'),
(NULL,'" . $_SESSION["link2"] . "', '" . $_SESSION["description2"] . "'),
(NULL,'" . $_SESSION["link3"] . "', '" . $_SESSION["description3"] . "'),
(NULL,'" . $_SESSION["link4"] . "', '" . $_SESSION["description4"] . "'),
(NULL,'" . $_SESSION["link5"] . "', '" . $_SESSION["description5"] . "'),
(NULL,'" . $_SESSION["link6"] . "', '" . $_SESSION["description6"] . "'),
(NULL,'" . $_SESSION["link7"] . "', '" . $_SESSION["description7"] . "'),
(NULL,'" . $_SESSION["link9"] . "', '" . $_SESSION["description9"] . "'),
(NULL,'" . $_SESSION["link8"] . "', '" . $_SESSION["description8"] . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created sucessfully. Now redirecting to our list/view page.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<head>
<meta http-equiv="Refresh" content="3;url=list_and_view.php">
</head>