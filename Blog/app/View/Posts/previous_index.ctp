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


                 /*public function delete()
          {
            $this->redirect('index');
          }*/



/*    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $post;
      }*/

      /*          public function delete($id) {
            if ($this->request->is('get')) {
              throw new MethodNotAllowedException();
            }

            if ($this->Post->delete($id)) {
              $this->Session->setFlash(
                __('The post with id: %s has been deleted.', h($id))
                );
              return $this->redirect(array('action' => 'index'));
            }
          }*/

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