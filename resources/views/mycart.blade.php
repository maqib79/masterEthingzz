<a data-loading-text=Loading... class="top_cart dropdown-toggle" data-toggle=dropdown>
    <div class=shopcart>
    <span class="handle pull-left"></span>
    <span class=title>My cart</span>
    <p class="text-shopping-cart cart-total-full">{{$data['cart']->count()}} item(s) - {{$data['TotalAmountCart']}} PKR </p>
    </div>
    </a>
    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role=menu>
    <li>
    <table class="table table-striped" id="carttable">
    <tbody >
        @foreach ($data['cart'] as $item)
            
        <tr>
            <td class=text-center style=width:70px>
                    <a href=product.php> <img src="{{asset('storage/'.$item->options->image)}}" style=width:70px alt="{{$item->name}}" title="{{$item->name}}" class=preview> </a>
                </td>
                <td class=text-left> <a class=cart_product_name href=product.php>{{$item->name}}</a> </td>
                <td class=text-center> {{$item->qty}} </td>
                <td class=text-center> {{$item->price}} </td>
                <td class=text-right>
                    <a href=product.php class="fa fa-edit"></a>
                </td>
                <td class=text-right>
                    {{-- <a id="{{$item->rowId}}" class="fa fa-times fa-delete removeCart"></a> --}}
                    <p id="{{$item->rowId}}" class="fa fa-delete rmv"><i class="fa fa-times-circle"></i></p>
              
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </li>
    <li>
    <div>
    <table class="table table-bordered">
    <tbody>
    <tr>
    <td class=text-left><strong>Sub-Total</strong>
    </td>
    <td class=text-right>{{$data['TotalAmountCart']}} PKR</td>
    </tr>
    <tr>
    <td class=text-left><strong>Inclusive GST</strong>
    </td>
    <td class=text-right>17%/-</td>
    </tr>
    <tr>
    <td class=text-left><strong>Total</strong>
    </td>
    <td class=text-right> PKR-</td>
    </tr>
    </tbody>
    </table>
    <p class=text-right> <a class="btn view-cart" href=cart.php><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href=checkout.php><i class="fa fa-share"></i>Checkout</a> </p>
    </div>
    </li>
    </ul>
    