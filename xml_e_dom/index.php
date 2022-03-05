<?php
//creare un file XML
/* $films = [
    [
        'title' => 'Batman',
        'year' => '1989',
        'director' => 'Tim Burton',
        'plot' => 'The Dark Knight of Gotham City begins his war on crime with his first major enemy being the clownishly homicidal Joker.'
    ], [
        'title' => 'The StarWars Adventures',
        'year' => '2016',
        'director' => 'Tim Burton',
        'plot' => 'After splitting the Battalion into four companies, Thunder Company, under the command of Captain Mandeville, was sento to investigate...'
    ]
];

$dom = new DOMDocument('1.0', 'utf-8');

$root = $dom->createElement('root');

foreach ($films as $film) {
    $movie = $dom->createElement('film');
    $movie->setAttribute('movie', 1);
    foreach ($film as $tag => $value) {
        $element = $dom->createElement($tag);
        $text = $dom->createTextNode($value);
        $element->appendChild($text);
        $movie->appendChild($element);
    }
    $root->appendChild($movie);
}


$dom->appendChild($root);
header("content-type:text/XML");
echo $dom->saveXML();

//salvare un file XML
$dom->save('mymovies.xml'); //nella cartella ci sarà il file
 */
//leggere un file XML con php

$url = 'https://www.sitepoint.com/feed/';

$content = file_get_contents($url);

//echo $content;

$xml = simplexml_load_string($content);
//echo $xml;
//echo $xml->channel->title;
//echo $xml->channel->description;

foreach ($xml->channel->item as $item) {
    echo $item->title;
    echo "<br>" . $item->link;
}