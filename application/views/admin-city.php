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
    function loadData(id,Name,country,cid){
    document.getElementById('form-id').value=id;
    document.getElementById('cityname').value=Name;
    //document.getElementById('countryname').value=country;
    var opt1=document.getElementById('countryname').options[0];
    opt1.text=country;
    opt1.value=cid;
    alert(country);
    $('#modal').show("fast",function(){
        $('#addCity').hide("fast");
    });
    }
    
    function revert(){
        $('#modal').hide("fast",function(){
            $('#addCity').show("fast");
        });
    }
    
</script>



<div class="container"  style="color:white">
    <div class="row">
        <div class="span12">
            <h2>Administration - City <a href="/admin/">Back to Administration Panel</a><br></h2>
            <form class="" id="addCity" action="/admin/citysavenew" method="post">
<fieldset>

<!-- Form Name -->
<legend>City Addition</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="City Name" class="input-medium" required="">
    <input type="submit" />
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Country</label>
  <div class="controls">
    <select id="country" name="country" required="" class="input-xlarge">
        <?php echo $select;?>
    </select>
  </div>
</div>

</fieldset>
</form>

                
        </div>
    </div>
    
    <div  id="modal"  style = "display: None; color:white" > 
        
      <button onClick="revert()" class="btn btn-warning btn-mini">Cancel</button>
                
            <form class="form-horizontal" action="/admin/citysaveedit/" method="post">
<fieldset>

<!-- Form Name -->
<legend>City Edit </legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="id">City Code</label>
  <div class="controls">
    <input id="form-id" name="form-id" type="text" placeholder="" class="input-mini" readonly="" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="cityname" name="cityname" type="text" placeholder="Country Name" class="input-medium" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Country</label>
  <div class="controls">
    <select id="countryname" name="countryname" class="input-xlarge" required="">
        <option id="opt1"> </option>
        <?php echo $select;?>
    </select>
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
     
      <br />
           
</div>
    
    <div class="row" style="margin-top:50px;">
        <div class="span12">
            <table style="color:white">
                <tr>Country Filter: <form action="/admin/citysearch/"><select name="country" onchange="this.form.submit();"><option> </option><?php echo $select;?></select></form></tr>
                <tr><th>City Code</th><th>City Name</th><th>Country</th><th>Control's</th></tr>
                <?php echo $output;?>
            </table>
        </div>
    </div>
</div>