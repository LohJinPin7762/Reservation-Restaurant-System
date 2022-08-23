@extends('layout')
@section('content')
<script>
    function cal(){
        var names=document.getElementsByName('subtotal[]');
        var subtotal=0;
        var cBox=document.getElementsByName('cid[]');
        var length=cBox.length; //know loops require
        for(var i=0; i<length; i++){
            if(cBox[i].checked){
                subtotal=parseFloat(names[i].value)+parseFloat(subtotal);
                // console.log(subtotal); to show in console in Inspect
            }
        }
        document.getElementById('sub').value=subtotal.toFixed(2);
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr style="text-align: center; font-weight: bold;">
                        <td>Image</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($carts as $cart)
                    <form action="" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @CSRF    
                    <tr style="text-align: center;">
                        <td>
                            <input type="checkbox" name="cid[]" id="cid[]" value="{{$cart->cid}}" onclick="cal()"> <!--cal() java function-->
                            <input type="hidden" name="subtotal[]" id="subtotal[]" value="{{$cart->price*$cart->available}}"> 
                            <img src="{{ asset('images/'.$cart->image) }}" alt="product image" title="product image" width="100" class="img-fluid"></td>
                        <td>{{$cart->name}}</td>
                        <td>{{$cart->price}}</td>
                        <td>{{$cart->cartavailable}}</td>
                        <td>RM {{$cart->price*$cart->available}}</td>
                        <td><a href="{{ route('delete.cart.item',['id'=>$cart->cid]) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you confirm to delete {{$cart->name}}?')">Delete</a></td>
                    </tr>
                    @endforeach
                    <tr style="text-align: center;">
                        <td colspan="4" style="text-align:right">Total:</td>
                        <td>RM <input type="text" name="sub" id="sub" value="0" size="7" style="text-align:right" readonly></td>
                        <td><a href="{{ url('/welcome')}}" class="btn btn-danger btn-sm" onClick="">Physical Payment</a></td>
                        <td><a href="{{ url('/addPayment')}}" class="btn btn-danger btn-sm" onClick="">Online Payment</a></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><a href="{{ url('/viewProducts')}}" class="btn btn-primary" style="margin-left:105px">Add More</a></td>
                    </tr>
                </tbody>
            </table>
            <br><br>
        </div>
        <div class="col-sm-2"></div>
    </div>
@endsection