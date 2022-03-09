

@extends('frontend.layouts.app')


@section('script')
    
@php
    // $type = '';
    // $order = [];
    if(Session::get('payment_type') == 'wallet_payment'){
        $orderCode = 'wallet_pay_user_'.Auth::user()->id;
        $poductUrl = 'https://durbarmart.nextnepal.org/';
        $type = 'wallet_pay';
        $total = Session::get('payment_data')['amount'];
    }else{
        $order = \App\Order::findOrFail(Session::get('order_id'));
        $orderCode = $order->code;
        $poductUrl = 'http://localhost:8000/product/Pearl-Green-Tea1-ACSSP';
        $type = 'checkout';
        $total = $order->grand_total;
    }
    // dd($type);
@endphp
<script>
    var type = '{{$type}}';
    var config = {
        // replace the publicKey with yours
        "publicKey": "test_public_key_eb32162715ff4ac0b16fb0e82fc4dbed",
        "productIdentity": '{{$orderCode}}',
        "productName": '{{$orderCode}}',
        "productUrl": "http://localhost:8000/product/Pearl-Green-Tea1-ACSSP",
        "paymentPreference": [
            "KHALTI"
            ],
        "eventHandler": {
            onSuccess (payload) {
                // hit merchant api for initiating verfication
                if(type == 'wallet_pay'){
                    // window.location = '{{url("/wallet")}}';
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var actionType = "POST";
                    var ajaxurl = '/wallet_payment_done_khalti';
                    $.ajax({
                        type: actionType,
                        url: ajaxurl,
                        data: {
                            "payment_details": payload,
                        },
                        dataType: 'json',
                        beforeSend: function() {},
                        success: function(data) {
                            window.location = '{{route("wallet.index")}}';
                            // window.location = '{{url("/wallet")}}';
                        },
                        error: function(data) {
                            toastr.error('Error', data.responseText);
                        }
                    });
                }else{
                //if checkout
                window.location = '{{url("checkout/order-confirmed")}}';
                }
                
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
        checkout.show({amount: '{{$total}}'*100 });
    // }
</script>

@endsection