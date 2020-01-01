<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var base_url = "<?php echo base_url();?>";
    /* For Add New Task */
    var task=[];
    $('#add_task').on('click',function(){
        
        var task_name = $('#task_name').val();
        var task_date = $('#task_date').val();
        var task_description = $('#task_description').val();
        // Validate form data
        if(task_name==null || task_name=="",task_date==null || task_date=="", task_description==null || task_description ==""){
            document.getElementById("error").innerHTML="<p>* Please Fill All Required Field.</p>";
            return false;
        }
        else{
            document.getElementById("success").innerHTML="<p>New task is created successfully.</p>";
            // Scroll to task list
            items = document.querySelectorAll("li");
            last = items[items.length-1];
            if(last!=undefined)
            {
                last.scrollIntoView();
            }
            
        }

        task =JSON.parse(localStorage.getItem("task"));
        console.log(task);
        if(task==undefined){        
            task = [];
        }
        
        // Store
        var obj ={"name":task_name,"date":task_date,"description":task_description};
        task.push(obj);
        console.log(task);
        task = JSON.stringify(task);
        localStorage.setItem("task", task);
        // Retrieve
        render_html();
        $('#task_name').val("");
        $('#task_date').val("");
        $('#task_description').val("");
    }); 
    
});
    /* For Delete Task */
  $(document).on('click',".delete-action", function () {

        id =$(this).attr("data-id");
        task =JSON.parse(localStorage.getItem("task"));
        
        delete task[id];
        var filtered = task.filter(function (el) {
              return el != null;
            })
          task=JSON.stringify(filtered);
          localStorage.setItem("task", task);
        render_html();
    });
</script>
  
    </body>
</html>