		</div>
    </div>

    <footer>
         <div class="container">
            <div class="copy text-center">
               Được xây dựng bởi Tổ phát triển - FITHOU <a href='#'></a>
            </div>
            
         </div>
      </footer>


    <script src="./public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="{base_url()}public/bootstrap/js/bootstrap.min.js"></script> -->

     <link href="{base_url()}public/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <script src="{base_url()}public/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="{base_url()}public/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="{base_url()}public/js/tables.js"></script>

    <script src="{base_url()}public/vendors/fullcalendar/fullcalendar.js"></script>

    <script src="{base_url()}public/vendors/fullcalendar/gcal.js"></script>

    <script src="{base_url()}public/js/calendar.js"></script>

    <script src="{base_url()}public/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="{base_url()}public/vendors/select/bootstrap-select.min.js"></script>

    <script src="{base_url()}public/vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="{base_url()}public/vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="{base_url()}public/vendors/moment/moment.min.js"></script>

    <script src="{base_url()}public/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

	  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="{base_url()}public/js/forms.js"></script>
    
    <script src="{base_url()}public/js/custom.js"></script>

    <!-- ========================= mcvp9x ==================================-->
    <!-- taosukien -->
    <!-- <script src="./public/script/jquery-3.4.1.js"></script> -->
    <script src="./public/bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="./plugins/input-mask/jquery.inputmask.js"></script>
    <script src="./plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="./plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="./public/bower_components/moment/min/moment.min.js"></script>
    <script src="./public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="./public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="./plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- AdminLTE App -->
    <!-- AdminLTE for demo purposes -->
    <!-- sweetalet2 -->
    <script type="text/javascript" src="./public/script/sweetalert2.min.js"></script>
   <!--  <script src="./public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
       {if !empty($message)}
        <script type="text/javascript">
            $(document).ready(function(){
                // sweetalert2
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    onOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
                setTimeout(() => {
                    //toastr.{$message.type}("{$message.title}","{$message.message}");
                    Toast.fire({
                        icon:   '{$message.type}',
                        title:  '{$message.title}',
                    });
                }, 200);
            });
        </script>
    {/if}
    <script type="text/javascript">
      function showToast(type, mess, time=3000){
        const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: time,
                    timerProgressBar: true,
                    onOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
                    //toastr.{$message.type}("{$message.title}","{$message.message}");
                Toast.fire({
                    icon:   type,
                    title:  mess,
                });
      }
    </script>

    <script>  
      $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker({ locale: { format: 'DD/MM/YYYY' }});
      //Date range picker with time picker
      /*$('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'DD/MM/YYYY hh:mm A' }})*/
      //Date range as a button

      //Date picker
      $('.datepicker').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy'
      })
      

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>
    <!-- ================================================================== -->
  </body>
</html>