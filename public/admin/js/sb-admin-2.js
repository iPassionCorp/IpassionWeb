
/**
 * Description 	: Modal Success saved 
 **/
function modalSaveSuccess(){
    swal({
        title: 'Saved successfully!',
        text: '',
        type: 'success',
        timer: 1500,
        allowOutsideClick: false,
        showConfirmButton: false
    });
}

/**
 * Description 	: Modal Success delete 
 **/
function modalDeleteSuccess(){
    swal({
        title: 'Delete successfully!',
        text: '',
        type: 'success',
        timer: 1500,
        allowOutsideClick: false,
        showConfirmButton: false
    });
}

function displayDatatables(tableID, columnOrder, order){
    var t = $(tableID).DataTable({
        // scrollX: true,
        columnDefs: [{
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        order: [[ columnOrder, order ]]
    });

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    }).draw();
}

function displayDatatablesDisableOrder(tableID){
    var t = $(tableID).DataTable({
        // scrollX: true,
        columnDefs: [{
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        order: []
    });

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    }).draw();
}

function displayDatatablesDisable(tableID){
    var t = $(tableID).DataTable({
        // scrollX: true,
        columnDefs: [{
            "searchable": false,
            "orderable": false,
            "targets": [0,1,2,3,4,5]
        } ],
        order: false,
        info: false,
        searching: false,
        lengthChange: false,
        paging: false

    });

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    }).draw();
}

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#side-menu').metisMenu();
    $('textarea#detail').summernote({
        height: 500,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr']],
            ['view', ['fullscreen', 'codeview']]
        ]         
    });
    $('textarea#content').summernote({
        height: 500,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr']],
            ['view', ['fullscreen', 'codeview']]
        ]         
    });

    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;    
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();
    if (element.is('li')) { 
         element.addClass('active').parent().parent('li').addClass('active')
    }
});