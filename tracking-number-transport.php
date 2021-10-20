<html>
<body>
  
<style>
.btnclick {
  cursor: pointer;
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border-radius: 34px;
}  
.btninput {
  border-radius: 34px;
}  
</style>
<div style="margin:0 auto; text-align: center;"><h1>TRACKING</h1>
<p style="font-size:12px; color:red;">*Exam Tracking Number
    <br>Thailand Post: EO659305233TH
    <br>Kerry: ENXXXXXXXXXTH
    <br>Flash: FLXXXXXXXXXTH
    <br>J&T: JTXXXXXXXXXTH
</p>
<form onsubmit="return myFunction()" id="trackingForm">
  <p>Tracking Number: </p><input style="max-width: 30%; margin-bottom: 15px;" type="text" id="trackid" size="20" name="" placeholder="EOXXXXXXXXXTH" class="btninput"><br>
  <input type="submit" value="ตรวจสอบสถานะสินค้า" class="btnclick"> 
</form>
<br>
<p id="track"></p>
<p id="track1"></p>
<p id="track2"></p>
<p id="track3"></p>
</div>
<script type="text/javascript">
function myFunction() 
{
  var trackingnumber = document.getElementById("trackid").value;
  var trackingnumber = trackingnumber.toUpperCase();
  var post = '';
  var trans = '';
  var track = '';
  submitOK = "true";
  if (document.getElementById("trackingForm")) {
    setTimeout("submitForm()", 5000); // set timout 
}
  if(isNaN(trackingnumber))
  {
    if(trackingnumber.startsWith("EN"))
    {
      var post = 'https://th.kerryexpress.com/th/track/';
      var trans = 'Kerry';
      var track = 'track';
    }
    else if(trackingnumber.startsWith("EO"))
    {
      var post = 'https://track.thailandpost.co.th/dashboard';
      var trans = 'Thailand Post';
      var track = 'trackNumber';
    }
    else if(trackingnumber.startsWith("FL"))
    {
      var post = 'https://www.flashexpress.co.th/tracking';
      var trans = 'Flash';
      var track = 'se';
    }
    else if(trackingnumber.startsWith("JT"))
    {
      var post = 'https://www.jtexpress.co.th/index/query/gzquery.html';
      var trans = 'J&T';
      var track = 'bills';
    }
    else
    {
      var post = '';
      var trans = '';
      var track = '';
    }
    if (post == '')
    {
      document.getElementById("track").innerHTML = "";
      document.getElementById("track1").innerHTML = "";
      document.getElementById("track2").innerHTML = "";
      document.getElementById("track3").innerHTML = "";
      document.getElementById("trackid").name = "";
      document.getElementById("trackingForm").action = "";
    }
    else
    {
      document.getElementById("track").innerHTML = "เลขพัสดุ: "+trackingnumber;
      document.getElementById("track1").innerHTML = "ขนส่ง: "+trans;
      document.getElementById("track2").innerHTML = "ลิงค์ไปที่: "+post;
      document.getElementById("track3").innerHTML = "TrackCode: "+track;
      document.getElementById("trackid").name = track;
      document.getElementById("trackingForm").action = post;
    }
  }
  else
  {
    submitOK = "false";
  }
  if (submitOK == "false") 
  {
    return false;
  }
}
</script>
</body>

</html>
