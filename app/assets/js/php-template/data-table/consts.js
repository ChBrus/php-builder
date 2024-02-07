export const dataTable = document.querySelector('.data-table') ?? document.getElementById('data-table'),
    tableToolBar = dataTable.querySelector('.table-toolbar'),
    headerTable = dataTable.querySelector('.header') ?? dataTable.querySelector('#header'),
    headerCols = headerTable.querySelectorAll('.h-col'),
    bodyTable = dataTable.querySelector('.body') ?? dataTable.querySelector('#body'),
    loadingLayout = bodyTable.querySelector('.loading'),
    searchControl = document.getElementById('search-control'),
    selectContainer = tableToolBar.querySelector('.search-form .select-container'),
    searchColumn = document.getElementById('columna');