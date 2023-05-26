function updateTime() {
  const now = new Date();
  const hour = now.getHours().toString().padStart(2, '0');
  const minute = now.getMinutes().toString().padStart(2, '0');
  const second = now.getSeconds().toString().padStart(2, '0');

  document.getElementById('hour').textContent = hour;
  document.getElementById('minute').textContent = minute;
  document.getElementById('second').textContent = second;
}

setInterval(updateTime, 1000);
