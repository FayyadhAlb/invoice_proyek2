<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #FF008080;
        }
        h4, p{
            margin:0px;
        }
        .img{
	        width:100px;
	        margin:10px;
        }
        header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
            }
        center { 
            text-align: justify;
        }
        .p {text-align: center;}
        
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img class="img"src="laravel.png"/>
        </header>
        <table>
            <caption>
                <h4>NOTA BEUTYCARE</h4>
            </caption>        
            <thead>
                <tr>
                    <th colspan="3">NOTA <strong>#{{ $invoice->id }}</strong></th>
                    <th>{{ $invoice->created_at->format('D, d M Y') }}</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Toko: </h4>
                        <p>BeatyCare.<br>
                            Jl. Borobudur 10 Malang<br>
                            089671290718<br>
                            beautycaremlg@gmail.com
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Pelanggan: </h4>
                        <p>{{ $invoice->customer->name }}<br>
                        {{ $invoice->customer->address }}<br>
                        {{ $invoice->customer->phone }} <br>
                        {{ $invoice->customer->email }}
                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah Layanan</th>
                    <th>Subtotal</th>
                </tr>
                @foreach ($invoice->detail as $row)
                <tr>
                    <td>{{ $row->product->title }}</td>
                    <td>Rp {{ number_format($row->price) }}</td>
                    <td>{{ $row->qty }}</td>
                    <td>Rp {{ $row->subtotal }}</td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="3">Subtotal</th>
                    <td>Rp {{ number_format($invoice->total) }}</td>
                </tr>
                <tr>
                    <th>Pajak</th>
                    <td></td>
                    <td>2%</td>
                    <td>Rp {{ number_format($invoice->tax) }}</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <td>Rp {{ number_format($invoice->total_price) }}</td>
                </tr>
            </tfoot>
        </table>
        <footer>
            <p class="p">&copy;  BeautyCare 2021</p>
        </footer>
    </div>
</body>
</html>
