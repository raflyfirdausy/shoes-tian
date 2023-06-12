<style>
    .container-fluid {
        color: black;
        font-weight: bold;
    }
</style>
<div class="container-fluid">
    <div class="card-group">       
        <div class="card">
            <div class="card-body bg-success text-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <p class="font-16 m-b-5">Total Order</p>
                            </div>
                            <div class="ml-auto">
                                <h1 class="font-light text-right"><?= $totalOrder ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-primary text-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <p class="font-16 m-b-5">Total Order Selesai</p>
                            </div>
                            <div class="ml-auto">
                                <h1 class="font-light text-right"><?= $totalOrderSelesai ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-danger text-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <p class="font-16 m-b-5">Total Order Dibatalkan</p>
                            </div>
                            <div class="ml-auto">
                                <h1 class="font-light text-right"><?= $totalOrderDibatalkan ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>