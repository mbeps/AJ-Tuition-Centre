<?php
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">Logged Out</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status">Logged In</p>';
          }
          ?>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>