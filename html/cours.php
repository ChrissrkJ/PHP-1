datasource : les données
config : tous les paramètres

functions : toutes mes fonctions


//print_r($_SERVER);
//POSTER SUR LA MEME PAGE
$method=$_SERVER['REQUEST_METHOD'];//défini la methode de réucpération de données
//lien = GET ou click btn = POST;
echo $method;


Pour qu'une fonctionsoit fiable il faut luipasser des vairables en interne pour travailler et non pas récupérer des vairables trop loin
