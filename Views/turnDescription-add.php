<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Register turn description</h2>
               <form class="bg-light-alpha p-5" action="<?php echo FRONT_ROOT?>TurnDescription/Add">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Turn description </label>
                                   <input name="turnDescription " type="text" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Confirm</button>
               </form>
          </div>
     </section>
</main>