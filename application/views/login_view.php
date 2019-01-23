<?php $this->load->view('_partials/head'); ?>

<?php $this->load->view('_partials/nav_awal'); ?>

<br>

<div class="container">
<div class="jumbotron">
<center>
  <h2>Login</h2>
  </center>
  <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
  <?php echo $this->session->flashdata('msg');?>
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="username..." name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="password..." name="password">
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>

    <?php echo 
  form_close(); ?>

  <br>
  <br>
  <p><i>*Untuk mengakses bagian-bagian dari Sistem Ujian Online, anda harus log in menggunakan username dan password yang diizinkan oleh sistem administrator.</i> </p>
  
</div>

</div>

<?php $this->load->view('_partials/footer_awal'); ?>
