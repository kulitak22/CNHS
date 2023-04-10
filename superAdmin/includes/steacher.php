<?php 
  // ===== Conneect Database ===== //
  include "../includes/database.php";
?>

<div class="container">
        <div>
          <div class="grid-container">
            <!-- ===== UPDATE ===== -->
            <!-- <div onclick="location.href='viewFaculty.php';" style="cursor: pointer;">
               
              <div class="viewleft">
                <span class="insideTxt">Update</span>
              </div>
              
              <div class="viewright">
              <span class="material-symbols-outlined" id="dashLogo">update</span>
              </div>
            </div> -->
            <!-- ===== ADD ===== -->
            <div onclick="location.href='addteacher.php';" style="cursor: pointer;">
               <!-- div left -->
              <div class="viewleft">
                <span class="insideTxt">Add</span>
              </div>
              <!-- div right -->
              <div class="viewright">
              <span class="material-symbols-outlined" id="dashLogo">add_circle</span>              </div>
            </div>
            <!-- ===== IMPORT ===== -->
            <div onclick="document.getElementById('id02').style.display='block'" style="cursor: pointer;">
               <!-- div left -->
              <div class="viewleft">
                <span class="insideTxt">Import</span>
              </div>
              <!-- div right -->
              <div class="viewright">
              <span class="material-symbols-outlined" id="dashLogo">upload_file</span>
              </div>
            </div>
          </div>
          
        </div>
        <div id="id02" class="modal">  
          <div class="modal-content">
            <div class="container">
              <h1>Import CSV</h1>
              
              <div class="clearfix">
              
              <form method="POST" action="../superAdmin/import/importT.php" name="uploadcsv" enctype="multipart/form-data"> 
                <p>Please Selecet CSV file to Import</p><input type="file" name="file" accept=".csv" >
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" name="submit"  class="deletebtn">Import</button>
                
              </form>
              </div>
            </div>
          </div>
        </div>
      <script>
        var modal = document.getElementById('id02');
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
       
</div>

      