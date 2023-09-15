<?php require_once('../connexion.php');

//verifier si le bouton submit a été actionné

if(isset($_POST['submit'])){

     // vérifier si les autres données envoyées sont utilisables ;
     $id = uniqid();
     $nom = check($_POST['nom']);
     $prenom = check($_POST['prenoms']);
     $genre = check($_POST['genre']);
     $date_naissance = check($_POST['date_naissance']);
     $date_naissance = date_formattage($date_naissance);
     $email = check($_POST['email']);
     $telephone = check($_POST['telephone']);
     $id_filiere = check($_POST['id_filiere']);

    //vérifier et traiter la photo envoyée 
if($id && $nom && $genre && $date_naissance && $email && $telephone && $id_filiere){

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Récupérer le type MIME du fichier
        $type = $_FILES['image']['type'];
        $img_name= $_FILES['image']['name'];

        // Vérifier si le type MIME est autorisé (par exemple, jpeg ou png)
        if ($type === 'image/jpeg' || $type === 'image/png') {


            // Définition du répertoire de stockage
            $extension = pathinfo($img_name, PATHINFO_EXTENSION);
            $destination = APP_PATH.'images'.DIR_SEPARATOR.basename("$id.$extension");

            // Déplacement du fichier téléchargé vers le dossier de destination
            if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                
                //On effectue la requete vers la base de données 
                $query = "INSERT INTO `Etudiant` (id_Etudiant, nomEtudiant, genre, date_Naissance, email, telephone, photo, id_Filiere)
                VALUES ( :id,:nom,:genre,:date_naissance,:email,:telephone,:photo,:id_filiere  )";
    
                $request = $pdo->prepare($query);
                $request->execute([
                
                        "id"=>$id,
                        "nom"=>$nom." ".$prenom,
                        "genre"=>$genre,
                        "date_naissance"=>$date_naissance,
                        "email"=>$email,
                        "telephone"=>$telephone,
                        "photo"=>$destination,
                        "id_filiere"=>$id_filiere
                        
                        ]);

                        echo "<div class='alert alert-success'> L'image et l'étudiant ont été sauvés avec succès. </div>";

        
            } else {
                echo "<div class='alert alert-danger'> Une erreur s'est produite lors de la sauvegarde de l'image. </div>";  
                
            }
        } else {
            echo "<div class='alert alert-danger'>Seuls les fichiers JPEG et PNG sont autorisés.</div>";
            die();
        }
    } else {
        echo "<div class='alert alert-danger'>Erreur lors du téléchargement du fichier.</div>";
        die();
    }

    
            
    }else {
        echo "Veuillez entrer toutes les variables !";
    }
        
} 
        
?>