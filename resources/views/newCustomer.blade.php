<div class="modal fade" id="customer" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> customer info </h4>
            </div>
            <div class="modal-body">
             <form action="newCustomer" method="post" id="frmCustomer">

                 <div class="row">

                  <div class="col-lg-4 col-sm-4">
                      <div class="form-group">
                  <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control">

                   </div>
                     </div>



                     <div class="col-lg-4 col-sm-4">
                         <div class="form-group">
                             <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control">

                         </div>
                     </div>



                     <div class="col-lg-4 col-sm-4">
                         <div class="form-group">
                            <select name="gender" id="gender" class="form-control" >
                             <option value=""> select gender</option>
                             <option value="0"> Male</option>
                             <option value="1"> Female</option>
                            </select>

                         </div>
                     </div>


                     <div class="col-lg-4 col-sm-4">
                         <div class="form-group">
                             <input type="email" name="email" id="email" placeholder="Email" class="form-control">

                         </div>
                     </div>



                     <div class="col-lg-4 col-sm-4">
                         <div class="form-group">
                             <input type="text" name="phone" id="phone" placeholder="phone" class="form-control">

                         </div>
                     </div>

                 </div>


                <input type="hidden" name="id" id="id" value="">
                 <div class="modal-footer">
                     <input type="submit" value="save" id="save" class="btn btn-primary">

                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
             </form>



            </div>


        </div>

    </div>
</div>
