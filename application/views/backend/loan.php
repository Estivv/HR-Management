<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
      <div class="page-wrapper">
            <div class="message"></div>  
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-money" aria-hidden="true"></i> Upgrade Employee</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Upgrade Employee</li>
                    </ol>
                </div>
            </div>
         <div class="container-fluid">
            <div class="row m-b-10"> 
                <div class="col-12">
                    <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a data-toggle="modal" data-target="#loanmodel" data-whatever="@getbootstrap" class="text-white"><i class="" aria-hidden="true"></i> Add Upgrade Employee </a></button>
         
                </div>
            </div> 
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white"> Upgrade Employee List                     
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table id="loan123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Employee Code</th>
                                            <th>Salary Befor</th>
                                     <!--   <th>Interest Percentage </th>
                                            <th>Installment Period </th>-->
                                            <th>Salary Now </th>
                                            <th>Department </th>
                                            <th>Position Befor </th>
                                            <th>Position Now </th>
                                            <th>Approve Date </th>
                                            <th>Action </th>
                                      <!--  <th>Action </th> -->
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Employee Code</th>
                                            <th>Amount</th>
                                           <th>Interest Percentage </th>
                                            <th>Installment Period </th>
                                            <th>Installment </th>
                                            <th>Total Pay </th>
                                            <th>Total Due </th>
                                            <th>Approve Date </th>
                                            <th>Status </th>
                                            <th>Action </th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                       <?php foreach($loanview as $value): ?>
                                        <tr>
                                            <td><?php echo $value->first_name.' '.$value->last_name ?></td>
                                            <td><?php echo $value->em_code ?></td>
                                            <td><?php echo $value->amount ?></td>
                                <!--       <td><?php #echo $value->interest_percentage.''.'%' ?></td>
                                            <td><?php #echo $value->install_period ?></td> -->
                                            <td><?php echo $value->installment ?></td> 
                                            <td><?php echo $value->dept ?></td> 
                                            <td><?php echo $value->total_pay ?></td>
                                            <td><?php echo $value->status ?></td>
                                            <td><?php echo date('jS \of F Y',strtotime($value->approve_date)) ?></td>
                                            
                                            <td class="jsgrid-align-center ">
                                                <a href="#" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light loanmodalclass" data-id="<?php echo $value->id; ?>" ><i class="fa fa-pencil-square-o"></i></a>
                                                <a onclick="confirm('Are you sure, you want to delete this?')" href="#" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light  loandelet"  data-id="<?php echo $value->id ?>"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                          
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
          <!-- sample modal content -->
        <div class="modal fade" id="loanmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Upgrade</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form role="form" method="post" action="Add_Loan" id="btnSubmit" enctype="multipart/form-data">
                    <div class="modal-body">
                             <div class="form-group row">
                                <label class="control-label col-md-3">Upgrade for</label>
                                <select class="form-control custom-select col-md-8" data-placeholder="Choose a Category" tabindex="1" name="emid" required>
                                  <option value="">Select Here</option>
                                   <?php foreach($employee as $value): ?>
                                    <option value="<?php echo $value->em_id; ?>"><?php echo $value->first_name.' '.$value->last_name; ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>

                            <div class="form-group row">
                                <label for="message-text" class="control-label col-md-3">Salary Befor</label>
                                <input type="number" name="amount" value="" class="form-control col-md-8 amount" id="recipient-name1" required>
                            </div> 
                            
                          <!--  <div class="form-group row">
                                <label for="message-text" class="control-label col-md-3">Interest Percentage</label>
                                <input type="number" name="interest" value="" class="form-control col-md-8" id="recipient-name1" required>
                            </div>-->                                                         
                           
                            <div class="form-group row">
                                <label for="message-text" class="control-label col-md-3">Salary Now</label>
                                <input type="number" name="installment" value="" class="form-control col-md-8 period" id="recipient-name1" required>
                            </div>
                           
                            <div class="form-group row">
                                <label for="message-text" class="control-label col-md-3">Department</label>
                                <input type="text" name="dept" value="" class="form-control col-md-8 period" id="recipient-name1" required>
                            </div>

                            <div class="form-group row">
                                <label for="message-text" class="control-label col-md-3">Position Befor</label>
                                <input type="text" name="install" value="" class="form-control col-md-8 installment" id="recipient-name1" required>
                            </div>
                            
                            <div class="form-group row">
                                <label for="message-text" class="control-label col-md-3">Position Now</label>
                                <input type="text" name="status"  value="" class="form-control custom-select col-md-8"  id="recipient-name1"   required>
        
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Approve Date</label>
                                <input type="text" name="appdate" class="form-control col-md-8 mydatetimepickerFull" id="recipient-name1" value="" required>
                            </div>

                            <div class="form-group row">
                                <label for="message-text" class="control-label col-md-3">Upgrade Details</label>
                                <textarea class="form-control col-md-8" name="details" value="" id="message-text1"></textarea>
                            </div>                                                                        
                        
                    </div>

                    <div class="modal-footer">
                       <input type="hidden" name="id" value="">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
                        <!-- /.modal --> 
          <script type="text/javascript">
          $('.amount, .period').on('input',function() {
            var amount = parseVarchar($('.amount').val());
            var period = parseVarchar($('.period').val());
         //   $('.installment').val((amount / period ? amount / period : 0).toFixed(2));
          });
          </script>
