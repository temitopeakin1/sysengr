<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../img/logo.png" sizes="16*16">
    <link rel="stylesheet" href="../css/app2staff.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <title>Systems Engineering Website</title>
  </head>
  <body>
  <?php include ('../config/inc_header.php'); ?>


    <section>
      <div class="container">
        <div class="form-flex">
          <div class="nothing"></div>

          <div class="from-container">
            <form class="this-form" action="../server/contact.php" method="POST">
              <div class="logo-form-container">
                <img class="logo-form" src="../img/sys.png" alt="Logo">
                <img class="logo-form" src="../img/lag.png" alt="Logo">
              </div>
              <h1 class="comp">Complaint Form</h1>
              <?php if (isset($msg)) : ; ?>
                <p class="<?php echo $msgClass; ?>"><?php echo $msg; ?></p>
              <?php endif; ?>
              <input id="email" class="email-input" type="email" placeholder="Enter your email..." required name="email">
              <p class="or">OR</p>
              <div class="check-container">
                <input id="checkbox" type="checkbox"> <p class="anonymous">Send as anonymous</p>
              </div>
              <input type="hidden" name="who" value="staff">
              <textarea rows="8" cols="80" placeholder="Enter complaint..." required name="complaint"></textarea>
              <div class="submit-container">
                <p class="paragraph">Send to: </p>
                <?php include '../config/constants.php' ?>
               <select class="form-select" class="sender" name="reciever">
                  <?php foreach($lecturers as $lecturer) : ; ?>
                    <option value="<?= $lecturer['email']; ?>"><?= $lecturer['name']; ?></option>
                  <?php endforeach; ?>
                  <input class="btn" type="submit" value="SUBMIT" name="submit">
                  
                </select>
              </div>

            </form>
          </div>
        </div>

      </div>

    </section>

    <?php include ('../config/inc_footer.php'); ?>

    <script src="code.js" charset="utf-8"></script>
  </body>
</html>
