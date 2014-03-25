<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of preinscription
 *
 * @author 
 */
class Application_Form_preinscription extends Zend_Form {
    //put your code here
    
    public function init() {
         
       $this->setMethod('post');
       
       $nom= new Zend_Form_Element_Text('nom');
       $nom->setLabel('Nom *: ');
       $nom->setRequired(true);
       $nom->setAttrib('placeholder', 'Votre Nom');
       //$this->addElement($nom);
       
       
       
         $prenom= new Zend_Form_Element_Text('prenom');
         $prenom->setLabel('Prenom *:');
         $prenom->setRequired(true);
         $prenom->setAttrib('placeholder', 'Votre Prenom');
         //$this->addElement($prenom);
     
      
        $date= new Zend_Form_Element_Text('date');
         $date->setLabel('Date de naissance *:');
         $date->setRequired(true);
          $date->addValidators(array(
                        array('validator'=>'Date','options'=>array('setFormat'=>'d/M/Y'))
               ));
         $date->setAttrib('placeholder', 'Date de naissance ');
         //$this->addElement($date);
         
         
         $email = new Zend_Form_Element_Text("email");
        $email->setLabel("Email *:");
        $email->setRequired(true);
        $email->setAttrib('placeholder', 'Votre Email');
        $email->addValidator('EmailAddress');
         //$this->addElement($email);
         
          $tel = new Zend_Form_Element_Text("tel");
        $tel->setLabel("Telephone *:");
        $tel->setRequired(true);
        $tel->setAttrib('placeholder', 'Numero de Tel ');
      
         //$this->addElement($tel);
         
        $array= array('doctorat'=>'doctorat',
                      'master'=>'master',
                      'diplome ingenieur'=>'diplome ingenieur',
                      'licence'=> 'licence',
                      'licence professtionnelle'=> 'licence professtionnelle',
                     );
         
         
        $diplome= new Zend_Form_Element_select("diplome");
        $diplome->setLabel('Diplome *:');
      $diplome->setValue('diplome');
      $diplome->setRegisterInArrayValidator(false);
      $diplome->setMultiOptions($array);

        //$this->addElement($diplome);
         
         
      
            $ann = new Zend_Form_Element_Text("ann");
        $ann->setLabel("Annee  *:");
        $ann->setRequired(true);
        $ann->setAttrib('placeholder', 'annee d obtention');
      
         //$this->addElement($ann);
         
           $array1 = array('scientifique'=>'scientifique',
                     'litteraire'=>'litteraire',
                     'science math'=>'science math',
                      'technique'=>'technique',
            
                     );
        $bac= new Zend_Form_Element_select("bac");
        $bac->setLabel('Type de bac *:');
      $bac->setValue('bac');
      $bac->setMultiOptions($array1);


        //$this->addElement($bac);
         
          $national = new Zend_Form_Element_Radio('national');
        $national->setLabel('Nationalite:');
        $national->setRequired(true);
           $national ->addMultiOptions(array(
                    'male' => 'Marocain',
                    'female' => 'Etranger' 
                        ));
        
         //$this->addElement($national);
         
         
         
         

   $cin= new Zend_Form_Element_Text('cin ');
         $cin->setLabel('piece d identite *:');
       
         $cin->setAttrib('placeholder', 'CIN ');
         $cin->setRequired(true);
         //$this->addElement($cin);
         
         
         
         
         
         
         $pass= new Zend_Form_Element_Text('pass ');
        
         $pass->setRequired(true);
         $pass->setAttrib('placeholder', 'Passport ');
         //$this->addElement($pass);
         
        
           
        $valider = new Zend_Form_Element_Submit("Valider");

        

        $valider->setLabel("Enregistrer");
 $this->addElements(array($nom,$prenom,$date,$email,$tel,$diplome,$ann,$bac,$national,$cin,$pass,$valider));
        

//$this->addElement($valider);
         


        
    }
      
    
    
    
    
    
    
}

?>
