var modname = 'dataodc';
var modelclass = 'Dataodc';
var popupmode;

function moveEditColumnToLeft(dataGrid) {
    dataGrid.columnOption("command:edit", { 
        visibleIndex: -1,
        width: 80 
    });
}


var dataGrid = $("#gridContainer").dxDataGrid({    
    dataSource: store(modname),
    allowColumnReordering: true,
    allowColumnResizing: true,
    // columnsAutoWidth: true,
    columnHidingEnabled: true,
    rowAlternationEnabled: true,
    wordWrapEnabled: true,
    showBorders: true,
    filterRow: { visible: true },
    filterPanel: { visible: true },
    headerFilter: { visible: true },
    searchPanel: {
        visible: true,
        width: 240,
        placeholder: 'Search...',
    },
    editing: {
        useIcons:true,
        mode: "cell",
        allowAdding: false,
        allowUpdating: false,
        allowDeleting: false,
    },
    scrolling: {
        mode: "virtual"
    },
    columns: [
        {
            caption: 'Action',
            width: 140,
            cellTemplate: function(container, options) {

                var reqid = options.data.id;
    
                $('<button class="btn btn-primary" id="btnreqid'+reqid+'"><i class="fa fa-search"></i></button>').on('dxclick', function(evt) {
                    evt.stopPropagation();
                
                            popup.option({
                                contentTemplate: () => popupContentTemplate(reqid,options),
                            });
                            popup.show();

                }).appendTo(container);
            
            }
        },
        {
			caption: "ODP Name",
			dataField: "odcs.odcName",
        },
        {
			caption: "STO",
            width: 80,
			dataField: "odcs.sto",
        },
        {
			caption: "Alamat",
			dataField: "odcs.alamat",
        },
      
    ],
    export: {
        enabled: true,
        fileName: modname,
        excelFilterEnabled: true,
        allowExportSelectedData: true
    },
    onContentReady: function(e){
        moveEditColumnToLeft(e.component);
        runpopup();
    },
    onToolbarPreparing: function(e) {
        dataGrid = e.component;

        e.toolbarOptions.items.unshift({						
            location: "after",
            widget: "dxButton",
            options: {
                hint: "Refresh Data",
                icon: "refresh",
                onClick: function() {
                    dataGrid.refresh();
                }
            }
        })
    },
}).dxDataGrid("instance");

// $('#btnadd').on('click',function(){
//     sendRequest(apiurl + "/"+modname, "POST", {requestStatus:0}).then(function(response){
//         const reqid = response.data.id;
//         popup.option({
//             contentTemplate: () => popupContentTemplate(reqid,options),
//         });
//         popup.show();
//     });
// })

const accordionItems = [
    {
        ID: 2,
        Title: '<i class="fas fa-file"> Detail ODC </i>',
        visible: true
    },
];


const updateVisibleById = (itemId, visible) => {
    accordionItems.forEach(item => {
      if (item.ID === itemId) {
        item.visible = visible;
      }
    });
  };

