<?php

class Application_Form_inscription extends Zend_Form {
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
        $tel->setLabel("Numero de Telephone *:");
        $tel->setRequired(true);
        $tel->setAttrib('placeholder', 'Numero de Tel ');
        
        
        $ville = new Zend_Form_Element_Text("ville");
        $ville->setLabel("Ville de naissance *:");
        $ville->setRequired(true);
        $ville->setAttrib('placeholder', 'votre ville');
      
    
        $adresse = new Zend_Form_Element_Text("adresse");
        $adresse->setLabel("Votre adresse *:");
        $adresse->setRequired(true);
        $adresse->setAttrib('placeholder', 'votre adresse');
        
        
        
         
           $array = array('Mr'=>'Mr',
                     'Mme'=>'Mme',
                   'Mlle'=>'Mlle',
                     
            
                     );
      $civilite= new Zend_Form_Element_select("civilite");
      $civilite->setLabel('Civilite *:');
      $civilite->setValue('civilite');
      $civilite->setMultiOptions($array);


        //$this->addElement($bac);
         
          $nationalite = new Zend_Form_Element_Radio('nationalite');
        $nationalite->setLabel('Nationalite:');
        $nationalite->setRequired(true);
           $nationalite ->addMultiOptions(array(
                    'Marocain' => 'Marocain',
                    'Etranger' => 'Etranger' 
                        ));
        
         //$this->addElement($national);
         
         
        
         
        
           
        $valider = new Zend_Form_Element_Submit("Valider");

        $valider->setLabel("Enregistrer");
        
 $this->addElements(array($nom,$prenom,$civilite,$email,$tel,$nationalite,$date,$ville,$adresse,$valider));
        


         


        
    }
      
    
    
    
    
    
    
}

?>

