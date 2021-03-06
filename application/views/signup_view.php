

<section class="title">
    <div class="container">
          <h1>Registration</h1>   
    </div>
  </section>
  <!-- / .title -->   

<section id="registration-page" class="container">
    <form class="center" action='' method="POST">
      <fieldset class="registration-form">
        <div class="control-group">
          <!-- Username -->
          <div class="controls">
              <input type="text" id="username" name="name" placeholder="name" class="input-xlarge" required="required" >
              <?php echo form_error('name'); ?>
          </div>
        </div>

        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">
            <input type="text" id="email" name="email" placeholder="E-mail" class="input-xlarge" required="required">
            <?php echo form_error('email'); ?>
          </div>
        </div>

        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge"required="required">
            <?php echo form_error('password'); ?>
          </div>
        </div>

        <div class="control-group">
          <!-- Password -->
          <div class="controls">
            <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" class="input-xlarge"required="required">
            <?php echo form_error('password_confirm'); ?>
          </div>
        </div>

        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success btn-large btn-block">Register</button>
          </div>
        </div>
      </fieldset>
    </form>
  </section>
