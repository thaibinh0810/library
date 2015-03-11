<?php

require_once 'models/author.php';
class AuthorDAO extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * AuthorDAO::getAuthorByID()
     * 
     * get author in database by author ID
     * @param mixed $id
     * @return (object) object Author
     */
    public function getAuthorByID($id){
        $sql = 'SELECT * FROM author WHERE author_Id = ?';
        $authorTemp = $this->db->prepare($sql);
        $authorTemp->execute(array($id));
        
        
        $row = $authorTemp->fetch();
        $result = new Author($row['author_Id'],$row['author_Name'],$row['author_Age']);
        
        return $result;
    }
    
    
    
    /**
     * AuthorDAO::getAllAuthor()
     * 
     * Get all author in database
     * 
     * @return (array) array authors
     */
    public function getAllAuthor() {
        $result = array();
        $sql = 'SELECT * FROM author';
        $author = $this->db->query($sql);
        
        foreach ($author as $row) {
            $authorTemp = new Author($row['author_Id'],$row['author_Name'],$row['author_Age']);
            $result[] = $authorTemp;
        }
        return $result;
    }
    
    
    
    /**
     * AuthorDAO::insertAuthor()
     * 
     * Insert a author in database
     * 
     * @param mixed $author object author
     * @return void 
     */
    public function insertAuthor($author){
        $sql = 'INSERT INTO author(author_Name,author_Age) VALUES (?,?)';
        $authorTemp = $this->db->prepare($sql);
        $authorTemp->execute(array($author->getauthorName(),$author->getAuthorAge()));
    }
    
    
    /**
     * AuthorDAO::updateAuthor()
     * 
     * Update a author in database
     * 
     * @param mixed $id author ID
     * @param mixed $author object author 
     * @return void
     */
    public function updateAuthor($id,$author){
        $sql = 'UPDATE author SET author_Name = ?, author_Age=? WHERE author_Id = ?';
        $authorTemp = $this->db->prepare($sql);
        $authorTemp->execute(array($author->getauthorName(),$author->getAuthorAge(),$id));
    }
    
 
    /**
     * AuthorDAO::deleteAuthor()
     * 
     * Delete a author in database
     * 
     * @param mixed $id author ID
     * @return void
     */
    public function deleteAuthor($id){
        $sql = 'DELETE FROM author WHERE author_Id= ?';
        $authorTemp = $this->db->prepare($sql);
        $authorTemp->execute(array($id));
    }
}
?>