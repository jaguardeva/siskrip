<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
  <?php if (isset($_SESSION["message"])) { ?>
    Swal.fire({
      icon: 'success',
      title: 'Sukses',
      text: '<?php echo $_SESSION["message"]; ?>',
    })

  <?php }
  unset($_SESSION["message"]);
  ?>

  <?php if (isset($_SESSION["error"])) { ?>
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: '<?php echo $_SESSION["error"]; ?>',
    })
  <?php }
  unset($_SESSION["error"]) ?>
</script>
</body>

</html>