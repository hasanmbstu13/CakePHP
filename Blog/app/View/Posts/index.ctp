<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show All Data</title>
</head>
<body>
    <h1>List of <?php echo $count; ?> Blog posts</h1>
    <p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>User Id</th>
            <th>Action</th>
            <th>Created</th>
        </tr>

        <!-- Here's where we loop through our $posts array, printing out post info -->

        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td>
                    <?php
                    echo $this->Html->link(
                        $post['Post']['title'],
                        array('action' => 'view', $post['Post']['id'])
                        );
                        ?>
                    </td>
                    <td><?php echo $post['Post']['user_id']; ?></td>
                    <td>
                        <?php
                        echo $this->Form->postLink(
                            'Delete',
                            array('action' => 'delete', $post['Post']['id']),
                            array('confirm' => 'Are you sure?')
                            );
                            ?>
                            <?php
                            echo $this->Html->link(
                                'Edit',
                                array('action' => 'edit', $post['Post']['id'])
                                );
                                ?>
                            </td>
                            <td>
                                <?php echo $post['Post']['created']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table> 
            </body>
            </html>