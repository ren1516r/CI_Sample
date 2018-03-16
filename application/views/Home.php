<!DOCTYPE html>
<html>
    <head>
        <title>Learn CI</title>
    </head>
    <body>
        <h1>Welcome <?= $this->session->userdata('username') ?></h1>
        <a href="<?= site_url('Home/logout') ?>">Logout</a>
    </body>
</html>