const popupContentTemplate = function (reqid,options) {


    popupid = reqid;

    const scrollView = $('<div />');

    scrollView.append("<hr>"),

    scrollView.append(

        $("<div>").dxAccordion({
            dataSource: accordionItems,
            animationDuration: 600,
            selectedItems: [accordionItems[0],accordionItems[1],accordionItems[2],accordionItems[3],accordionItems[4],accordionItems[5],accordionItems[6],accordionItems[7]],
            collapsible: true,
            multiple: true,
            onContentReady: function(e){
            },
            itemTitleTemplate: function (data) {
                return '<small style="margin-bottom:10px !important ;">'+data.Title+'</small>'
            },
            itemTemplate: function (data) {
                if(data.ID == 2) {
                    // Create wrapper div
                    var inputWrapper = $("<div class='input-wrapper'>");
                    
                    // Add input element
                    var input = $("<input type='text' class='form-control' id='sodpnametext' name='odpname' style='margin-top:10px' placeholder='Ketik ODP Name'>");
                    inputWrapper.append(input);

                    // Add button element
                    var button = $("<button type='button' onClick='btnsearchodp()' class='btn btn-xs btn-primary' style='margin-top:10px'>").text("Cari ODP");
                    inputWrapper.append(button);

                    // var divtext = $("<p id='resultodp' style='margin-top:10px'>.....</p>");
                    // inputWrapper.append(divtext);

                    // AppendTo wrapper div to panelodc div

                    var panelodc = $("<div id='panelodc'>").dxPivotGrid({
                        allowSortingBySummary: true,
                        allowFiltering: true,
                        showBorders: true,
                        showColumnGrandTotals: false,
                        showRowGrandTotals: false,
                        rowHeaderLayout: 'tree',
                        showRowTotals: false,
                        showColumnTotals: false,
                        export: {
                            enabled: true,
                            fileName: 'DxExport'
                        },
                        fieldChooser: {
                            enabled: true,
                            height: 400
                        },
                        dataSource: {
                            fields: [
                                {
                                    width: 120,
                                    dataField: 'noPanel',
                                    area: 'row',
                                    expanded: true
                                },
                                {
                                    dataField: 'noPort',
                                    area: 'column'
                                },
                                {
                                    dataField: 'jml',
						            summaryType: 'sum',
                                    dataType: 'number',
                                    area: 'data',
                                },
                                {
                                    dataField: 'id',
                                    visible: false // Bidang ini tidak akan ditampilkan di tampilan PivotGrid
                                }
                            ],
                            store: storewithmodule("panelodc",modelclass,reqid)
                        },
                        onCellPrepared: function(e) {
                            if (e.cell.value == 0) {
                                e.cellElement.css('color', 'blue');
                                e.cellElement.text('idle');
                            } else if (e.cell.value == 1) {
                                e.cellElement.css('color', 'red');
                                e.cellElement.text('used');
                            }
                        },
                        onCellClick: function(e) {

                            console.log('dataodcs_id : '+popupid)
                            console.log('noPanel : '+e.cell.rowPath[0])
                            console.log('noPort : '+e.cell.columnPath[0])

                            var datapanel = {
                                odcid: popupid,
                                nopanel: e.cell.rowPath[0],
                                noport: e.cell.columnPath[0]
                              };

                            sendRequest(apiurl + "/getpanelodc", "POST", datapanel ).then(function(response){
                                var idpanel = response.data.id;
                                console.log('id panel :'+idpanel)
                                popupodc.option({
                                    contentTemplate: () => popupodcContentTemplate(idpanel),
                                });
                                popupodc.show();
                            });
                        },
                        

                    })

                    panelodc.append(inputWrapper);


                    return panelodc;
                }
            }
        })
    
    );

    scrollView.dxScrollView({
        width: '100%',
        height: '100%',
    })

    return scrollView;

};

function btnsearchodp() {
    var odpname = $('#sodpnametext').val();
    
    var datapanel = {
        odpname: odpname
    };
    sendRequest(apiurl + "/searchodp", "POST", datapanel ).then(function(response){
        if(response.status !== 'error') {
            var items = response.data
            alert('ODP berada pada\nPanel : '+items.noPanel+'\nPort : '+items.noPort)
        }
    });
}

function runpopup() {
    popup = $('#popup').dxPopup({
        contentTemplate: popupContentTemplate,
        container: '.content',
        showTitle: true,
        title: 'Detail Data Pelanggan',
        visible: false,
        dragEnabled: false,
        hideOnOutsideClick: false,
        showCloseButton: true,
        fullScreen : false,
        onShowing: function(e) {
        },
        onShown: function(e) {
        },
        onHidden: function(e) {
            dataGrid.refresh();
        },
        toolbarItems: [
        {
            widget: 'dxButton',
            toolbar: 'bottom',
            location: 'after',
            options: {
            text: 'Close',
            onClick() {
                popup.hide();
            },
            },
        }]

    }).dxPopup('instance');
}

