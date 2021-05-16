let search = '';
function searchfor() {
    search = $('#searchFor').val();
    window.location.href = '/trading/shop-list.php?search='+search;
}

function searchfor2() {
    search = $('#searchFor2').val();
    window.location.href = '/trading/shop-list.php?search='+search;
}

// function searchfor3() {
//     search = $('#searchFor3').val();
//     window.location.href = '/trading/shop-list.php?search='+search;
// }