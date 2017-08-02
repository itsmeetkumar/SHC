<?php
if (isset($this->session->userdata['adminlog'])) {
$username = ($this->session->userdata['adminlog']['username']);
//$email = ($this->session->userdata['logged_in']['email']);
} else {
  $site=site_url('teacher/user_login');
header("location: $site");
}

include 'header.php';
include 'body/paper_body.php';
include 'footer.php';
 ?>
