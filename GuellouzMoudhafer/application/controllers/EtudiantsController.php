<?php

/**
 * Ce fichier contient la classe EtudiantsController.
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
*/

/**
 * // TODO :: Description du contrôleur //
 *
 * @copyright  2008 Gabriel Malkas
 * @license    "New" BSD License
 */
class EtudiantsController
{

    /**
     * // TODO :: Description de l'action //
     *
     * @return void
     */
    public function indexAction()
    {
        
        $this->view->etudiants = Etudiant::get();
        
        echo $this->view->render('etudiants/index.tpl');
    }
    
    /**
     * // TODO :: Description de l'action //
     *
     * @return void
     */
    public function ajouterAction()
    {
        
        // On crée une instance du formulaire
        $form = new Form_Etudiant_Ajouter();
        
        if ($this->getRequest()->isPost()) {
             
            if ($form->isValid( $this->getRequest()->getPost() )) {
                
                try {
                    Etudiant::add($form->getValues());
                    $this->_redirect('/Etudiants');
                }catch (Zend_Db_Exception $e) {
                    $this->view->messages = array('DbError' => $e->getMessage());
                }               
                
            } else {
                $this->view->values = $form->getValues();
                $this->view->messages = $form->getMessages();
            }

        }
        
    }
    
    /**
     * // TODO :: Description de l'action //
     *
     * @return void
     */
    public function modifierAction()
    {
        
        $id_etudiant = $this->getRequest()->getParam( 'id_etudiant' );
        $etudiant = Etudiant::findByid_etudiant('id_etudiant');
        
        if ($etudiant == null) {
            $this->_redirect('/Etudiants');
        }
    
        // On crée une instance du formulaire
        $form = new Form_Etudiant_Modifier();
        
        if ($this->getRequest()->isPost()) {
             
            if ($form->isValid( $this->getRequest()->getPost() )) {
                
                try {
                    Etudiant::edit($id_etudiant, $form->getValues());
                    $this->_redirect('/Etudiants');
                }catch (Zend_Db_Exception $e) {
                    $this->view->messages = array('DbError' => $e->getMessage());
                }               
                
            } else {
                $this->view->values = $form->getValues();
                $this->view->messages = $form->getMessages();
            }

        }
    }
    
    /**
     * // TODO :: Description de l'action //
     *
     * @return void
     */
    public function supprimerAction()
    {
    
        $id_etudiant = $this->getRequest()->getParam( 'id_etudiant' );
        $etudiant = Etudiant::findByid_etudiant('id_etudiant');
        
        if ($etudiant == null) {
            $this->_redirect('/Etudiants');
        }
    
        // On crée une instance du formulaire
        $form = new Form_Etudiant_Supprimer();
        
        if ($this->getRequest()->isPost()) {
             
            if ($form->isValid( $this->getRequest()->getPost() )) {
                
                try {
                    Etudiant::remove(id_etudiant);
                    $this->_redirect('/Etudiants');
                }catch (Zend_Db_Exception $e) {
                    $this->view->messages = array('DbError' => $e->getMessage());
                }               
                
            } else {
                $this->view->values = $form->getValues();
                $this->view->messages = $form->getMessages();
            }

        }
        
    }

}