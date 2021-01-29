<?php
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
		  <h1 style="text-align: center;"><strong>Home</strong></h1>
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