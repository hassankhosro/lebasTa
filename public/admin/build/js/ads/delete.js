$(document).on('click', '#removeAds', function(e) {
     e.preventDefault();
     var id = $(this).data('id');
     var name = $(this).data('name');
     swal(` ${'حذف آگهی:'} ${name} | ${'آیا اطمینان دارید؟'}`, {
             dangerMode: true,
             icon: "warning",
             buttons: ["انصراف", "حذف"],
         })
         .then(function(isConfirm) {
             if (isConfirm) {
                 $.ajax({
                     type: "post",
                     url: "/user-dashboard/advertisement/delete",
                     data: {
                         id: id,
                         "_token": $('#csrf-token')[0].content //pass the CSRF_TOKEN()
                     },

                     success: function(data) {
                   swal('عملیات با موفقیت انجام شد', {
                           icon: "success",
                           buttons: ['ادامه'],
                       })
                       setTimeout(function(){
                         var url = "/user-dashboard/advertisement";
                         location.href = url;
                       }, 1000);
                 }
                 });
             } else {
                 toastr.warning('لغو شد.', '', []);
             }
         });
 });
