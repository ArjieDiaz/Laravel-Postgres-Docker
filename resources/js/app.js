import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import 'datatables.net-bs5';
import 'datatables.net-responsive-bs5';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';
import 'datatables.net-dt/css/jquery.dataTables.min.css';
import 'datatables.net';
import $ from 'jquery';

$(document).ready(function () {
    $('#productTable').DataTable();
    $('#myTable').DataTable({
        responsive: true,
        language: {
            search: "Find:",
            lengthMenu: "Show _MENU_ entries",
        }
    });
});
