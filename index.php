<?php 
error_reporting(0);
require_once('includes/header.php');
?>
<?php
$apikey = "Your pixabay apikey here";
function checkOnline($url){
    $agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
    $ch=curl_init();
    curl_setopt ($ch, CURLOPT_URL,$url );
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch,CURLOPT_VERBOSE,false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_DEFAULT);
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
    $page=curl_exec($ch);
    $page=json_decode($page, true);
    return $page;
}

if(isset($_GET['b'])){
    $query=$_GET['q'];
    $query = preg_replace('/\s+/', '+', $query);
    $url="https://pixabay.com/api/?key=$apikey&q=$query&image_type=photo";
    $results=checkOnline($url);
    $itemsno=count($results['hits']);
    if(!$itemsno){
        echo '<div class="container">';
        echo '<div class="jumbotron jumbotron-fluid px-4 bg-dark text-white text-center">';
        echo '<h1 class="display-4">No images found :(</h1>';
        echo '</div>';
        echo '</div>';
    }
    echo '<div class="container-fluid">';
    $noarray=array(0,4,8,12,16);
    $i=0;
    foreach($results['hits'] as $res){
        if($i==0){
            echo '<div class="d-flex flex-row">';
        }
        if(in_array($i,$noarray)){
            if($i==0){
                echo '<div class="d-flex flex-column">';
            }else{
                echo '</div>';
                echo '<div class="d-flex flex-column">';
            }
        }
        echo '<img data-src="'.$res['webformatURL'].'" class="img-fluid shadow p-1 mb-1 bg-white rounded" alt="Responsive image">';
        if($i==19){
            echo '</div>';
        }
        $i++;
    }
    echo '</div>';
}else{
    echo '<div class="container">';
    echo '<div class="jumbotron jumbotron-fluid px-4 bg-dark text-white text-center">';
    echo '<h1 class="display-4">Welcome To Gallery!</h1>';
    echo '<p class="lead">This is a simple website which return images in response to your search query. All the images returned are free for commercial use.</p>';
    echo '</div>';
    echo '</div>';
}

?>
<?php
require_once('includes/footer.php');
?>