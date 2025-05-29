<?php
include_once('templates/header.php');

// VALIDAÇÃO DO POST
if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postId) {
            $currentPost = $post;
        }
      
    }
}

?>


<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?=$currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL?>img/<?=$currentPost['img'] ?>" alt="<?=$currentPost['title']?>">
        </div>
        <p class="post-content">
            <?= $currentPost['article'] ?>
        </p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">tags</h3>
        <ul class="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
            <a href="#"><li><?=$tag?></li></a>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <a href="#"><li><?=$category?></li></a>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>



<?php
include_once('templates/footer.php');
?>