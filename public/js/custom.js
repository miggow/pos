$(".pos-table").each(function () {
    var $this = $(this);
    var $tbody = $this.find("tbody");

    var columnCount = $this.find("thead th").length;
    if (columnCount == 0) {
        $tbody.append('<tr><td class="text-center" colspan="' + columnCount + '"><i class="mdi mdi-emoticon-sad md-36"></i> Nothing Found</td></tr>');
    }
});
