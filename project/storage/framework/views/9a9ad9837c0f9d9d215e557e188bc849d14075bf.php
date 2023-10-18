 

<?php $__env->startSection('content'); ?>  
					<input type="hidden" id="headerdata" value="<?php echo e(__('REVIEW')); ?>">
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading"><?php echo e(__('Reviews')); ?></h4>
										<ul class="links">
											<li>
												<a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?> </a>
											</li>
											<li>
												<a href="javascript:;"><?php echo e(__('Product Discussion')); ?> </a>
											</li>
											<li>
												<a href="<?php echo e(route('admin-rating-index')); ?>"><?php echo e(__('Reviews')); ?></a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<div class="product-area">
							<div class="row">
								<div class="col-lg-12">
									<div class="mr-table allproduct">
										<?php echo $__env->make('alerts.admin.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
										<div class="table-responsive">
												<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
									                        <th width="30%"><?php echo e(__('Product')); ?></th>
									                        <th><?php echo e(__('Reviewer')); ?></th>
									                        <th width="40%"><?php echo e(__('Review')); ?></th>
									                        <th><?php echo e(__('Options')); ?></th>
														</tr>
													</thead>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



				<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
										
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
												<div class="submit-loader">
														<img  src="<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>" alt="">
												</div>
											<div class="modal-header">
											<h5 class="modal-title"></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">

											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
											</div>
						</div>
					</div>

				</div>






<div class="modal fade" id="confirm-delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header text-center">
        <h4 class="modal-title w-100"><?php echo e(__('Confirm Delete')); ?></h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="text-center"><?php echo e(__('You are about to delete this Review.')); ?></p>
            <p class="text-center"><?php echo e(__('Do you want to proceed?')); ?></p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
            			<form action="" class="d-inline delete-form" method="POST">
				<input type="hidden" name="_method" value="delete" />
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>
			</form>
      </div>

    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>    



<?php $__env->startSection('scripts'); ?>




    <script type="text/javascript">

(function($) {
		"use strict";

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '<?php echo e(route('admin-rating-datatables')); ?>',
               columns: [
                        { data: 'product', name: 'product', searchable: false, orderable: false },
                        { data: 'reviewer', name: 'reviewer' },
                        { data: 'review', name: 'review' },
            			{ data: 'action', searchable: false, orderable: false }

                     ],
               language : {
                	processing: '<img src="<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>">'
                }
            });											

})(jQuery);


    </script>


    
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\atpl\project\resources\views/admin/rating/index.blade.php ENDPATH**/ ?>