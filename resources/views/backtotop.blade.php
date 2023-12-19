<button id="back-to-top-btn" class="bg-success" onclick="scrollToTop()">Back to Top</button>


  <script>
   
    var mybutton = document.getElementById("back-to-top-btn");

   
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

   
    function scrollToTop() {
        document.body.scrollTop = 0; 
        document.documentElement.scrollTop = 0; 
    }
</script>