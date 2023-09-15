<?php include('../connexion.php');

//verifier si le bouton submit a été actionné

if(isset($_POST['submit'])){

     // vérifier si les autres données envoyées sont utilisables ;

     $id_filiere = check($_POST['id_filiere']);
     $nomFiliere = check($_POST['nomFiliere']);

    //vérifier et traiter la photo envoyée 
if($nomFiliere && $id_filiere ){

                 //On effectue la requete vers la base de données 
                $query = "INSERT INTO `filiere` (id_Filiere, nomFiliere)
                VALUES ( :id_Filiere,:nomFiliere )";
    
                $request = $pdo->prepare($query);
                $request->execute([
                        "id_Filiere" => $id_filiere,
                        "nomFiliere"=>$nomFiliere,
                

                        ]);

                        echo "<div class='alert alert-success'> L'ajout effectué avec succès ! </div>";
        
                
    
            
    }else {
        echo "Veuillez entrer toutes les variables !";
    }
        
} 
        
?>