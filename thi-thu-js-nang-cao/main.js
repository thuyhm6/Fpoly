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
        const productList = products.map((product) => {
            return `<tr>
                    <td>${product.category}</td>
                    <td>${product.prodName}</td>
                    <td><button class="btn btn-danger" onclick="deleteProduct('${product.id}')">Xóa</button>
</td>
                </tr>`
        });
        console.log(productList.join('....'));
        productListHTML.innerHTML = productList.join('');
    })
}

// loadProduct();