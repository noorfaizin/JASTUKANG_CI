<!-- Content -->
<div class="col-md-11 bg-white mx-auto p-3 mb-4 rounded">
<h3 class="text-dark font-weight-bold">Pesan</h3>
<hr>

<div class="card">
	<div class="card-header text-dark">
		<i class="fa fa-envelope" aria-hidden="true"></i>
		<span class="font-weight-bold">Pesan ke admin</span>
	</div>
	<div class="card-body">
		
		<div class="direct-chat-messages">
			<!-- Percakapan -->
			<div class="direct-chat-msg">
				<div class="direct-chat-infos clearfix">
					<span class="direct-chat-name float-left text-warning">Admin JasTukang</span>
					<span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
				</div>
				<!-- Gambar Admin -->
				<img class="direct-chat-img" src="<?= base_url('assets/images/logo-footer.png')?>" alt="message user image">
				<!-- pPercakapan -->
				<div class="direct-chat-text-admin text-white">
					Terima kasih, anda sudah bergabung di JasTukang. Disini anda bisa memesan jasa tukang, beserta memesan peralatan perkakas atau produk yang kami sediakan. Semoga anda menikati, silahkan tulis komentar jika ada masukan untuk kami.
				</div>
			</div>
			<!-- Percakapan Admin -->
			<hr>
			<!-- Percakapan User -->
			<div class="direct-chat-msg right">
				<div class="direct-chat-infos clearfix">
					<span class="direct-chat-name float-right">Sarah Bullock</span>
					<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
				</div>
				<!-- Gambar User -->
				<img class="direct-chat-img" src="<?= base_url('assets/images/user/user.jpg')?>" alt="message user image">
				<!-- Percakapan -->
				<div class="direct-chat-text">
					You better believe it!
				</div>
			</div>
			<!-- Percakapan User -->
		</div>
	</div>
	<div class="card-footer">
		<form action="#" method="post">
			<div class="input-group">
			<input type="text" name="message" placeholder="Tulis pesan anda..." class="form-control">
			<span class="input-group-append">
				<button type="button" class="btn btn-warning">Send</button>
			</span>
			</div>
		</form>
	</div>
</div>

</div>

</div>