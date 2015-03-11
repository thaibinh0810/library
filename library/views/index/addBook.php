<div id="nav">
    
</div>

<div id="content">
    <h3>Add Book</h3>
    <form action="<?=URL?>index/addBook" method="POST">
    <table>
    <tr>
        <td style="width: 100px;">Title</td>
        <td style="width: 200px;"><input name="title"/></td>
    </tr>
    <tr>
        <td>Author</td>
        <td> 
            <select name="author">
                <?php
                foreach($this->author as $key => $value) {
                ?>
                    <option value="<?=$value->getAuthorId()?>"><?=$value->getAuthorName()?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Category</td>
        <td>
            <select name="category">
                <?php
                foreach($this->category as $key => $value) {
                ?>
                    <option value="<?=$value->getCategoryId()?>"><?=$value->getCategoryName()?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td style="text-align: center;" colspan="2"><input  type="submit" value="Add"/></td></td>
    </tr>
</table>
</form>
</div>