@extends('layouts.layout')
@section('content')	

<section class="s_top_nav_cntr">
	<div class="container-fluid">
		@include('navigations.front')
	</div>
</section>

<section class="s_common_ctr" style="margin-top: 70px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">



			{{ $mytime = Carbon\Carbon::now(); }}
			<br />
			{{ $mytime->toDateTimeString(); }}


				
				<h2>Pendaftaran</h2>  
				<form class="form-horizontal">

					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="email" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_lengkap" class="col-sm-2 control-label">Nama Lengkap</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="nama_lengkap" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_panggilan" class="col-sm-2 control-label">Nama Panggilan</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="nama_panggilan" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="jenis_kelamin" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="tempat_lahir" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="tanggal_lahir" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="alamat_tinggal" class="col-sm-2 control-label">Alamat Tinggal</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="alamat_tinggal" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="kota_tinggal" class="col-sm-2 control-label">Kota Tinggal</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="kota_tinggal" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="no_hp" class="col-sm-2 control-label">No. Handphone</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="no_hp" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="pekerjaan" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="kegiatan_gereja" class="col-sm-2 control-label">Kegiatan Gereja</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="kegiatan_gereja" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="hobi_bakat" class="col-sm-2 control-label">Hobi Bakat</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="hobi_bakat" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="dekanat" class="col-sm-2 control-label">Dekanat</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="dekanat" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="paroki" class="col-sm-2 control-label">Paroki</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="paroki" placeholder="Password">
						</div>
					</div>
					<!-- <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">birdtype</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">status aktivasi</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">status peserta</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">status bayar</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
					</div> -->
					<div class="form-group">
						<label for="kesediaan_informasi" class="col-sm-2 control-label">Kesediaan Informasi</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="kesediaan_informasi" placeholder="Password">
						</div>
					</div>
					<!-- <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">days count</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
					</div> -->





					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Sign in</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>


@stop