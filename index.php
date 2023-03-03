<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="assets/liveChat.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="live-chat-body">
        <div class="left-panel">
            <img src="./assets/images/user3.jpg" alt="avatar">
            <p class="user-name">User Name</p>
            <p class="user-email">test@test.com</p>
            <div class="select-view">
                <label for="mode-select"> <img src="./assets/images/icons/chat.png"> </label>
                <label for="mode-select"> <img src="./assets/images/icons/contacts.png"> </label>
                <label for="mode-select"> <img src="./assets/images/icons/settings.png"> </label>
                <label for="mode-select"> <img src="./assets/images/icons/logout.png"> </label>
            </div>
        </div>
        <div class="main">
            <input type="checkbox" id="mode-select">
            <div class="main_chats-list">

            </div>
            
            <div class="main_header">
                <h1> Live Chat </h1>
            </div>

            <div class="main_single-chat">

            </div>
        </div>
    </div>
</body>

</html>