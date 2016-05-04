<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link href="toastr.min.css" rel="stylesheet" />
    <link href="bootstrap.min.css" rel="stylesheet" />  
    <script src="jquery.min.js" ></script>
    <script src="toastr.min.js"></script>
    <script>
        
       
        $(document).ready(function() {
        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-full-width",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "500",
          "hideDuration": "500",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        };
        // show when page load
        toastr.warning('Thanks. But my question is how to use them in my html to show those messages.');

    });
     </script>

</head>
    <body>           
        
     
    </body>
</html>