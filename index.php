<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Anlık Konuşma Uygulaması</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>ilk Adınız</label>
            <input type="text" name="fname" placeholder="İlk ad..." required>
          </div>
          <div class="field input">
            <label>Soyadınız</label>
            <input type="text" name="lname" placeholder="Soyad..." required>
          </div>
        </div>
        <div class="field input">
          <label>Mail Adresiniz</label>
          <input type="text" name="email" placeholder="Mail Adresi..." required>
        </div>
        <div class="field input">
          <label>Şifreniz</label>
          <input type="password" name="password" placeholder="Şifre..." required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Resim Yükleyiniz</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Konuşmaya Başla!">
        </div>
      </form>
      <div class="link">Zaten üye misin? <a href="login.php">Giriş Yap</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
