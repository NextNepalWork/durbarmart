

@extends('frontend.layouts.app')

{{-- {{dd(env("KHALTI_KEY"))}} --}}

@section('script')
    
@php
$order = \App\Order::findOrFail(Session::get('order_id'));
// dd($order);
@endphp
<script>
    var config = {
        // replace the publicKey with yours
        "publicKey": '{{env("KHALTI_KEY")}}',
        "productIdentity": '{{$order->code}}',
        "productName": '{{$order->code}}',
        "productUrl": '{{url("track_your_order")}}',
        "paymentPreference": [
            "KHALTI"
            ],
        "eventHandler": {
            onSuccess (payload) {
                // hit merchant api for initiating verfication
                window.location = '{{url("checkout/order-confirmed")}}';
            },
            onError (error) {
                console.log(error);
            },
            onClose () {
        console.log('widget is closing');
            }
        }
    };

    var checkout = new KhaltiCheckout(config);
    // var btn = document.getElementById("payment-button");
    // btn.onclick = function () {
        // minimum transaction amount must be 10, i.e 1000 in paisa.
        checkout.show({amount: '{{$order->grand_total}}'*100 });
    // }
</script>

@endsection