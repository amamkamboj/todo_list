  <div class="container">    
      <h1 class="title text-center"><img title="Delete the task" src="<?= base_url('assets/images/title.png') ?>"></h1>
      <div id="error" class="error"></div>
      <div id="success" class="success"></div>
    <form class="form-horizontal">
      <div class="form-group">        
        <div class="col-sm-10">
          <input placeholder="Enter Task Name" type="text" class="form-control mb-3" id="task_name" name="task_name" autofocus="">
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-10">
          <input title="Task date" type="date" class="form-control mb-3" id="task_date" name="task_date" placeholder="DD/MM/YYYY">
        </div>
      </div>
      <div class="form-group">
        
        <div class="col-sm-10">
          <textarea rows="4" cols="50" placeholder="Task Description" class="form-control mb-3" id="task_description" name="task_description"></textarea>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10 text-center">
          <input id='add_task' type="button" name="submit" value="Submit" class="btn-submit">
        </div>
      </div>
    </form>
    
  </div>
<div class="list-tasks">
<ul id="task-list-items"></ul>

</div><!-- .list-tasks -->

<script type="text/javascript">
  render_html();
function render_html(){
        var _html ="";
        var arr=[];
  var base_url = "<?= base_url('assets/images') ?>";
    arr=JSON.parse(localStorage.getItem("task"));
        if(arr!=null){
          for(var i=0;i<arr.length;i++){
            _html+="<li><img src="+base_url+"/note.png />";
            _html+="<a href='javascript:void(0);' class='delete-action' data-id="+i+"><img src="+base_url+"/delete.png ></a>";
            _html+="<div class='overlay'><h2 class='title-task'>"+arr[i].name+"</h2>";
            _html+="<h2 class='task-date'> Date "+arr[i].date+"</h3>";
            _html+="<p class='preformatted task-desc'> "+arr[i].description+"</p>";
            _html+="</div></li>";
          }
        }
        
        document.getElementById("task-list-items").innerHTML=_html;
    }
</script>