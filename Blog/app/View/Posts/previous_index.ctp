<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Previous Contents</title>
</head>
<body>
	<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<pre>
     <?php 
         debug($posts);
         //debug($count);
     print_r($posts);
     pr($posts);
     ?>
 </pre>
 <?php  pr($posts); ?>
 <?php debug($posts); ?>

 <h1>List of <?php echo $count; ?> Blog posts</h1>

 <?php echo $this->Html->link('Add Post',array('controller' => 'posts', 'action' => 'add')); ?>
 <table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    Here is where we loop through our $posts array, printing out post info

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
                <td>
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
            <?php unset($post); ?>
        </table>
    </body>
    </html> -->



      /*    public function delete($id = null)
          {

            if(!$id || $this->Post->exists($id))
            //If we want to remove id from the parameter list then we must be set it first
            //like $this->Post->id = $id;
            {
              throw new Exception(__("ID was not set."));        
            }

            if($this->request->is('post'))
            {
              if($this->Post->delete($id))
              {
                $this->Session->setFlash('The post was deleted');
              }
              else
              {
                $this->Session->setFlash('The post was not deleted');
              }
            }

            $this->redirect('index');
          }*/

    

</body>
</html>