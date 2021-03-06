<?php $__env->startSection('pegawai'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<a  href="<?php echo e(url('pegawai/create')); ?>" class="btn btn-warning form-control">Tambah</a>
			        <div class="col-md-6 col-md-offset-0">
			            <div class="panel panel-warning">
			                <div class="panel-heading">Data Pegawai</div>
			                <div class="panel-body">
			                	<table border="2" class="table table-warning table-border table-hover">
									<thead >
									<tr class ="bg-warning">
										<tr>
											<th>No</th>
											<th>NIP</th>
											<th>Nama Golongan</th>
											<th>Nama Jabatan</th>
											<th>Photo</th>
										</tr>
									</thead>
									<?php  $no=1;  ?>
									<tbody>
										<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
										<tr>
											<td><?php echo e($no++); ?></td>
											<td><?php echo e($data->nip); ?></td>
											<td><?php echo e($data->golongan->nama_g); ?></td>
											<td><?php echo e($data->jabatan->nama_j); ?></td>
											<td>
												
											
												
													<img src="assets/image/<?php echo e($data->photo); ?>" width="50" height="50">
							                    
							                </div>

											</td>
											
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
									</tbody>
								</table>
			                </div>
			            </div>
			        </div>
			        <div class="col-md-6 ">
			            <div class="panel panel-warning">
			               <center <div class="panel-heading">Data User</div></center>
			                <div class="panel-body">
			                	<table border="2" class="table table-warning table-border table-hover">
									<thead >
										<tr>
										<tr class ="bg-warning">
											<th>Name</th>
											<th>Type User</th>
											<th>Email</th>
											<th colspan="2"><center>Action</center></th>
										</tr>
									</thead>
									<?php  $no=1;  ?>
									<tbody>
										<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
										<tr>
											<td><?php echo e($data->user->name); ?></td>
											<td><?php echo e($data->user->type_user); ?></td>
											<td><?php echo e($data->user->email); ?></td>
											
											<td>
												<a href="<?php echo e(route('pegawai.edit',$data->id)); ?>" class='btn btn-danger'> Edit </a>
											</td>
											<td>
												<?php echo Form::open(['method'=>'DELETE','route'=>['pegawai.destroy',$data->id]]); ?>

												<?php echo Form::submit('Delete',['class'=>'btn btn-primary']); ?>

												<?php echo Form::close(); ?>

											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
									</tbody>
								</table>
			                </div>
			            </div>
			        </div>
					
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>