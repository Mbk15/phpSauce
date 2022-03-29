 <div class="main">
    <div class="thanks-message">Thanks for contacting us!</div>
    <div class="display-contact">

      <div class="form-title">Submitted</div>

      <div class="form-item">■ Name</div>
      <!-- Print the name received from the form -->
           <?php echo $_POST['name']; ?>

            <!-- Print the age received from the form --> 
      <?php echo $_POST['age']; ?>

        <!-- Print the category received from the form below -->
      <?php echo $_POST['category']; ?>
      

      <div class="form-item">■ Message</div>
      <!-- Print the body received from the form -->
     <?php echo $_POST['body']; ?>
    </div>

  </div>