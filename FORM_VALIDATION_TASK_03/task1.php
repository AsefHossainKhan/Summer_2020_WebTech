<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name <br>
        <input type="text" name="name" value=""> <br>
        <?php ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if (!empty($_POST)) {
        $name = $_POST["name"];
        
    }
?>