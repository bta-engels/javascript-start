<?php require '../inc/header.html'; ?>

<h1 id="clock"></h1>

<script>
  let h1 = document.querySelector('h1');
  
  const intervalId = window.setInterval(e => {
    let date = new Date(),
        currentTime = date.toLocaleTimeString();
        isoTime = date.toISOString();
    h1.innerText = isoTime;
  }, 1);
  
</script>

<?php require '../inc/footer.html'; ?>
