function view(id){
    var $modal = $("#view_m");
    $.get( $url + "/" + id, function( data ) {
        $modal.modal();
        $(".view-personal").attr("src",data.personal);
        $(".view-img").attr("src",data.picture);
        $(".view-name").val(data.name);
        $(".view-address").val(data.address);
        $(".view-number").val(data.number);
        $(".view-facebook").val(data.facebook);
    },'json');
}