 <div class="modal fade" id="usermodal">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Adding or Updating Users</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="" id="addform" method="post" enctype="multipart/form-data">
                 <div class="modal-body">
                     <!-- name -->
                     <div class="form-group">
                         <label for="">Name:</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text bg-dark"><i class="fas fa-user-alt text-light "></i></span>
                             </div>
                             <input type="text" class="form-control border-2" placeholder="Enter username" autocomplete="off" required="required" id="username" name="username">
                         </div>
                     </div>
                     <!-- email -->
                     <div class="form-group">
                         <label for="">Email:</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text bg-dark"><i class="fas fa-envelope-open text-light "></i></span>
                             </div>
                             <input type="text" class="form-control border-2" placeholder="Enter email" autocomplete="off" required="required" id="email" name="email">
                         </div>
                     </div>
                     <!-- phone -->
                     <div class="form-group">
                         <label for="">Phone:</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text bg-dark"><i class="fas fa-phone text-light "></i></span>
                             </div>
                             <input type="text" class="form-control border-2" placeholder="Enter Phone" autocomplete="off" required="required" id="mobile" name="mobile">
                         </div>
                     </div>
                     <!-- photo -->
                     <div class="form-group">
                         <label for="">Photo:</label>
                         <div class="input-group">
                             <label for="userphoto" class="custom-file-label"></label>
                             <input type="file" class="custom-file-input" name="photo" id="userphoto">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-dark">Submit</button>
                     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                     <!-- 2 input fields first for adding and next for updating, deleting or viewing profile -->
                     <input type="hidden" name="action" value="adduser">
                     <input type="hidden" name="userId" id="userId" value="">
                 </div>
             </form>
         </div>
     </div>
 </div>