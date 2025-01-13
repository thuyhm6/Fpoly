function deleteProduct(productID) {
    if (confirm('Are you sure you want to delete')) {
        const productListID = document.querySelector('.product_'+productID);
        $.ajax({
            url: 'ajax.php?action=deleteProduct',
            method: 'POST',
            data: {id : productID},
            success: function(response){
                alert(response);
                if(response == '1') {
                    alert('Xóa thành công');
                    // location.reload();
                    productListID.remove();
                }
            }
        })
    }
}