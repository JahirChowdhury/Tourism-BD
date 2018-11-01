<!DOCTYPE html>
<html>

<head>
    <title>Dhaka</title>
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
            top: -380px;
            left: 450px;
            position: relative;
        }
		.card3 {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
            top: -760px;
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

            <li><a href="#Dhaka.php">Dhaka Hotel Gallery</a></li>


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
            <img src="Dhtl1.jpg" alt="The Olives" style="width:100%">
            <div class="container">
                <h2>The Olives</h2>
                <p class="title">Address: House No 3, Road No 126, Gulshan-1, Dhaka 1212</p>
                <p>Phone:01847-132822</p>

            </div>
        </div>
        <div class="card2">
            <img src="Dhtl2.jpg" alt="Hotel 71" style="width:100%">
            <div class="container">
                <h2>Hotel 71</h2>
                <p class="title">Address:176 Shahid Syed Nazrul Islam Sharani, (Old 47, Bijoy Nagar), Dhaka 1000</p>
                <p>Phone: 01750-076933</p>

            </div>
        </div>
        <div class="card3">
            <img src="Dhtl3.jpg" alt="Radisson Blu Dhaka Water Garden" style="width:100%">
            <div class="container">
                <h2>Radisson Blu Dhaka Water Garden</h2>
                <p class="title">Address: Airport Road, Dhaka Cantonment, Dhaka 1206</p>
                <p>Phone: 09666-774466</p>
        
            </div>
        </div>
  
    <div>

        <input type="button" value="Go Back" style="position:relative; left:860px; padding:10px;top:-600px" onclick="javascript: window.location.href='project1.php'"><br><br><br>

    </div>
</body>
