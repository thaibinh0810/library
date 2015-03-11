<div id="nav">
    
</div>

<div id="content">
    <?php 
    
    $book = $this->book;
    $author = $this->author;
    $category = $this->category;
    ?>
    <h3>Information Book</h3>
    <form action="<?=URL?>index/updateBook/<?=$book->getBookId()?>" method="POST">
    <table>
    <tr>
        <td style="width: 100px;">Title</td>
        <td style="width: 200px;"><input name="title" value="<?php echo($book->getTitle())?>" /></td>
    </tr>
    <tr>
        <td>Author</td>
        <td> 
            <select name="author" >
                <?php
                foreach($this->author_list as $key => $value) {
                ?>
                    <option <?=$value->getAuthorId() == $author->getAuthorId() ? 'selected' : ''?> value="<?=$value->getAuthorId()?>"><?=$value->getAuthorName()?></option>
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
                foreach($this->category_list as $key => $value) {
                ?>
                    <option <?=$value->getCategoryId() == $category->getCategoryId() ? 'selected' : ''?> value="<?=$value->getCategoryId()?>"><?=$value->getCategoryName()?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td style="text-align: center;" colspan="2"><input  type="submit" value="Update"/></td></td>
    </tr>
</table>
</form>
</div>