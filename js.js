var clock = document.getElementById('clock');
var hexColor = document.getElementById('hex-color');

function hexClock() {
     time = new Date();
     hours = (time.getHours() % 24).toString();
    minutes = time.getMinutes().toString();
     seconds = time.getSeconds().toString();

    if (hours.length < 2) {
        hours = '0' + hours;
    }

    if (minutes.length < 2) {
        minutes = '0' + minutes;
    }

    if (seconds.length < 2) {
        seconds = '0' + seconds;
    }

     clockStr = hours + ' : ' + minutes + ' : ' + seconds;
     hexColorStr = '#' + hours + minutes + seconds;

    clock.textContent = clockStr;
    hexColor.textContent = hexColorStr;
    document.body.style.backgroundColor = hexColorStr;
}

hexClock();
setInterval(hexClock, 1000);



