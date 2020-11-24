<?php
$error=false;
$url_f_open = ini_get('allow_url_fopen');
function is_mod_rewrite_enabled() {
  if ($_SERVER['HTTP_MOD_REWRITE'] == 'On') {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>
<table class="table table-hover">
	<thead>
		<tr>
			<th><b>Extensions</b></th>
			<th><b>Result</b></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Linux Operating System (Cent OS Recommended)</th>
			<td><?php echo (!strtoupper(substr(PHP_OS, 0, 5)) === 'LINUX')? "<span class='label label-danger rerror'>".PHP_OS."</span>" : "<span class='label label-success'>".PHP_OS."</span>"; ?></td>
		</tr>
		<tr>
			<th>PHP 7.1+ Upto 7.2 </th>
			<td><?php echo (phpversion() < "7.1" || phpversion() >= "7.2")? "<span class='label label-danger rerror'>Your PHP version is " . phpversion() . "</span>" :"<span class='label label-success'>v." . phpversion() . "</span>"; ?></td>
		</tr>
		<tr>
			<th>MySQLi PHP Extension</th>
			<td><?php echo (!extension_loaded('mysqli'))? "<span class='label label-danger rerror'>mysqli Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>GD PHP Extension</th>
			<td><?php echo (!extension_loaded('gd'))? "<span class='label label-danger rerror'>GD Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<?php /* <tr>
			<th>ionCube Loader</th>
			<td><?php echo (!extension_loaded('ionCube Loader'))? "<span class='label label-danger rerror'>ionCube Loader is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr> */ ?>
		<tr>
			<th>cURL PHP Extension</th>
			<td><?php echo (!extension_loaded('curl'))? "<span class='label label-danger rerror'>curl Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>Mcrypt PHP Extension</th>
			<td><?php echo (!extension_loaded('mcrypt'))? "<span class='label label-danger rerror'>Mcrypt Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>XML PHP Extension</th>
			<td><?php echo (!extension_loaded('xml'))? "<span class='label label-danger rerror'>XML Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>PDO PHP Extension</th>
			<td><?php echo (!extension_loaded('pdo'))? "<span class='label label-danger rerror'>pdo Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>	
		<tr>
			<th>OpenSSL PHP Extension</th>
			<td><?php echo (!extension_loaded('openssl'))? "<span class='label label-danger rerror'>openssl Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>MBString PHP Extension</th>
			<td><?php echo (!extension_loaded('mbstring'))? "<span class='label label-danger rerror'>mbstring Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>iconv PHP Extension</th>
			<td><?php echo (!extension_loaded('iconv') && !function_exists('iconv'))? "<span class='label label-danger rerror'>iconv Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>Zip PHP Extension</th>
			<td><?php echo (!extension_loaded('zip'))? "<span class='label label-danger rerror'>Zip Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>allow_url_fopen</th>
			<td><?php echo ($url_f_open != "1" && $url_f_open != 'On')? "<span class='label label-danger rerror'>allow_url_fopen is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>File Info Extension</th>
			<td><?php echo (!extension_loaded('fileinfo'))? "<span class='label label-danger rerror'>fileinfo Extension is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>
		<tr>
			<th>URL Rewrite Module</th>
			<td><?php if(is_mod_rewrite_enabled() || function_exists('apache_get_modules')){
					$apache_modules = apache_get_modules();
					if(!in_array('mod_rewrite',$apache_modules)){
						echo "<span class='label label-danger rerror'>URL Rewrite is not enabled!</span>";
					}else{
						echo "<span class='label label-success'>Enabled</span>";
					} 
				}else{
					echo "<span class='label label-danger rerror'>URL Rewrite is not enabled!</span>";
				} ?>
			</td>
		</tr>
		<tr>
			<th>Email Function</th>
			<td><?php echo (!function_exists('mail'))? "<span class='label label-danger rerror'>mail function is not enabled!</span>" : "<span class='label label-success'>Enabled</span>"; ?></td>
		</tr>		
	</tbody>
</table>
<hr />
<div class="text-center alert alert-danger" id="errorDiv">
	<p>Please Active or Extend your server with the necessary Requirement extension or modules.You need to fix the requirements in order to continue installation process</p>
</div>
<div class="text-center" id="successDiv">
	<form action="" method="post" accept-charset="utf-8">
		<input type="hidden" value="true" name="requirements_success">
		<div class="text-left">
			<input type="submit" name="submitprocess" class="btn btn-success process" value="Go to files/folders permissions" />
		</div>
	</form>
</div>
