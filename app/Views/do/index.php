<!-- page content -->
<!----------------------------------->
<div class="right_col" role="main">
    <!----------------------------------->

    <div class="container">
        <!-- Form DO -->
        <form class="form-group" method="post" action="<?=base_url('salesdo/savedo')?>">
            <?= csrf_field() ?>
            <div class="row">
                <div class="col-md-12 text-info font-italic" style="font-size:18pt;">
                    #<?=@$_GET['last']?>

                </div>

                <div class="col-md-4">
                    <label>Delivery Order Number:</label>
                    <input class="form-control form-control" value="0001/PIS/III/22">

                    <label>Delivery Order Date:</label>
                    <input class="form-control form-control" type="date" value="<?=date('Y-m-d')?>">

                    <label>Search</label>
                    <select class="js-select2 form-control select-input " style="width:100%;color:orangered;">
                        <option value="AL">Customer 1</option>
                        <option value="WY">Customer 2</option>
                        <option value="WY">Customer 3</option>
                    </select>

                    <label>Customer Name:</label>
                    <input class="form-control form-control">

                    <label>Purchase Order Number:</label>
                    <input class=" form-control form-control">

                    <label>Purchase Order Date</label>
                    <input class="form-control form-control" type="date" value="<?=date('Y-m-d')?>">
                </div>
                <div class="col-md-4">
                    <label>PPN</label>
                    <select class="js-select2  custom-select input-group-sm" name="state"
                        style="width:100%;height:24px;line-height:24px;padding:0;margin:0;">
                        <option value="11">PPN 11%</option>
                        <option value="0">PPN 0%</option>
                    </select>

                    <label>Total Include Tax</label>
                    <input class="form-control form-control">

                    <label>Payment</label>
                    <select class="js-select2  custom-select input-group-sm" name="state"
                        style="width:100%;height:24px;line-height:24px;padding:0;margin:0;">
                        <option value="0">Cash</option>
                        <option value="0">Net7</option>
                        <option value="0">Net14</option>
                        <option value="0">Net30</option>
                        <option value="0">Net60</option>
                    </select>
                    <br><br>
                    <label>Note Delivery Order</label>
                    <textarea class="form-control"></textarea>

                    <label>Delivery Address</label>
                    <textarea class="form-control"></textarea>
                    <br>
                    <button class="btn btn-primary" name="btnSave">Save</button>
                    <button class="btn btn-success" name="btnCancel">Cancel</button>
                    <button class="btn btn-warning" name="btnLock">Lock</button>

                </div>
        </form>
        <div class="col-md-4">
            <label>Ekspedision</label>
            <input class=" form-control">

            <label>Shipping Cost ByCustomer</label>
            <input class=" form-control">

            <label>Cost (Expense)</label>
            <input class=" form-control">

            <label>Discount</label>
            <input class=" form-control">

            <label>Payment Discount</label>
            <input class=" form-control">

            <label>Accounts Receivable</label>
            <input class=" form-control">
            <br>
            <button class="btn btn-primary">Update</button>
            <button class="btn btn-success" name="btnCancel">Cancel</button>

        </div>
    </div>
    <!-- end form -->
</div>

















<!----------------------------------->
</div>
<!----------------------------------->
<!-- /page content -->