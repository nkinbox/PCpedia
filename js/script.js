function toggledisplaybyID(e) {
  var ele = document.getElementById(e);
  if(ele.style.display == "none") {
    ele.style.display = "";
  } else {
    ele.style.display = "none";
  }
}
function toggledisplaybyCLASS(e) {
  var ele = document.getElementsByClassName(e);
  for(var i = 0; i < ele.length; i++) {
    if(ele[i].style.display == "none") {
      ele[i].style.display = "";
    } else {
      ele[i].style.display = "none";
    }
  }
}
function timezonemanager() {
  var displayDiv = document.getElementById("display-time-interval");
  var TZ = document.getElementById("TZ").value;
  var date_ele, time_ele, template, label, radio;
  displayDiv.innerHTML = "";
  for(var x in data[TZ]['intervals']) {
    template = document.getElementById("template").cloneNode(true);
    template.id = 'id'+x;
    template.style.display = "";
    label = template.getElementsByTagName("label")[0];
    label.htmlFor = 'radio'+x;
    radio = template.getElementsByTagName("input")[0];
    radio.id = 'radio'+x;
    radio.value = x;
    date_ele = template.getElementsByClassName("date_");
    date_ele[0].innerHTML = data[TZ]['intervals'][x]["start"]["date"];
    date_ele[1].innerHTML = data[TZ]['intervals'][x]["end"]["date"];
    time_ele = template.getElementsByClassName("time_");
    time_ele[0].innerHTML = data[TZ]['intervals'][x]["start"]["time"];
    time_ele[1].innerHTML = data[TZ]['intervals'][x]["end"]["time"];

    date_ele = template.getElementsByClassName("date_dst");
    date_ele[0].innerHTML = data[TZ]['intervals'][x]["start"]["date_dst"];
    date_ele[1].innerHTML = data[TZ]['intervals'][x]["end"]["date_dst"];
    time_ele = template.getElementsByClassName("time_dst");
    time_ele[0].innerHTML = data[TZ]['intervals'][x]["start"]["time_dst"];
    time_ele[1].innerHTML = data[TZ]['intervals'][x]["end"]["time_dst"];
    displayDiv.appendChild(template);
  }
}
function daylightsaving(dst) {
  toggledisplaybyCLASS('date_');
  toggledisplaybyCLASS('date_dst');
  toggledisplaybyCLASS('time_');
  toggledisplaybyCLASS('time_dst');
}
function setreminder() {
  var form = document.forms['set-reminder'];
  var x = -1;
  for(var i = 0; i < form['selected'].length; i++) {
    if(form['selected'][i].checked)
    x = form['selected'][i].value;
  }
  if(x == -1){
    toggledisplaybyID("error-interval");
    return false;
  }
  var TZ = form['tz'].value;
  if(form["name"].value == "" || form["phone"].value == "") {
    document.getElementById("selectedTZ").innerHTML = data[TZ]['name'];
    document.getElementById("selectedDST").innerHTML = form['dst'].value;
    var e = document.getElementById("reminder");
    var date_ele = e.getElementsByClassName("date_");
    date_ele[0].innerHTML = data[TZ]['intervals'][x]["start"]["date"];
    date_ele[1].innerHTML = data[TZ]['intervals'][x]["end"]["date"];
    var time_ele = e.getElementsByClassName("time_");
    time_ele[0].innerHTML = data[TZ]['intervals'][x]["start"]["time"];
    time_ele[1].innerHTML = data[TZ]['intervals'][x]["end"]["time"];

    var date_ele = e.getElementsByClassName("date_dst");
    date_ele[0].innerHTML = data[TZ]['intervals'][x]["start"]["date_dst"];
    date_ele[1].innerHTML = data[TZ]['intervals'][x]["end"]["date_dst"];
    var time_ele = e.getElementsByClassName("time_dst");
    time_ele[0].innerHTML = data[TZ]['intervals'][x]["start"]["time_dst"];
    time_ele[1].innerHTML = data[TZ]['intervals'][x]["end"]["time_dst"];
    e.style.display = "";
    return false;
  }
  return true;
}
function close_event() {
  var e = document.getElementsByClassName("close");
  for(var i=0; i < e.length; i++) {
    e[i].onclick = function() {
      this.parentElement.style.display = 'none';
    }
  }
}
