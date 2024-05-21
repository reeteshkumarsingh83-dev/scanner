@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Scan QR Codes</h1>
        <div class="section">
            <div id="my-qr-reader">
            </div>
        </div>
    </div>
    <!-- <div id="result" style="text-align: justify;">
            </div> -->
@endsection

<script src="https://unpkg.com/html5-qrcode"></script>
<script>
function domReady(fn) {
    if (
        document.readyState === "complete" ||
        document.readyState === "interactive"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}
 
domReady(function () {
 
    // If found you qr code
    function onScanSuccess(decodeText, decodeResult) {
        // alert("QR is : " + decodeText, decodeResult);

        var data = decodeText, decodeResult;
        window.location.href= data;
        // alert(data);
    }
 
    let htmlscanner = new Html5QrcodeScanner(
        "my-qr-reader",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
});
</script>  
   
