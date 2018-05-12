$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
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

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});

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
        responsive: true,
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

function displayDatatablesDisable(tableID){
    var t = $(tableID).DataTable({
        responsive: true,
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