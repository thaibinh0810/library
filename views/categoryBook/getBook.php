<div id="nav">
    <h3>Category Book</h3>
    <?php
    $category = $this->category;
    foreach($category as $key=> $value)
    {    
    ?>
        <a href="<?php echo(URL)?>categoryBook/getBook/<?php echo($value->getCategoryId())?>"><?php echo ($value->getCategoryName()) ?></a><br />
        <?php
    }
    ?>
</div>

<div id="content">
    <?php 
    
    $book = $this->book;
    ?>
    <h3>List Book</h3>
    <table>
    
    <?php
        foreach($book as $key => $value)
        {
    ?> 
    <tr>
        <td style="width: 200px;"><a href="<?php echo (URL)?>categoryBook/detail/<?php echo($value->getBookId())?>"><?php echo ($value->getTitle())?></a></td>
        <td style="width: 50px;"><a href="<?php echo (URL)?>categoryBook/updateCategory/<?php echo($value->getBookId())?>">Edit</a></td>
        <td style="width: 50px;"><a href="<?php echo (URL)?>categoryBook/deleteCategory/<?php echo($value->getBookId())?>">Delete</a></td>
    </tr>
    
    <?php
        }
    ?>  
    <tr>
        <td colspan="3">
            <a href="<?php echo (URL)?>categoryBook/addCategory">Add Category</a>
        </td>
    </tr>
</table>
</div>