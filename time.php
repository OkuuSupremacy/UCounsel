<script>
function calendar() {
    var today = new Date();
    var day=today.getDate();
    var month=today.getMonth();
    var year=today.getFullYear();
    var day_name = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    var month_name = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    var hour = today.getHours();
    var minute = today.getMinutes();
    var second = today.getSeconds();

    minute = checkTime(minute);
    second = checkTime(second);
    document.getElementById('txt').innerHTML =
    day_name[today.getDay()]+ ' | ' + day + ' ' + month_name[month] + ' ' + year + ' | ' + hour + ':' + minute + ':' + second;
    var t = setTimeout(calendar, 500);
}
function checkTime(i) {
    if (i < 10) {i = '0' + i};
    return i;
}
</script>



<body onload='calendar()'>

<div id='txt'></div>