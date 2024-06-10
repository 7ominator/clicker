<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<script>
  var clicks = "0";
  var increment = "50";
  var cost = "10";
  var cost2 = "100";
  function update() {
     document.getElementById("clickcount").innerHTML = clicks;
     document.getElementById("cost").innerHTML = cost;
     document.getElementById("increment").innerHTML = increment;
     document.getElementById("cost2").innerHTML = cost2;
    }
  function increaseC(){
    for(var i = 0; i<increment; i++){
    clicks++;
    }
  }
  function increaseI(){
    if(clicks >= cost){
    increment++;
      clicks = clicks-cost;
      increaseCo(); 
    } else{
      alert("not enough clicks!");
    }
  }
  function increaseCo(){
    cost = cost*2;
  }
  function autoclicker(){
    if(clicks >= cost2){
      clicks = clicks - cost2;
    for(;;){
      clicks = clicks+1;
      update();
      sleep(1);
    }
    } else {
      alert("not enough clicks!");
    }
  }
  </script>
  <body onload="update()">
  <br> Current clicks: <span id="clickcount"></span> </h1> <form>
  <input type="button" onclick="increaseC(); update();" value="Click!">
  </form>
  
  <br> Current gain: <span id="increment"></span> </hl>
  <br> Current cost: <span id="cost"></span> </h1> <form>
  <input type="button" onclick="increaseI(); update();" value="+1 Gain">
  </form>

  <br> Current cost: <span id="cost2"></span> </h1> <form>
  <input type="button" onclick="autoclicker(); update();" value="+1 cps">
  </form>
</body>
</html>