<div class="container">
    <div class="list">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">slug</th>
                <th scope="col">content</th>
                <th scope="col">published</th>
                <th scope="col">view</th>
                <th scope="col">point</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($posts as $post): ?>
                <tr>
                    <th><?php echo $post['id'] ?></th>
                    <td><?php echo $post['title'] ?></td>
                    <td><?php echo $post['slug'] ?>/td>
                    <td><?php echo $post['content'] ?></td>
                    <td><?php echo $post['published'] ?></td>
                    <td><?php echo $post['view'] ?></td>
                    <td><?php echo $post['point'] ?></td>
                    <td>
                        <a href="<?php echo site_url('posts-del/'.$post['id']) ?>">Xóa</a>
                        <a href="<?php echo site_url('posts-edit/'.$post['id']) ?>">Sửa</a>
                        <a href="<?php echo site_url('posts/'.$post['slug']) ?>">Xem chi tiết</a>

                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>