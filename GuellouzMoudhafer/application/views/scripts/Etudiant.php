<?php

require_once 'Zend/Db/Table/Abstract.php';


class Etudiant extends Zend_Db_Table_Abstract
{
    
    /*
     * Nom de la table.
     */
    protected $_name = 'etudiant';
    
    /*
     * Clé primaire de la table.
     */
    protected $_primary = 'id_etudiant';
    
    /**
     * Recherche une entrée Etudiant avec la clé primaire spécifiée
     * et modifie cette entrée avec les nouvelles données.
     *
     * @param integer $id
     * @param array $data
     *
     * @return void
     */
    public static function edit($id, $data)
    {        
        $db = Zend_Registry::get('dbAdapter');
        $db->update('etudiant', $data, 'etudiant.id_etudiant = ' . $id);
    }
    
    /**
     * Recherche une entrée Etudiant avec la clé primaire spécifiée
     * et supprime cette entrée.
     *
     * @param integer $id
     *
     * @return void
     */
    public static function remove($id)
    {
        $db = Zend_Registry::get('dbAdapter');
        $db->delete('etudiant', 'etudiant.id_etudiant = ' . $id);
    }
    
    /**
     * Récupère toutes les entrées Etudiant avec certains critères
     * de tri, intervalles
     */
    public static function get($order=null, $limit=0, $from=0)
    {
        $db = Zend_Registry::get('dbAdapter');
        
        $query = $db->select()
                    ->from( array("%ftable%" => "etudiant") );
                    
        if($order != null)
        {
            $query->order($order);
        }

        if($limit != 0)
        {
            $query->limit($limit, $from);
        }

        return $db->fetchAll($query);
    }
    
    /*
     * Recherche une entrée Etudiant avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param int $id_etudiant
     */
    public static function findById_etudiant($id_etudiant)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("e" => "etudiant") )                           
                    ->where( "e.id_etudiant = " . $id_etudiant );

        return $db->fetchRow($query); 
    }
    /*
     * Recherche une entrée Etudiant avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param varchar $nom_etudiant
     */
    public static function findByNom_etudiant($nom_etudiant)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("e" => "etudiant") )                           
                    ->where( "e.nom_etudiant = " . $nom_etudiant );

        return $db->fetchRow($query); 
    }
    /*
     * Recherche une entrée Etudiant avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param varchar $prenom_etudiant
     */
    public static function findByPrenom_etudiant($prenom_etudiant)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("e" => "etudiant") )                           
                    ->where( "e.prenom_etudiant = " . $prenom_etudiant );

        return $db->fetchRow($query); 
    }
    /*
     * Recherche une entrée Etudiant avec la valeur spécifiée
     * et retourne cette entrée.
     *
     * @param varchar $domaine
     */
    public static function findByDomaine($domaine)
    {
        $db = Zend_Registry::get('dbAdapter');

        $query = $db->select()
                    ->from( array("e" => "etudiant") )                           
                    ->where( "e.domaine = " . $domaine );

        return $db->fetchRow($query); 
    }
    
    
}
