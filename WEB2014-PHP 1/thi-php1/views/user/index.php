<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>image</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($userData as $user):
            ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['image'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td><?= $user['address'] ?></td>
                <td><a href="/edit"><button>Sửa</button></a><a href="/delete"><button>Xóa</button></a></td>
            </tr>
            <?php 
                endforeach;
            ?>
        </tbody>

    </table>