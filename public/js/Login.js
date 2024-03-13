
$(document).on('click','#Enviar',function(e){

    var usu = $('input[name="usu"]').val();

    var pa = $('input[name="pa"]').val();

    event.preventDefault();
    
         $.ajax({
             method:'POST',
             url:'verify.php',
             dataType:'json',
             data:{usu:usu,pa:pa},

             success:function (response)
             {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'success',
                    title:'Bienvenido'
                  }).then(() =>{

                    setTimeout(()=>{
                        
                    window.location.href = "home.php";
                  },500);

                  })

               
               
             },

             error:function(error)
             {         
                
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'error',
                    html: error.responseJSON.Error
                  })
             }
         });
});