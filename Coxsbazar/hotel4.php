 <!DOCTYPE html>
<html>
<head>
<title>Hotel 1</title>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:100%;
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
  width:70%;
  
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.row {
	box-sizing: border-box;
	width:70%;
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:100%;
}
</style>
</head>

<body>
 <div class="column">
    <div class="card">
      <img src="hotel4.jpg" alt="Hotel The Cox Today" style="width:100%">
      <div class="container">
        <h2>Hotel The Cox Today</h2>
        <p class="title">Address: 2 Plot No 7, Kolatoli Road, Hotel Motel Zone, Cox's Bazar 4700</p>
        <p>Phone: 0341-52410</p>
        
      </div>
    </div>
  </div>
  
  <input type="button" value="Go Back" style="float: right;padding:10px;" onclick="document.location.href=('coxsbazar.php')"><br><br><br>
</body>  