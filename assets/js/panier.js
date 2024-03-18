const product =[
    {   id,
        Image,
        title,
        price,

    }
]





const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
    document.getElementById('root').innerHTML = categories.map((item)=>
    {var{Image,title,price,item;
    return(
        <div class='box'></div>
    )}}
    )