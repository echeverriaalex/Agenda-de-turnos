<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <?php
                    if(isset($message)){
               ?>
                         <script> 
                              alert(" <?php echo $message; ?> ");
                         </script>
               <?php   
                    }
               ?>
               <h2 class="mb-4">List patient</h2>
               <table class="table bg-light-alpha">
                    <thead>                         
                         <th>ID</th>
                         <th>Name</th>
                         <th>Lastname</th>
                         <th>Phone</th>
                         <th>Opcion</th>
                    </thead>
                    <tbody>
                         <?php 
                         foreach($patientsList as $patient){
                         ?>
                              <tr>
                                   <td> <?php echo $patient->getPatientId(); ?> </td>
                                   <td> <?php echo $patient->getName(); ?> </td>
                                   <td> <?php echo $patient->getLastName(); ?> </td>
                                   <td> <?php echo $patient->getPhone(); ?> </td>
                                   <td> 
                                        <form class="bg-light-alpha" action="<?php echo FRONT_ROOT ?>Patient/Delete">
                                             <div class="row">
                                                  <div class="col-lg-2">
                                                       <div class="form-group">
                                                            <input name="patientId" value="<?php echo $patient->getPatientId();?>" hidden>
                                                            <button type="submit" class="btn btn-dark ml-auto d-block">Eliminar</button>
                                                       </div>
                                                  </div>                         
                                             </div>
                                        </form>
                                   </td>
                              </tr>
                         <?php
                         }
                         ?>
                    </tbody>
               </table>
          </div>
     </section>
</main>