<!-- File: /app/views/posts/view.ctp -->

<div class="span-15">
    <h1>News Stories</h1>
</div>

<div class="span-15">
    <?php foreach ($posts as $post): ?>
        <h3><?php echo $post['Post']['title']?></h3>
        <p><small>Created: <?php echo $post['Post']['created']?></small></p>
        <div class"story">
            <?php echo $post['Post']['body']?>
        </div>
        <br/>
    <?php endforeach; ?>
</div>

