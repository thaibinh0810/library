<?php

require_once 'models/category.php';

class CategoryDAO extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * CategoryDAO::getCategoryByID()
     * 
     * Get category in database by category Id
     * 
     * @param mixed $id category ID
     * @return array 
     */
    public function getCategoryByID($id){
        $sql = 'SELECT * FROM category WHERE category_Id = ?';
        $categoryTemp = $this->db->prepare($sql);
        $categoryTemp->execute(array($id));
        
        
        $row = $categoryTemp->fetch();
        $result = new Category($row['category_Id'],$row['category_Name']);
        
        return $result;
    }
    
    /**
     * CategoryDAO::getAllCategory()
     * 
     * Get all category in database
     * 
     * @return array 
     */
    public function getAllCategory() {
        $result = array();
        $sql = 'SELECT * FROM category';
        $category = $this->db->query($sql);
        
        foreach ($category as $row) {
            $categoryTemp = new Category($row['category_Id'],$row['category_Name']);
            $result[] = $categoryTemp;
        }
        return $result;
    }
    
    /**
     * CategoryDAO::insertCategory()
     * 
     * Insert a category in database
     * 
     * @param mixed $category=> object Category
     * @return void
     */
    public function insertCategory($category){
        $sql = 'INSERT INTO category(category_Name) VALUES (?)';
        $categoryTemp = $this->db->prepare($sql);
        $categoryTemp->execute(array($category->getCategoryName()));
    }
    
    
    /**
     * CategoryDAO::updateCategory()
     * 
     * Update a category in database
     * 
     * @param mixed $id => category ID
     * @param mixed $category =>object category
     * @return void
     */
    public function updateCategory($id,$category){
        $sql = 'UPDATE category SET category_Name = ? WHERE category_Id = ?';
        $categoryTemp = $this->db->prepare($sql);
        $categoryTemp->execute(array($category->getCategoryName(),$id));
    }
    
    /**
     * CategoryDAO::deleteCategory()
     * 
     * Delete a category in database
     * 
     * @param mixed $id => category ID
     * @return void
     */
    public function deleteCategory($id){
        $sql = 'DELETE FROM category WHERE category_Id= ?';
        $categoryTemp = $this->db->prepare($sql);
        $categoryTemp->execute(array($id));
    }
    
}
?>