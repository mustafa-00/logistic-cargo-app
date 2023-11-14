@extends('admin.dashboard')
@section('invoice-styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('assets_admin/css/invoice.css') }}" rel="stylesheet">
@endsection
@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Invoice PDF</h1>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('invoice.index') }}">back</a></li>
            </ol>
        </nav>
    </div>


    <div class = "invoice-wrapper" id = "print-area" >
        <div class = "invoice">
            <div class = "invoice-container">
                <div class = "invoice-head">
                    <div class = "invoice-head-top">
                        <div class = "invoice-head-top-left text-start">
                            <img src="{{ asset('assets_landing/img/logo/new.png') }}" style="width:120px" alt="logo">
                        </div>
                        <div class = "invoice-head-top-right text-end">
                            <h3>Invoice</h3>
                        </div>
                    </div>
                    <div class = "hr"></div>
                    <div class = "invoice-head-middle">
                        <div class = "invoice-head-middle-left text-start">
                            <p><span class = "text-bold">Date:</span>{{ $order->date }}</p>
                        </div>
                        <div class = "invoice-head-middle-right text-end">
                            <p><span class = "text-bold">Invoice No:</span>{{ $order->id }}</p>
                        </div>
                    </div>
                    <div class = "hr"></div>
                    <div class = "invoice-head-bottom">
                        <div class = "invoice-head-bottom-left">
                            <ul>
                                <li class = 'text-bold'>Invoiced To:</li>
                                <li>. . . . . . . . . . . . . . . . </li>
                                <li>. . . . . . . . . . . . . . . . . . . . . . . . .</li>
                                <li>. . . . . . . . . . . . . . . .</li>
                                <li>. . . . . . . . . . . . . . . . . . . . . . . . .</li>
                            </ul>
                        </div>
                        <div class = "invoice-head-bottom-right">
                            <ul class = "text-end">
                                <li class = 'text-bold'>Pay To:</li>
                                <li>{{ $order->user->name }}</li>
                                <li>Kayhan Cargo</li>
                                <li>Shahrnaw-Kabul</li>
                                <li>KayhanCargo@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class = "overflow-view">
                    <div class = "invoice-body">
                        <table>
                            <thead>
                                <tr>
                                    <td class = "text-bold">Service</td>
                                    <td class = "text-bold">Description</td>
                                    <td class = "text-bold">Price</td>
                                    <td class = "text-bold">QTY</td>
                                    <td class = "text-bold">Amount</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->short_description }}</td>
                                    <td>{{ $order->price }} $</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td class = "text-end">{{ $order->quantity * $order->price }}$</td>
                                </tr>

                                <!-- <tr>
                                    <td colspan="4">10</td>
                                    <td>$500.00</td>
                                </tr> -->
                            </tbody>
                        </table>
                        <div class = "invoice-body-bottom">
                            <div class = "invoice-body-info-item border-bottom">
                                <div class = "info-item-td text-end text-bold">Sub Total:</div>
                                <div class = "info-item-td text-end">{{ $order->quantity * $order->price }}$</div>
                            </div>
                            <div class = "invoice-body-info-item border-bottom">
                                <div class = "info-item-td text-end text-bold">Tax:</div>
                                <div class = "info-item-td text-end">$0</div>
                            </div>
                            <div class = "invoice-body-info-item">
                                <div class = "info-item-td text-end text-bold">Total:</div>
                                <div class = "info-item-td text-end">{{ $order->quantity * $order->price }}$</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "invoice-foot text-center">
                    {{-- <p><span class = "text-bold text-center">NOTE:&nbsp;</span>This is computer generated receipt and does not require physical signature.</p> --}}

                    <div class = "invoice-btns">
                        <button type = "button" class = "invoice-btn" onclick="printInvoice()">
                            <span>
                                <i class="fa-solid fa-print"></i>
                            </span>
                            <span>Print</span>
                        </button>
                        {{-- <button type = "button" class = "invoice-btn" onclick="downloadPDF()">
                            <span>
                                <i class="fa-solid fa-download"></i>
                            </span>
                            <span>Download</span>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
        <iframe src="about:bla" frameborder="0"></iframe>
    </div>
    <script src="{{ asset('assets_admin/js/invoice.js') }}"></script>
</main>
@endsection
