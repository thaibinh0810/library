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
    
    $book = $this->book;
    ?>
    <h3>List Book</h3>
    <table>
    
    <?php
        foreach($book as $key => $value)
        {
    ?> 
    <tr>
        <td style="width: 200px;"><a href="<?php echo (URL)?>index/detail/<?php echo($value->getBookId())?>"><?php echo ($value->getTitle())?></a></td>
        <td style="width: 50px;"><a href="<?php echo (URL)?>index/updateBook/<?php echo($value->getBookId())?>">Edit</a></td>
        <td style="width: 50px;"><a href="<?php echo (URL)?>index/deleteBook/<?php echo($value->getBookId())?>">Delete</a></td>
    </tr>
    <?php
        }
    ?>  
</table>
</div>