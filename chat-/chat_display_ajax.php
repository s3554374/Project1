<html>
<head>
    <meta charset="utf-8">
    <title>content</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
          rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="../assets/css/chat.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script type="text/javascript">
        setInterval('show()', 1000);   // 设置自动刷新时间 set refresh time 1s
        function show() {
            $.ajax({
                url: 'server_get.php',  //请求发送到server_get.php进行处理 send apply to server_get.php
                type: 'post',
                dataType: 'html',
                error: function () {
                    alert('try again');
                },
                success: function (msg) {
                    $('p').html(msg);  //设置body中p标签的内容 set p tag content
                }
            });
        }
    </script>
</head>
<body>
<div class="container">
    <h3 class=" text-center">Messaging</h3>
    <div class="messaging">
        <div class="inbox_msg">
            <div class="inbox_people">
                <div class="headind_srch">
                    <div class="recent_heading">
                        <h4>Recent</h4>
                    </div>
                    <div class="srch_bar">
                        <div class="stylish-input-group">
                            <input type="text" class="search-bar"  placeholder="Search" >
                            <span class="input-group-addon">
                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            </span> </div>
                    </div>
                </div>
                <div class="inbox_chat">

                    <div class="chat_list">
                        <div class="chat_people">
                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                            <div class="chat_ib">
                                <h5>dfds <span class="chat_date">Dec 25</span></h5>
                                <h5>Test, which is a new approach to have all solutions
                                    astrology under one roof.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="chat_list">
                        <div class="chat_people">
                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                            <div class="chat_ib">
                                <h5>zxct <span class="chat_date">Dec 25</span></h5>
                                <h5>Test, which is a new approach to have all solutions
                                    astrology under one roof.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="chat_list">
                        <div class="chat_people">
                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                            <div class="chat_ib">
                                <h5>dt asdf<span class="chat_date">Dec 25</span></h5>
                                <h5>Test, which is a new approach to have all solutions
                                    astrology under one roof.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mesgs">
                <div class="msg_history">
                    <div class="incoming_msg">
                        <div class="incoming_msg_img"><img src="https://ptetutorials.com/images/user-profile.png"
                                                           alt="sunil"></div>
                        <div class="received_msg">
                            <div class="received_withd_msg">
                                <p></p>
                                <span class="time_date"> 11:01 AM    |    June 9</span></div>
                        </div>
                    </div>
                    <div class="outgoing_msg">
                        <div class="sent_msg">
                            <p></p>
                            <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                    </div>
                </div>
                <div class="type_msg">
                    <div class="input_msg_write">
                        <input type="text" class="write_msg" placeholder="Type a message" />
                        <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</body>
</html>
