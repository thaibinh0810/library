<div id="nav">
    
</div>

<div id="content">
    <?php 
    
    $author = $this->author;
    ?>
    <h3>Information Author</h3>
    <table>
    <tr>
        <td style="width: 100px;">Name</td>
        <td style="width: 200px;"><?php echo($author->getAuthorName())?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?php echo($author->getAuthorAge())?></td>
    </tr>
</table>
</div>