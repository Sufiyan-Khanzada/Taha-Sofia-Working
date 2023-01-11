<?php
session_start();
$token="Bearer ".$_SESSION['token']; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        
        body {
            background: #f0f1f2;
            font: 12px "Open Sans", sans-serif;
        }
        
        #view-code {
            color: #89a2b5;
            opacity: 0.7;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 700;
            text-decoration: none;
            position: absolute;
            top: 660px;
            left: 50%;
            margin-left: -50px;
            z-index: 200;
        }
        
        #view-code:hover {
            opacity: 1;
        }
        
        #chatbox {
            width: 100%;
            margin:auto;
            background: #fff;
            border-radius: 6px;
            overflow: hidden;
            height: 100vh;
            position: absolute;
            top: 0px;
            /* left: 50%;
            margin-left: -155px; */
        }
        
        #friendslist {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 75vh;
        }
        
        #topmenu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 69px;
            width: 100%px;
            border-bottom: 1px solid #d8dfe3;
        }
        
        #topmenu span {
            float: left;
            width: 96px;
            height: 70px;
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/top-menu.png") -3px -118px no-repeat;
        }
        
        #topmenu span.friends {
            margin-bottom: -1px;
        }
        
        #topmenu span.chats {
            background-position: -95px 25px;
            cursor: pointer;
        }
        
        #topmenu span.chats:hover {
            background-position: -95px -46px;
            cursor: pointer;
        }
        
        #topmenu span.history {
            background-position: -190px 24px;
            cursor: pointer;
        }
        
        #topmenu span.history:hover {
            background-position: -190px -47px;
            cursor: pointer;
        }
        
        .friend {
            height: 70px;
            border-bottom: 1px solid #e7ebee;
            position: relative;
        }
        
        .friend:hover {
            background: #f1f4f6;
            cursor: pointer;
        }
        
        .friend img {
            width: 40px;
            border-radius: 50%;
            margin: 15px;
            float: left;
        }
        
        .floatingImg {
            width: 40px;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 12px;
            border: 3px solid #fff;
        }
        
        .friend p {
            padding: 15px 0 0 0;
            float: left;
            width: 220px;
        }
        
        .friend p strong {
            font-weight: 600;
            font-size: 15px;
            color: #597a96;
        }
        
        .friend p span {
            font-size: 13px;
            font-weight: 400;
            color: #aab8c2;
        }
        
        .friend .status {
            background: #26c281;
            border-radius: 50%;
            width: 9px;
            height: 9px;
            position: absolute;
            top: 31px;
            right: 17px;
        }
        
        .friend .status.away {
            background: #ffce54;
        }
        
        .friend .status.inactive {
            background: #eaeef0;
        }
        
        #search {
            background: #e3e9ed url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/search.png") -11px 0 no-repeat;
            height: 60px;
            width: 100%;
            position: relative;
            bottom: 0;
            left: 0;
        }
        
        #searchfield {
            background: #e3e9ed;
            margin: 21px 0 0 55px;
            border: none;
            padding: 0;
            font-size: 14px;
            font-family: "Open Sans", sans-serif;
            font-weight: 400px;
            color: #8198ac;
        }
        
        #searchfield:focus {
            outline: 0;
        }
        
        #chatview {
            width: 100%;
            height: 484px;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
            background: #fff;
        }
        
        #profile {
            width:100%;
            height: 153px;
            overflow: hidden;
            text-align: center;
            color: #fff;
        }
        
        .p1 #profile {
            background: #fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/timeline1.png") 0 0 no-repeat;
            background-size: cover;
        }
        
        #profile .avatar {
            width: 68px;
            border: 3px solid #fff;
            margin: 23px 0 0;
            border-radius: 50%;
        }
        
        #profile p {
            font-weight: 600;
            font-size: 15px;
            margin: 118px 0 -1px;
            opacity: 0;
            -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
        }
        
        #profile p.animate {
            margin-top: 97px;
            opacity: 1;
            -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
        }
        
        #profile span {
            font-weight: 400;
            font-size: 11px;
        }
        
        #chat-messages {
            opacity: 0;
            margin-top: 30px;
            width: 95%;
            height: 270px;
            overflow-y: scroll;
            overflow-x: hidden;
            padding-right: 20px;
            -webkit-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -moz-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -ms-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            -o-transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
            transition: all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
        }
        
        #chat-messages.animate {
            opacity: 1;
            margin-top: 0;
        }
        
        #chat-messages label {
            color: #aab8c2;
            font-weight: 600;
            font-size: 12px;
            text-align: center;
            margin: 15px 0;
            width: 290px;
            display: block;
        }
        
        #chat-messages div.message {
            padding: 0 0 30px 58px;
            clear: both;
            margin-bottom: 45px;
        }
        
        #chat-messages div.message.right {
            padding: 0 58px 30px 0;
            margin-right: -19px;
            margin-left: 19px;
        }
        
        #chat-messages .message img {
            float: left;
            margin-left: -38px;
            border-radius: 50%;
            width: 30px;
            margin-top: 12px;
        }
        
        #chat-messages div.message.right img {
            float: right;
            margin-left: 0;
            margin-right: -38px;
        }
        
        .message .bubble {
            background: #f0f4f7;
            font-size: 13px;
            font-weight: 600;
            padding: 12px 13px;
            border-radius: 5px 5px 5px 0px;
            color: #8495a3;
            position: relative;
            float: left;
        }
        
        #chat-messages div.message.right .bubble {
            float: right;
            border-radius: 5px 5px 0px 5px;
        }
        
        .bubble .corner {
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/bubble-corner.png") 0 0 no-repeat;
            position: absolute;
            width: 7px;
            height: 7px;
            left: -5px;
            bottom: 0;
        }
        
        div.message.right .corner {
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/bubble-cornerR.png") 0 0 no-repeat;
            left: auto;
            right: -5px;
        }
        
        .bubble span {
            color: #aab8c2;
            font-size: 11px;
            position: absolute;
            right: 0;
            bottom: -22px;
        }
        
        #sendmessage {
            height: 60px;
            border-top: 1px solid #e7ebee;
            position: relative;
            bottom: 0;
            right: 0px;
            width: 100%;
            background: #fff;
            padding-bottom: 50px;
        }
        
        #sendmessage input {
            background: #fff;
            margin: 21px 0 0 21px;
            border: none;
            padding: 0;
            font-size: 14px;
            font-family: "Open Sans", sans-serif;
            font-weight: 400px;
            color: #aab8c2;
        }
        
        #sendmessage input:focus {
            outline: 0;
        }
        
        #sendmessage button {
            background: #fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/send.png") 0 -41px no-repeat;
            width: 30px;
            height: 30px;
            position: absolute;
            right: 15px;
            top: 23px;
            border: none;
        }
        
        #sendmessage button:hover {
            cursor: pointer;
            background-position: 0 0;
        }
        
        #sendmessage button:focus {
            outline: 0;
        }
        
        #close {
            position: absolute;
            top: 8px;
            opacity: 0.8;
            right: 10px;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        
        #close:hover {
            opacity: 1;
        }
        
        .cx,
        .cy {
            background: #fff;
            position: absolute;
            width: 0px;
            top: 15px;
            right: 15px;
            height: 3px;
            -webkit-transition: all 250ms ease-in-out;
            -moz-transition: all 250ms ease-in-out;
            -ms-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
        }
        
        .cx.s1,
        .cy.s1 {
            right: 0;
            width: 20px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        
        .cy.s2 {
            -ms-transform: rotate(50deg);
            -webkit-transform: rotate(50deg);
            transform: rotate(50deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        
        .cy.s3 {
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        
        .cx.s1 {
            right: 0;
            width: 20px;
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        
        .cx.s2 {
            -ms-transform: rotate(140deg);
            -webkit-transform: rotate(140deg);
            transform: rotate(140deg);
            -webkit-transition: all 100ms ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        
        .cx.s3 {
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
            -webkit-transition: all 100ease-out;
            -moz-transition: all 100ms ease-out;
            -ms-transition: all 100ms ease-out;
            -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
        }
        
        #chatview,
        #sendmessage {
            overflow: hidden;
            border-radius: 6px;
        }
    </style>

</head>

<body>
    <!-- <a id="view-code" href="https://codepen.io/virgilpana/pen/ZYZXgP" target="_blank">VIEW CODE</a> -->
<div style="width: 100%;height:80vh;display:flex;justify-content:center">
    <div id="chatbox">
        <div id="friendslist">

            <div id="friends">
            <div id="search">
                    <input type="text" id="searchfield" value="Search contacts..." />
            </div>
            
            <?php
            include 'chat-users-all.php';
            foreach ($user_data as $user) {

            ?>
            
                <div class="friend">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg" />
                    <p>
                        <strong style="color: black;"><?php echo $user->name; ?></strong> <br>
                        <span style="font-weight: bold;">Sent First Message to Hi</span>
                    </p>
                    <div class="status available"></div>
                </div>
                <?php
                
                }
?>
                <!--<div class="friend">-->
                <!--    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />-->
                <!--    <p>-->
                <!--        <strong style="color: black;">Martin Joseph</strong> <br>-->
                <!--        <span style="font-weight: bold;">How are you</span>-->
                <!--    </p>-->
                <!--    <div class="status available"></div>-->
                <!--</div>-->

                <!--<div class="friend">-->
                <!--    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3_copy.jpg" />-->
                <!--    <p>-->
                <!--        <strong>Tomas Kennedy</strong> <br>-->
                <!--        <span>Lorem ipsum dolor sit,</span>-->
                <!--    </p>-->
                <!--    <div class="status inactive"></div>-->
                <!--</div>-->

                <!--<div class="friend">-->
                <!--    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4_copy.jpg" />-->
                <!--    <p>-->
                <!--        <strong>Enrique	Sutton</strong> <br>-->
                <!--        <span>Lorem ipsum dolor sit,</span>-->
                <!--    </p>-->
                <!--    <div class="status inactive"></div>-->
                <!--</div>-->

                <!--<div class="friend">-->
                <!--    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5_copy.jpg" />-->
                <!--    <p>-->
                <!--        <strong>	Darnell	Strickland</strong> <br>-->
                <!--        <span>Lorem ipsum dolor sit,</span>-->
                <!--    </p>-->
                <!--    <div class="status inactive"></div>-->
                <!--</div>-->



            </div>

        </div>

 <div id="chatview" class="p1">
            <div id="profile">

                <div id="close">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>

                <p>Miro Badev</p>
                <span>miro@badev@gmail.com</span>
            </div>
            
            <div id="chat-messages">
                <?php
                include 'message_chat_all.php';
                ?>
                
                <label>Thursday 02</label>
                <div class="message">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg" />
                    <div class="bubble">
                        <?php
                    $c=$user_data_chat->data[0]->user_messages->sender_id;
                    echo $_SESSION['id'];
                        if($c!=$_SESSION['id']){
                          echo "hello";
                        }else{                       
                        ?>
                        <div class="corner"></div>
                        <span>3 min</span>
                    </div>
                </div>

                <div class="message right">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                    <div class="bubble">
                        <?php
                        echo  $user_data_chat->data[0]->message;
                
                        }
                        ?>
                        <div class="corner"></div>
                        <span>1 min</span>
                    </div>
                </div>

                
            </div>

            <div id="sendmessage">
                <input type="text" value="Send message..." />
                <button id="send"></button>
            </div>

        </div>
    </div>
    </div>


    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            var preloadbg = document.createElement("img");
            preloadbg.src = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/timeline1.png";

            $("#searchfield").focus(function() {
                if ($(this).val() == "Search contacts...") {
                    $(this).val("");
                }
            });
            $("#searchfield").focusout(function() {
                if ($(this).val() == "") {
                    $(this).val("Search contacts...");

                }
            });

            $("#sendmessage input").focus(function() {
                if ($(this).val() == "Send message...") {
                    $(this).val("");
                }
            });
            $("#sendmessage input").focusout(function() {
                if ($(this).val() == "") {
                    $(this).val("Send message...");

                }
            });


            $(".friend").each(function() {
                $(this).click(function() {
                    var childOffset = $(this).offset();
                    var parentOffset = $(this).parent().parent().offset();
                    var childTop = childOffset.top - parentOffset.top;
                    var clone = $(this).find('img').eq(0).clone();
                    var top = childTop + 12 + "px";

                    $(clone).css({
                        'top': top
                    }).addClass("floatingImg").appendTo("#chatbox");

                    setTimeout(function() {
                        $("#profile p").addClass("animate");
                        $("#profile").addClass("animate");
                    }, 100);
                    setTimeout(function() {
                        $("#chat-messages").addClass("animate");
                        $('.cx, .cy').addClass('s1');
                        setTimeout(function() {
                            $('.cx, .cy').addClass('s2');
                        }, 100);
                        setTimeout(function() {
                            $('.cx, .cy').addClass('s3');
                        }, 200);
                    }, 150);

                    $('.floatingImg').animate({
                        'width': "68px",
                        'left': '40%',
                        'top': '20px'
                    }, 200);

                    var name = $(this).find("p strong").html();
                    var email = $(this).find("p span").html();
                    $("#profile p").html(name);
                    $("#profile span").html(email);

                    $(".message").not(".right").find("img").attr("src", $(clone).attr("src"));
                    $('#friendslist').fadeOut();
                    $('#chatview').fadeIn();


                    $('#close').unbind("click").click(function() {
                        $("#chat-messages, #profile, #profile p").removeClass("animate");
                        $('.cx, .cy').removeClass("s1 s2 s3");
                        $('.floatingImg').animate({
                            'width': "40px",
                            'top': top,
                            'left': '12px'
                        }, 200, function() {
                            $('.floatingImg').remove()
                        });

                        setTimeout(function() {
                            $('#chatview').fadeOut();
                            $('#friendslist').fadeIn();
                        }, 50);
                    });

                });
            });
        });
    </script>
    <!-- <div class="gapgap1"></div> -->

<?php include 'footer.php' ?>
</body>

</html>