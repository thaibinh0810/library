<div id="nav">
    
</div>

<div id="content">
    <?php 
    
    $book = $this->book;
    $author = $this->author;
    $category = $this->category;
    ?>
    <h3>Information Book</h3>
    <table>
    <tr>
        <td style="width: 100px;">Title</td>
        <td style="width: 200px;"><?php echo($book->getTitle())?></td>
    </tr>
    <tr>
        <td>Author</td>
        <td><?php echo($author->getAuthorName())?></td>
    </tr>
    <tr>
        <td>Category</td>
        <td><?php echo($category->getCategoryName())?></td>
    </tr>
</table>
</div>