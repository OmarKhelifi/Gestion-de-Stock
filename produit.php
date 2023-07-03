<?php 
        require_once 'db.php';

        $stmt = $pdo->query('SELECT * FROM produit');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'navbar.php'; ?>
            <div class="container">
                <table class="table table-striped">
                    <thead>
                        <th>image</th>
                        <th>Code Article</th>
                        <th>Designation</th>
                        <th>Quantite</th>
                        <th>Etat en stock</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    <?php 
                    while ( $row =mysqli_fetch_assoc($stmt))
                    {
                        ?>
                    
                        <tr>
                            <td><img src="./uploads/<?php echo $row-> image_produit; ?>" alt=" "  class="image_product "></td>
                            <td><?php echo $row-> code_article; ?> </td>
                            <td><?php echo $row-> nom_article; ?> </td>
                            <td><?php echo $row-> quantite; ?> </td>
                            <td > <span class="badge bg-success">en Stock</span> </td>
                            <td>
                                    
                                    <button class="btn btn-primary" ><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            
                            </td>
                        </tr>
                       <?php } ?>
                       
                    </tbody>
             </table>
            </div>
</body>
</html>