<?php
//session routing page
session_start();
$leaveRoute = site_url();



?>
<script>
    new Vue({
      el: '#app',
      methods: {
        handleScroll: function (evt, el) {
          if (window.scrollY > 50) {
            el.setAttribute(
              'style',
              'opacity: 1; transform: translate3d(0, -10px, 0)'
            )
          }
          return window.scrollY > 100
        }
      }
    })
</script>