<script type="text/javascript">
                                        $(document).ready(function () {
                                            $(".loanmodalclass").click(function (e) {
                                                e.preventDefault(e);
                                                // Get the record's ID via attribute  
                                                var iid = $(this).attr('data-id');
                                                $('#btnSubmit').trigger("reset");
                                                $('#loanmodel').modal('show');
                                                $.ajax({
                                                    url: 'LoanByID?id=' + iid,
                                                    method: 'GET',
                                                    data: '',
                                                    dataType: 'json',
                                                }).done(function (response) {
                                                    console.log(response);
                                                    // Populate the form fields with the data returned from server
													$('#btnSubmit').find('[name="emid"]').val(response.loanvalue.emp_id).end();
													$('#btnSubmit').find('[name="id"]').val(response.loanvalue.id).end();
                                                    $('#btnSubmit').find('[name="details"]').val(response.loanvalue.loan_details).end();
                                                    $('#btnSubmit').find('[name="appdate"]').val(response.loanvalue.approve_date).end();
                                                    $('#btnSubmit').find('[name="redate"]').val(response.loanvalue.repayment_from).end();
                                                    $('#btnSubmit').find('[name="amount"]').val(response.loanvalue.amount).end();
                                                   /* $('#btnSubmit').find('[name="interest"]').val(response.loanvalue.interest_percentage).end();*/
                                                    $('#btnSubmit').find('[name="install"]').val(response.loanvalue.install_period).end();
                                                    $('#btnSubmit').find('[name="installment"]').val(response.loanvalue.installment).end();
                                                    $('#btnSubmit').find('[name="loanno"]').val(response.loanvalue.loan_number).end();
                                                    $('#btnSubmit').find('[name="status"]').val(response.loanvalue.status).end();
												});
                                            });
                                        });
</script>     
<script type="text/javascript">
                                        $(document).ready(function () {
                                            $(".loandelet").click(function (e) {
                                                e.preventDefault(e);
                                                // Get the record's ID via attribute  
                                                var iid = $(this).attr('data-id');
                                                $.ajax({
                                                    url: 'LoanvalueDelet?id=' + iid,
                                                    method: 'GET',
                                                    data: 'data',
                                                }).done(function (response) {
                                                    console.log(response);
                                                    $(".message").fadeIn('fast').delay(3000).fadeOut('fast').html(response);
                                                    window.setTimeout(function(){location.reload()},2000)
                                                    // Populate the form fields with the data returned from server
												});
                                            });
                                        });
 </script>                               
                      
<?php $this->load->view('backend/footer'); ?>
  <script>
    $('#loan123').DataTable({
        "aaSorting": [[6,'desc']],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script> 
