<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- plugin:css -->
    <link rel="stylesheet" href="{{ asset('css/printout.css')}}">
    <link rel="stylesheet" href="{{ asset('justdo/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}"/>
    {{-- <link rel="stylesheet" href="{{ asset('style.css') }}"> --}}
    <title>Invoice</title>
</head>
<body>
  <div class="container mt-5">
    <h1 class="tittle">Stock Opname</h1>
    <hr>
    <br>
    <h4 style="text-align:center; margin-top:10px;">LIST INVENTORY</h4>
    <table cellpadding="10" cellspacing="0" border="1" width="100%">    
      <thead>
        <tr>
          <th>Code</th>
          <th>Description</th>
          <th>Price</th>
          <th>UOM</th>
          <th class="text-right" width=5%>SYSTEM</th>
          <th class="text-right" width=5%>PYSICAL</th>
          <th class="text-right" width=5%>BALANCE</th>
          <th class="text-right">REMARK</th>
            </tr>
      </thead>
        <tbody>
            @foreach( $res as $row=>$value)
            <tr class="text-right">
                <td class="text-left">{{$value['id']}}</td>
                <td class="text-left"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
  </div>

</body>
</html>
