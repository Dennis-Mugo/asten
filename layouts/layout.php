<?php

class Layout
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function headers()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Asten</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
        </head>
        <?php
    }

    public function form()
    {
        ?>

        <body>
            <br><br>
            <div style="display: flex; justify-content: center; align-items: center;">
                <form class="row g-3"
                    style="width: 60%; border: 1px solid rgba(0,0,0,0.3); border-left: 5px solid green; border-radius: 0 10px 10px 0; padding: 10px;"
                    method="POST">

                    <div class="col-12">
                        <label for="uname" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="uname" placeholder="Username" required>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                    </div>

                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>

        </body>
        <?php
    }

    public function table()
    {
        $users = $this->db->fetchUsers();
        $userCount = $users->rowCount();
        if ($userCount > 0) {
            ?>
            <br><br><br>
            <h3 class="text-dark text-center">Registered users</h3>
            <div style="display: flex; justify-content: center; align-items: center;">
            <table class="table" style="width: 60%;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $counter = 1;
                    foreach ($users as $row) {
                        ?>

                        <tr>
                            <th scope="row"><?php echo $counter; ?></th>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <?php
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
                </div>
            <?php
        }
    }

    public function footer()
    {
        ?>

        </html>
        <?php
    }
}