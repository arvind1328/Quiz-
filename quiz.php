<html>
  <head>
<link href="./css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="btn-toolbar float-sm-right">
    <button class="btn btn-primary" id="loadData">Load Data</button>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>URL</th>
        </tr>
      </thead>
      <tbody class="table-body">
      </tbody>
    </table>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>
</body>
<script type="text/javascript">
  $(document).ready(function(){
      $("#loadData").on('click',function(){
        $(".table-body").html();
        $.get("https://aimtell.com/files/sites.json", function(data, status){
            console.log(data);
            console.log(status);
            if(status){
                var response = data.sites;
                var tmpl = "";
                $.each(response,function(k,value){
                    tmpl += "<tr><td>"+value.id+"</td><td>"+value.name+"</td><td>"+value.url+"</td></tr>";
                });
                $(".table-body").append(tmpl);
            }
            
        });
      });
  });
</script>
</html>