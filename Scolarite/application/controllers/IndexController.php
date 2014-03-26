<?php 
class indexController extends Zend_Controller_Action
{

    public function init()
    {
      
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
         //formulaire
        $Finscription= new Application_Form_inscription();
        $this->view->inscription = $Finscription;
        
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            if ($Finscription->isValid($data)){
                
                
 //recupération des information de l'inscription depuis le fomulaire 
 
                $nom = $Finscription->getValue('nom');
                $prenom=$Finscription->getValue('prenom');
                $civilite=$this->getRequest()->getParam('civilite');
                $email=$Finscription->getValue('email');
                $tel=$Finscription->getValue('tel');
                $nationalite=$Finscription->getValue('nationalite');
                $date=$Finscription->getValue('date');
                $ville=$Finscription->getValue('ville');
                $adresse=$Finscription->getValue('adresse');
                
      // insertion des information de l'inscription dans le formulaire
      
      $db = Zend_Db_Table_Abstract::getDefaultAdapter();
                $inscriptionInfo = array(
                		'nom' => $nom,
                		'prenom' => $prenom,
                		'email' => $email,
                		'telephon' => $tel,
                		'date_naissance' => $date,
                		'adresse' => $adresse,
                		'ville' => $ville,
                		'civilite' => $civilite,
                		'nationalite' => $nationalite,
                
                );
                
                $db->insert('t_etudiant', $inscriptionInfo);
          echo "<script>alert(\"Votre inscription a été effectué avec succés \")</script>";
                
            }
        }}}