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
    <h3>Add Category</h3>
    <form action="<?=URL?>categoryBook/addCategory" method="POST">
        <table>
            <tr>
                <td style="width: 100px;">Name</td>
                <td style="width: 200px;"><input  type="text" name="name"/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Add"/></td>
            </tr>
        </table>
        
        
        
    </form>
</div>