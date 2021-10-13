
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assetsuser/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assetsuser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assetsuser/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>assetsuser/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>assetsuser/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assetsuser/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assetsuser/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>assetsuser/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url() ?>assetsuser/js/demo/chart-area-demo.js"></script>

  <script defer src="https://widget-js.cometchat.io/v2/cometchatwidget.js"></script>

  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

  <script>
  $(document).ready(function(){
    $(".preloader").fadeOut();
  })
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


<!-- Halaman Dashboard bagian Tulisan Diagnosa Penyakit -->
<script>
  var textWrapper = document.querySelector('.ml2');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  anime.timeline({loop: true})
    .add({
      targets: '.ml2 .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70*i
    }).add({
      targets: '.ml2',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });
</script>

<!-- Halaman Dashboard bagian Tulisan Daftar Penyakit -->
<script>
  var textWrapper = document.querySelector('.ml3');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  anime.timeline({loop: true})
    .add({
      targets: '.ml3 .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70*i
    }).add({
      targets: '.ml3',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });
</script>

<!-- Halaman Dashboard bagian Tulisan Informasi Kesehatan -->
<script>
  var textWrapper = document.querySelector('.ml4');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  anime.timeline({loop: true})
    .add({
      targets: '.ml4 .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70*i
    }).add({
      targets: '.ml4',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });
</script>

<!-- Halaman Dashboard bagian Tulisan Diagnosa About -->
<script>
  var textWrapper = document.querySelector('.ml5');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  anime.timeline({loop: true})
    .add({
      targets: '.ml5 .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70*i
    }).add({
      targets: '.ml5',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });
</script>

<!-- Tulisan Loading -->
<script>
  var textWrapper = document.querySelector('.ketik');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  anime.timeline({loop: true})
    .add({
      targets: '.ketik .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70*i
    }).add({
      targets: '.ketik',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });
</script>

<script>
  var tulisan = {};
  tulisan.opacityIn = [0,1];
  tulisan.scaleIn = [0.2, 1];
  tulisan.scaleOut = 3;
  tulisan.durationIn = 800;
  tulisan.durationOut = 600;
  tulisan.delay = 500;

  anime.timeline({loop: true})
    .add({
      targets: '.tulisan .letters-1',
      opacity: tulisan.opacityIn,
      scale: tulisan.scaleIn,
      duration: tulisan.durationIn
    }).add({
      targets: '.tulisan .letters-1',
      opacity: 0,
      scale: tulisan.scaleOut,
      duration: tulisan.durationOut,
      easing: "easeInExpo",
      delay: tulisan.delay
    }).add({
      targets: '.tulisan .letters-2',
      opacity: tulisan.opacityIn,
      scale: tulisan.scaleIn,
      duration: tulisan.durationIn
    }).add({
      targets: '.tulisan .letters-2',
      opacity: 0,
      scale: tulisan.scaleOut,
      duration: tulisan.durationOut,
      easing: "easeInExpo",
      delay: tulisan.delay
    }).add({
      targets: '.tulisan .letters-3',
      opacity: tulisan.opacityIn,
      scale: tulisan.scaleIn,
      duration: tulisan.durationIn
    }).add({
      targets: '.tulisan .letters-3',
      opacity: 0,
      scale: tulisan.scaleOut,
      duration: tulisan.durationOut,
      easing: "easeInExpo",
      delay: tulisan.delay
    }).add({
      targets: '.tulisan .letters-4',
      opacity: tulisan.opacityIn,
      scale: tulisan.scaleIn,
      duration: tulisan.durationIn
    }).add({
      targets: '.tulisan .letters-4',
      opacity: 0,
      scale: tulisan.scaleOut,
      duration: tulisan.durationOut,
      easing: "easeInExpo",
      delay: tulisan.delay
    }).add({
      targets: '.tulisan',
      opacity: 0,
      duration: 500,
      delay: 500
    });
</script>

</body>

</html>
