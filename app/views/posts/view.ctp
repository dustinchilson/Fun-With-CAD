<!-- File: /app/views/posts/view.ctp -->
<h1>
    <?php echo $post['Post']['title']?>
</h1>
<p>
    <small>Created: <?php echo $post['Post']['created']?></small>
</p>

<div class="story">
    <?php echo $post['Post']['body']?>
</div>
