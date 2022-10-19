<?php $__env->startSection('title', __('Create Menu')); ?>

<?php $__env->startSection('content'); ?>
<div class="row" id="category_body">
	<div class="col-lg-4">      
		<div class="card">
			<div class="card-body">
				<form class="ajaxform_with_reload" method="post" action="<?php echo e(route('admin.menu.store')); ?>">
					<?php echo csrf_field(); ?>
					<div class="custom-form">
						<div class="form-group">
							<label for="name"><?php echo e(__('Menu Name')); ?></label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Menu Name">
						</div>
						<div class="form-group">
							<label for="position"><?php echo e(__('Menu Position')); ?></label>
							<select class="custom-select mr-sm-2" id="position" name="position">
								<option value="header"><?php echo e(__('Header')); ?></option>
								<option value="footer"><?php echo e(__('Footer')); ?></option>
								<option value="footer_left_menu"><?php echo e(__('Footer left Menu')); ?></option>
								<option value="footer_right_menu"><?php echo e(__('Footer Right Menu')); ?></option>
							</select>
						</div>
						<div class="form-group">
							<label for="lang"><?php echo e(__('Select Language')); ?></label>
							<select class="custom-select mr-sm-2" id="lang" name="lang">
								<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($key); ?>"><?php echo e($row); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
						<div class="form-group">
							<label for="position"><?php echo e(__('Menu Status')); ?></label>
							<select class="custom-select mr-sm-2" id="status" name="status">
								<option value="1"><?php echo e(__('Active')); ?></option>
								<option value="0" selected=""><?php echo e(__('Draft')); ?></option>
							</select>
						</div>
						<div class="form-group mt-20">
							<button class="btn btn-primary col-12" type="submit"><?php echo e(__('Add New Menu')); ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-8" >      
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<div class="card-action-filter">
						<form class="ajaxform_with_reload" method="post" action="<?php echo e(route('admin.menus.destroy')); ?>">
							<?php echo csrf_field(); ?>
							<div class="card-filter-content d-flex">
								<div class="single-filter">
									<div class="form-group">
										<select class="form-control selectric" name="method">
											<option ><?php echo e(__('Select Actions')); ?></option>
											<option value="delete"><?php echo e(__('Delete Permanently')); ?></option>
										</select>
									</div>
								</div>
								<div class="single-filter ml-1">
									<button type="submit" class="btn btn-primary btn-lg"><?php echo e(__('Apply')); ?></button>
								</div>
							</div>
						</div>
						<div id="menuArea">
							<table class="table text-center category">
								<thead>
									<tr>
										<th class="am-select">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input checkAll" id="checkAll">
												<label class="custom-control-label" for="checkAll"></label>
											</div>
										</th>
										<th class="am-title"><?php echo e(__('Title')); ?></th>
										<th class="am-title"><?php echo e(__('Postion')); ?></th>
										<th class="am-title"><?php echo e(__('Language')); ?></th>
										<th class="am-title"><?php echo e(__('Status')); ?></th>
										<th class="am-title"><?php echo e(__('Customize')); ?></th>
										<th class="am-title"><?php echo e(__('Action')); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = App\Models\Menu::latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<td>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="ids[]" class="custom-control-input" id="customCheck<?php echo e($menu->id); ?>" value="<?php echo e($menu->id); ?>">
											<label class="custom-control-label" for="customCheck<?php echo e($menu->id); ?>"></label>
										</div>
									</td>
									<td><?php echo e($menu->name); ?> </td>
									<td><?php echo e($menu->position); ?></td>
									<td><?php echo e($menu->lang); ?></td>
									<td><?php if($menu->status==1): ?> <p class="badge badge-success"><?php echo e(__('Active Menu')); ?></p> <?php else: ?> <p class="badge badge-danger"><?php echo e(__('Draft Menu')); ?></p> <?php endif; ?></td>
									
									<td><a href="<?php echo e(route('admin.menu.show',$menu->id)); ?>"><i class="fas fa-arrows-alt"></i> <?php echo e(__('Customize')); ?></a></td>
									<td><a  class="text-success" href="<?php echo e(route('admin.menu.edit',$menu->id)); ?>" ><i class="far fa-edit"></i></a></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</form>	
						<tfoot>
							<tr>
								<th class="am-select">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input checkAll" id="checkAll">
										<label class="custom-control-label" for="checkAll"></label>
									</div>
								</th>
								<th class="am-title"><?php echo e(__('Title')); ?></th>
								<th class="am-author"><?php echo e(__('Postion')); ?></th>
								<th class="am-title"><?php echo e(__('Language')); ?></th>
								<th class="am-author"><?php echo e(__('Status')); ?></th>
								<th class="am-title"><?php echo e(__('Customize')); ?></th>
								<th class="am-author"><?php echo e(__('Action')); ?></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>				
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/admin/menu/create.blade.php ENDPATH**/ ?>