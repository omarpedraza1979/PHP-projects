

$(function(){

      let edit = false;
     console.log("Jquery esta trabajando : ");
     fetchTask();

     $('#task-result').hide();

     $('#search').keyup( function(e){ 
        
      if($('#search').val()){ 
          let search = $('#search').val();
          $.ajax({
                 url: 'task-search.php',
                 data : {search},
                 type : 'POST',
                 success: function(response){
                  let tasks = JSON.parse(response);
                  let template ='';

                   tasks.forEach(tasks => {                    
                    template += `
                    <li><a href="#" class="task-item">${tasks.name}</a></li>
                   ` 
                    //console.log(tasks);
                   });

                   $('#container123').html(template);
                   $('#task-result').show();

                 }
          });
        
      }
});


$('#task-form').submit(e => { 
  
  const postData = {
    name          : $('#name').val(),
    description   : $('#description').val(),
    id            : $('#taskId').val()
    };
 
  let url = edit === false ? 'task-add.php' : 'task-edit.php';
  console.log("valor URL ", url);

  $.post( url , postData, (response) => {
    console.log(response);
    fetchTask()
    $('#task-form').trigger('reset');

   });
   e.preventDefault();

  
}); 


function fetchTask(){
    
  $.ajax({
     url: 'task-list.php',
     type : 'GET',
     success: function(response){
      console.log(response);
      let tasks = JSON.parse(response);
      let template ='';

      tasks.forEach(tasks => {                    
           template += `
            <tr task-id ="${tasks.id} ">
              <td>${tasks.id}</td>
              <td>
                   <a href="#" class="task-item">${tasks.name}</a>
              </td>
              <td>${tasks.description}</td>
              <td><button class = "task-delete btn btn-danger">Delete</button></td>
            </tr>
            ` 
   });

   $('#task').html(template);
  }
});

}

$(document).on('click','.task-delete', function() {
  
  if(confirm('Are you sure you want to delete it?'))
  {
     let element =  $(this)[0].parentElement.parentElement;
     let id = $(element).attr('task-id');
     //console.log("Imprimiendo Id = ",id);

     $.post('task-delete.php', {id},  (response) => {
       console.log(response);
       fetchTask();
    });
   }

})

$(document).on('click','.task-item', function() {
  
  let element =  $(this)[0].parentElement.parentElement;
  let id = $(element).attr('task-id');

  $.post('task-simple.php', {id},  (response) => {
      console.log(response);
      
      const tasks = JSON.parse(response);
      $('#name').val(tasks.name);
      $('#description').val(tasks.description);
      $('#taskId').val(tasks.id);

       edit = true;
   });


})





});