<?php
if(!empty($_POST)) {
  include '../database/library.php';
  set_freetime($_POST['data'],"../database/reminder-variables.php");
  header('Location: ../windows-help-and-support.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Weekly Plan</title>
  <style media="screen">
  #schedule {
    padding: 15px;
    margin: 15px;
    font-size: 120%;
  }
  #schedule div {
    padding: 10px;
  }
  </style>
  <script type="text/javascript">
  var count = 1;
  var data = '';
  function set(a) {
    if(count > 7)
    return 0;
    var date1, month1, from1, to1, date2, month2, from2, to2, nd1, nd2, ld1, ld2;
    date1 = document.getElementById("date1").value;
    month1 = document.getElementById("month1").value;
    from1 = document.getElementById("from1").value;
    date2 = document.getElementById("date2").value;
    month2 = document.getElementById("month2").value;
    to2 = document.getElementById("to2").value;
    if(a == 'y') {
    if(data == '')
    data = '2017-' + month1 + '-' + date1 + ' ' + from1 + ',2017-' + month2 + '-' + date2 + ' ' + to2;
    else
    data += '|2017-' + month1 + '-' + date1 + ' ' + from1 + ',2017-' + month2 + '-' + date2 + ' ' + to2;
    e = document.createElement("div");
    e.innerHTML = date1 + '-' + month1 + ' ' + from1 + ' ----- ' + date2 + '-' + month2 + ' ' + to2;
    document.getElementById("schedule").appendChild(e);
    }
    nd1 = new Date(2017, month1 , 0);
    nd2 = new Date(2017, month2 , 0);
    ld1 = nd1.getDate();
    ld2 = nd2.getDate();
    if(date1 == ld1) {
      document.getElementById("month1").selectedIndex += 1;
      document.getElementById("date1").selectedIndex = 0;
    } else
    document.getElementById("date1").selectedIndex += 1;
    if(date2 == ld2) {
      document.getElementById("month2").selectedIndex += 1;
      document.getElementById("date2").selectedIndex = 0;
    } else
    document.getElementById("date2").selectedIndex += 1;
    document.getElementById("data").value = data;
    count++;
  }
  function init() {
    var nd = new Date();
    document.getElementById("month1").selectedIndex = nd.getMonth();
    document.getElementById("date1").selectedIndex = nd.getDate() - 1;
    document.getElementById("month2").selectedIndex = nd.getMonth();
    document.getElementById("date2").selectedIndex = nd.getDate();
  }
  </script>
</head>
<body>
  <div>
    [D-<select id="date1">
      <?php $a = 1; while ($a <= 31) {?>
      <option><?php echo ($a < 10) ? '0'.$a : $a; $a++;?></option>
      <?php }?>
    </select>]
    [M-<select id="month1">
      <?php $a = 1; while ($a <= 12) {?>
      <option><?php echo ($a < 10) ? '0'.$a : $a; $a++;?></option>
      <?php }?>
    </select>]
    <select id="from1">
      <?php $a = 0; while ($a <= 23) {?>
      <option><?php echo ($a < 10) ? '0'.$a.':00:00' : $a.':00:00'; ++$a;?></option>
      <?php }?>
    </select>

    [D-<select id="date2">
      <?php $a = 1; while ($a <= 31) {?>
      <option><?php echo ($a < 10) ? '0'.$a : $a; $a++;?></option>
      <?php }?>
    </select>]
    [M-<select id="month2">
      <?php $a = 1; while ($a <= 12) {?>
      <option><?php echo ($a < 10) ? '0'.$a : $a; $a++;?></option>
      <?php }?>
    </select>]
    <select id="to2">
      <?php $a = 0; while ($a <= 23) {?>
      <option><?php ++$a; echo ($a < 10) ? '0'.$a.':00:00' : (($a == 24) ? '00:00:00' : $a.':00:00'); ?></option>
      <?php }?>
    </select>
    <button onclick="set('y')">Set Available</button>
    <button onclick="set('n')">Not Available</button>
    <div id="schedule"></div>
    <form id="data-form" method="post"><input type="hidden" id="data" name="data" value="">
      <button type="submit">Schedule Now</button>
    </form>
  </div>
  <script type="text/javascript">
    init();
  </script>
</body>
</html>
