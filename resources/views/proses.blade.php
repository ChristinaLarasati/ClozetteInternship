<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malas Ngoding - Tutorial Laravel #18 : Membuat Form Validasi Pada Laravel</title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/freelancer.css') }}">
</head>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                    <div class="logo-container" align="center">
					        <a href="https://www.clozette.co.id/" style="center" ><img src="cid-new-logo.png"/></a> 
				        </div>
                        <h3 class="my-4">Data Yang Di Input : </h3>
 
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $data->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $data->usia }}</td>
                            </tr>
                        </table>
 
                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>