const accordionItemsodc = [
    {
        ID: 1,
        Title: '<i class="fas fa-file"> Signal </i>',
        visible: true
    },
    {
        ID: 2,
        Title: '<i class="fas fa-file"> ODP </i>',
        visible: true
    },
];

const popupodcContentTemplate = function (reqid) {


    popupdcid = reqid;

    const scrollViewodc = $('<div />');

    scrollViewodc.append("<hr>"),

    scrollViewodc.append(

        $("<div>").dxAccordion({
            dataSource: accordionItemsodc,
            animationDuration: 600,
            selectedItems: [accordionItemsodc[0],accordionItemsodc[1],accordionItemsodc[2]],
            collapsible: true,
            multiple: true,
            itemTitleTemplate: function (data) {
                return '<small style="margin-bottom:10px !important ;">'+data.Title+'</small>'
            },
            itemTemplate: function (data) {
                if(data.ID == 1) {
                    return $("<div id='formsignal'>").dxDataGrid({    
                        dataSource: storewithmodule('datasignal',modelclass,reqid),
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnsAutoWidth: true,
                        rowAlternationEnabled: true,
                        wordWrapEnabled: true,
                        showBorders: true,
                        filterRow: { visible: false },
                        filterPanel: { visible: false },
                        headerFilter: { visible: false },
                        searchPanel: {
                            visible: true,
                            width: 240,
                            placeholder: 'Search...',
                        },
                        editing: {
                            useIcons:true,
                            mode: "cell",
                            allowAdding: false,
                            allowUpdating: (admin == 1) ? true : false,
                            allowDeleting: false,
                        },
                        paging: { enabled: true, pageSize: 10 },
                        columns: [
                            {
                                caption: "No Panel",
                                dataField: "panels.noPanel",
                                width: 80,
                                editorOptions: { 
                                    readOnly: true
                                }
                            },
                            {
                                caption: "No Port",
                                dataField: "panels.noPort",
                                width: 80,
                                editorOptions: { 
                                    readOnly: true
                                }
                            },
                            {
                                dataField: "signal",
                            },
                        ],
                        export: {
                            enabled: false,
                            fileName: modname,
                            excelFilterEnabled: true,
                            allowExportSelectedData: true
                        },
                        onInitialized: function(e) {
                            dataGridSignal = e.component;
                        },
                        onContentReady: function(e){
                            moveEditColumnToLeft(e.component);
                        },
                        onInitNewRow : function(e) {
                        },
                        onToolbarPreparing: function(e) {
                            e.toolbarOptions.items.unshift({						
                                location: "after",
                                widget: "dxButton",
                                options: {
                                    hint: "Refresh Data",
                                    icon: "refresh",
                                    onClick: function() {
                                        dataGridSignal.refresh();
                                    }
                                }
                            })
                        },
                    })
                }
                if(data.ID == 2) {
                    return $("<div id='formodp'>").dxDataGrid({    
                        dataSource: storewithmodule('dataodp',modelclass,reqid),
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnsAutoWidth: true,
                        rowAlternationEnabled: true,
                        wordWrapEnabled: true,
                        showBorders: true,
                        filterRow: { visible: false },
                        filterPanel: { visible: false },
                        headerFilter: { visible: false },
                        searchPanel: {
                            visible: true,
                            width: 240,
                            placeholder: 'Search...',
                        },
                        editing: {
                            useIcons:true,
                            mode: "cell",
                            allowAdding: (admin == 1) ? true : false,
                            allowUpdating: (admin == 1) ? true : false,
                            allowDeleting: (admin == 1) ? true : false,
                        },
                        paging: { enabled: true, pageSize: 10 },
                        columns: [
                            {
                                dataField: "noPanel",
                                dataType: "number",
                                width: 80,
                                validationRules: [{ type: "required" }]
                            },
                            {
                                dataField: "noPort",
                                dataType: "number",
                                width: 80,
                                validationRules: [{ type: "required" }]
                            },
                            {
                                dataField: "odpName",
                                validationRules: [{ type: "required" }]
                            },
                        ],
                        export: {
                            enabled: false,
                            fileName: modname,
                            excelFilterEnabled: true,
                            allowExportSelectedData: true
                        },
                        onInitialized: function(e) {
                            dataGridOdp = e.component;
                        },
                        onContentReady: function(e){
                            moveEditColumnToLeft(e.component);
                            // console.log(popupdcid)
                            var totalCount = dataGridOdp.totalCount();

                            var datapanel = {
                                    id: popupdcid,
                                    status: (totalCount > 0) ? 1 : 0,
                                };
                            sendRequest(apiurl + "/updatestatuspanel", "POST", datapanel );
                        },
                        onInitNewRow : function(e) {
                        },
                        onToolbarPreparing: function(e) {
                            e.toolbarOptions.items.unshift({						
                                location: "after",
                                widget: "dxButton",
                                options: {
                                    hint: "Refresh Data",
                                    icon: "refresh",
                                    onClick: function() {
                                        dataGridOdp.refresh();
                                    }
                                }
                            })
                        },
                    })
                }
            }
        })
    
    );

    scrollViewodc.dxScrollView({
        width: '100%',
        height: '100%',
    })

    return scrollViewodc;

};

