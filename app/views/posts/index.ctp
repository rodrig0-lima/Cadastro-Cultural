<h1>Posts do Blog</h1>
<?php echo $html->link('Adicionar Post',array('controller' => 'posts', 'action' => 'add'))?>
<table>

    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Ação</th>
        <th>Criado em</th>
        </tr>

        <!-- Aqui varremos nosso array $posts, exibindo informações do post -->
        <?php foreach ($posts as $post): ?>
            <tr>
                <td>
                    <?php echo $post['Post']['id']; ?>
                </td>
                <td>
                    <?php echo $html->link($post['Post']['title'], "/posts/view/".$post['Post']['id']); ?>
                </td>
                <td>
                    <?php echo $html->link('Excluir', array('action' => 'delete', $post['Post']['id']), null, 'Deseja realmente excluir?' )?>
                    <?php echo $html->link('Editar', array('action'=>'edit', $post['Post']['id']));?>
                </td>
                <td>
                    <?php echo $post['Post']['created']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
  </table>