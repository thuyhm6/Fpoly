const url = 'http://localhost:3000/';
document.querySelector('#login-form').addEventListener('submit', (e) => {
    e.preventDefault();
    const userName = document.querySelector('#username').value;
    const password = document.querySelector('#password').value;
    //console.log(userName, password);
    fetch(url+'user').then((respones)=> respones.json()).then((user) => {
        //console.log(user.name);
        const isUser = user.find((value) => value.name === userName);
        console.log(isUser);
        if(isUser){
            alert('Login successful');
            document.querySelector('#login-form').style.display = 'none';
            loadProduct();
        } else{
            alert('Sai tên đăng nhập hoặc mật khẩu')
        };
    })
});

function loadProduct() {
    document.querySelector('#product-secsion').style.display = 'block';
    const productListHTML = document.querySelector('.product-list');
    fetch(url+'product').then((res) => res.json()).then((products) => {
        // console.log(products.category);
        const productList = products.map((product) => {
            return `<tr class="product-data-${product.id}">
                    <td>${product.category}</td>
                    <td>${product.prodName}</td>
                    <td><button class="btn btn-warning" onclick="editProduct('${product.id}')">Sửa</button><button class="btn btn-danger" onclick="deleteProduct('${product.id}')">Xóa</button>
</td>
                </tr>`
        });
        console.log(productList.join('....'));
        productListHTML.innerHTML = productList.join('');
    })
}

loadProduct();

function deleteProduct(id){
    if (confirm('Bạn chắc chắn xóa không')) {
        //Đi xóa
        fetch(url+'product/'+id, {method: 'DELETE'}).then(() => {
            //alert('Xóa thành công');
            //loadProduct();
            const productData = document.querySelector('.product-data-'+id);
            productData.remove();
        });
    }
}

document.querySelector('.product-form').addEventListener('submit', (e) => {
    e.preventDefault();
    const category = document.querySelector('#category').value;
    const prodName = document.querySelector('#product-name').value;
    const ProductFormData = {category, prodName};
    
    //thằng này để thêm
    const postOption = {method: 'POST',
        headers:{'Content-Type': 'application/json'},
        body: JSON.stringify(ProductFormData)
    };
    //thằng này để sửa
    const putOption = {method: 'PUT',
        headers:{'Content-Type': 'application/json'},
        body: JSON.stringify(ProductFormData)
    };

    fetch(url+'product', postOption).then(() => {
        alert('Thêm thành công');
        loadProduct();
        category = '';
    })
})

function editProduct(id){
    console.log(id);
    fetch(url+'product/'+id).then((res) => res.json()).then((products) => {
        document.querySelector("#category").value = products.category;
        document.querySelector("#productID").value = id;
        
    })
}
