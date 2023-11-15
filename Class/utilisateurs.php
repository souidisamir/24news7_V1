<?php 

Class Utilisateurs {
 private int $id_categorie;
 private int $nom_categorie;
 private int $description_category;
 private int $date_ajout_category;
 private int $affiche_categorie;  

function get_tous_utilisateurs($mysqli)
{

$r="SELECT * FROM utilisateurs ";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}


function get_utilisateurs_byId($mysqli,$id)
{

 $r="SELECT * FROM utilisateurs where  id='$id'";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}
function connexion_by_email_password($mysqli,$email,$mot_de_passe)
{
$r="SELECT * FROM utilisateurs where  email='$email' and mot_de_passe='$mot_de_passe'";
$query=mysqli_query($mysqli,$r);


return mysqli_num_rows($query);
}
function get_utilisateur_by_email($mysqli,$email)
{
$r="SELECT * FROM utilisateurs where  email='$email' ";
$query=mysqli_query($mysqli,$r);

 $data=mysqli_fetch_all($query);

return $data;
}
function ajouter_utilisateurs($mysqli,$nom,$prenom,
$email,$mot_de_passe,$telephone,$date_ajout,$role,$bloque,$image,$ip)
{
    $existe="SELECT email FROM utilisateurs where email='$email'";
    $query_existe=mysqli_query($mysqli,$existe);
if(mysqli_num_rows($query_existe)>0)
{
    return "-1";
}
else
{ 
         $r="INSERT INTO utilisateurs values('','$nom','$prenom',
        '$email','$mot_de_passe','$telephone','$date_ajout','$role','$bloque','$image','$ip')";
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