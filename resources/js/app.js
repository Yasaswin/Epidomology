require('./bootstrap');
require('admin-lte');

import swal from 'sweetalert2';
window.Swal = swal;

import $ from 'jquery';
 global.$ = global.jQuery = $;

 require('select2');
 require('bootstrap-switch');

 // import'admin-lte/plugins/datatables/jquery.dataTables.min.js';
// import'admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js';
// import'admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js';
// import'admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js';
// import'admin-lte/plugins/select2/js/select2.full.min.js';
// import'admin-lte/plugins/moment/moment-with-locales.min.js';
// import'admin-lte/plugins/moment/moment-with-locales.min.js.map';

// import'admin-lte/plugins/summernote/summernote-bs4.min.js';


//import'admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js';

//Don't forgot to put code also same as below otherwise it will not working


$('#datetimepicker').datetimepicker({ sideBySide: true, debug: true });


//Datatable
// $("#example1").DataTable({
//     "responsive": true,
//     "autoWidth": false,
//   });

//Initialize Select2 Elements
// $('.select2').select2()

// //Initialize Select2 Elements
// $('.select2bs4').select2({
//     theme: 'bootstrap4'
// })