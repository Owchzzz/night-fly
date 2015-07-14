<style>
    th{
        padding: 5px;
    }
    td{
        padding:3px;
    }
    tr{
        margin-bottom: 3px;
    }
</style>
<script type="text/javascript">
    function loadData(id,Name){
    document.getElementById('form-id').value=id;
    document.getElementById('countryname').value=Name;
    $('#modal').show("fast",function(){
        $('#addCountry').hide("fast");
    });
    }
    
    function revert(){
        $('#modal').hide("fast",function(){
            $('#addCountry').show("fast");
        });
    }
    
</script>



<div class="container"  style="color:white">
    <div class="row">
        <div class="span12">
            <h2>Administration - Country <a href="/admin/">Back to Administration Panel</a><br></h2>
            <form class="" id="addCountry" action="/admin/countrysavenew" method="post">
<fieldset>

<!-- Form Name -->
<legend>Country Addition</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="Country Name" class="input-medium" required="">
    <input type="submit" />
  </div>
</div>


</fieldset>
</form>

                
        </div>
    </div>
    
    <div  id="modal"  style = "display: None; color:white" > 
        
      <button onClick="revert()" class="btn btn-warning btn-mini">Cancel</button>
                
            <form class="form-horizontal" action="/admin/countrysaveedit/" method="post">
<fieldset>

<!-- Form Name -->
<legend>Country Edit </legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="id">Country Code</label>
  <div class="controls">
    <input id="form-id" name="form-id" type="text" placeholder="" class="input-mini" readonly="" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="countryname" name="countryname" type="text" placeholder="Country Name" class="input-medium" required="">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-danger">Submit</button>
  </div>
</div>

</fieldset>
</form>
                
           
</div>
    
    <div class="row">
        <div class="span12">
            <table style="color:white">
                <tr><th>Country Code</th><th>Country Name</th><th>Control's</th></tr>
                <?php echo $output;?>
            </table>
        </div>
    </div>
</div>