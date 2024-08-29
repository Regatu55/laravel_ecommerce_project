@extends('main')

@section('content')


<div class="row">
    @foreach($products as $product)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <input type="hidden" class="product-quantity" value="1">
                    <p class="btn-holder">
                        <button class="btn btn-outline-danger add-to-cart" data-product-id="{{ $product->id }}">Add to cart</button>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".add-to-cart").click(function (e) {
            e.preventDefault();

            var productId = $(this).data("product-id");
            var productQuantity = $(this).siblings(".product-quantity").val();

            $.ajax({
                url: "{{ route('add-product-to-shopping-cart') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}', 
                    product_id: productId,
                    quantity: productQuantity
                },
                success: function (response) {
                    $('#cart-quantity').text(response.cartCount);
                    alert('Cart Updated');
                },
                error: function (xhr, status, error) {
                   
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection

