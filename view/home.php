<?php require __DIR__ . '/header.php'; ?>
<div class="container mt-5 mb-5 d-flex">
    <div class="card px-1 py-3">
        <form action="/freetimers-test/?calculate" method="post">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center pb-4">
                    <i class="fa fa-calculator"></i> How many bags of topsoil needed for my garden?
                </h5>

                <div class="d-flex flex-row no-gutters mr-1">
                    <div class="col-sm-6 mr-1">
                        <h6 class="card-title mb-3">Measurement Unit :</h6>
                        <select name="measurement" id="measurement" class="form-control text-center">
                            <option value="Meter">Meter</option>
                            <option value="Feet">Feet</option>
                            <option value="Yards">Yards</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mr-1">
                        <h6 class="card-title mb-3">Depth-Measurement Unit :</h6>
                        <select name="depth-measurement" id="depth-measurement" class="form-control text-center">
                            <option value="Centimeter">Centimeter</option>
                            <option value="Inches">Inches</option>
                        </select>
                    </div>
               </div>

                <h6 class="information mt-4"><i class="fa fa-pencil"></i> Please provide dimensions of your garden :</h6>
                <div class="d-flex flex-row no-gutters mr-1">
                    <div class="col-sm-6 mr-1">
                        <div class="form-group">
                            <input class="form-control" type="number" name="width" placeholder="Garden Width">
                        </div>
                    </div>
                    <div class="col-sm-6 mr-1">
                        <div class="form-group">
                            <input class="form-control" type="number" name="length" placeholder="Garden Lenght">
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary btn-block submit-button">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>