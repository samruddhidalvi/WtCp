function startCountdown(id, duration) {
    let timer = duration, days, hours, minutes, seconds;
    const display = document.getElementById(id);
    const interval = setInterval(function () {
        days = parseInt(timer / 86400, 10);
        hours = parseInt((timer % 86400) / 3600, 10);
        minutes = parseInt((timer % 3600) / 60, 10);
        seconds = parseInt(timer % 60, 10);

        display.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

        if (--timer < 0) {
            clearInterval(interval);
            display.innerHTML = "Offer Ended";
        }
    }, 1000);
}

// Start countdown timers for each offer
startCountdown('countdown1', 86400); // 1 day for Diwali Special
startCountdown('countdown2', 7200); // 2 hours for Buy 1 Get 1 Free
startCountdown('countdown3', 3600); // 1 hour for New Arrivals

