<head>
    <title>Available Events</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php 
    session_start();
    require_once('../models/event.php');
    if(isset($_SESSION['flag']))
    {
?>

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a><br>

<?php
        if(isset($_REQUEST['show_event']))
        {
            $result = joinEvent();
        }
    
?>

<?php
    }
    else
    {
        echo "invalid request, please <a href='../views/login.html'>login</a> first.";
    }

?>
</body>