<!DOCTYPE html>
<html>

<head>
    <title>Khulna</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: skyblue;
        }

        li {
            float: center;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 40px 20px;
            text-decoration: none;
            font-family: "Arial";
            font-size: 20px;
        }

        li a:hover {
            background-color: #4A71AB;
        }

        h1 {
            color: skyblue;
            text-align: center;
            font-family: "Arial";
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
        }
        .card2 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
            top: -410px;
            left: 450px;
            position: relative;
        }
		.card3 {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
            top: -920px;
            left: 900px;
            position: relative;
		}

        .top-left {
            position: absolute;
            top: 30px;
            left: 16px;
            color: brown;
            font-size: 40px;
            font-family: "Helvetica";
            font-weight: bold;
        }

        .container {
            padding: 0 10px;
            width: 70%;

        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .row {
            box-sizing: border-box;
            width: 70%;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

    </style>

</head>

<body>
    <div>
        <ul>

            <li><a href="#Khulna.php">Dhaka Hotel Gallery</a></li>


        </ul>

    </div>

    <div>
        <h1>
            THERE ARE SOME HOTELS WE CAN SUGGEST<br>


        </h1>

    </div>
    <br>
    <br>
    <div class="column">
        <div class="card">
            <img src="Khtl1.jpg" alt="Hotel Royal International" style="width:100%">
            <div class="container">
                <h2>Hotel Royal International</h2>
                <p class="title">Address: A-33, Khan Jahan Ali Rd, Khulna 9100</p>
                <p>Phone: 01718-679900</p>

            </div>
        </div>
        <div class="card2">
            <img src="Khtl2.jpg" alt="Hotel Castle Salam" style="width:100%">
            <div class="container">
                <h2>Hotel Castle Salam</h2>
                <p class="title">Address:G-8 Taltola Ln, Khulna 9000</p>
                <p>Phone:  041-720160</p>

            </div>
        </div>
        <div class="card3">
            <img src="Khtl3.jpg" alt="Western Inn International Ltd " style="width:100%">
            <div class="container">
                <h2>Western Inn International Ltd </h2>
                <p class="title">Address: 51, Khan -a-Sabur Road Upper Jessore Rd, Khulna 9100</p>
                <p>Phone: 041-810899</p>
        
            </div>
        </div>
  
    <div>

        <input type="button" value="Go Back" style="position:relative; left:860px; padding:10px;top:-600px" onclick="javascript: window.location.href='project1.php'"><br><br><br>

    </div>
</body>
