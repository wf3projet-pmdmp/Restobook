<?php

namespace Controller\Admin;

use \W\Controller\Controller;
use Model\RestaurantsModel;
use Model\UsersModel;
use Respect\Validation\Validator as v;
use Intervention\Image\ImageManagerStatic as i;

class AdminrestoController extends Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'admin/resto';

    public function listAll()
    {
        $restoModel = new RestaurantsModel();
        $restos = $restoModel->findAll();
        $params = [
            'restos' => $restos
        ];

        $this->show(SELF::PATH_VIEWS.'/list', $params);
    }

    public function add()
    {
        $resto = [];
        $errors = [];
        $lightOne = '';
        $lightTwo = '';
        $lightThree = '';
        

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
        
        $restoModel = new RestaurantsModel();
        $restos = $restoModel->findAll();

        $maxSize = (1024 * 1000) * 2;
        $uploadDir = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets/upload/';

        // si le post n'est pas vide, on récupère les données "nettoyées"
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                $resto[$key] =trim(strip_tags($value));
            }

            if (!v::notEmpty()->alnum('-!.,:')->length(3,30)->validate($resto['name'])) {
                $errors[] = 'Le nom doit comporter entre 2 et 30 caractères';
            }

            if (!v::notEmpty()->email()->validate($resto['email'])) {
                $errors[] = 'L\'email n\'est pas valide';
            }

            if (!v::notEmpty()->alnum('_-?!.')->length(2,100)->validate($resto['address'])) {
                $errors[] = 'L\'adresse doit comporter entre 2 et 100 caractères';
            }

            if (v::numeric()->length(4,4)->validate($resto['zipcode'])) {
                $errors[] = 'Le code postale est incorrecte';
            }

            if (!v::length(2,20)->validate($resto['city'])) {
                $errors[] = 'La ville doit comporter entre 2 et 20 caractères';
            }

            if (!v::notEmpty()->numeric()->validate($resto['phone'])) {
                $errors[] = 'Numéro de téléphone incorrecte';
            }

            if (!v::notEmpty()->validate($resto['schedule'])) {
                $errors[] = 'Format de l\'horaire incorrecte';
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
                $newNameOne = uniqid('lgt_').'.'.$ext;

                if ($maxSize < $size) {
                    $errors[] = 'Le fichier doit faire 2 Mo maximum';
                } else {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755);
                    }

                    if (!$img->save($uploadDir.$newNameOne)) {
                        $errors[] = 'Erreur lors de l\'envoi de l\'image';
                    } else {
                        #ligne pour que mon image soit envoyée dans la base de donnée
                        $resto['lightbox_one'] = $uploadDir.$newNameOne;
                        $lightOne = 'upload/'.$newNameOne;
                    }
                }
            }

            if (isset($_FILES['lightbox_two']) && $_FILES['lightbox_two']['error'] === 0) {
                $img = i::make($_FILES['lightbox_two']['tmp_name']);
                $size = $img->filesize();
                $mimetype = $img->mime();
                $ext = pathinfo($_FILES['lightbox_two']['name'], PATHINFO_EXTENSION);
                $newNameTwo = uniqid('lgt_').'.'.$ext;

                if ($maxSize < $size) {
                    $errors[] = 'Le fichier doit faire 2 Mo maximum';
                } else {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755);
                    }

                    if (!$img->save($uploadDir.$newNameTwo)) {
                        $errors[] = 'Erreur lors de l\'envoi de l\'image';
                    } else {
                        #ligne pour que mon image soit envoyée dans la base de donnée
                        $resto['lightbox_two'] = $uploadDir.$newNameTwo;
                        $lightTwo = 'upload/'.$newNameTwo;
                    }
                }
            }

            if (isset($_FILES['lightbox_three']) && $_FILES['lightbox_three']['error'] === 0) {
                $img = i::make($_FILES['lightbox_three']['tmp_name']);
                $size = $img->filesize();
                $mimetype = $img->mime();
                $ext = pathinfo($_FILES['lightbox_three']['name'], PATHINFO_EXTENSION);
                $newNameThree = uniqid('lgt_').'.'.$ext;

                if ($maxSize < $size) {
                    $errors[] = 'Le fichier doit faire 2 Mo maximum';
                } else {
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755);
                    }

                    if (!$img->save($uploadDir.$newNameThree)) {
                        $errors[] = 'Erreur lors de l\'envoi de l\'image';
                    } else {
                        #ligne pour que mon image soit envoyée dans la base de donnée
                        $resto['lightbox_three'] = $uploadDir.$newNameThree;
                        $lightThree = 'upload/'.$newNameThree;
                    }
                }
            }

            //if (condition) {
            // code gmap
            // }

            if (count($errors) === 0) {
                $datas = ["name"                => $resto["name"],
                          "email"               => $resto["email"],
                          "address"             => $resto["address"],
                          "zipcode"             => $resto["zipcode"],
                          "city"                => $resto["city"],
                          "phone"               => $resto["phone"],
                          "schedule"            => $resto["schedule"],
                          "speciality"          => $resto["speciality"],
                          "description"         => $resto["description"],
                          "picture_header"      => 'upload/'.$newName,
                          "lightbox_one"        => $lightOne,
                          "lightbox_two"        => $lightTwo,
                          "lightbox_three"      => $lightThree,
                          "id_user"             => 1,
                         ];

                
                $restoModel->insert($datas);
                $success = true;
                
                $result = '<p class="alert alert-success">Le formulaire a bien été correctement envoyé !</p>';
            } else {
                $textError = implode('<br>',$errors);
                $result = '<p class="alert alert-danger">'.$textError.'</p>';
            }
        
        }

        $this->show(SELF::PATH_VIEWS.'/add', ['result'	=> (isset($result)) ? $result : null,'specialityAvailable' => $specialityAvailable]);

    }
    
    public function view($id)
    {
        $restoModel = new UsersModel();
        $restos = $restoModel->proprio($id);
        
        $params = [
            'restos' => $restos,
        ];
        $this->show(SELF::PATH_VIEWS.'/view', $params);

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