
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">
    <title>Hello World</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Reset default styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }
       
        .container {
            max-width: 1200px;
            margin: 50px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .section {
            text-align: center;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease-in-out;
            width: 250px;
        }
        .section:hover {
            transform: translateY(-5px);
        }
        .section img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }
        .section img:hover {
            transform: scale(1.1);
        }
        .section p {
            font-size: 18px;
            margin-top: 10px;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            display: none;
        }
        .no-copy {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-4 section">
                    <img src="data:image/png;base64,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" alt="Length Finder" onclick="redirectTo('https://igtradingmaster.github.io/lengthfinder/')">
                    <p>Length Finder</p>
                </div>
                <!-- Password Generator Section -->
                <div class="col-md-4 section">
                    <img src="https://media.istockphoto.com/id/1413096640/vector/fitness-health-gym-trendy-icons-on-circles.jpg?s=612x612&w=0&k=20&c=B_6LBgyXLmumgi3pCmhnYS_v4SJPxuAVHQe6EhcwPCw=" alt="Password Generator" onclick="redirectTo('https://igtradingmaster.github.io/passgenerator/')">
                    <p>Password Generator</p>
                </div>
                <!-- Write Love Letter Section -->
                <div class="col-md-4 section">
                    <img src="https://www.shutterstock.com/image-vector/closed-stamp-postal-silhouette-seal-600nw-1681677931.jpg" alt="Love Letter" onclick="redirectTo('#')">
                    <p>Love Letter</p>
                </div>
                <!-- Sorry Letter Section -->
                <div class="col-md-4 section">
                    <img src="https://www.shutterstock.com/image-vector/closed-stamp-postal-silhouette-seal-600nw-1681677931.jpg" alt="Sorry Letter" onclick="redirectTo('#')">
                    <p>Sorry Letter</p>
                </div>
                <!-- Txt Reader Section -->
                <div class="col-md-4 section">
                    <img src="https://media.istockphoto.com/id/1193039142/vector/sign-up-icon-isolated-on-white-background-vector-illustration.jpg?s=612x612&w=0&k=20&c=wk4fcec72ODMyW292XmSJg3PqPAmW9-BtdWta91UhUU=" alt="Txt Reader" onclick="redirectTo('https://igtradingmaster.github.io/txtread/')">
                    <p>Txt Reader</p>
                </div>
                <!-- Essay Writer Section -->
                <div class="col-md-4 section">
                    <img src="https://www.shutterstock.com/image-vector/closed-stamp-postal-silhouette-seal-600nw-1681677931.jpg" alt="Essay Writer" onclick="redirectTo('#')">
                    <p>Essay Writer</p>
                </div>
                <!-- Self Improvement Section -->
                <div class="col-md-4 section">
                    <img src="https://www.shutterstock.com/image-vector/closed-stamp-postal-silhouette-seal-600nw-1681677931.jpg" alt="Self Improvement" onclick="redirectTo('#')">
                    <p>Self Improvement</p>
                </div>
                <!-- Upload Images Section -->
                <div class="col-md-4 section">
                    <img src="https://t4.ftcdn.net/jpg/04/81/13/43/360_F_481134373_0W4kg2yKeBRHNEklk4F9UXtGHdub3tYk.jpg" alt="Upload Images" onclick="redirectTo('https://igtradingmaster.github.io/imguploads/')">
                    <p>Upload Images</p>
                </div>
                <!-- Upload Videos Section -->
                <div class="col-md-4 section">
                    <img src="https://www.shutterstock.com/image-vector/closed-stamp-postal-silhouette-seal-600nw-1681677931.jpg" alt="Upload Videos" onclick="redirectTo('#')">
                    <p>Upload Videos</p>
                </div>
                <!-- Upload PDFs Section -->
                <div class="col-md-4 section">
                    <img src="https://www.shutterstock.com/image-vector/closed-stamp-postal-silhouette-seal-600nw-1681677931.jpg" alt="Upload PDFs" onclick="redirectTo('#')">
                    <p>Upload PDFs</p>
                </div>
            </div>
        </div>
    </center>
    <script>
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>

