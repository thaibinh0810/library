<div id="nav">
    
</div>

<div id="content">
    <?php 
    $author = $this->author;
    ?>
    <h3>Information Author</h3>
    <form action="<?=URL?>authorBook/updateAuthor/<?php echo($author->getAuthorId())?>" method="POST">
    <table>
    <tr>
        <td style="width: 100px;">Name</td>
        <td style="width: 200px;"><input name="name" value="<?php echo($author->getAuthorName())?>" /></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><input name="age" value="<?php echo($author->getAuthorAge())?>" /></td>
    </tr>
    <tr>
        <td style="text-align: center;" colspan="2"><input  type="submit" value="Update"/></td></td>
    </tr>
</table>
</form>
</div>