<?php 

Class Article {
private int $id_article;
 private int $id_categorie;

 private int $id_sous_category;
 private int $date_ajout_article;
 private int $affiche_article;  

function get_tous_articles($mysqli)
{

 $r="SELECT * FROM article INNER JOIN category on category.id_category=article.id_category 
LEFT JOIN sous_category on sous_category.id_s_category=article.id_sous_category";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}

function get_article_byId($mysqli,$id_article)
{

$r="SELECT * FROM article INNER JOIN category on category.id_category=article.id_category 
LEFT JOIN sous_category on sous_category.id_s_category=article.id_sous_category where id_article=$id_article";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_assoc($query);

return $data;
}
function get_article_byIdcategory($mysqli,$id_category)
{

 $r="SELECT * FROM article INNER JOIN category on category.id_category=article.id_category 
LEFT JOIN sous_category on sous_category.id_s_category=article.id_sous_category where article.id_category=$id_category";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}

function ajouter_article($mysqli,$titre_article,$id_category,$id_sous_category,$contenu,$ajout_par,
$date_ajout,$ip,$afficher_article,$image
)
{
    $existe="SELECT titre_article FROM article where titre_article='$titre_article' 
    and id_category='$id_category' and id_sous_category='$id_sous_category'";
    $query_existe=mysqli_query($mysqli,$existe);
if(mysqli_num_rows($query_existe)>0)
{
    return "-1";
}
else
{ 
         $r="INSERT INTO article values('','$titre_article','$id_category',
        '$id_sous_category','$contenu','$ajout_par','$date_ajout','$ip','$afficher_article','$image')";
        if(mysqli_query($mysqli,$r))
            {  
                return "1";
            }
        else 
            {
                return "0";
            }
}
}

function delete_utilisateur($mysqli,$id)
{
    $delete="DELETE  FROM utilisateurs where id='$id'";
    $query_delete=mysqli_query($mysqli,$delete);

}

}

?>