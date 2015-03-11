<div id="nav">
    <h3>Author Book</h3>
    <?php
    $author = $this->author;
    foreach($author as $key=> $value)
    {    
    ?>
        <a href="<?php echo(URL)?>authorBook/getBook/<?php echo($value->getAuthorId())?>"><?php echo ($value->getAuthorName()) ?></a><br />
        <?php
    }
    ?>
</div>

<div id="content">
    <?php 
    
    ?>
    <h3>List Author</h3>
    <table>
    
    <?php
        foreach($author as $key => $value)
        {
    ?> 
    <tr>
        <td style="width: 200px;"><a href="<?php echo (URL)?>authorBook/detail/<?php echo($value->getAuthorId())?>"><?php echo ($value->getAuthorName())?></a></td>
        <td style="width: 50px;"><a href="<?php echo (URL)?>authorBook/updateAuthor/<?php echo($value->getAuthorId())?>">Edit</a></td>
        <td style="width: 50px;"><a href="<?php echo (URL)?>authorBook/deleteAuthor/<?php echo($value->getAuthorId())?>">Delete</a></td>
    </tr>
    <?php
        }
    ?>
    <tr>
        <td colspan="3" style="height: 10px;"></td>
    </tr>  
    <tr>
        <td colspan="3">
            <a href="<?php echo (URL)?>authorBook/addAuthor">Add Author</a>
        </td>
    </tr>
</table>
</div>