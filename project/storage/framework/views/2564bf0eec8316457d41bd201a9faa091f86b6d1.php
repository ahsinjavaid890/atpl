

<option value="" disabled selected ><?php echo e(__('Select Country')); ?></option>
	<?php $__currentLoopData = App\Models\Country::where('status',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->country_name); ?>" data="<?php echo e($data->id); ?>" rel5="<?php echo e(Auth::check() && Auth::user()->country == $data->country_name ? 1 : 0); ?>" rel="<?php echo e($data->states->count() > 0 ? 1 : 0); ?>" rel1="<?php echo e(Auth::check() ? 1 : 0); ?>" rel2="<?php echo e(Auth::check() && Auth::user()->state ?  Auth::user()->state : 0); ?>" <?php echo e(Auth::check() && Auth::user()->country == $data->country_name ? 'selected' : ''); ?> data-href="<?php echo e(route('country.wise.state',$data->id)); ?>"><?php echo e($data->country_name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\genius-shop-single\project\resources\views/includes/countries.blade.php ENDPATH**/ ?>