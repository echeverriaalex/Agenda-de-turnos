<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Register turn</h2>
               <form class="bg-light-alpha p-5" action="<?php echo FRONT_ROOT?>Turn/Add">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Turn description</label>
                                   <select name="turnDescriptionId" class="form-control">
                                        <optgroup>
                                             <option disabled selected>Select</option>                                        
                                             <?php
                                                  foreach($turnDescriptionList as $turnDescription){
                                             ?>
                                                       <option value="<?php echo $turnDescription->getTurnId();?>"> <?php echo $turnDescription->getDescription();?> </option>
                                             <?php        
                                                  }
                                             ?>
                                        </optgroup>
                                   </select>
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Patient</label>
                                   <select name="patientId" class="form-control">
                                        <optgroup>
                                             <option disabled selected>Select</option>                                        
                                             <?php
                                                  foreach($patientsList as $patient){
                                             ?>
                                                       <option value="<?php echo $patient->getPatientId();?>"> <?php echo $patient->getName()." ".$patient->getLastName();?> </option>
                                             <?php        
                                                  }
                                             ?>
                                        </optgroup>
                                   </select>
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Date</label>
                                   <input name="date" type="date" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Hour</label>
                                   <input name="hour" type="time" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Confirm</button>
               </form>
          </div>
     </section>
</main>