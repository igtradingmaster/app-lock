<?php
session_start();
$notifications = isset($_SESSION['notifications']) ? $_SESSION['notifications'] : [];
$userNotifications = array_filter($notifications, function($notification) {
    return strpos($notification, 'ADMIN:') !== 0;
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: right;
        }

        .notification-icon {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .notification-icon img {
            width: 24px;
            height: 24px;
        }

        .notification-count {
            position: absolute;
            top: 0;
            right: 0;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
        }

        .content {
            padding: 20px;
        }

        .notification-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            z-index: 1000;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="notification-icon" onclick="showNotification()">
            <img src="notification-icon.png" alt="Notifications">
            <span class="notification-count" id="notificationCount"><?php echo count($userNotifications); ?></span>
        </div>
    </div>
    <div class="content" id="homeContent">
        <h1>Welcome to the Secure Website</h1>
        <p>This is the home page content.</p>
    </div>
    <div class="notification-popup" id="notificationPopup">
        <h2>Notifications</h2>
        <div id="notificationContent">
            <?php
            if (count($userNotifications) > 0) {
                foreach ($userNotifications as $notification) {
                    echo '<p>' . htmlspecialchars($notification) . '</p>';
                }
            } else {
                echo 'No new notifications.';
            }
            ?>
        </div>
        <button onclick="closeNotification()">Close</button>
    </div>
    <div class="overlay" id="overlay"></div>
    <script>
        function showNotification() {
            document.getElementById('notificationPopup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closeNotification() {
            document.getElementById('notificationPopup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }

        // AJAX call to check for new notifications
        function checkNotifications() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var count = parseInt(xhr.responseText);
                    document.getElementById('notificationCount').textContent = count;
                }
            };
            xhr.open("GET", "get_notification_count.php", true);
            xhr.send();
        }

        // Check notifications every 5 seconds
        setInterval(checkNotifications, 5000);

        // Fetch notifications from admin
        function fetchNotifications() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var newNotifications = JSON.parse(xhr.responseText);
                    var notificationContent = document.getElementById('notificationContent');
                    newNotifications.forEach(function(notification) {
                        notificationContent.innerHTML += '<p>' + notification + '</p>';
                    });
                    var notificationCount = document.getElementById('notificationCount');
                    notificationCount.textContent = parseInt(notificationCount.textContent) + newNotifications.length;
                }
            };
            xhr.open("GET", "admin.php", true);
            xhr.send();
        }
        
        // Fetch notifications from admin when the page loads
        fetchNotifications();
    </script>
</body>
</html>
