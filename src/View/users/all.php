<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>
<table>
    <?php 
    foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user->getId_user(); ?></td>
            <td><?php echo $user->getName_user(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
