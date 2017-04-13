<?php

namespace Controller\Manager;

use Model\RestaurantsModel;

use Respect\Validation\Validator as v;
use Intervention\Image\ImageManagerStatic as i;

class ManagerrestoController extends \W\Controller\Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'manager/resto';

    public function listAll()
    {

        $this->show(SELF::PATH_VIEWS.'/list');
    }

    public function add()
    {
        $resto = [];
        $errors = [];

        $specialityAvailable = [
            'africaine' => 'Africaine',
            'brésilienne' => 'Brésilienne',
            'chinoise' => 'Chinoise',
            'créole' => 'Créole',
            'française' => 'Française',
            'indienne' => 'Indienne',
            'italienne' => 'Italienne',
            'japonaise' => 'Japonaise',
            'méditerranéenne' => 'Méditerranéenne',
            'mexicaine' => 'Mexicaine',
            'nord américaine' => 'Nord Américaine',
            'orientale' => 'Orientale',
            'sud américaine' => 'Sud Américaine',
            'vietnamienne' => 'Vietnamienne'
        ];

        $maxSize = (1024 * 1000) * 2;
        $uploadDir = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/upload/';

        // si le post n'est pas vide, on récupère les données "nettoyées"
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                $resto[$key] =trim(strip_tags($value));
                var_dump($_POST);
            }

            if (!v::notEmpty()->alnum('-!.,:')->length(3,30)->validate($resto['name'])) {
                $errors[] = 'Votre nom doit comporter entre 2 et 30 caractères';
            }

            if (!v::notEmpty()->email()->validate($resto['email'])) {
                $errors[] = 'Votre email n\'est pas valide';
            }

            if (!v::notEmpty()->alnum('_-?!.')->length(2,100)->validate($resto['address'])) {
                $errors[] = 'L\'adresse doit comporter entre 2 et 100 caractères';
            }

            if (v::numeric()->length(5,5)->validate($resto['zipcode'])) {
                $errors[] = 'Le code postale est incorrecte';
            }

            if (!v::length(2,20)->validate($resto['city'])) {
                $errors[] = 'La ville doit comporter entre 2 et 20 caractères';
            }

            if (!v::notEmpty()->numeric()->validate($resto['phone'])) {
                $errors[] = 'Numéro de téléphone incorrecte';
            }

            if (!v::notEmpty()->validate($resto['schedule'])) {
                $errors[] = 'Format de l\'horraire incorrecte';
            }

            if (!v::notEmpty()->validate($resto['speciality']) || !v::in([$resto['speciality'], $specialityAvailable])->validate($resto['speciality'])) {
                $errors[] = 'Erreur lors du choix de la spécialité';
            }

            if (!v::notEmpty()->length(2,255)->validate($resto['description'])) {
                $errors[] = 'La description doit comporter entre 2 et 255 caractères';
            }

            if (isset($_FILES['picture_header']) && $_FILES['picture_header']['error'] === 0) {
                $img = i::make($_FILES['picture_header']['tmp_name']);
                $size = $img->filesize();
                $mimetype = $img->mime();
                $ext = pathinfo($_FILES['picture_header']['name'], PATHINFO_EXTENSION);
                $newName = uniqid('img_').'.'.$ext;

                if ($maxSize < $size) {
                    $errors[] = 'Le fichier doit faire 2 Mo maximum';
                } else {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755);
                    }

                    if (!$img->save($uploadDir.$newName)) {
                        $errors[] = 'Erreur lors de l\'envoi de l\'image';
                    } else {
                        #ligne pour que mon image soit envoyée dans la base de donnée
                        $resto['picture_header'] = $uploadDir.$newName;
                    }
                } 
            } else {
                var_dump($_FILES['picture_header']['error']);
                $errors[] = 'Erreur lors de la réception de l\'image';
            }

            if (isset($_FILES['lightbox_one']) && $_FILES['lightbox_one']['error'] === 0) {
                $img = i::make($_FILES['lightbox_one']['tmp_name']);
                $size = $img->filesize();
                $mimetype = $img->mime();
                $ext = pathinfo($_FILES['lightbox_one']['name'], PATHINFO_EXTENSION);
                $newName = uniqid('lgt_').'.'.$ext;

                if ($maxSize < $size) {
                    $errors[] = 'Le fichier doit faire 2 Mo maximum';
                } else {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755);
                    }

                    if (!$img->save($uploadDir.$newName)) {
                        $errors[] = 'Erreur lors de l\'envoi de l\'image';
                    } else {
                        #ligne pour que mon image soit envoyée dans la base de donnée
                        $resto['lightbox_one'] = $uploadDir.$newName;
                    }
                }
            }

            if (isset($_FILES['lightbox_two']) && $_FILES['lightbox_two']['error'] === 0) {
                $img = i::make($_FILES['lightbox_two']['tmp_name']);
                $size = $img->filesize();
                $mimetype = $img->mime();
                $ext = pathinfo($_FILES['lightbox_two']['name'], PATHINFO_EXTENSION);
                $newName = uniqid('lgt_').'.'.$ext;

                if ($maxSize < $size) {
                    $errors[] = 'Le fichier doit faire 2 Mo maximum';
                } else {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755);
                    }

                    if (!$img->save($uploadDir.$newName)) {
                        $errors[] = 'Erreur lors de l\'envoi de l\'image';
                    } else {
                        #ligne pour que mon image soit envoyée dans la base de donnée
                        $resto['lightbox_two'] = $uploadDir.$newName;
                    }
                }
            }

            if (isset($_FILES['lightbox_three']) && $_FILES['lightbox_three']['error'] === 0) {
                $img = i::make($_FILES['lightbox_three']['tmp_name']);
                $size = $img->filesize();
                $mimetype = $img->mime();
                $ext = pathinfo($_FILES['lightbox_three']['name'], PATHINFO_EXTENSION);
                $newName = uniqid('lgt_').'.'.$ext;

                if ($maxSize < $size) {
                    $errors[] = 'Le fichier doit faire 2 Mo maximum';
                } else {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755);
                    }

                    if (!$img->save($uploadDir.$newName)) {
                        $errors[] = 'Erreur lors de l\'envoi de l\'image';
                    } else {
                        #ligne pour que mon image soit envoyée dans la base de donnée
                        $resto['lightbox_three'] = $uploadDir.$newName;
                    }
                }
            }

            //if (condition) {
            // code gmap
            // }

            if (count($errors) > 0) {
                $textError = implode('<br>',$errors);
                $result = '<p class="alert alert-danger">'.$textError.'</p>';
            } else {
                if ($usr->insert($resto)) {
                    $result = '<p class="alert alert-success">Le formulaire a bien été correctement envoyé !</p>';
                } else {
                    $result = '<p class="alert alert-danger">Erreur, le mail existe déjà !</p>';
                }
            }

        }

        $this->show(SELF::PATH_VIEWS.'/add', ['result'	=> (isset($result)) ? $result : null,'specialityAvailable' => $specialityAvailable]);

    }
    
    public function view($id)
    {

        $this->show(SELF::PATH_VIEWS.'/view');
    }

    public function up($id)
    {

        $this->show(SELF::PATH_VIEWS.'/up');
    }

    public function del($id)
    {

        $this->show(SELF::PATH_VIEWS.'/del');
    }
}