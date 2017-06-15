<html>
   <head>
      <title>charts</title>


       <script src = "js/jquery.js"></script>
       <script src="js/echarts.js"></script>
   </head>
      <body>

     <div id="Temp" class="center" style="width:600px;height:400px;" ></div>

     <br>
     <div id="Irr" style="width:600px;height:400px;"></div>
     <br>
     <div id="Current" style="width:600px;height:400px;"></div>
     <br>
     <div id="Voltage" style="width:600px;height:400px;"></div>
     <br>
     <div id="Power" style="width:600px;height:400px;"></div>


     <script src="js/temp.js"></script>
     <script src="js/current.js"></script>
     <script src="js/voltage.js"></script>
     <script src="js/power.js"></script>
     <script src="js/Irr.js"></script>
     <script  type="text/javascript">
        getMessage();
        getIrr();
        getCurrent();
        getVoltage();
        getPower();
     </script>
</body>
</html>
