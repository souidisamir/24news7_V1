<?php 

Class Category {
 private int $id_categorie;
 private int $nom_categorie;
 private int $description_category;
 private int $date_ajout_category;
 private int $affiche_categorie;  

function get_tous_categorie($mysqli)
{

$r="SELECT * FROM category where affichage_category='O'";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}


function get_categorie_byId($mysqli,$id)
{

$r="SELECT * FROM category where affichage_category='O' and id_category='$id'";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}
function ajouter_categorie($mysqli,$nom_categorie,$description_category,$date_ajout_category,$affiche_categorie,$ajout_par)
{
    $existe="SELECT * FROM category where nom_category='$nom_categorie'";
    $query_existe=mysqli_query($mysqli,$existe);
if(mysqli_num_rows($query_existe)>0)
{
    return "-1";
}
else
{ 
        $r="INSERT INTO category values('','$nom_categorie','$description_category','$date_ajout_category','$affiche_categorie','$ajout_par')";
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