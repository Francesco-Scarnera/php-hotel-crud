<?php
include __DIR__ . '/partials/bookings/server.php';

//section head
include __DIR__ . '/partials/templates/head.php';
?>


<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4" >
                <h1 class="text-primary">Hotel Bookings</h1>
            </header>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID ROOM</th>
                            <th>CREATED</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($bookings as $b) { ?>
                        <tr>
                            <td><?php echo $b['id']; ?></td>
                            <td><?php echo $b['stanza_id']; ?></td>
                            <td><<?php echo $b['created_at']; ?></td>
                            <td>
                                <a class= "text-sucess" href="#">View</a>
                            </td>
                            <td>
                                <a class= "text-primary" href="#">Update</a>
                            </td>
                            <td>
                                <a class= "text-danger" href="#">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
</main>
<?php 
include __DIR__ . '/partials/templates/footer.php';
?>