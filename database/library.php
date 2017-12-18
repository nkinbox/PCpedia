<?php
function timezonemanager($timezones, $intervals) {
  date_default_timezone_set('UTC');
  $result = array();
  foreach ($timezones as $key=>$timezone) {
  $result[$key] = array("name"=>$timezone['name'],"intervals"=>array());
  foreach ($intervals as $time) {
    $utc_from = $timezone['offset']*3600 + $time[0];
    $utc_to = $timezone['offset']*3600 + $time[1];
    $utc_from_dst = $timezone['offset']*3600 + $time[0] + 3600;
    $utc_to_dst = $timezone['offset']*3600 + $time[1] + 3600;
    $result[$key]['intervals'][] = array(
      "start"=>array(
        "date"=>date('d M', $utc_from),
        "time"=>date('h:i A', $utc_from),
        "date_dst"=>date('d M', $utc_from_dst),
        "time_dst"=>date('h:i A', $utc_from_dst)
    ),
      "end"=>array(
        "date"=>date('d M', $utc_to),
        "time"=>date('h:i A', $utc_to),
        "date_dst"=>date('d M', $utc_to_dst),
        "time_dst"=>date('h:i A', $utc_to_dst)
      )
    );
  }
  }
  return json_encode($result);
}
function set_freetime($schedule_data, $savetopath) {
  date_default_timezone_set('UTC');
  $dates = explode("|", $schedule_data);
  $period = array();
  foreach ($dates as $val) {
    $time = explode(",", $val);
    $period[] = array(
      (date_format(date_create($time[0]),"U")-19800),
      (date_format(date_create($time[1]),"U")-19800)
    );
  }
  $text = "";
  foreach ($period as $value) {
    if($text == "")
    $text = "array(" .$value[0]. ", " .$value[1]. ")";
    else
    $text .= ", array(" .$value[0]. ", " .$value[1]. ")";
  }
  $text = "<?php \$intervals = array(".$text."); ?>";
  $file = fopen($savetopath, "w");
  fwrite($file,$text);
  fclose($file);
}
?>
