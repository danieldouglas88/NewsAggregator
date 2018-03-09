<?php

function benderContent($category, $id, $button) {
$url = 'https://news.google.com/news/rss/' . $category;
$xml = simplexml_load_file($url);

//here are the session variables
$_SESSION["title"] = $xml->channel[0]->item->title;
$_SESSION["link"] = $xml->channel[0]->item->link;
$_SESSION["description"] = $xml->channel[0]->item->description;

$_SESSION["title2"] = $xml->channel[0]->item[1]->title;
$_SESSION["link2"] = $xml->channel[0]->item[1]->link;
$_SESSION["description2"] = $xml->channel[0]->item[1]->description;

$_SESSION["title3"] = $xml->channel[0]->item[2]->title;
$_SESSION["link3"] = $xml->channel[0]->item[2]->link;
$_SESSION["description3"] = $xml->channel[0]->item[2]->description;
    
echo '
<br><div class="row" id="' . $id . '">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
              </h4>
              <h5>CATEGORY: ' . $category . '</h5>
              <h4>' . $_SESSION["title"] .  '</h4>
              <a href="' . $_SESSION["link"] . '">Source Page</a>
              <p>' . $_SESSION["description"]  . '<p>
              <br>
              <hr>
              <h4>' . $_SESSION["title2"] .  '</h4>
              <a href="' . $_SESSION["link2"] . '">Source Page</a>
              <p>' . $_SESSION["description2"]  . '<p>
              <br>
              <hr>
              <h4>' . $_SESSION["title3"] .  '</h4>
              <a href="' . $_SESSION["link3"] . '">Source Page</a>
              <p>' . $_SESSION["description3"]  . '<p>
              <br>
           <button id="btn' . $button .'" class="btn btn-primary">Clear Cache</button>
           <br>
           <p id="' . $button .'"></p>
            </div> 
          </div>
      </div>        
';
}



benderContent("local", "loc", 9);