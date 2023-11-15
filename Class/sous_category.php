<?php 

Class Sous_category {
 private int $id_s_categorie;
 private int $nom_s_categorie;
 private int $description_s_category;
 private int $date_ajout_s_category;
 private int $affiche_s_categorie;  


function get_tous_s_categorie($mysqli)
{

 $r="SELECT * FROM `sous_category` INNER JOIN category on category.id_category=sous_category.id_category
 where affichage_s_category='O' ";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}

function get_tous_s_categorie_byID($mysqli,$id_cat)
{

  $r="SELECT * FROM sous_category where affichage_s_category='O' and id_category=$id_cat";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}
function ajouter_s_categorie($mysqli,$nom_s_categorie,$description_s_category,
$date_ajout_s_category,$affiche_s_categorie,$id_category,$ajout_par)
{
    $existe="SELECT * FROM sous_category where nom_s_category='$nom_s_categorie'";
    $query_existe=mysqli_query($mysqli,$existe);
if(mysqli_num_rows($query_existe)>0)
{
    return "-1";
}
else
{ 
        $r="INSERT INTO sous_category values('','$nom_s_categorie','$description_s_category','$date_ajout_s_category',
        '$affiche_s_categorie','$id_category','$ajout_par')";
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

function delete_categorie($mysqli,$id)
{
    $delete="DELETE  FROM category where id_category='$id'";
    $query_delete=mysqli_query($mysqli,$delete);

}

}

?>