<!-- Footer Div -->
<footer>
  <div class="container">
  <div class="copyright">
  Copyright &copy
  <?php
        $yearStart = '2017';
        $yearCurrent = date('Y');
        $copyright = $yearCurrent;
        echo $yearStart, ' - ' ,$copyright;
    ?> USJR Online Enrollment System : <a href="" class="copyrightlink">COM.E Club</a> : All Rights Reserved.
  </div>
  </div>
</footer>
</body>

<script type="text/javascript" src="<?php echo base_url('/assets/js/script-js.js'); ?>"></script>
</html>
