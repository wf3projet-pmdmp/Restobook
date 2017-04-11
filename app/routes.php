<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/legal', 'Default#legal', 'default_legal'],
		['GET', '/credits', 'Default#credits', 'default_credits'],
        
    // Restaurants
        ['GET|POST', '/restaurant/list', 'Restaurant\Restoview#listAll','resto_listresto'],
        ['GET|POST', '/restaurant/fiche/[i:id]', 'Restaurant\Restoview#view','resto_viewresto'], // Vue restaurant   
        ['GET|POST', '/restaurant/fiche/[i:id]', 'Restaurant\Restoview#contactresto','resto_contactresto'], // Contact Resto
        ['GET', '/restaurant/fiche/[i:id]', 'Restaurant\Restocustomer#showcoupon','resto_coupon'],
        ['GET|POST', '/restaurant/fiche/[i:id]', 'Restaurant\Restocustomer#reserv','resto_reservation'],
        
    // Utilisateur
        ['GET|POST', '/users/register', 'Users\Users#register','users_register'], // Inscription
        ['GET|POST', '/users/login', 'Users\Users#login','users_login'], // Login
        ['GET|POST', '/users/logout', 'Users\Users#logout','users_logout'], // Logout
        ['GET|POST', '/users/update', 'Users\Users#update','users_update'], // Update
        ['GET|POST', '/users/forgottenpw', 'Users\Userspw#pwforgot','users_pwforgot'], // Mot de passe oublié
        ['GET|POST', '/users/newpass', 'Users\Userspw#newpass','users_newpass'], // Generation nouveau mot de passe
        
    // Back Restaurateur
        ['GET|POST', '/resto/fiche/back', 'Manager\Manager#home','manager_home'],
        ['GET|POST', '/resto/fiche/back/listresto', 'Manager\Managerresto#listAll','manager_listall'], // Liste restos pour un restaurateur
        ['GET|POST', '/resto/fiche/back/addresto', 'Manager\Managerresto#add','manager_add'], // Formulaire ajout resto
        ['GET|POST', '/resto/fiche/back/resto/[i:id]', 'Manager\Managerresto#view','manager_view'], // Vue resto
        ['GET|POST', '/resto/fiche/back/resto/[i:id]/update', 'Manager\Managerresto#up','manager_up'], // Vue update resto
        ['GET|POST', '/resto/fiche/back/resto/[i:id]/delete', 'Manager\Managerresto#del','manager_del'], // Vue delete resto
        ['GET|POST', '/resto/fiche/back/listcontact', 'Manager\Managercontact#listAll','manager_listcontact'], // Vue demande contact
        ['GET|POST', '/resto/fiche/back/contact', 'Manager\Managercontact#view','manager_viewcontact'], // Vue demande contact
        ['GET|POST', '/resto/fiche/back/coupon', 'Manager\Managercustomer#createCoupon','manager_coupon'], // Vue demande contact
        ['GET|POST', '/resto/fiche/back/listreserv', 'Manager\Managercustomer#listReserv','manager_reserv'], // Vue reservation
        
        
    // Back Admin
        ['GET|POST', '/admin', 'Admin\Admin#home','admin_home'], // Accueil Back Office
        ['GET|POST', '/admin/utilisateurs', 'Admin\Adminusers#listAll','admin_listusers'], // Liste utilisateurs
        ['GET|POST', '/admin/utilisateurs/view/[i:id]', 'Admin\Adminusers#view','admin_viewuser'], // Vue utilisateur
        ['GET|POST', '/admin/utilisateurs/add/[i:id]', 'Admin\Adminusers#add','admin_adduser'], // Vue utilisateur
        ['GET|POST', '/admin/utilisateurs/update/[i:id]', 'Admin\Adminusers#up','admin_updateuser'], // Update utilisateur
        ['GET|POST', '/admin/utilisateurs/delete/[i:id]', 'Admin\Adminusers#del','admin_deluser'], // delete utilisateur
        ['GET|POST', '/admin/restaurants', 'Admin\Adminresto#listAll','admin_listresto'], // Liste des restos
        ['GET|POST', '/admin/restaurants/view/[i:id]', 'Admin\Adminresto#view','admin_viewresto'], // Vue Resto
        ['GET|POST', '/admin/restaurants/add/[i:id]', 'Admin\Adminresto#add','admin_addresto'], // Vue Resto
        ['GET|POST', '/admin/restaurants/update/[i:id]', 'Admin\Adminresto#up','admin_updateresto'], // Update Resto
        ['GET|POST', '/admin/restaurants/delete/[i:id]', 'Admin\Adminresto#del','admin_delresto'],// delete restaurant
        ['GET|POST', '/admin/contact', 'Admin\Admincontact#listAll','admin_listcontact'], // demande contact
        ['GET|POST', '/admin/contact/[i:id]', 'Admin\Admincontact#view','admin_viewcontact'], // demande contact
        ['GET|POST', '/admin/reservation', 'Admin\Adminreserv#listAll','admin_listreserv'], // liste reservation
        ['GET|POST', '/admin/reservation/[i:id]', 'Admin\Adminreserv#view','admin_viewreserv'] // liste reservation
        
	);