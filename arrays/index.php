<?php

class Post
{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'SD', true),
    new Post('My Second Post', 'SD', true),
    new Post('My Third Post', 'LA', true),
    new Post('My Fourth Post', 'MM', false)
];

//$unpublishedPosts = array_filter($posts, function($post) {
//    return ! $post->published;
//});

//$publishedPosts = array_filter($posts, function($post) {
//    return $post->published;
//});

//var_dump($publishedPosts);

//foreach ($posts as $post) {
//    $post->published = true;
//}

//$modified = array_map(function($post) {
//    return ['title'=>$post->title];  //return (array) $post;
//}, $posts);

//$titles = array_map(function($post) {
//    return $post->title;
//}, $posts);

//$titles = array_column($posts, 'title');
//var_dump($titles);

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

//var_dump($posts);

//$titles = array_column($posts, 'title');
$authors = array_column($posts, 'author'/*,'title' folosit ca si cheie*/);
var_dump($authors);
