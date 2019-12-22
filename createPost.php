<?php

require __DIR__ . '/views/header.php';

?>

<?php if (isset($_SESSION['errors'])){ ?>
    <?php foreach ($_SESSION['errors'] as $error){ ?>
        <p><?php echo $error ?></p>
    <?php }; ?>
    <?php unset($_SESSION['errors']) ?>
<?php }; ?>
<form class="createPost" action="/app/posts/create.php" method="post" enctype="multipart/form-data">
    <label for="postImage">Choose an image to upload</label>
    <input type="file" accept="image/jpg" name="postImage" id="postImage" required>
    <label for="description">Description</label>
    <textarea name="description" rows="8" cols="80" wrap="hard"></textarea>
    <button type="submit">Upload</button>
</form>




<?php

require __DIR__ . '/views/footer.php';

?>
