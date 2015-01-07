<?php

/**
 * Ce fichier contient la classe Form_Etudiant_Ajouter.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * Ajouter une entrée Etudiant.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class Form_Etudiant_Ajouter
{
           
    public function init()
    {
        
        $id_etudiant = new Zend_Form_Element_Text('id_etudiant');
        $id_etudiant->setRequired(true)
            ->addValidators(array(new Zend_Validate_Int(), new Zend_Validate_StringLength()));
        
        $nom_etudiant = new Zend_Form_Element_Text('nom_etudiant');
        $nom_etudiant->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(250)));
        
        $prenom_etudiant = new Zend_Form_Element_Text('prenom_etudiant');
        $prenom_etudiant->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(250)));
        
        $domaine = new Zend_Form_Element_Text('domaine');
        $domaine->setRequired(true)
            ->addValidators(array(new Zend_Validate_Alnum(true), new Zend_Validate_StringLength(250)));
        
        
        
        $this->addElements(array($id_etudiant, $nom_etudiant, $prenom_etudiant, $domaine, ));             
   
    }
            
}