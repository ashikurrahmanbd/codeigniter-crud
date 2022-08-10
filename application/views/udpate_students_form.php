<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link all css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo  base_url(); ?>/assets/css/custom.css">

    <title>This is Home Page</title>
</head>
<body>
    
    <header class="header">
        <div class="site-container">
            <h3>Student Management System</h3>
        </div>
    </header>
    <div class="site-content">
        <div class="site-container">
            <?php foreach($data as $row): ?>
            <form action="" method="post" class="insert-form">
                <input type="text" name="name" placeholder="Name" value="<?php echo $row->sname ?>">
                <input type="text" name="department" placeholder="Department" value="<?php echo $row->department; ?>">
                <input type="text" name="cgpa" placeholder="CGPA" value="<?php echo $row->cgpa; ?>">
                <input type="submit" name="update" value="Update">
            </form>
            <?php endforeach; ?>
        </div>
    </div>
    <footer class="footer">
        <div class="site-container">
            <p>Copyright &copy; 2023</p>
        </div>
        
    </footer>
</body>
</html>