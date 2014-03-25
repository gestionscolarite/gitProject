<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
      
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
         //formulaire
        $form= new Application_Form_preinscription();
        $this->view->form = $form;
        
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            if ($form->isValid($data)) {
                
                
     $db = Zend_Db_Table_Abstract::getDefaultAdapter();
 //requette pour remplir l'element select apartir de bd
 
              
         
       //recuperation des valeurs saisis sur les champs formulaire
       
         $nom = $form->getValue('nom');
         $prenom= $form->getValue('prenom');
         $email= $form->getValue('email');
         $tel= $form->getValue('tel');
         $date= $form->getValue('date');
         $diplome=$form->getValue('diplome');
      
         $ann= $form->getValue('ann');
         $cin= $form->getValue('cin');
         $bac=$form->getValue("bac");
         
                
                
        //requette d'insertion des information de preinsciption
        
        
        $data = array(
        		'nom' => $nom,
        		'prenom' => $prenom,
        		'email' => $email,
        		'numTelephon' => $tel,
        		'dateNaissance' => $date,
        		'diplome' => $diplome,
        		'anneeObtentionBac' => $ann,
        		'typeBac' => $bac,
        		'identite' => $cin,
        
        );
        
        $db->insert('td_utilisateur', $data);
       
       //fin de requete d'insertion des information de preinscription
        }
        }
    }


}

