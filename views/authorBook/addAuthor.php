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
    <h3>Add Author</h3>
    <form action="<?=URL?>authorBook/addAuthor" method="POST">
        <table>
            <tr>
                <td style="width: 100px;">Name</td>
                <td style="width: 200px;"><input  type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Add"/></td>
            </tr>
        </table>
        
        
        
    </form>
</div>