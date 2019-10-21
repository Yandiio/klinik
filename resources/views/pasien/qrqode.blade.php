<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('ss.png', 0.3, true)
                        ->size(500)->errorCorrection('H')
                        ->generate('Welcome to kerneldev.com!')) !!} ">