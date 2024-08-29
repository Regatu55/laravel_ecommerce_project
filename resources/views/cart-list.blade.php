@extends('main')
  
@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 50%">Product</th>
            <th>Price</th>
            <th style="width: 10%">Quantity</th>
            <th>Subtotal</th>
               <th></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $item)
            @php $total += $item['price'] * $item['quantity'] @endphp 
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ isset($item['image']) ? $item['image'] : 'N/A' }}" class="card-img-top"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $item['name'] }}</h4>
                            </div>
                        </div>

                    </td>
                    {{-- <td data-th="Price">${{ $item['price'] }}</td> --}}
                    <td data-th="Price">{{ number_format($item['price'], 2) }}{{ env('CURRENCY_SYMBOL', 'Br') }}</td>
                <td data-th="Quantity">
                    <input type="number" value="{{$item['quantity']}}" class="form-control quantity cart-update" min="1" data-id="{{ $item['id'] }}"/>
                </td> 
                <td data-th="Subtotal" id="subtotal-{{ $item['id'] }}">
                    {{ number_format($item['quantity'] * $item['price'], 2) }} {{ env('CURRENCY_SYMBOL', 'Br') }}
                   
               </td>
                     {{-- <td data-th="Subtotal" class="text-center">${{ $item['price'] * $item['quantity'] }}</td> --}}
                    <td class="actions" data-th="">
                        <a class="btn btn-outline-danger btn-sm delete-item">Delete</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
     
        <tr>
            <td colspan="5" style="text-align:right;">
                <h3><strong>Total <span id="total">{{ number_format($total, 2) }}{{ env('CURRENCY_SYMBOL', 'Br') }}</span></strong></h3>
            </td>
        </tr>
        
        <tr>
            <td colspan="5" class="text-right">
                <form action="/session" method="POST">
                <a href="{{ route('product.list') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
               <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-danger" type="submit"id="checkout-live-button">Checkout</button>
                </form>
            </td>
        </tr>
    </tfoot>
</table>
@endsection
  
@section('scripts')
<script type="text/javascript">
  
    $(".delete-item").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.item') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
    //    to update quantity 
    $(document).ready(function() {
    $('.cart-update').on('change', function() {
        var quantity = $(this).val();
        var id = $(this).data('id');

        $.ajax({
            url: '{{ route("cart.update") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                quantity: quantity
            },
            success: function(response) {
                if (response.success) {
                    // Update the subtotal and total on the page
                    $('#subtotal-' + id).text(response.subtotal.toFixed(2) + ' {{ config("currency.symbol") }}');
                    $('#total').text(response.total.toFixed(2) + ' {{ config("currency.symbol") }}');
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Failed to update quantity');
            }
        });
    });
});

  
</script>
@endsection
