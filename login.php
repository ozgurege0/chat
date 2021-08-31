<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Anlık Konuşma Uygulaması</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Mail Adresiniz</label>
          <input type="text" name="email" placeholder="Mail adresi..." required>
        </div>
        <div class="field input">
          <label>Şifreniz</label>
          <input type="password" name="password" placeholder="Şifre..." required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Konuşmaya Başla!">
        </div>
      </form>
      <div class="link">Üyeliğiniz yok mu? <a href="index.php">Kayıt Ol</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
