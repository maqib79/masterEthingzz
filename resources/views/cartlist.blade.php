<thead>
        <tr>
       <td class="text-center">Image</td>
       <td class="text-left">Product Name</td>
       <td class="text-left">Quantity</td>
       <td class="text-right">Unit Price</td>
       <td class="text-right">Total</td>
        </tr>
       </thead>
       
       <tbody>
           @foreach ($data['cart'] as $item)
           <tr>
             <td class="text-center"><a href="product.html"><img width="70px" src="{{asset('storage/'.$item->options->image)}}" alt="{{$item->name}}" title="{{$item->name}}" class="img-thumbnail" /></a></td>
             <td class="text-left"><a href="product.html">{{$item->name}}</a><br />
              </td>
             <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                <form >
                    <input type="text" name="quantity" value="{{$item->qty}}" size="1" class="form-control" />
                    <input type="hidden" name="rowid" value="{{$item->rowId}}">
                  <span class="input-group-btn">
                    <button type="button" data-toggle="tooltip" title="Update" id="{{$item->rowId}}" class="btn btn-primary qtyUpdate" ><i class="fa fa-clone"></i></button>
                    <button type="button" data-toggle="tooltip" title="Remove" id="{{$item->rowId}}" class="btn btn-danger removeCart" onClick=""><i class="fa fa-times-circle"></i></button>
                   </span></div></td>
                 </form>
             <td class="text-right">{{$item->price}}</td>
             <td class="text-right">{{$item->subtotal}}</td>
           </tr>
         @endforeach
         </tbody>
       <tfoot>
         <tr>
           <td class="text-right" colspan="4">
           <strong>Sub-Total:</strong>
           </td>
           <td class="text-right">{{$total=str_replace(",","",$data['TotalAmountCart'])}} PKR</td>
           </tr>
           <tr>
           <td class="text-right" colspan="4">
           <strong>Flat Shipping Rate:</strong>
           </td>
           <td class="text-right">200</td>
           </tr>
           <tr>
           <td class="text-right" colspan="4">
           <strong>Tax (17%):</strong>
           </td>
           <td class="text-right">{{$total*0.17}}</td>
           </tr>
           <tr>
           <td class="text-right" colspan="4">
           <strong>Total:</strong>
           </td>
           <td class="text-right">{{$total+($total*0.17)+200}}</td>
           </tr>
       </tfoot>
       