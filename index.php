<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>amazing clicker game</title>
</head>
<body>
<script>
  var clicks = "0";
  var increment = "1000";
  var cost = "10";
  var cost2 = "100";
  var delay = "1000";
  var autoclickers = "0";
  var isDoubled = "0";
  var acMode = "0";
  var over5k = "0";
  var over1k = "0";
  function update() {
     document.getElementById("clickcount").innerHTML = clicks;
     document.getElementById("cost").innerHTML = cost;
     document.getElementById("increment").innerHTML = increment;
     document.getElementById("cost2").innerHTML = cost2;
     document.getElementById("autoclickers").innerHTML = autoclickers;
    }
  function increaseC(){
    for(var i = 0; i<increment; i++){
    clicks++;
    if(clicks > 1000){
      over1k = 1;
    }
    if(clicks > 5000){
      over5k = 1;
    }
    update();
    }
  }
  function increaseI(){
    if(clicks >= cost){
      increment++;
      if(isDoubled == 1){
        increment++;
      }
      clicks = clicks-cost;
      increaseCo();
      update();
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
      autoclickers++;
      cost2 = cost2*1.1;
      cost2 = Math.round(cost2);
      update();
    var idk = setInterval(
      function(){
        if(acMode == 1){
          increaseC();
        } else{
          clicks++;
          if(clicks > 1000){
            over1k = 1;
          }
          if(clicks > 5000){
            over5k = 1;
          }
        }
        update();
      }, delay
    );
    } else {
      alert("not enough clicks!");
    }
  }
  function doubleI(){
    if(clicks >= 1000 && isDoubled == 0){
      clicks = clicks-1000;
      increment = increment*2;
      isDoubled = 1;
      update();
    } else if(clicks < 1000){
      alert("not enough clicks!");
    } else if(isDoubled == 1){
      alert("I said one time offer >:(");
    }
  }
  function acModeUpdate(){
    if(acMode == 0 && clicks >= 5000){
      clicks = clicks-5000;
      acMode = 1;
      update();
    } else if (clicks < 5000) {
      alert("not enough clicks!")
    } else if (acMode == 1){
      alert("you don't want to go back, trust me...")
    }
  }
  </script>
  
  <body onload="update()">
  <br> Current clicks: <span id="clickcount"></span> </h1> <form>
  <input type="button" onclick="increaseC();"  value="Click!">
  </form>
  
  <br> Current gain: <span id="increment"></span> </hl>
  <br> Current cost: <span id="cost"></span> </h1> <form>
  <input type="button" onclick="increaseI();" value="+1 Gain">
  </form>

  <br> Current autoclickers: <span id="autoclickers"></span> </hl>
  <br> Current cost: <span id="cost2"></span> </h1> <form>
  <input type="button" onclick="autoclicker();" value="+1 cps">
  </form>

  <br> One Time Offer! Double your Gain for just 1000! </h1> <form>
  <input type="button" onclick="doubleI(); this.style.display='none';" value="gain x2">
  </form>

  <br> One Time Offer! Autoclickers add your gain instead of 1 for just 5000! </h1> <form>
  <input type="button" onclick="acModeUpdate(); this.style.display='none';" value="Change Autoclicker Mode">
  </form>

</body>
</html>