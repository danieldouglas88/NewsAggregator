<?php

$url = 'https://news.google.com/news/rss/headlines/section/topic/WORLD';
$xml = simplexml_load_file($url);

foreach($xml as $news) {
echo '
<div class="row" id="">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
              </h4>
              <h5>CATEGORY: WORLD</h5>
              <h4>' . $news->item->title . '</h4>
              <a href="' . $news->item->link . '">Source Page</a>
              <p>' . $news->item->description  . '<p>
              <br>
              <hr>
              <h4>' . $news->item[1]->title . '</h4>
              <a href="' . $news->item[1]->link . '">Source Page</a>
              <p>' . $news->item[1]->description  . '<p>
              <br>
              <hr>
              <h4>' . $news->item[2]->title . '</h4>
              <a href="' . $news->item[2]->link . '">Source Page</a>
              <p>' . $news->item[2]->description  . '<p>
            </div>
          </div>
      </div>
';
}

$url = 'https://news.google.com/news/rss/headlines/section/topic/TECHNOLOGY';
$xml = simplexml_load_file($url);

foreach($xml as $news) {
echo '
<br><div class="row" id="tech">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
              </h4>
              <h5>CATEGORY: TECHNOLOGY</h5>
              <h4>' . $news->item->title . '</h4>
              <a href="' . $news->item->link . '">Source Page</a>
              <p>' . $news->item->description  . '<p>
              <br>
              <hr>
              <h4>' . $news->item[1]->title . '</h4>
              <a href="' . $news->item[1]->link . '">Source Page</a>
              <p>' . $news->item[1]->description  . '<p>
              <br>
              <hr>
              <h4>' . $news->item[2]->title . '</h4>
              <a href="' . $news->item[2]->link . '">Source Page</a>
              <p>' . $news->item[2]->description  . '<p>
            </div>
          </div>
      </div>
';
}

$url = 'https://news.google.com/news/rss/headlines/section/topic/NATION';
$xml = simplexml_load_file($url);

foreach($xml as $news) {
echo '
<br><div class="row" id="UNITED STATES">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
              </h4>
              <h5>CATEGORY: US</h5>
              <h4>' . $news->item->title . '</h4>
              <a href="' . $news->item->link . '">Source Page</a>
              <p>' . $news->item->description  . '<p>
              <br>
              <hr>
              <h4>' . $news->item[1]->title . '</h4>
              <a href="' . $news->item[1]->link . '">Source Page</a>
              <p>' . $news->item[1]->description  . '<p>
              <br>
              <hr>
              <h4>' . $news->item[2]->title . '</h4>
              <a href="' . $news->item[2]->link . '">Source Page</a>
              <p>' . $news->item[2]->description  . '<p>
            </div>
          </div>
      </div>
';
}

