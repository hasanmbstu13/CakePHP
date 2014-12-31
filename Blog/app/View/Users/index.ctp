<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show All Data</title>
</head>
<body>
    <h1>Information of <?php echo $count; ?> Users</h1>
    <p><?php echo $this->Html->link("Add New User", array('action' => 'add')); ?></p>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
            <th>Created At</th>
        </tr>

        <!-- Here's where we loop through our $posts array, printing out post info -->

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['User']['id']; ?></td>
                <td>
                    <?php
                    echo $this->Html->link(
                        $user['User']['name'],
                        array('action' => 'view', $user['User']['id'])
                        );
                        ?>
                    </td>
                    <td><?php echo $user['User']['email']; ?></td>
                    <td>
                        <?php
                        echo $this->Form->postLink(
                            'Delete',
                            array('action' => 'delete', $user['User']['id']),
                            array('confirm' => 'Are you sure?')
                            );
                            ?>
                            <?php
                            echo $this->Html->link(
                                'Edit',
                                array('action' => 'edit', $user['User']['id'])
                                );
                                ?>
                            </td>
                            <td>
                                <?php echo $user['User']['created_at']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table> 
            </body>
            </html>