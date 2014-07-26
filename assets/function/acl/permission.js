jQuery(document).ready(function() {
    //PERMISSION FORM
    //var permission_add_btn = $('#add_permission_btn');
    var permission_form_name = $('#permission_name');
    var permission_form_submit_btn = $('#add_permission_submit_btn');
    var permission_form_close_btn = $('#add_permission_close_btn');
    
    
    permission_form_submit_btn.click(function(){
        var data = {
            'permission_name':permission_form_name.val(),
            'type':'permission',
        };
        var responce = getData(base_url+'acl/control/save','post',data);
        alert(responce.status);
        if (responce.status == 'Good'){
            alert("Successfully Add Permission!");
            permission_form_close_btn.click();
        }
        else{
            alert("Unable to add Permission, Please Try Again!");
        }
        
    });
    
    
    
    
    
    
    var table = $('#permission_table');

    /* Formatting function for row expanded details */
    function fnFormatDetails(oTable, nTr) {
        var aData = oTable.fnGetData(nTr);
        var sOut = '<table>';
        sOut += '<tr><td>Platform(s):</td><td>' + aData[2] + '</td></tr>';
        sOut += '<tr><td>Engine version:</td><td>' + aData[3] + '</td></tr>';
        sOut += '<tr><td>CSS grade:</td><td>' + aData[4] + '</td></tr>';
        sOut += '<tr><td>Others:</td><td>Could provide a link here</td></tr>';
        sOut += '</table>';

        return sOut;
    }

    /*
     * Insert a 'details' column to the table
     */
    var nCloneTh = document.createElement('th');
    var nCloneTd = document.createElement('td');
    nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';

    //$('thead tr', table).each(function () {
    //    this.insertBefore(nCloneTh, this.childNodes[0]);
    //});
    //
    //$('tbody tr', table).each(function () {
    //    this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
    //});

    var oTable = table.dataTable({
        "aoColumnDefs": [{
            "aTargets": [0]
        }],
        "aaSorting": [
            [1, 'asc']
        ],
        "aLengthMenu": [
            [5, 15, 20, -1],
            [5, 15, 20, "All"] // change per page values here
        ],
        // set the initial value
        "iDisplayLength": 10,
        
        "aoColumns": [
            null,
            { "bSortable": false },
        ]
    });

    var tableWrapper = $('#sample_4_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
    var tableColumnToggler = $('#sample_4_column_toggler');

    /* modify datatable control inputs */
    jQuery('.dataTables_filter input', tableWrapper).addClass("form-control input-small input-inline"); // modify table search input
    jQuery('.dataTables_length select', tableWrapper).addClass("form-control input-small"); // modify table per page dropdown
    jQuery('.dataTables_length select', tableWrapper).select2(); // initialize select2 dropdown

    /* Add event listener for opening and closing details
     * Note that the indicator for showing which row is open is not controlled by DataTables,
     * rather it is done here
     */
    table.on('click', ' tbody td .row-details', function () {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
            /* This row is already open - close it */
            $(this).addClass("row-details-close").removeClass("row-details-open");
            oTable.fnClose(nTr);
        } else {
            /* Open this row */
            $(this).addClass("row-details-open").removeClass("row-details-close");
            oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
    });

    /* handle show/hide columns*/
    $('input[type="checkbox"]', tableColumnToggler).change(function () {
        /* Get the DataTables object again - this is not a recreation, just a get of the object */
        var iCol = parseInt($(this).attr("data-column"));
        var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
        oTable.fnSetColumnVis(iCol, (bVis ? false : true));
    });
});