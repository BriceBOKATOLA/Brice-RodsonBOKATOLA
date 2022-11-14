<?php 

require_once __DIR__ .'./libraries/db.php';

 ?>
<?php
/**
 * Fonction qui permet de récupérer le tableau des enregistrements de la table des liens
 * @return array
 */
function get_all_link()
{
    // TODO implement function
    {
        $db = db_connect();
    
        $sql = <<<EOD
        SELECT
            `link_id`,
            `title`,
            `url`    
        FROM
            `links_manager_dev`
        EOD;
        $urlLink = $db->query($sql);
        $url = $urlLink->fetchAll(PDO::FETCH_ASSOC);
        return $url;
    }
}


/**
 * Fonction qui permet de récupérer un enregistrement à partir de son identifiant dans la table des liens
 * @param integer $link_id
 * @return array
 */
function get_link_by_id($link_id)
{
    // TODO implement function
    {
        $db = db_connect();
    
        $sql = <<<EOD
        SELECT
            `link_id`
        FROM
            `links_manager_dev`
        EOD;
        $Linkid = $db->query($sql);
        $link_id = $Linkid->fetchAll(PDO::FETCH_ASSOC);
        
    }
    return $link_id;
}


/**
 * Fonction qui permet de modifier un enregistrement dans la table des liens
 * @param array $data: ['link_id' => 1, 'title' => 'MDN', 'url' => 'https://developer.mozilla.org/fr/']
 * @return bool
 */
function update_link($data)
{
    // TODO implement function
    
}


/**
 * Fonction qui permet de d'enregistrer un nouveau lien dans la table des liens
 * @param array $data: ['title' => 'MDN', 'url' => 'https://developer.mozilla.org/fr/']
 * @return bool
 */
function create_link($data)
{
    // TODO implement function
}

/**
 * Fonction qui permet de supprimer l'enregistrement dont l'identifiant est $linl_id dans la table des liens
 *@param integer $link_id
 * @return bool
 */
function delete_link($link_id)
{
    // TODO implement function
}
