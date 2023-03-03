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
               <h2 class="mb-4">List turns</h2>
               <table class="table bg-light-alpha">
                    <thead>                         
                         <th>ID</th>
                         <th>Patient</th>
                         <th>Date</th>
                         <th>Hour</th>
                         <th>Description</th>
                         <th>Opcion</th>
                    </thead>
                    <tbody>
                         <?php 
                         foreach($turnList as $turn){
                         ?>
                              <tr>
                                   <td> <?php echo $turn->getTurnId(); ?> </td>
                                   <td> <?php echo $turn->getPatient(); ?> </td>
                                   <td> <?php echo $turn->getDate(); ?> </td>
                                   <td> <?php echo $turn->getHour(); ?> </td>
                                   <td> <?php echo $turn->getDescription(); ?> </td>
                                   <td> 
                                        <form class="bg-light-alpha" action="<?php echo FRONT_ROOT ?>Turn/Delete">
                                             <div class="row">
                                                  <div class="col-lg-2">
                                                       <div class="form-group">
                                                            <input name="turnId" value="<?php echo $turn->getTurnId();?>" hidden>
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