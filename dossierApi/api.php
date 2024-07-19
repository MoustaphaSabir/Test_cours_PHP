 <?php
 
$url = 'https://jsonplaceholder.typicode.com/posts';
$json_data = file_get_contents($url);
 
// Décoder les données JSON en un tableau associatif
$articles = json_decode($json_data, true);
 
// Afficher les données récupérées
print_r($articles);
foreach ($article as $articles) {
    echo $article['title'] . "<br>";
}
 
?>