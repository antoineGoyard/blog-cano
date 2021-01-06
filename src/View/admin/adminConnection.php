<?php require __DIR__ . '/../template/header.php'; ?>

<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>

<div id="connect">
    <form method="post">
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Addresse Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
    </div>
    <button type="submit" class="btn btn-primary">Connection</button>
    </form>
</div>


<?php require __DIR__ . '/../template/footer.php'; ?>  
