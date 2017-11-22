<?php $this->load->view('templates/header');?>
      
  <p><?php echo tanggal(); ?></p> 
    <div>
    	<h2>
    		Beranda
    	</h2>
    	Selamat datang, <?php echo $this->session->userdata('username'); ?>
    </div>



                              
      
<?php $this->load->view('templates/footer'); ?>