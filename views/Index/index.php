<?php
?>
<html>
<?php include '../includes/header.php' ?>
<?php include '../includes/layout-top.php' ?>
    <form action="/index/formpost"  method="post">
    <table class="table-striped table">
        <tr>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        <tr>
            <td><input type="text" name="people[][firstname]" value="Jeff" /></td>
            <td><input type="text" name="people[][surname]" value="Stelling" /></td>
        </tr>
        <tr>
            <td><input type="text" name="people[][firstname]" value="Chris" /></td>
            <td><input type="text" name="people[][surname]" value="Kamara" /></td>
        </tr>
        <tr>
            <td><input type="text" name="people[][firstname]" value="Alex" /></td>
            <td><input type="text" name="people[][surname]" value="Hammond" /></td>
        </tr>
        <tr>
            <td><input type="text" name="people[][firstname]" value="Jim" /></td>
            <td><input type="text" name="people[][surname]" value="White" /></td>
        </tr>
        <tr>
            <td><input type="text" name="people[][firstname]" value="Natalie" /></td>
            <td><input type="text" name="people[][surname]" value="Sawyer" /></td>
        </tr>
    </table>
        <input type="submit" value="OK" />
    </form>
    <div>
        <h3>Data already added</h3>
        <table class="table-striped table">
            <tr>
                <th>Name</th>
                
            </tr>
            <?php $datafromresults = $this->results; ?>
                <?php foreach($datafromresults as $dataresult) { ?>
                <tr>
                    <td><?php echo $dataresult ?></td>
                 </tr>  
                <?php } ?>
           
        </table>
    </div>
<?php include '../includes/layout-bottom.php' ?>
</html>