popupodc = $('#popupodc').dxPopup({
    contentTemplate: popupodcContentTemplate,
    container: '.content',
    showTitle: true,
    title: 'Detail Data ODC',
    visible: false,
    dragEnabled: false,
    hideOnOutsideClick: false,
    showCloseButton: true,
    fullScreen : false,
    onShowing: function(e) {
    },
    onShown: function(e) {
    },
    onHidden: function(e) {
        $('#panelodc').dxPivotGrid('instance').getDataSource().reload();
    },
    toolbarItems: [
    {
        widget: 'dxButton',
        toolbar: 'bottom',
        location: 'after',
        options: {
        text: 'Close',
        onClick() {
            popupodc.hide();
        },
        },
    }]

}).dxPopup('instance');


function cellTemplate(container, options) {
    container.append('<a href="/upload/'+options.value+'" target="_blank"><img src="/upload/'+options.value+'" height="50" width="70"></a>');
}

function editCellTemplate(cellElement, cellInfo) {
    let buttonElement = document.createElement("div");
    buttonElement.classList.add("retryButton");
    let retryButton = $(buttonElement).dxButton({
      text: "Retry",
      visible: false,
      onClick: function() {
        // The retry UI/API is not implemented. Use a private API as shown at T611719.
        for (var i = 0; i < fileUploader._files.length; i++) {
          delete fileUploader._files[i].uploadStarted;
        }
        fileUploader.upload();
      }
    }).dxButton("instance");
  
    $path = "";
    $adafile = "";
    let fileUploaderElement = document.createElement("div");
    let fileUploader = $(fileUploaderElement).dxFileUploader({
      multiple: false,
      accept: ".png,.jpg,.jpeg",
    //   accept: ".pptx,.ppt,.docx,.pdf,.xlsx,.csv,.png,.jpg,.jpeg",
      uploadMode: "instantly",
      name: "myFile",
      uploadUrl: apiurl + "/upload-berkas/"+modname,
      onValueChanged: function(e) {
        let reader = new FileReader();
        // reader.onload = function(args) {
        //   imageElement.setAttribute('src', args.target.result);
        // }
        reader.readAsDataURL(e.value[0]); // convert to base64 string
      },
      onUploaded: function(e){
          $path = e.request.response;
          $adafile = false;
          cellInfo.setValue(e.request.responseText);
          retryButton.option("visible", false);
      },
      onUploadError: function(e){
          $path = "";
          DevExpress.ui.notify(e.request.response,"error");
      }
    }).dxFileUploader("instance");
  
    let imageElement = document.createElement("img");
        imageElement.classList.add("uploadedImage");
        imageElement.setAttribute('src', "upload/" +cellInfo.value);
        imageElement.setAttribute('height', "50");
        
        cellElement.append(imageElement);
        cellElement.append(fileUploaderElement);
        cellElement.append(buttonElement);
  
  }