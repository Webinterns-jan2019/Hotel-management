$(document).ready(function(){
    // $.ajax({
    //     url: 'select.php',
    //     type: 'get',
    //     dataType: 'json',
    //     success: function(result)
    //     {
         
    //         if(result)
    //         {
    //             var cat='';
    //             var nat='';
    //             for(var i=0; i<result.length;i++)
    //             {
                    


    //                 // console.log(result[i].dept_id,result[i].dept_name)
    //             //    cat+='<tr><th>'+result[i].r_id+'</th><th>'+result[i].type+'</th><th>'+result[i].bed+'</th><th>'+result[i].amount+'</th><th>'+result[i].c_id+'</th></tr>';
    //           if(result[i].allocated==1)
    //           {
    //             cat+='<tr><th>'+result[i].r_id+'</th><th>'+result[i].type+'</th><th>'+result[i].bed+'</th><th>'+result[i].amount+'</th></tr>';  
    //           }
                 
    //              nat+='<tr><th>'+result[i].r_id+'</th><th>'+result[i].type+'</th><th>'+result[i].bed+'</th><th>'+result[i].amount+'</th></tr>';
     
    //             }          
    //              $('#tre').append(cat);
    //              $('#are').append(nat);
    //         //    console.log("result",result);

    //         }
    //         else{
    //             alert("failed to get data");
    //         }        }
    // })
    
    $(".viewroom").hide();
    $(".viewrbooking").hide();
    $(".tre").hide();
    $(".are").hide();
    $(".viewuser").hide();
    $("#add").click(function(){
        $(".viewroom").hide();
        $(".roombook").show();
        $(".viewrbooking").hide();
        $(".viewuser").hide();
    })
    $("#view").click(function(){
        $(".roombook").hide();
        $(".viewroom").show();
        $(".viewrbooking").hide();
        $(".viewuser").hide();
    })
    $("#book").click(function(){
        $(".roombook").hide();
        $(".viewrbooking").show();
        $(".viewroom").hide();
        $(".viewuser").hide();
    })
    $("#user").click(function(){
        $(".roombook").hide();
        $(".viewuser").show();
        $(".viewrbooking").hide();
        $(".viewroom").hide();
    })
     $(".delete").click(function(){
        
    // var name=$(this).attr(".delete");
   
//      if(name==='delete'){

        var delete_id=event.target.id;
        alert(delete_id);
         //var deletevar=document.getElementById('#delete');
    
        $.ajax({
         url: 'delete.php',
         type: 'post',
         dataType: 'json',
         data:{
            id:delete_id,
         },
         success: function(result)
         {

             if(result)
             {
                 alert("deleted");
                 location.reload();
             }
             else{
                 alert("failed to get data");
             }
         }
     })
    
 })
 $(".update").click(function(){
        
    // var name=$(this).attr(".delete");
   
//      if(name==='delete'){

         var r_id=event.target.id;
     
         //v   var name=$("#name").val();


        

//     var r_id=update_id;
    var type=$("#type").val();
    var bed=$("#bed").val();
    var amount=$("#amount").val();

//     ar=document.getElementById('#delete');
    
        $.ajax({
         url: 'update.php',
         type: 'post',
         dataType: 'json',
         data:{
            r_id:r_id,
            type:type,
            bed:bed,
            amount:amount,
            

         },
         success: function(result)
         {

             if(result)
             {
                 alert("updated");
                 location.reload();
             }
             else{
                 alert("failed to get data");
             }
         }
     })
    
  })
})
