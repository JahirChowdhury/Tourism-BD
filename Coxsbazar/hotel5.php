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
      <img src="hotel5.jpg" alt="Seagull Hotel Cox's Bazar" style="width:100%">
      <div class="container">
        <h2>Seagull Hotel Cox's Bazar</h2>
        <p class="title">Address: Soghundha Point, Hotel Motel Zone, Cox's Bazaar Sea Beach, Cox's Bazar</p>
        <p>Phone: 0341-524100341-62480 ext. 90 </p>
        
      </div>
    </div>
  </div>
  
  <input type="button" value="Go Back" style="float: right;padding:10px;" onclick="document.location.href=('coxsbazar.php')"><br><br><br>
</body>  