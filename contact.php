
  <?php require "header.php" ?>

    <div class="row">
      <div class="rightcolumn">
        <div class="card">
        <p>SEND E-MAIL</p>
        <form class="contact-form" action="contact.php" method="post">
          <input type="text" name="name" placeholder="Full name">
          <input type="text" name="email" placeholder="your email">
          <input type="text" name="subject" placeholder="subject">
          </div>
          </div>

          <div class="leftcolumn">
            <div class="card">
          <textarea name="message" rows="8"></textarea>
          <button type="submit" name="submit">send mail</button>
          </div>
        </form>
  </div>
</div>
<?php require "footer.php" ?>
