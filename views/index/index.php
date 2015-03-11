<div id="nav">
    
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
    <tr>
        <td colspan="3" style="height: 10px;"></td>
    </tr>  
    <tr>
        <td colspan="3">
            <a href="<?php echo (URL)?>index/addBook">AddBook</a>
        </td>
    </tr>
</table>
</div>