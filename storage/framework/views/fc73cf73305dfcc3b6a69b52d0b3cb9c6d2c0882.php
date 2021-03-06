

<?php $__env->startSection('title', 'Produk'); ?>

<?php $__env->startSection('content'); ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Jenis Produk</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="">
                        <h4 class="card-title">Jenis Produk</h4>
                        <p class="card-title-desc">
                            Lihat seluruh jenis produk item yang terdaftar disini.
                        </p>
                    </div>
                    <div class="ms-auto">
                        <a class="btn btn-outline-primary" href="<?php echo e(route('admin.master.jenis-produk.create')); ?>">Tambah</a>
                    </div>
                </div>

                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="mb-0"><?php echo e($message); ?></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis</th>
                            <th>Ditampilkan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>

            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {
        var dataTable = $("#datatable").DataTable({
            proccessing: true,
            serverSide: true,
            ordering: true,
            columnDefs: [ {
                searchable: false,
                orderable: false,
                targets: 0
            } ],
            order: [[ 1, 'asc' ]],
            ajax: {
                url: '<?php echo url()->current(); ?>'
            },
            columns: [
				{ data: 'id', width: '5%' },
                { data: 'jenis', name: 'jenis' },
                { data: 'tampilkan', name: 'tampilkan' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '5%',
                    className: 'text-center'
                },
            ]
        });

        dataTable.on( 'order.dt search.dt', function() {
            dataTable.column(0, ({ orderable: 'remove'})).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            });
        }).draw();

        $(".dataTables_length select").addClass('form-select form-select-sm');
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\bcoffee\resources\views/admin/master/jenis_produk/index.blade.php ENDPATH**/ ?>