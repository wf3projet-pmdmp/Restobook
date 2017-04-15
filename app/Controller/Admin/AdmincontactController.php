<?php

namespace Controller\Admin;

use \W\Controller\Controller;
use Model\ContactModel;
use Model\RestaurantsModel;

class AdmincontactController extends Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'admin/contact';

    // Liste contact
    public function listAll()
    {
        $contactModel = new ContactModel();
        $contacts = $contactModel->unread();
        $params = [
            'contacts' => $contacts
        ];

        $this->show(SELF::PATH_VIEWS.'/list', $params);

    } // END Méthode listAll()

    // Détail contact
    public function view($id)
    {
        $contactModel = new ContactModel();
        $contact = $contactModel->find($id);

        $params = [
            'contact' => $contact,
        ];
        
        if(!empty($_GET)) {
            var_dump($_GET);

            // On reconstruit les données en retirant les espaces en début et fin de chaîne (trim)
            // Puis en supprimant les balises html & php
            foreach($_GET as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }

            if(isset($post['check'])){
                
                $datas = [
                    'msgread'   => 1,

                ];
                var_dump($id);

                $contactmodel = new ContactModel();
                $readmsg = $contactmodel->update($datas, $id);
            }
                    
                 
        }
        $this->show(SELF::PATH_VIEWS.'/view', $params);
        
    } // END Méthode view()
    
    public function listread()
    {
        $contactmodel = new ContactModel();
        $read = $contactmodel->read();
        
        $params = [
            'read'  => $read    
        ];
        
        $this->show(SELF::PATH_VIEWS.'/listread', $params);
    }
    
    
} // END AdmincontactController