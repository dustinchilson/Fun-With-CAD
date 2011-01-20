<!-- File: /app/views/posts/index.ctp  (edit links added) -->

<div class="span-15">
    <h1>News Stories</h1>
</div>

<div class="span-15">
    <p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?>
</div>

<div class="span-15">
<table>    
    <?Php
        echo $this->Html->tableHeaders(array('id','Title','Action','Created'));
    ?>
    <!-- Here's where we loop through our $posts array, printing out post info -->
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'], 
                           array('action' => 'view', $post['Post']['id']));?>
            </td>
            <td>
                <?php echo $this->Html->link('Delete',
                           array('action' => 'delete', $post['Post']['id']),
                                 null,'Are you sure?')?>
                <?php echo $this->Html->link('Edit', 
                           array('action' => 'edit', $post['Post']['id']));?>
            </td>
            <td>
                <?php echo $post['Post']['created']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</div>
