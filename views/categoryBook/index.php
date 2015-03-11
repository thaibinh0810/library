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
    ?>
    <h3>List Category</h3>
    <table>
    
    <?php
        foreach($category as $key => $value)
        {
    ?> 
    <tr>
        <td style="width: 200px;"><a href="<?php echo (URL)?>categoryBook/detail/<?php echo($value->getCategoryId())?>"><?php echo ($value->getCategoryName())?></a></td>
        <td style="width: 50px;"><a href="<?php echo (URL)?>categoryBook/updateCategory/<?php echo($value->getCategoryId())?>">Edit</a></td>
        <td style="width: 50px;"><a href="<?php echo (URL)?>categoryBook/deleteCategory/<?php echo($value->getCategoryId())?>">Delete</a></td>
    </tr>
    <?php
        }
    ?>
    <tr>
        <td colspan="3" style="height: 10px;"></td>
    </tr>  
    <tr>
        <td colspan="3">
            <a href="<?php echo (URL)?>categoryBook/addCategory">Add Category</a>
        </td>
    </tr>
</table>
</div>