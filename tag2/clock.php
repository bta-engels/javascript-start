<?php require '../inc/header.html'; ?>

<h1 id="clock"></h1>

<script>
   let h1 = document.getElementById('clock')

   //callback syntax
   setInterval(function(){
       const date = new Date();
       h1.innerText = date.toLocaleTimeString()
   },1000);


   //ES6 syntax
/*
   setInterval(() => {
       const date = new Date();
       h1.innerHTML = date.toLocaleTimeString()
   },1000);
*/

   // mit eigener Funktionsdeklaration:
   /*
    setInterval(myTimer, 1000);

    function myTimer() {
        const date = new Date();
        h1.innerHTML = date.toLocaleTimeString();
    }
*/
    //h1.innerText = currentTime

    //console.info(currentTime);

</script>
<?php require '../inc/footer.html'; ?>
