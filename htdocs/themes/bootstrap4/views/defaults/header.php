<!DOCTYPE html>
<?php
$page_title = '';
if(isset($title))
{
    $page_title .= $title . ' - ';
}
$page_title .= $this->config->item('site_name');
?>
<html lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $page_title; ?></title>
		<link rel="shortcut icon" href="<?php echo base_url() . 'favicon.ico'; ?>" />
		<link rel="stylesheet" href="<?php echo base_url();?>themes/bootstrap4/css/main.min.css">
<?php
/*//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'themes/bootstrap/js/',
    'style_dir'  => 'themes/bootstrap/css/',
    'cache_dir'  => 'static/asset/',
    'base_uri'	 => base_url(),
    'combine'	 => true,
    'dev'		 => !$this->config->item('combine_assets'),
));

// CSS
$this->carabiner->css('bootstrap.css');
$this->carabiner->css('bootstrap-responsive.css');
$this->carabiner->css('style.css');
$this->carabiner->css('codemirror.css');

$this->carabiner->display('css');*/

$searchparams = ($this->input->get('search') ? '?search=' . $this->input->get('search') : '');

?>
	<script type="text/javascript">
	//<![CDATA[
	var base_url = '<?php echo base_url(); ?>';
	//]]>
	</script>
	</head>
	<body>		
		<header>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
					<div class="container">
						<a class="navbar-brand brand title" href="<?php echo base_url(); ?>"><?php echo $this->config->item('site_name'); ?></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<?php $l = $this->uri->segment(1)?>
								<li class="nav-item <?php if($l == ""){ echo ' active'; }?>">
									<a href="<?php echo base_url(); ?>" class="nav-link" title="<?php echo lang('menu_create_title'); ?>">
										<?php echo lang('menu_create'); ?>
									</a>
								</li>
<?php if(!$this->config->item('private_only')){ ?>
								<li class="nav-item <?php if($l == "lists" || $l == "view" and $this->uri->segment(2) != "options"){ echo ' active'; }?>">
									<a href="<?php echo site_url('lists') . $searchparams; ?>" class="nav-link" title="<?php echo lang('menu_recent_title'); ?>">
										<?php echo lang('menu_recent'); ?>
									</a>
								</li>
								<li class="nav-item <?php if($l == "trends"){ echo ' active'; }?>">
									<a href="<?php echo site_url('trends') . $searchparams; ?>" class="nav-link" title="<?php echo lang('menu_trending_title'); ?>">
										<?php echo lang('menu_trending'); ?>
									</a>
								</li>
<?php } ?>
<?php if(! $this->config->item('disable_api')){ ?>
								<li class="nav-item <?php if($l == "api"){ echo ' active'; }?>">
									<a href="<?php echo site_url('api'); ?>" class="nav-link" title="<?php echo lang('menu_api'); ?>">
										<?php echo lang('menu_api'); ?>
									</a>
								</li>
<?php } ?>
								<li class="nav-item <?php if($l == "about"){ echo ' active'; }?>">
									<a href="<?php echo site_url('about'); ?>" class="nav-link" title="<?php echo lang('menu_about'); ?>">
										<?php echo lang('menu_about'); ?>
									</a>
								</li>
							</ul>
						</div>
				</div>
			</nav>
		</header>

		<div class="container pt-5">
				<?php if(isset($status_message)){?>
				<div class="message success change">
					<div class="container">
						<?php echo $status_message; ?>
					</div>
				</div>
				<?php }?>				
