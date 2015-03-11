<div id="nav">
    
</div>

<div id="content">
    <?php 
    $category = $this->category;
    ?>
    <h3>Information Category</h3>
    <form action="<?=URL?>categoryBook/updateCategory/<?php echo($category->getCategoryId())?>" method="POST">
    <table>
    <tr>
        <td style="width: 100px;">Name</td>
        <td style="width: 200px;"><input name="name" value="<?php echo($category->getCategoryName())?>" /></td>
    </tr>
    <tr>
        <td style="text-align: center;" colspan="2"><input  type="submit" value="Update"/></td></td>
    </tr>
</table>
</form>
</div>