<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
        <meta content="ie=edge" http-equiv="X-UA-Compatible">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Parisienne|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <title>
            Mail for admin
        </title>

        <style>
        body{
            font-family: 'Raleway', sans-serif;
             font-weight: 300;
             }

        .mail {
            /*background-color: #EBEBEB;*/
            width: 70%;
            margin: auto;
            padding: 3% 3% 3% 3%
        }

        h1 {
            margin: auto;
            text-align: center;
            font-weight: 300;
        }

        .notice {
            text-align: center;
        }

        h3 {
            /*width: 30%;*/
            height: 30px;
            margin: auto;
            text-align: center;
            color: #829ACD;
            font-weight: 300;
        }

        .message {
            background-color: white;
            border: #829ACD double;
            width: 60%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin: 5% auto;
        }

        .message-contents {
            width: 85%;
            margin: auto;
        }

        @media screen and (max-width:767px) {
            .mail {
                width: 90%;
                margin: auto;
                padding: 3% 3% 3% 3%;
            }

            h1 {
                margin: auto;
                text-align: center;
                font-size: 20px;
            }

            .notice {
                text-align: center;
            }

            h3 {
                width: 90%;
                height: 30px;
                margin: auto;
                text-align: center;
                padding-bottom: 10px;
            }

            .message {
                background-color: white;
                width: 85%;
                padding-top: 10px;
                padding-bottom: 10px;
                margin: 5% auto;
            }

            .message-contents {
                width: 85%;
                margin: auto;
            }
        }
    </style>

    </head>
    <body>
        <div class="mail">
            <h1>
                Message from customer
            </h1>
            <p class="notice">
                You received a message from customer.
            </p>
            <div class="message">
                <h3>
                    Customer's message
                </h3>
                <div class="message-contents">
                    <p>
                        Name:<br>
                        <?php echo $_POST['name']; ?>
                    </p>
                    <p>
                        Email:<br>
                        <?php echo $_POST['email']; ?>
                    </p>
                    <p>
                        Message:<br>
                        <?php echo $_POST['your-message']; ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>