<?php require '../includes/header.php'; ?>
<?php require '../config/config.php'; ?>
<?php


    if(!isset($_GET['id'])) {
        header("Location: ".BASE_URL."");
    }else {
        
        $user_bookings = $conn->query("SELECT * FROM bookings WHERE user_id = '$_SESSION[user_id]'");
        $user_bookings->execute();

        $bookings = $user_bookings->fetchAll(PDO::FETCH_OBJ);

    }


?>
<div class="container" style="margin-top: 200px;margin-bottom: 1000px">
    <div class="row">
        <div class="col-lg-2">
            <aside>
                <li><h4><a class="d-inline-flex align-items-center rounded mb-2" href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></h4></li>
                <li><h4><a class="d-inline-flex align-items-center rounded" href="<?php echo BASE_URL; ?>users/bookings.php?id=<?php echo $_SESSION['user_id']; ?>"><i class="fa fa-book"></i> Bookings</a></h4></li>
            </aside>
        </div>
        <div class="col-lg-9">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Number of guests</th>
                            <th scope="col">Contact number</th>
                            <th scope="col">Checkin date</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking): ?>
                            <tr>
                                <td><?php echo $booking->id; ?></td>
                                <td><?php echo $booking->name; ?></td>
                                <td><?php echo $booking->num_of_guests; ?></td>
                                <td><?php echo $booking->phone_number; ?></td>
                                <td><?php echo $booking->checkin_date; ?></td>
                                <td><?php echo $booking->destination; ?></td>
                                <td><?php echo $booking->status; ?></td>
                                <td>$<?php echo $booking->payment; ?></td>
                                <td><?php echo $booking->created_at; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php require '../includes/footer.php'; ?>