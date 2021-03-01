@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Checkout') }}</div>

                    <div class="card-body">

                        <form action="" method="post">
                        <div class="from-group mb-4">
                            <label for="name">Name on Card</label>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>

                            <div class="from-group mb-4">
                                <label for="name">Card Details</label>
                               <div id="card-element"></div>
                            </div>
                            <button class="btn btn-primary mt-4" id="card-button" type="submit">pay</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const stripe=Stripe('{{config('cashier.key')}}')

        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');
    </script>
@endsection
