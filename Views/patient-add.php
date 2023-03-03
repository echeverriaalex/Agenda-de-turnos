<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Register patient</h2>
               <form class="bg-light-alpha p-5" action="<?php echo FRONT_ROOT?>Patient/Add">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Name</label>
                                   <input name="name" type="text" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Lastname</label>
                                   <input name="lastname" type="text" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Phone</label>
                                   <input name="phone" type="text" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Confirm</button>
               </form>
          </div>
     </section>
</main>